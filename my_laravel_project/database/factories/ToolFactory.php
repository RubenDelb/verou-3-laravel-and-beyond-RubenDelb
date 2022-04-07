<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tool>
 */
class ToolFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => random_int(1,22),
            // 'tool' => $this->faker->text(),
            'tool' => $this->faker->randomElement(['Hammer', 'Saw', 'Screwdriver']),
            'province' => $this->faker->randomElement(['West-Vlaanderen', 'Oost-Vlaanderen', 'Antwerpen', 'Vlaams-Brabant', 'Limburg', 'Waals-Brabant', 'Henegouwen', 'Luik', 'Luxemburg', 'Namen']),
            'available' => random_int(0,1),
        ];
    }
}
