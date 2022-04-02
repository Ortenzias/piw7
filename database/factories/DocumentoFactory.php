<?php

namespace Database\Factories;

use App\Models\Documento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Documento>
 */
class DocumentoFactory extends Factory
{
    

    /**
     * protected $docu = Documento::class;
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'datos_json' => $this->faker->sentence(),
            'user_id' => $this->faker->sentence()
        ];
    }
}

