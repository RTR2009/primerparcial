<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //insertar registro a la tabla
        DB::table('categorias')=>insert([
            [
                'nombre'=>'calzado de varon',
                'descripcion'=>'calzado de voron',
                'created_at'=> now(),
                'updated_at'=> now(),
            ],
            [
                'nombre'=>'calzado de dama',
                'descripcion'=>'calzado de dama',
                'created_at'=> now(),
                'updated_at'=> now(),
            ]
        ])
    }
}
