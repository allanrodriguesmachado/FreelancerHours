<?php

namespace Database\Factories;

use App\Models\User;
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
    public function definition(): array
    {
        return [
            'title' => fake()->unique()->jobTitle(),
            'description' => fake()->randomHtml(),
            'ends_at' => fake()->dateTimeBetween('now', 'last day of this month'),
            'status' => fake()->randomElement([
                'open',
                'pending',
                'closed',
            ]),
            'tech_stack' =>   fake()->randomElements([
                'js', 'nodejs', 'nextjs', 'react', 'vite',
            ], rand(2, 4)),
            'created_by' => User::factory(),
        ];
    }
}
