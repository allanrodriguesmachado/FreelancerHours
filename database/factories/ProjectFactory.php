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
            'ends_at' => fake()->dateTime(),
            'status' => fake()->randomElement([
                'open',
                'pending',
                'closed',
            ]),
            'tech_stack' => json_encode(
                fake()->randomElements([
                    'PHP', 'Hyperf', 'Laravel', 'Redis', 'Kafka',
                    'Docker', 'Kubernetes', 'AWS SQS', 'Elasticsearch', 'Vue.js'
                ], rand(2, 4))
            ),
            'created_by' => User::factory(),
        ];
    }
}
