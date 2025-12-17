@props([
    'icon',
    'text'
])

<div class="inline-flex items-center gap-2 px-3 py-1.5 bg-[#171717] border border-[#262626] rounded-full shadow-sm select-none hover:border-[#404040] transition-colors duration-300">
    <x-dynamic-component component="ui.icons.{{ $icon }}" class="w-3.5 h-3.5 text-neutral-400"/>

    <span class="text-[10px] font-bold uppercase tracking-widest text-neutral-200 leading-none">
        {{ $text }}
    </span>
</div>
