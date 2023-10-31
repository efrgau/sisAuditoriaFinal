<?php

namespace Database\Seeders;

use \Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class categories extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0');
        DB::table('categories')->delete();


        DB::table('categories')->insert([
            'id' => 1,
            'NombreCategoria' => 'Identificar',
            'NombreISO' => 'ISO 27032',
            'created_at' => '2023-10-30 23:09:10',
            'updated_at' => '2023-10-30 23:09:10'
        ]);
        DB::table('categories')->insert([
            'id' => 2,
            'NombreCategoria' => 'Proteger',
            'NombreISO' => 'ISO 27032',
            'created_at' => '2023-10-30 23:09:10',
            'updated_at' => '2023-10-30 23:09:10'
        ]);
        DB::table('categories')->insert([
            'id' => 3,
            'NombreCategoria' => 'Detectar',
            'NombreISO' => 'ISO 27032',
            'created_at' => '2023-10-30 23:09:10',
            'updated_at' => '2023-10-30 23:09:10'
        ]);
        DB::table('categories')->insert([
            'id' => 4,
            'NombreCategoria' => 'Responder',
            'NombreISO' => 'ISO 27032',
            'created_at' => '2023-10-30 23:09:10',
            'updated_at' => '2023-10-30 23:09:10'
        ]);
        DB::table('categories')->insert([
            'id' => 5,
            'NombreCategoria' => 'Recuperar',
            'NombreISO' => 'ISO 27032',
            'created_at' => '2023-10-30 23:09:10',
            'updated_at' => '2023-10-30 23:09:10'
        ]);
    }
}
