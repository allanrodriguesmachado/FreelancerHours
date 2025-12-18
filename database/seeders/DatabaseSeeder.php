<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Proposal;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(200)->create();

        User::query()->inRandomOrder()->limit(10)->each(function (User $user) {
            $project = Project::factory()->create([
                'created_by' => $user->id]);

            Proposal::factory()->count(random_int(1, 45))->create([
                'project_id' => $project->id
            ]);

            DB::update("
                WITH RankedProposals AS (
                    SELECT id, row_number() over(order by hours) AS p
                    FROM proposals
                )
            ");
        });
;
    }
}
