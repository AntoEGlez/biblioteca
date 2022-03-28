<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Libro>
 */
class LibroFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        
        return [
            'name' => $name = $this->faker->name(),
            'autor' => $this->faker->name(),
            'categoria' => $this->faker->randomElement(['Autobiografia', 'Novela', 'Cientifico', 'Literatura']),
            'sinopsis'=> $this->faker->sentence(),
            'idioma'=> $this->faker->randomElement(['Español', 'Ingles', 'Portugues', 'Aleman','Ruso']),
            'ISBN'=> $this->faker->randomNumber()
        ];
    }
}
