@props(['project'])

<div class="col-span-2 group relative flex flex-col justify-between
    bg-white border border-slate-200
    hover:border-orange-300/50 hover:shadow-lg hover:shadow-orange-500/5
    transition-all duration-300 rounded-2xl overflow-hidden">

    <!-- Conteúdo Principal -->
    <div class="p-6 flex flex-col h-full z-10">

        <!-- Cabeçalho: Status e Data -->
        <div class="flex items-center justify-between mb-5">
            <div class="flex items-center gap-2">
                @if($project->status === \App\ProjectStatus::Open)
                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-50 border border-emerald-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-emerald-500 animate-pulse"></span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-emerald-600">Open</span>
                    </div>
                @elseif($project->status === \App\ProjectStatus::Pending)
                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-orange-50 border border-orange-100">
                        <span class="w-1.5 h-1.5 rounded-full bg-orange-500"></span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-orange-600">Pending</span>
                    </div>
                @else
                    <div class="flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-slate-100 border border-slate-200">
                        <span class="w-1.5 h-1.5 rounded-full bg-slate-400"></span>
                        <span class="text-[10px] font-bold uppercase tracking-wider text-slate-500">Closed</span>
                    </div>
                @endif
            </div>

            <span class="text-slate-400 text-xs font-mono font-medium">
                {{ $project->created_at->diffForHumans(short: true) }}
            </span>
        </div>

        <!-- Título -->
        <h1 class="text-lg font-bold text-slate-800 leading-tight mb-4 group-hover:text-orange-600 transition-colors">
            {{ $project->title }}
        </h1>

        <!-- Tech Stack (Tags Claras) -->
        <div class="flex flex-wrap gap-2 mt-auto">
            @foreach($project->tech_stack as $tech)
                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 bg-slate-50 border border-slate-200 rounded-md text-[10px] font-bold uppercase tracking-widest text-slate-600 group-hover:border-orange-200 group-hover:bg-orange-50/30 transition-colors">
                    <x-dynamic-component component="ui.icons.{{ strtolower($tech) }}" class="w-3.5 h-3.5 text-slate-400 group-hover:text-orange-500 transition-colors"/>
                    {{ $tech }}
                </span>
            @endforeach
        </div>
    </div>

    <!-- Rodapé Claro -->
    <div class="px-6 py-4 bg-[#FAFAFA] border-t border-slate-100 flex items-center justify-between mt-auto">
        <div class="flex items-center gap-3">
            <x-ui.avatar src="{{ $project->author->avatar }}" class="w-7 h-7 rounded-full ring-1 ring-slate-200 grayscale opacity-80 group-hover:grayscale-0 group-hover:opacity-100 transition-all"/>
            <span class="text-xs text-slate-500 font-medium group-hover:text-slate-800 transition-colors">
                {{ $project->author->name }}
            </span>
        </div>

        <div class="flex items-center gap-1 opacity-60 group-hover:opacity-100 transition-opacity">
            <x-ui.icons.star class="w-3.5 h-3.5 text-amber-400 fill-amber-400"/>
            <span class="text-xs font-bold text-slate-700 ml-0.5">{{ $project->author->stars }}</span>
        </div>
    </div>

</div>
