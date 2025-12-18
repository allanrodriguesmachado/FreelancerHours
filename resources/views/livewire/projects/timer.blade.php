<div class="bg-[#1A1D23] p-4 rounded-xl border border-white/5 shadow-2xl max-w-sm" wire:poll.1s>
    <div class="flex items-center justify-between mb-3">
        <div class="flex items-center gap-2">
            <div class="w-2 h-2 bg-red-500 rounded-full animate-pulse"></div>
            <span class="text-[#8C8C9A] text-xs font-bold uppercase tracking-widest">Encerra em</span>
        </div>
        <span class="text-[10px] bg-white/10 text-white px-2 py-0.5 rounded uppercase">Live</span>
    </div>

    <div class="flex items-center gap-2">
        <div class="flex-1 bg-[#262932] border border-white/5 rounded-lg py-2 flex flex-col items-center justify-center shadow-inner">
            <span class="text-white text-xl font-black leading-none">{{$days}}</span>
            <span class="text-[9px] text-[#8C8C9A] uppercase mt-1 font-bold">Dias</span>
        </div>

        <div class="flex-1 bg-[#262932] border border-white/5 rounded-lg py-2 flex flex-col items-center justify-center shadow-inner">
            <span class="text-white text-xl font-black leading-none">{{sprintf('%02d', $hours)}}</span>
            <span class="text-[9px] text-[#8C8C9A] uppercase mt-1 font-bold">Horas</span>
        </div>

        <div class="flex-1 bg-[#262932] border border-white/5 rounded-lg py-2 flex flex-col items-center justify-center shadow-inner">
            <span class="text-white text-xl font-black leading-none">{{sprintf('%02d', $minutes)}}</span>
            <span class="text-[9px] text-[#8C8C9A] uppercase mt-1 font-bold">Min</span>
        </div>

        <div class="flex-1 bg-gradient-to-br from-orange-500 to-red-600 rounded-lg py-2 flex flex-col items-center justify-center shadow-lg shadow-orange-500/20">
            <span class="text-white text-xl font-black leading-none">{{sprintf('%02d', $seconds)}}</span>
            <span class="text-[9px] text-white/80 uppercase mt-1 font-bold">Seg</span>
        </div>
    </div>
</div>
