<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Etiqueta;
use App\Models\Producto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class etiquetas_productosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $numE= Etiqueta::count();
        $numP= Producto::count();

        return [
            'producto_id' =>$this->faker->numberBetween(1, $numP),
            'etiqueta_id' =>$this->faker->numberBetween(1, $numE)
        ];
    }
}
