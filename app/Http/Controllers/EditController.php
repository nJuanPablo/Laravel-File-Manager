<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Folder;
use App\Models\File;
use Illuminate\Support\Facades\Storage;

class EditController extends Controller
{
    public function index($id)
    {
        $folder = Folder::with('children.files')->findOrFail($id);
        return view('editar', compact('folder'));
    }
    
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
    
        $folder = Folder::findOrFail($id);
        $folder->update([
            'name' => $request->name
        ]);

        if ($request->hasFile('files')) {
            foreach ($request->file('files') as $file) {
                // Guardar archivo en storage
                $filePath = $file->store('folders/' . $folder->id, 'public');
        
                // Guardar en la base de datos
                File::create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $filePath,
                    'folder_id' => $folder->id,
                    'user_id' => auth()->id()
                ]);
            }
        }
        return redirect()->to('/home')->with('success', 'Carpeta actualizada correctamente.');
    }
}
