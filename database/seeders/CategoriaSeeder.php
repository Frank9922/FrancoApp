<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Categoria;
use Illuminate\Support\Facades\DB;

class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['descripcion' => 'Telefono'],
            ['descripcion' => 'Monitor'],
            ['descripcion' => 'Notebook'],
            ['descripcion' => 'Zapatillas'],
            ['descripcion' => 'Auriculares'],
        ];
        DB::table('categorias')->insert($data);

        // \App\Models\Categoria::factory(10)->create();
    }
}
