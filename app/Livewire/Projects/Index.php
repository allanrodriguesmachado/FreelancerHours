<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Component;

class Index extends Component
{
    public function render(): View
    {
        return view('livewire.projects.index');
    }

    #[Computed()]
    public function projects(): Collection
    {
        return Project::query()->inRandomOrder()->get();
    }
}
