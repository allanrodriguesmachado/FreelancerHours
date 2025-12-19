<?php

namespace App\Livewire\Proposals;

use App\Models\Project;
use App\Models\Proposal;
use App\Notifications\NewProposal;
use Illuminate\Support\Facades\DB;
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

//        $this->project->author->notify(new NewProposal($this->project));

        $this->dispatch('proposal::created');

        $this->modal = false;
    }

    public function arrangePosition(Proposal $proposal): void
    {
        $query = DB::select("SELECT *, row_number() over(order by hours asc) AS newPosition FROM proposals WHERE project_id = :project ", ['project' => $proposal->project_id]);

        $position = collect($query)->where('id', '=', $proposal->id);
        $otherProposal = collect($position)->where('position', '=',$position->newPosition)->first();

        if ($otherProposal) {
            $proposal->update(['position_status' => 'up']);
            Proposal::query()->where('id', '=', $otherProposal->id)->update(['position_status' => 'down']);
        }
    }
}
