<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Folder;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class HomeController extends Controller
{
    public function index()
    {
        $folders = Folder::whereNull('parent_id')->with('children.files')->get();
        return view('home', compact('folders'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'files.*' => 'file|max:10240' // Máx 10MB por archivo
        ]);
    
        // Crear nueva carpeta padre
        $folder = Folder::create([
            'name' => $request->name,
            'parent_id' => null, // Es una carpeta padre
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
    
        return redirect()->to('/home');
    }

    public function destroy($Id)
    {
        $folder = Folder::findOrFail($Id);
        //dd($folder->files);
        // Eliminar todas las subcarpetas recursivamente y sus archivos
        // Eliminar archivos dentro de la carpeta
        if (!empty($folder->files)) {
            foreach ($folder->files as $file) {
                Storage::delete('public/'.$file->path);
                $file->delete();
            }
        }

        if (!empty($folder->children)) {
            foreach ($folder->children as $subfolder) {
                $this->destroy($subfolder->id);
            }
        }

        $folder->delete();

        return back()->with('success', 'Carpeta eliminada correctamente.');
    }
}
