<div class="flex flex-col gap-4 w-full">
    @foreach($this->projects as $project)
        <a href="{{ route('projects.show', $project) }}"
           class="group flex items-center justify-between bg-[#181820] border border-[#2d2d3a]
                  rounded-lg p-4 transition-all duration-300 hover:border-[#5354FD] hover:shadow-lg hover:shadow-[#5354FD]/20">

            <div class="flex items-center gap-4">
                {{-- Badge do ID --}}
                <span class="text-[#8C8C9A] font-mono text-sm bg-[#2d2d3a] px-2 py-1 rounded">
                    #{{ $project->id }}
                </span>

                {{-- Título --}}
                <span class="text-white font-bold text-lg group-hover:text-[#5354FD] transition-colors">
                    {{ $project->title }}
                </span>
            </div>

            {{-- Ícone de Seta (aparece mais forte no hover) --}}
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                 class="w-5 h-5 text-[#8C8C9A] group-hover:text-white transform group-hover:translate-x-1 transition-all">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </a>
    @endforeach
</div>
