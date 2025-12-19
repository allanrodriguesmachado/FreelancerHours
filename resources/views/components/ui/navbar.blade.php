<nav
    class="w-full fixed top-0 z-50 dark:bg-gray-950 bg-[#FFF9F5]/80 backdrop-blur-md border-b dark:border-b-gray-700 border-orange-100/50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">
            <a href="/" class="flex items-center gap-2 group">
                <div class="group-hover:rotate-12 transition-transform duration-300">
                    <x-ui.logo class="w-8 h-8 text-orange-500"/>
                </div>
                <span class="text-xl font-bold  text-slate-800 dark:text-[#FFF9F5]/80 tracking-tight">
                    Freelance<span class="text-orange-500">Hours</span>
                </span>
            </a>

            <div class="flex items-center gap-6  pl-6 ml-2">
                <button id="theme-toggle" type="button"
                        class="text-gray-500 dark:text-gray-400  rounded-lg text-sm p-2.5">
                    <svg id="theme-toggle-dark-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                    </svg>
                    <svg id="theme-toggle-light-icon" class="hidden w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                         xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                            fill-rule="evenodd" clip-rule="evenodd"></path>
                    </svg>
                </button>

                <div class=" gap-6 border-l border-slate-200 pl-2">
                    <button class="group flex items-center gap-2 outline-none">
                        <div class="relative">
                            <x-ui.icons.profile
                                class="w-6 h-6 text-slate-500 group-hover:text-slate-800 transition-colors"/>
                            <span
                                class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-[#FFF9F5] bg-orange-500"></span>
                        </div>
                    </button>

                    <button class="md:hidden text-slate-500 hover:text-slate-800">
                        <x-ui.icons.burguer class="w-6 h-6"/>
                    </button>
                </div>
            </div>
        </div>
    </div>
</nav>

<div class="h-20"></div>
