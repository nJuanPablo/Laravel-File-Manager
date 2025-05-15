<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class FolderController extends Controller
{
    public function index($id)
    {
        // Mostrar la carpeta y sus archivos
        $folder = Folder::with('children.files')->findOrFail($id);
        return view('folder', compact('folder'));
    }
    
    public function store(Request $request)
    {
        //dd($request->all());
        // Guardar una nueva carpeta dentro de otra
        $request->validate([
            'name' => 'required|string|max:255',
            'files.*' => 'file|max:10240' // Máx 10MB por archivo
        ]);
    
        // Crear nueva carpeta padre
        $folder = Folder::create([
            'name' => $request->name,
            'parent_id' => $request->parent_id, // Es una carpeta padre
            'user_id' => auth()->id()
        ]);
        
        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                // Guardar archivo en storage
                $filePath = $file->storeAs('folders/' . $folder->id, $file->getClientOriginalName(), 'public');
        
                // Guardar en la base de datos
                File::create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $filePath,
                    'folder_id' => $folder->id,
                    'user_id' => auth()->id()
                ]);
            }
        }
    
        return redirect()->to('/home')->with('success', 'Carpeta guardada correctamente.');
    }

    public function destroy($Id)
    {
        $folder = Folder::findOrFail($Id);
        //dd($folder->files);
        
        // Eliminar archivos dentro de la carpeta
        if (!empty($folder->files)) {
            foreach ($folder->files as $file) {
                Storage::delete('public/'.$file->path);
                $file->delete();
            }
        }
        // Eliminar todas las subcarpetas recursivamente y sus archivos
        if (!empty($folder->children)) {
            foreach ($folder->children as $subfolder) {
                $this->destroy($subfolder->id);
            }
        }

        $folder->delete();

        return redirect()->to('/home') ->with('success', 'Carpeta eliminada correctamente.');
    }

}
