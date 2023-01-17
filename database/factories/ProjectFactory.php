<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => fake()->sentence(),
            'deadline' => now()->addDays(rand(1, 8)),
            'description' => fake()->paragraph(),
            'user_id' => \App\Models\User::factory()->create(),
            'client_id' => \App\Models\Client::factory()->create(),
            'status_id' => rand(1, 3)
        ];
    }
}
