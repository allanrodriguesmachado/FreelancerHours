@props(['proposals'])




<x-ui.card class="bg-white dark:bg-[#1E1E2C] border-gray-200 dark:border-[#2E2E3A]">



    <div class="flex items-center justify-between pb-4">
        <div class="flex flex-col">
            <h2 class="text-[20px] text-gray-900 dark:text-white leading-9">
                Propostas
            </h2>
            <div class="text-gray-500 dark:text-[#8C8C9A] text-[12px]">
                Publicado {{$this->lastProposalTime}}
            </div>
        </div>
        <div class="flex items-center space-x-2 text-gray-600 dark:text-[#8C8C9A]">
            <x-ui.icons.people-group class="w-[18px] h-[18px]"/>
            <span class="font-bold">{{ $proposals->total() }}</span>
        </div>
    </div>

    <div class="py-4">
        <div class="flex flex-col gap-7">
            @foreach($proposals as $proposal)
                <x-proposals.item :$proposal :position="$loop->index"/>
            @endforeach
        </div>

        @if($proposals->hasMorePages())
            <div class="mt-6">
                <button class="w-full px-8 py-3 rounded-[4px] font-bold uppercase tracking-wide transition duration-300 ease-in-out border
    bg-orange-500 text-white border-orange-600 hover:bg-orange-600 shadow-sm
    dark:bg-orange-600 dark:border-orange-700 dark:hover:bg-orange-500"
                        wire:click="loadMore">
                    Carregar Mais
                </button>
            </div>
        @endif
    </div>
</x-ui.card>
