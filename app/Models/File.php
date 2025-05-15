<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    //
    protected $fillable = ['name', 'path', 'folder_id', 'user_id'];
    // Un archivo puede tener un usuario
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    // Un archivo puede tener una carpeta
    public function folder()
    {
        return $this->belongsTo(Folder::class);
    }
}
