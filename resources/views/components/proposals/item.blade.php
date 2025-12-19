@props([
    'proposal',
    'position'
])
<div class="flex justify-between items-center">
    <div class="flex items-center space-x-2">
        <div>
            <x-proposals.position :$position/>
        </div>
        <div>
            <div class="text-gray-800 dark:text-white text-[14px] font-bold tracking-wide">
                {{ mb_substr($proposal->email, 0, 15) .  "..."}}
            </div>
            <div class="text-gray-500 dark:text-[#8C8C9A] text-[12px]">
                Enviado {{ $proposal->created_at->diffForHumans() }}
            </div>
        </div>
    </div>

    <div class="uppercase font-bold text-gray-600 dark:text-[#C3C3D1] flex items-center space-x-2 px-[8px] py-[4px] rounded-full bg-gray-100 dark:bg-[#181826] border border-gray-200 dark:border-[#1E1E2C] text-[12px]">
        <x-ui.icons.clock class="w-[18px] h-[18px]"/>
        <span>{{ str_pad($proposal->hours, 2, "0", STR_PAD_LEFT) }} horas</span>
    </div>
</div>
