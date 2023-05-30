<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Etiqueta;

class EtiquetaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $cantidadEtiquetas=25;

        $etiquetas=collect();

        while($etiquetas->count() < $cantidadEtiquetas)
        {
            $etiqueta = Etiqueta::factory()->unique()->make();
            if($etiquetas->contains('etiqueta', $etiqueta->etiqueta)){
                $etiquetas->push($etiqueta);
            }
        }
        Etiqueta::insert($etiquetas->toArray());

    }
}
