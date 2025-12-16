<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(200)->create();

        User::query()->inRandomOrder()->limit(10)->each(fn (User $user) => Project::factory()->create(['created_by' => $user->id]));



//        Project::factory(20)->create();

    }
}
