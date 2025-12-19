@props([
    'project'
])

<x-ui.card class="col-span-2 bg-white dark:bg-[#1E1E2C] border-gray-200 ">

    <div class="flex justify-end items-center mb-6">
        <a href="{{ route('projects.index') }}"
           class="group flex items-center gap-2 px-4 py-2 rounded-full transition-all duration-300
              /* Light Mode: Fundo cinza bem suave */
              bg-slate-100 text-slate-600 hover:bg-orange-500 hover:text-white
              /* Dark Mode: Fundo sutil com transparência */
              dark:bg-white/5 dark:text-slate-400 dark:hover:bg-orange-500 dark:hover:text-white">

            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="3" stroke="currentColor"
                 class="w-4 h-4 transition-transform group-hover:-translate-x-1">
                <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 19.5L3 12m0 0l7.5-7.5M3 12h18" />
            </svg>

            <span class="text-[11px] font-black uppercase tracking-widest">Voltar</span>
        </a>
    </div>

    <div class="flex items-start justify-between mt-8 pb-4">
        <div class="flex flex-col gap-4">
            <div>
                <span class="bg-emerald-50 dark:bg-emerald-500/10 text-emerald-700 dark:text-emerald-400 rounded-full font-bold text-center uppercase py-1 px-4 text-[10px] tracking-widest">
                    {{ $project->status->label() }}
                </span>
            </div>
            <h1 class="text-3xl font-black text-gray-900 dark:text-white leading-tight">
                {{ $project->title }}
            </h1>
            <div class="text-gray-400 dark:text-slate-500 text-sm font-medium flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                Publicado {{ $project->created_at->diffForHumans() }}
            </div>
        </div>
        <div>
            <div>
                <livewire:proposals.create :$project/>
            </div>

            <div class="mt-2">
                <livewire:projects.timer :$project/>
            </div>
        </div>
    </div>

    <div class="py-10 text-gray-600 dark:text-gray-300 text-base leading-relaxed">
        {{ $project->description }}
    </div>

    <div class="pb-10 space-y-4">
        <div class="uppercase font-black text-gray-400 dark:text-slate-500 text-[10px] tracking-widest">Tecnologias</div>
        <div class="flex flex-wrap gap-2">
            @foreach($project->tech_stack as $tech)
                <span class="px-3 py-1.5 bg-slate-50 dark:bg-white/5 rounded-lg text-slate-600 dark:text-slate-200 text-xs font-bold">
                    {{$tech}}
                </span>
            @endforeach
        </div>
    </div>

    <div class="mt-4 p-6 bg-slate-50/50 dark:bg-white/[0.02] rounded-2xl flex items-center justify-between border-none">
        <div class="flex items-center gap-4">
            <div class="relative">
                <x-ui.avatar src="{{ $project->author->avatar }}" class="w-12 h-12 shadow-sm rounded-full"/>
                <div class="absolute -bottom-1 -right-1 bg-white dark:bg-[#1E1E2C] p-1 rounded-full shadow-sm">
                    <x-ui.icons.star class="w-3 h-3 text-yellow-500 fill-yellow-500"/>
                </div>
            </div>

            <div class="flex flex-col">
                <span class="uppercase font-black text-gray-400 dark:text-slate-500 text-[9px] tracking-[0.2em]">Publicado Por</span>
                <div class="text-gray-900 dark:text-white text-base font-bold">
                    {{ $project->author->name }}
                </div>
                <div class="flex items-center gap-0.5 mt-0.5">
                    @foreach(range(1, 5) as $star)
                        <x-ui.icons.star class="h-3 w-3 {{ $star <= $project->author->stars ? 'text-yellow-500 fill-yellow-500' : 'text-gray-300 dark:text-gray-600' }}"/>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="hidden sm:block text-right">
            <span class="text-[10px] font-bold text-gray-400 dark:text-slate-600 uppercase tracking-widest">Membro Verificado</span>
        </div>
    </div></x-ui.card>

