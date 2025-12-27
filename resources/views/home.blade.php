@extends('master.layout')
@section('title', 'Home | PT Duta Anugrah')
@section('content')
    @include('master.navbar')


    <section class="relative flex items-center justify-center w-full h-screen pt-24 bg-center bg-cover"
        style="background-image: url('bg.png');">
        <!-- Red Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-red-900/70 to-black/60"></div>

        <!-- Hero Content -->
        <div class="relative px-6 text-center text-white">
            <h1 class="mb-3 text-3xl font-extrabold md:text-5xl drop-shadow-lg animate-fadeUp">
                DUTA ANUGRAH DAMAI SEJAHTERA
            </h1>
            <p class="mb-8 text-sm text-red-400 md:text-base animate-fadeUp">
                To Become Trusted Company to Provide Prosperous Life
            </p>
            <button
                class="px-6 py-2 text-red-400 transition border border-red-500 rounded-md hover:bg-red-500 hover:text-white animate-fadeUp">
                Explore
            </button>
            <p class="mt-4 italic text-blue-300 animate-fadeUp">Est. 2011</p>
        </div>
    </section>
    <!-- Dummy content to show scroll behavior -->
    <!-- What We Do Section -->
    <section class="bg-white py-16 px-6 md:px-16 h-auto md:h-[40rem] flex items-center">
        <div class="max-w-6xl mx-auto">
            <!-- Section Title -->
            <h2 class="mb-2 text-sm font-semibold text-red-600 uppercase">What We Do</h2>
            <div class="w-16 mb-6 border-b-2 border-blue-900"></div>

            <!-- Content Grid -->
            <div class="grid items-center gap-10 md:grid-cols-2">
                <!-- Text Content -->
                <div>
                    <h3 class="mb-4 text-3xl font-extrabold text-gray-900">PT.DADS</h3>
                    <p class="mb-6 text-sm leading-relaxed text-gray-700 md:text-base">
                        Engaged in the procurement and development of telecommunications infrastructure,
                        with a primary focus on optical cable networks. Its activities include both
                        construction and service operations, as well as the supply of materials essential
                        to communication network systems.
                    </p>
                    <a href="#"
                        class="inline-block px-5 py-2 text-sm text-white transition bg-blue-900 rounded-md hover:bg-blue-700">
                        Read More
                    </a>
                </div>

                <!-- Image -->
                <div class="flex justify-center md:justify-end">
                    <img src="{{ asset('do.jpg') }}" alt="Telecommunication" class="w-full max-w-sm rounded-lg shadow-md">
                </div>
            </div>
        </div>
    </section>
    <section class="relative">
        <div class="relative">
            <img src="{{ asset('sl2.jpg') }}" alt="Team" class="w-full h-72 md:h-[450px] object-cover">

            <div class="absolute inset-0 flex items-center justify-center bg-black/60">
                <div
                    class="grid w-full max-w-6xl grid-cols-3 gap-6 px-6 py-8 text-center text-white md:grid-cols-3 md:py-16">

                    <div class="flex flex-col items-center">
                        <div class="p-3 mb-3 rounded-full bg-red-600/80">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2 h-2 md:w-10 md:h-10" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M17 20h5v-2a4 4 0 00-3-3.87V12a7 7 0 10-14 0v2.13A4 4 0 002 18v2h5" />
                            </svg>
                        </div>
                        <h4 class="text-[8px]  md:text-lg font-bold">Clients</h4>
                        <p class="mt-1 text-xl font-extrabold text-red-400 md:text-3xl">100</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="p-3 mb-3 rounded-full bg-red-600/80">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2 h-2 md:w-10 md:h-10" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM8 11c1.104 0 2-.896 2-2S9.104 7 8 7 6 7.896 6 9s.896 2 2 2zm8 2c-2.21 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4zm-8 0c-2.21 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4z" />
                            </svg>
                        </div>
                        <h4 class="text-[8px] md:text-lg font-bold">Employees</h4>
                        <p class="mt-1 text-xl font-extrabold text-red-400 md:text-3xl">300</p>
                    </div>

                    <div class="flex flex-col items-center">
                        <div class="p-3 mb-3 rounded-full bg-red-600/80">
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-2 h-2 md:w-10 md:h-10" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 10V3L4 14h7v7l9-11h-7z" />
                            </svg>
                        </div>
                        <h4 class="text-[8px] md:text-lg font-bold text-center px-3">Infrastructure Completion</h4>
                        <p class="mt-1 text-xl font-extrabold text-red-400 md:text-3xl">10,000</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Our Clients Section -->
    <section class="py-16 overflow-hidden bg-gray-100">
        <div class="max-w-6xl px-6 mx-auto text-center">
            <!-- Section Button -->
            <div class="flex justify-center mb-6">
                <button class="px-6 py-2 text-sm font-semibold text-white bg-red-600 rounded-full shadow-md">
                    Our Clients
                </button>
            </div>

            <!-- Description -->
            <p class="max-w-3xl mx-auto mb-10 leading-relaxed text-gray-700">
                Over the years, we have built strong partnerships with many leading companies who trust our
                expertise and commitment to excellence in every project we deliver.
            </p>

            <!-- Rolling Logos -->
            <div class="scrollContainer">
                <div class="scrollWrapper">
                    <!-- Logo Items -->
                    <div class="flex items-center justify-center flex-shrink-0 w-40 h-24 p-4 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('starlite.png') }}" alt="Starlite" class="object-contain h-12 md:h-16">
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 w-40 h-24 p-4 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('fiberstar.png') }}" alt="FiberStar" class="object-contain h-12 md:h-16">
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 w-40 h-24 p-4 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('asianet.jpg') }}" alt="Asianet" class="object-contain h-12 md:h-16">
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 w-40 h-24 p-4 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('yofc.png') }}" alt="YOFC 1" class="object-contain h-12 md:h-16">
                    </div>
                    <div class="flex items-center justify-center flex-shrink-0 w-40 h-24 p-4 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('tea.jpeg') }}" alt="YOFC 2" class="object-contain h-12 md:h-16">
                    </div>

                    <div class="flex items-center justify-center flex-shrink-0 w-40 h-24 p-4 bg-white shadow-md rounded-xl">
                        <img src="{{ asset('moratel.png') }}" alt="YOFC 2" class="object-contain h-12 md:h-16">
                    </div>


                </div>

            </div>
        </div>
        </div>
    </section>
    <!-- Add JS -->
    <!-- 🌟 Project Showcase Section -->
    <section class="relative w-full h-[480px] md:h-[560px] overflow-hidden">
        <img src="{{ asset('ftpro.jpeg') }}" alt="Project Showcase" class="absolute inset-0 object-cover w-full h-full">

        <!-- Dark Overlay -->
        <div class="absolute inset-0 bg-black/60"></div>

        <!-- Showcase Content -->
        <div class="relative z-10 flex flex-col items-start justify-center h-full px-8 text-white md:px-16">
            <p class="mb-2 text-sm tracking-widest text-gray-300 uppercase">Featured</p>
            <h1 class="mb-3 text-3xl font-bold leading-tight md:text-5xl">Project Service Showcase</h1>
            <p class="mb-4 text-sm md:text-base">11 Mar 2024 · Splice Service</p>
            <a href="{{ route('projects') }}" class="font-semibold text-red-400 transition hover:text-red-500">
                See more projects →
            </a>

            <!-- Arrows -->
            <div class="absolute flex gap-3 right-8 bottom-10">
                <button
                    class="flex items-center justify-center w-10 h-10 transition border rounded-full bg-white/10 border-white/30 hover:bg-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                    </svg>
                </button>
                <button
                    class="flex items-center justify-center w-10 h-10 transition border rounded-full bg-white/10 border-white/30 hover:bg-white/20">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                    </svg>
                </button>
            </div>
        </div>
    </section>
    <!-- 📰 Latest News Section -->
    <section class="py-16 bg-white">
        <div class="max-w-6xl px-6 mx-auto">
            <h2 class="mb-10 text-3xl font-bold text-gray-900">Latest News</h2>

            <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 md:grid-cols-3">
                <!-- Card -->
                <div
                    class="overflow-hidden transition-transform duration-300 bg-white shadow-lg rounded-xl hover:-translate-y-2">
                    <img src="{{ asset('opticakl.jpg') }}" alt="Fiber" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-2 text-lg font-semibold">What is Fiber Optic?</h3>
                        <p class="mb-3 text-sm text-gray-600">Discover how fiber optics revolutionize data transfer.</p>
                        <a href="#" class="inline-block font-semibold text-blue-700 hover:underline">Read More</a>
                    </div>
                </div>

                <div
                    class="overflow-hidden transition-transform duration-300 bg-white shadow-lg rounded-xl hover:-translate-y-2">
                    <img src="{{ asset('pole.jpg') }}" alt="Pole" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-2 text-lg font-semibold">What is Pole?</h3>
                        <p class="mb-3 text-sm text-gray-600">Understand how utility poles support communication lines.</p>
                        <a href="#" class="inline-block font-semibold text-blue-700 hover:underline">Read More</a>
                    </div>
                </div>

                <div
                    class="overflow-hidden transition-transform duration-300 bg-white shadow-lg rounded-xl hover:-translate-y-2">
                    <img src="{{ asset('fat.jpg') }}" alt="Optic Box" class="object-cover w-full h-48">
                    <div class="p-5">
                        <h3 class="mb-2 text-lg font-semibold">What is Fiber Optic Box?</h3>
                        <p class="mb-3 text-sm text-gray-600">Learn how optic boxes organize and protect cable systems.</p>
                        <a href="#" class="inline-block font-semibold text-blue-700 hover:underline">Read More</a>
                    </div>
                </div>
            </div>

            <div class="mt-10 text-center">
                <a href="#"
                    class="inline-block px-5 py-2 text-sm text-white transition bg-blue-900 rounded-md hover:bg-blue-700">
                    Read More
                </a>
            </div>
        </div>
    </section>


    @include('master.footer')
@endsection
