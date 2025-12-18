<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\View\View;
use Livewire\Component;

class Timer extends Component
{
    public Project $project;

    public function render(): View
    {

        $ends_at = now()->diff($this->project->ends_at);

        return view('livewire.projects.timer', [
            'days' => $ends_at->d,
            'hours' => $ends_at->h,
            'minutes' => $ends_at->i,
            'seconds' => $ends_at->s,
        ]);
    }
}
