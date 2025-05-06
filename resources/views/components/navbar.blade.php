<nav class="fixed top-0 z-50 w-full border-b border-white/10 bg-black/30 backdrop-blur-lg">
    <div class="container relative mx-auto flex h-14 items-center justify-between px-4 sm:px-6 lg:px-8">
        {{-- gradient buat appname --}}
        <a class="bg-gradient-to-r from-indigo-400 to-purple-500 bg-clip-text text-xl font-bold text-transparent"
            href="{{ route('dashboard') }}">
            MasFana
        </a>

        {{-- menu pas desktop --}}
        <div class="hidden items-center space-x-6 md:flex">
            <a class="{{ request()->is('dashboard') ? 'text-white font-medium' : 'text-gray-300' }} transition-colors duration-200 hover:text-white"
                href="{{ route('dashboard') }}">
                Dashboard
            </a>
            <a class="{{ request()->is('pengelolaan*') ? 'text-white font-medium' : 'text-gray-300' }} transition-colors duration-200 hover:text-white"
                href="{{ route('pengelolaan') }}">
                Pengelolaan
            </a>
            <a class="{{ request()->is('profile') ? 'text-white font-medium' : 'text-gray-300' }} transition-colors duration-200 hover:text-white"
                href="{{ route('profile') }}">
                Profile
            </a>
        </div>

        {{-- menu pas mobile --}}
        <div class="flex items-center md:hidden">
            <button class="text-gray-300 hover:text-white focus:outline-none" id="mobile-menu-button">
                <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        {{-- logout desktop --}}
        <div class="hidden md:block">
            <a class="flex items-center text-gray-300 transition-colors duration-200 hover:text-white"
                href="{{ route('logout') }}">
                <span>Logout</span>
            </a>
        </div>

    </div>

    {{-- dropdown kalau lagi di mobile --}}
    <div class="hidden bg-black/50 backdrop-blur-sm md:hidden" id="mobile-menu">
        <div class="space-y-2 px-4 pb-3 pt-2">
            <a class="{{ request()->is('dashboard') ? 'text-white font-medium' : 'text-gray-300' }} block px-3 py-2 transition-colors duration-200 hover:text-white"
                href="{{ route('dashboard') }}">
                Dashboard
            </a>
            <a class="{{ request()->is('pengelolaan*') ? 'text-white font-medium' : 'text-gray-300' }} block px-3 py-2 transition-colors duration-200 hover:text-white"
                href="{{ route('pengelolaan') }}">
                Pengelolaan
            </a>
            <a class="{{ request()->is('profile') ? 'text-white font-medium' : 'text-gray-300' }} block px-3 py-2 transition-colors duration-200 hover:text-white"
                href="{{ route('profile') }}">
                Profile
            </a>
            <a class="block px-3 py-2 text-gray-300 transition-colors duration-200 hover:text-white"
                href="{{ route('logout') }}">
                Logout
            </a>
        </div>
    </div>
</nav>

<script>
    // show menu
    document.getElementById('mobile-menu-button').addEventListener('click', function() {
        const menu = document.getElementById('mobile-menu');
        menu.classList.toggle('hidden');
        document.getElementByIdByTagName('nav').classList.toggle('static');
    });
</script>
