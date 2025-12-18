<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use Illuminate\View\View;
use Livewire\Attributes\Rule;
use Livewire\Component;

class Create extends Component
{
    public bool $modal = false;

    #[Rule(['required', 'email'])]
    public string $email = '';

    #[Rule(['required', 'numeric', 'min:1', 'max:100'])]
    public int $hours = 0;
    public Project $project;

    public bool $agree = false;

    public function render(): View
    {
        return view('livewire.proposals.create');
    }

    public function save(): void
    {
        $this->validate();

        if (!$this->agree) {
            $this->addError('agree', 'Voce precisa concordar com os termos de uso!');

            return;
        }

        $this->project->proposals()->updateOrCreate(['email' => $this->email],
            ['hours' => $this->hours,]
        );

        $this->dispatch('proposal::created');

        $this->modal = false;
    }
}
