<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/1/EjemploDoc.docx',
                'user_id' => 1,
                'folder_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/2/EjemploPDF.pdf',
                'user_id' => 1,
                'folder_id' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploImg.png',
                'path' => 'folders/3/EjemploImg.png',
                'user_id' => 1,
                'folder_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/4/EjemploTxt.txt',
                'user_id' => 1,
                'folder_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/6/EjemploPDF.pdf',
                'user_id' => 1,
                'folder_id' => 6,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/7/EjemploDoc.docx',
                'user_id' => 1,
                'folder_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/8/Ejemplotxt.txt',
                'user_id' => 1,
                'folder_id' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/9/EjemploDoc.docx',
                'user_id' => 2,
                'folder_id' => 9,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/10/EjemploPDF.pdf',
                'user_id' => 2,
                'folder_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/11/EjemploImg.png',
                'user_id' => 2,
                'folder_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploImg.png',
                'path' => 'folders/12/EjemploImg.png',
                'user_id' => 2,
                'folder_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/13/Ejemplo.txt',
                'user_id' => 2,
                'folder_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/15/EjemploDoc.docx',
                'user_id' => 2,
                'folder_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/15/EjemploPDF.pdf',
                'user_id' => 2,
                'folder_id' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/17/Ejemplo.txt',
                'user_id' => 3,
                'folder_id' => 17,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/18/EjemploDoc.docx',
                'user_id' => 3,
                'folder_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/19/EjemploPDF.pdf',
                'user_id' => 3,
                'folder_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/20/Ejemplo.txt',
                'user_id' => 3,
                'folder_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Ejemplo.txt',
                'path' => 'folders/21/Ejemplo.txt',
                'user_id' => 3,
                'folder_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/21/EjemploDoc.docx',
                'user_id' => 3,
                'folder_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploImg.png',
                'path' => 'folders/21/EjemploImg.png',
                'user_id' => 3,
                'folder_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/21/EjemploPDF.pdf',
                'user_id' => 3,
                'folder_id' => 21,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploDoc.docx',
                'path' => 'folders/22/EjemploDoc.docx',
                'user_id' => 3,
                'folder_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploImg.png',
                'path' => 'folders/22/EjemploImg.png',
                'user_id' => 3,
                'folder_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'EjemploPDF.pdf',
                'path' => 'folders/22/EjemploPDF.pdf',
                'user_id' => 3,
                'folder_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('files')->insert($datos);
    }
}
