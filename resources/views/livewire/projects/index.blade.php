<div class="grid grid-cols-4 gap-2">
    @foreach($this->projects as $project)
        <x-project-card-simple :$project />
    @endforeach
</div>
