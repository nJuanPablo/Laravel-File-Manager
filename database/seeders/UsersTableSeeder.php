<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datos = [
            [
                'nombre' => 'Jose Manuel Quintero',
                'email' => 'govedo3769@exitings.com',
                'cedula' => '6314334573',
                'password' => bcrypt('ba2E46C7wn6K'), // password
                'role' => 'admin', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Jose Francisco Ayala',
                'email' => 'gracreippojiyou-5205@yopmail.com',
                'cedula' => '8311937671',
                'password' => bcrypt('Y3Fu6J1KNI4E'), // password
                'role' => 'user', 
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Anibal Galindo',
                'email' => 'yardosukni@gufum.com',
                'cedula' => '5964361473',
                'password' => bcrypt('YLP92Ia5M7uH'), // password
                'role' => 'user', 
                'created_at' => now(),
                'updated_at' => now(),
            ]];

        DB::table('users')->insert($datos);
    }
}
