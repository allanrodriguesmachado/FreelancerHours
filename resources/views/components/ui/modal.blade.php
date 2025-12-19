<div x-data="{ showModal: @entangle('modal') }"
     x-show="showModal"
     x-on:keydown.escape.window="showModal = false"
     class="fixed inset-0 z-50 overflow-y-auto"
     style="display: none;">

    <div class="fixed inset-0 bg-black/50 dark:bg-black/70 backdrop-blur-sm transition-opacity"
         x-show="showModal"
         x-transition:enter="ease-out duration-300"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="ease-in duration-200"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         @click="showModal = false"></div>

    <div class="flex min-h-full items-center justify-center p-4">

        <div x-show="showModal"
             x-transition:enter="ease-out duration-300"
             x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave="ease-in duration-200"
             x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
             x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
             class="relative w-full max-w-md transform rounded-lg p-8 shadow-2xl transition-all border
                    /* Light Mode */
                    bg-white text-gray-900 border-gray-200
                    /* Dark Mode */
                    dark:bg-[#181826] dark:text-white dark:border-[#1E1E2C]">

            <div class="mb-6">
                <button type="button"
                        class="transition duration-300 ease-in-out p-2 rounded-md
                           /* Light Mode */
                           bg-gray-100 hover:bg-gray-200 text-gray-600
                           /* Dark Mode */
                           dark:bg-[#1E1E2C] dark:hover:bg-[#313145] dark:text-white"
                        @click="showModal = false">
                    <x-ui.icons.x class="w-6 h-6" />
                </button>
            </div>

            <div class="flex flex-col gap-6">
                {{ $slot }}
            </div>
        </div>
    </div>
</div>
