<div class="bg-white dark:bg-[#1A1D23] p-4 rounded-xl border border-gray-200 dark:border-white/5 shadow-xl dark:shadow-2xl max-w-sm" wire:poll.1s>
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
            <span class="text-gray-500 dark:text-[#8C8C9A] text-xs font-bold uppercase tracking-widest">Encerra em</span>
        </div>
        <span class="text-[10px] bg-gray-100 dark:bg-white/10 text-gray-600 dark:text-white px-2 py-0.5 rounded uppercase font-medium">Live</span>
    </div>

    <div class="flex items-center gap-2">
        <div class="flex-1 bg-gray-50 dark:bg-[#262932] border border-gray-100 dark:border-white/5 rounded-lg py-2 flex flex-col items-center justify-center shadow-inner">
            <span class="text-gray-900 dark:text-white text-xl font-black leading-none">{{$days}}</span>
            <span class="text-[9px] text-gray-500 dark:text-[#8C8C9A] uppercase mt-1 font-bold">Dias</span>
        </div>

        <div class="flex-1 bg-gray-50 dark:bg-[#262932] border border-gray-100 dark:border-white/5 rounded-lg py-2 flex flex-col items-center justify-center shadow-inner">
            <span class="text-gray-900 dark:text-white text-xl font-black leading-none">{{sprintf('%02d', $hours)}}</span>
            <span class="text-[9px] text-gray-500 dark:text-[#8C8C9A] uppercase mt-1 font-bold">Horas</span>
        </div>

        <div class="flex-1 bg-gray-50 dark:bg-[#262932] border border-gray-100 dark:border-white/5 rounded-lg py-2 flex flex-col items-center justify-center shadow-inner">
            <span class="text-gray-900 dark:text-white text-xl font-black leading-none">{{sprintf('%02d', $minutes)}}</span>
            <span class="text-[9px] text-gray-500 dark:text-[#8C8C9A] uppercase mt-1 font-bold">Min</span>
        </div>

        <div class="flex-1 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg py-2 flex flex-col items-center justify-center shadow-lg shadow-orange-500/30">
            <span class="text-white text-xl font-black leading-none">{{sprintf('%02d', $seconds)}}</span>
            <span class="text-[9px] text-white/80 uppercase mt-1 font-bold">Seg</span>
        </div>
    </div>
</div>
