<div x-data="{ mobileOpen: false }">
    <header class="fixed top-0 left-0 z-50 w-full bg-gradient-to-b from-red-900/90 to-transparent ">
        <div class="flex items-center justify-between px-6 py-4 mx-auto text-white max-w-7xl">

            <!-- Logo -->
            <div class="flex items-center space-x-2">
                <img src="{{ asset('logokecil.png') }}" alt="Logo" class="w-12 h-12">
            </div>

            <!-- Desktop Menu -->
            <nav class="relative items-center hidden space-x-6 text-sm font-medium md:flex">
                <a href="{{ route('home') }}"
                    class="hover:text-red-400 {{ request()->routeIs('home') ? 'text-red-600' : 'text-white' }}">Home</a>
                <a href="{{ route('projects') }}"
                    class="hover:text-red-400 {{ request()->routeIs('projects') ? 'text-red-600' : 'text-white    ' }}">Project</a>
                <a href="{{ route('directors') }}"
                    class="hover:text-red-400 {{ request()->routeIs('directors') ? 'text-red-600' : 'text-white' }}">Our
                    Team</a>



                <a href="{{ route('gallery') }}"
                    class="hover:text-red-400 {{ request()->routeIs('gallery') ? 'text-red-600' : 'text-white' }}">Gallery</a>
                <a href="{{ route('awards') }}"
                    class="hover:text-red-400 {{ request()->routeIs('awards') ? 'text-red-600' : 'text-white' }}">Awards</a>
                <a href="#" class="hover:text-red-400">Career</a>
                <a href="#" class="hover:text-red-400">Contact</a>
                <div x-data="{ open: false }" class="relative">
                    <button @click="open = !open" @click.outside="open = false"
                        class="flex items-center gap-1 hover:text-red-400 focus:outline-none">
                        Profiles
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <div x-show="open" x-transition
                        class="absolute left-0 z-50 py-2 mt-2 text-gray-800 bg-white rounded-md shadow-lg w-44"
                        style="display: none;">
                        <a href="#"
                            class="block px-4 py-2 transition hover:bg-red-100 hover:text-red-600">About</a>
                        <a href="#" class="block px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Vision
                            & Mission</a>
                        <a href="#" class="block px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Company
                            Competence</a>
                        <a href="#" class="block px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Mars
                            Dads</a>
                        <a href="#"
                            class="block px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Awards</a>
                    </div>
                </div>
            </nav>

            <!-- Mobile Hamburger -->
            <button @click="mobileOpen = true" class="md:hidden focus:outline-none">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </header>

    <!-- ✅ Mobile Sidebar Menu -->
    <div x-show="mobileOpen" x-transition class="fixed inset-0 z-50 flex" style="display: none;">
        <!-- Overlay -->
        <div class="flex-1 bg-black/50" @click="mobileOpen = false"></div>

        <!-- Sidebar -->
        <div class="flex flex-col w-64 h-full p-6 space-y-4 overflow-y-auto text-gray-800 bg-white shadow-lg">
            <!-- Close Button -->
            <div class="flex items-center justify-between mb-4">
                <img src="{{ asset('logokecil.png') }}" class="w-10 h-10" alt="Logo">
                <button @click="mobileOpen = false" class="text-gray-500 hover:text-red-500">✕</button>
            </div>

            <a href="{{ route('home') }}" class="block py-2 hover:text-red-600">Home</a>
            <a href="{{ route('projects') }}" class="block py-2 hover:text-red-600">Project</a>
            <a href="{{ route('directors') }}" class="block py-2 hover:text-red-600">Our Team</a>


            <a href={{ route('gallery') }} class="block py-2 hover:text-red-600">Gallery</a>
            <a href="#" class="block py-2 hover:text-red-600">Awards</a>
            <a href="#" class="block py-2 hover:text-red-600">Career</a>
            <a href="#" class="block py-2 hover:text-red-600">Contact</a>
            <div x-data="{ open: false }">
                <button @click="open = !open"
                    class="flex items-center justify-between w-full py-2 text-left hover:text-red-600">
                    Our Team
                    <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }"
                        class="w-4 h-4 transition-transform transform" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div x-show="open" x-transition class="pl-3 ml-4 space-y-2 border-l border-gray-200">
                    <a href="#"
                        class="block text-[12px] px-4 py-2 transition hover:bg-red-100 hover:text-red-600">About</a>
                    <a href="#"
                        class="block text-[12px] px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Vision &
                        Mission</a>
                    <a href="#"
                        class="block text-[12px] px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Company
                        Competence</a>
                    <a href="#"
                        class="block text-[12px] px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Mars
                        Dads</a>
                    <a href="#"
                        class="block text-[12px] px-4 py-2 transition hover:bg-red-100 hover:text-red-600">Awards</a>
                </div>
            </div>
        </div>
    </div>
</div>
