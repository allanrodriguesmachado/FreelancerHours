<nav class="w-full fixed top-0 z-50 bg-[#FFF9F5]/80 backdrop-blur-md border-b border-orange-100/50 transition-all duration-300">
    <div class="mx-auto max-w-7xl px-6 lg:px-8">
        <div class="flex h-20 items-center justify-between">

            {{-- LOGO --}}
            <a href="/" class="flex items-center gap-2 group">
                <div class="group-hover:rotate-12 transition-transform duration-300">
                    <!-- Logo agora laranja vibrante -->
                    <x-ui.logo class="w-8 h-8 text-orange-500"/>
                </div>
                <span class="text-xl font-bold text-slate-800 tracking-tight">
                    Freelance<span class="text-orange-500">Hours</span>
                </span>
            </a>

            {{-- MENU DESKTOP --}}
            <ul class="hidden md:flex items-center gap-8">
                <li>
                    <a href="{{ route('projects.index') }}" class="text-sm font-medium text-slate-600 hover:text-orange-600 transition-colors duration-200">
                        Procurar um projeto
                    </a>
                </li>
                <li>
                    <a href="#" class="text-sm font-medium text-slate-600 hover:text-orange-600 transition-colors duration-200">
                        Como funciona?
                    </a>
                </li>
                <li>
                    {{-- Botão Principal (CTA) --}}
                    <a href="#" class="inline-flex items-center justify-center px-5 py-2.5 text-sm font-bold text-white transition-all duration-200 bg-[#18181B] border border-transparent rounded-full hover:bg-orange-500 hover:shadow-lg hover:shadow-orange-500/20 hover:-translate-y-0.5 active:translate-y-0">
                        Anunciar um projeto
                    </a>
                </li>
            </ul>

            {{-- ÁREA DO USUÁRIO --}}
            <div class="flex items-center gap-6 border-l border-slate-200 pl-6 ml-2">

                <button class="group flex items-center gap-2 outline-none">
                    <div class="relative">
                        <x-ui.icons.profile class="w-6 h-6 text-slate-500 group-hover:text-slate-800 transition-colors"/>
                        {{-- Dot de notificação com anel da cor do fundo --}}
                        <span class="absolute top-0 right-0 block h-2 w-2 rounded-full ring-2 ring-[#FFF9F5] bg-orange-500"></span>
                    </div>
                </button>

                <button class="md:hidden text-slate-500 hover:text-slate-800">
                    <x-ui.icons.burguer class="w-6 h-6"/>
                </button>
            </div>

        </div>
    </div>
</nav>

<div class="h-20"></div>
