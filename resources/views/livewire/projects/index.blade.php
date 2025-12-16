<div>
    @foreach($this->projects AS $project)
        <li>
            <a class="text-white" href="{{route('projects.show', $project)}}">
                {{$project->id}} - {{$project->title}}
            </a>
        </li>
    @endforeach
</div>
