<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        \App\Models\Producto::factory(50)->create();

        // $data= [
        //     'descripcion' =>'Xiaomi',
        //     'id_categoria' => 1
        // ];
        // DB::table('productos')->insert($data);
    }
}
