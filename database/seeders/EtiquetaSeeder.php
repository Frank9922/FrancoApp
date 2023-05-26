<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            ['etiqueta' => 'Grande'],
            ['etiqueta' => 'Chiquito'],
            ['etiqueta' => 'Mediano'],
            ['etiqueta' => 'Blanco'],
            ['etiqueta' => 'Negro'],
        ];
        DB::table('etiquetas')->insert($data);
    }
}
