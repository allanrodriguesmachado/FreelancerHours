@php use App\ProjectStatus; @endphp
@props(['project'])

<div class="col-span-2 group flex flex-col justify-between
    /* Light Mode */
    bg-white shadow-sm
    /* Dark Mode - Corrigido para o tom escuro profundo das suas imagens */
    dark:bg-[#10101E]
    transition-all duration-300 rounded-[24px] overflow-hidden border-none">

    <div class="p-8 flex flex-col h-full">
        <div class="flex items-center justify-between mb-6">
            <div class="flex items-center gap-2">
                @php
                    $statusStyles = match($project->status) {
                        ProjectStatus::Open => [
                            'bg' => 'bg-[#C0F7B4]/20 dark:bg-[#C0F7B4]/10',
                            'text' => 'text-[#1D8338] dark:text-[#C0F7B4]',
                            'dot' => 'bg-[#1D8338]',
                            'label' => 'Open'
                        ],
                        ProjectStatus::Pending => [
                            'bg' => 'bg-amber-500/20',
                            'text' => 'text-amber-700 dark:text-amber-400',
                            'dot' => 'bg-amber-500',
                            'label' => 'Pending'
                        ],
                        default => [
                            'bg' => 'bg-slate-500/20',
                            'text' => 'text-slate-600 dark:text-slate-400',
                            'dot' => 'bg-slate-500',
                            'label' => 'Closed'
                        ],
                    };
                @endphp

                <div class="flex items-center gap-2 px-3 py-1 rounded-full {{ $statusStyles['bg'] }}">
                    <span class="w-1.5 h-1.5 rounded-full {{ $statusStyles['dot'] }} {{ $project->status === ProjectStatus::Open ? 'animate-pulse' : '' }}"></span>
                    <span class="text-[10px] font-black uppercase tracking-widest {{ $statusStyles['text'] }}">
                        {{ $statusStyles['label'] }}
                    </span>
                </div>
            </div>

            <span class="text-slate-400 dark:text-[#8C8C9A] text-[10px] font-bold uppercase tracking-widest">
                {{ $project->created_at->diffForHumans(short: true) }}
            </span>
        </div>

        <h3 class="text-2xl font-black leading-tight mb-5 text-slate-800 dark:text-white">
            {{ $project->title }}
        </h3>

        <div class="flex flex-wrap gap-2 mb-8">
            @foreach($project->tech_stack as $tech)
                <span class="inline-flex items-center gap-1.5 px-3 py-1.5 rounded-lg text-[11px] font-bold
                             bg-slate-100 text-slate-600 dark:bg-[#181826] dark:text-[#8C8C9A]">
                    <x-dynamic-component component="ui.icons.{{ strtolower($tech) }}"
                                         class="w-4 h-4 opacity-50"/>
                    {{ $tech }}
                </span>
            @endforeach
        </div>
    </div>

    <div class="px-8 py-6 mt-auto flex items-center justify-between bg-slate-50/50 dark:bg-white/[0.02]">
        <div class="flex items-center gap-3">
            <div class="relative">
                <x-ui.avatar src="{{ $project->author->avatar }}"
                             class="w-10 h-10 rounded-full shadow-sm ring-2 ring-white dark:ring-[#1E1E2C]"/>
                <div class="absolute -bottom-1 -right-1 flex items-center justify-center bg-white dark:bg-[#10101E] rounded-full p-0.5">
                    <x-ui.icons.star class="w-3 h-3 text-amber-400 fill-amber-400"/>
                </div>
            </div>
            <div class="flex flex-col">
                <span class="text-sm font-black text-slate-700 dark:text-white leading-tight">
                    {{ $project->author->name }}
                </span>
                <span class="text-[10px] text-slate-400 dark:text-[#8C8C9A] font-bold uppercase tracking-wider">Autor</span>
            </div>
        </div>

        <a href="{{route('projects.show', $project)}}"
           class="inline-flex items-center justify-center px-5 py-2.5 rounded-xl text-[11px] font-black uppercase tracking-widest transition-all active:scale-95 shadow-lg
                  bg-orange-500 text-white shadow-orange-500/20 hover:bg-orange-600 hover:shadow-orange-500/40">
            Ver detalhes
        </a>
    </div>
</div>
