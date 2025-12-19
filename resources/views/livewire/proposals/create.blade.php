<div class="flex flex-col items-center justify-center">
    <button class="bg-orange-500 text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                    hover:bg-orange-600 transition duration-300 ease-in-out w-full shadow-lg shadow-orange-500/20"
                                                                wire:click="$set('modal', true)">
        Enviar uma proposta
    </button>

    <x-ui.modal>
        <div class="flex flex-col items-center justify-center text-center p-4">
            <form class="flex flex-col gap-6 w-full max-w-lg" wire:submit="save">
                <div>
                    <div class="text-[28px] text-gray-900 dark:text-white font-bold">Envie sua proposta</div>
                    <div class="text-[16px] text-gray-500 dark:text-[#C3C3D1]">
                        Faça sua oferta em horas mensais que você pode contribuir com o projeto.
                    </div>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 text-left"> <div class="w-full sm:w-2/3 gap-2 flex flex-col">
                        <label class="text-[14px] text-gray-600 dark:text-[#C3C3D1] font-semibold">E-mail</label>
                        <input wire:model="email" type="email"
                               class="w-full bg-gray-50 dark:bg-[#1E1E2C] text-gray-900 dark:text-white p-2 focus:outline-none focus:ring-2 focus:ring-orange-500/50 border border-gray-200 dark:border-[#1E1E2C] rounded"
                               placeholder="Insira o seu e-mail" />

                        @error('email')
                        <div class="text-red-600 mt-1 text-sm">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="w-full sm:w-1/3 gap-2 flex flex-col">
                        <label class="text-[14px] text-gray-600 dark:text-[#C3C3D1] font-semibold">Horas</label>
                        <div class="flex items-center overflow-hidden rounded border border-gray-200 dark:border-[#1E1E2C]" x-data="{ hours: @entangle('hours') }">
                            <button type="button" class="bg-gray-100 dark:bg-[#1E1E2C] hover:bg-gray-200 dark:hover:bg-[#313145] transition text-gray-600 dark:text-[#C3C3D1] py-2 px-3 text-2xl leading-none" @click="hours--">-</button>

                            <input wire:model="hours" type="number"
                                   class="bg-white dark:bg-[#1E1E2C] text-gray-900 dark:text-white py-2 w-full text-center font-bold focus:outline-none border-x border-gray-200 dark:border-[#1E1E2C] [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" />

                            <button type="button" class="bg-gray-100 dark:bg-[#1E1E2C] hover:bg-gray-200 dark:hover:bg-[#313145] transition text-gray-600 dark:text-[#C3C3D1] py-2 px-3 text-2xl leading-none" @click="hours++">+</button>
                        </div>

                        @error('hours')
                        <div class="text-red-600 mt-1 text-sm">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="text-left">
                    <label for="agree" class="flex cursor-pointer items-center gap-2 text-sm font-medium">
                        <div class="relative flex items-center">
                            <input wire:model="agree" id="agree" type="checkbox"
                                   class="peer relative size-4 cursor-pointer appearance-none overflow-hidden rounded border border-neutral-300 bg-gray-50 checked:border-orange-500 checked:bg-orange-500 focus:ring-2 focus:ring-orange-500/20 dark:border-neutral-700 dark:bg-neutral-900 dark:checked:border-orange-500" />
                            <x-ui.icons.check class="pointer-events-none invisible absolute left-1/2 top-1/2 size-3 -translate-x-1/2 -translate-y-1/2 text-white peer-checked:visible" />
                        </div>
                        <span class="text-gray-500 dark:text-[#8C8C9A] text-[14px]">Concordo com os Termos e Políticas de privacidade.</span>
                    </label>

                    @error('agree')
                    <div class="text-red-600 mt-1 text-sm">{{ $message }}</div>
                    @enderror
                </div>

                <button class="bg-orange-500 text-white font-bold tracking-wide uppercase px-8 py-3 rounded-[4px]
                        hover:bg-orange-600 transition duration-300 ease-in-out w-full shadow-lg shadow-orange-500/20">
                    Enviar uma proposta
                </button>
            </form>

            <div class="flex justify-center items-center space-x-2 mt-6">
                <x-ui.icons.secure class="w-5 h-5 text-orange-500" />
                <span class="text-gray-500 dark:text-gray-400 text-sm">Suas informações estão seguras.</span>
            </div>
        </div>
    </x-ui.modal>
</div>
