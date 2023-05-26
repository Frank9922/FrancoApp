<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class Etiqueta_Productofactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id_producto' =>$this->faker->numberBetween(1, 50),
            'id_etiqueta' =>$this->faker->numberBetween(1, 5)
        ];
    }
}
