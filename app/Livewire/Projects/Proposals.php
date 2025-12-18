<?php

namespace App\Livewire\Projects;

use App\Models\Project;
use App\Models\Proposal;
use Illuminate\Support\Collection;
use Illuminate\View\View;
use Livewire\Attributes\Computed;
use Livewire\Attributes\On;
use Livewire\Component;

class Proposals extends Component
{
    public Project $project;

    public int $quantity = 10;

    #[Computed()]
    public function proposals()
    {
        return $this->project->proposals()->orderBy('hours')->paginate($this->quantity);
    }

    public function loadMore(): void
    {
        $this->quantity += 10;
    }

    #[Computed()]
    public function lastProposalTime()
    {
        return $this->project->latest()->first()->created_at->diffForHumans();
    }

    #[On('proposal::created')]
    public function render(): View
    {
        return view('livewire.projects.proposals');
    }
}
