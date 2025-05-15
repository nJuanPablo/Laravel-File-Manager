<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Folder extends Model
{
    protected $fillable = ['name', 'parent_id', 'user_id'];

    // Un folder puede tener un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Un folder puede tener una carpeta padre la cual se representa por el parent_id
    public function parent()
    {
        return $this->belongsTo(Folder::class, 'parent_id');
    }

    // Relación: Una carpeta puede tener archivos
    public function files()
    {
        return $this->hasMany(File::class);
    }
    // Un folder puede tener muchos folders hijos
    // Un folder puede tener muchos folders hijos de forma recursiva
    // Esto permite obtener todos los hijos de un folder, incluyendo los hijos de los hijos
    public function children()
    {
        return $this->hasMany(Folder::class, 'parent_id')->with('children');
    }
}
