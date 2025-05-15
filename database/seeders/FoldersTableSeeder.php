<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FoldersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'name' => 'DocumentoWord',
                'user_id' => 1,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DocumentoPDF',
                'user_id' => 1,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DocumentoImg',
                'user_id' => 1,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DocumentoText',
                'user_id' => 1,
                'parent_id' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Documento1',
                'user_id' => 1,
                'parent_id' => 4,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DocumentoPDF',
                'user_id' => 1,
                'parent_id' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DocumentoDoc',
                'user_id' => 1,
                'parent_id' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'DocumentoText',
                'user_id' => 1,
                'parent_id' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ArchivoDoc',
                'user_id' => 2,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ArchivoPDF',
                'user_id' => 2,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ArchivoText',
                'user_id' => 2,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ArchivoImg',
                'user_id' => 2,
                'parent_id' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'ArchivoText',
                'user_id' => 2,
                'parent_id' => 12,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Archivos',
                'user_id' => 2,
                'parent_id' => 13,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'AcchivosVarios',
                'user_id' => 2,
                'parent_id' => 11,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Registro',
                'user_id' => 3,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RegistroText',
                'user_id' => 3,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RegistroDoc',
                'user_id' => 3,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RegistroPDF',
                'user_id' => 3,
                'parent_id' => 18,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RegistroText',
                'user_id' => 3,
                'parent_id' => 19,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Registros',
                'user_id' => 3,
                'parent_id' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'RegistrosVarios',
                'user_id' => 3,
                'parent_id' => 20,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Fichero',
                'user_id' => 3,
                'parent_id' => 22,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carpeta',
                'user_id' => 3,
                'parent_id' => 23,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Subcarpeta',
                'user_id' => 3,
                'parent_id' => 24,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ];

        DB::table('folders')->insert($datos);
    }
}
