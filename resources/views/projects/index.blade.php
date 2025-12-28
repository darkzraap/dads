@extends('master.layout')
@section('title', 'Projects | PT Duta Anugrah')
@section('content')
    @include('master.navbar')


    <section class="relative flex items-center justify-center w-full h-[35vh] pt-24 bg-center bg-cover"
        style="background-image: url('bg.png');">

        <!-- Red Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-red-900/70 to-black/60"></div>

        <!-- Hero Content -->
        <div class="relative px-6 text-center text-white">
            <h1 class="mb-3 text-3xl font-extrabold md:text-5xl drop-shadow-lg ">
                Our Projects
            </h1>


        </div>
    </section>



    <section class="py-12">
        <div class="max-w-5xl mx-auto px-6">
            <div class="flex flex-row gap-12 justify-center">
                <a href='#' class=" text-lg font-semibold hover:text-red-500">Starlite</a>
                <a href='#' class=" text-lg font-semibold hover:text-red-500">AsiaNet</a>
                <a href='#' class=" text-lg font-semibold hover:text-red-500">Fiberstar</a>
                <a href='#' class=" text-lg font-semibold hover:text-red-500">Telkom</a>
                <a href='#' class=" text-lg font-semibold hover:text-red-500">ZTE</a>
            </div>
        </div>
    </section>


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


    <section class="py-12">
        <div class="max-w-7xl mx-auto px-6">
            <div
                class="grid gap-8
                    grid-cols-1
                    sm:grid-cols-2
                    md:grid-cols-3
                    lg:grid-cols-4">
                <div
                    class="bg-white  shadow-xl overflow-hidden
           hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <img src="{{ asset('example.jpeg') }}" class="object-cover w-full h-[12rem] sm:h-[14rem]">

                    <div class="flex flex-col justify-between p-5 min-h-[11rem]">
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800">
                                Starlite Project
                            </h3>

                            <p class="mt-2 text-sm sm:text-sm text-gray-600 leading-relaxed">
                                A modern web application built to showcase creative projects
                                with clean UI and smooth interactions.
                            </p>
                        </div>

                        <span class="mt-4 text-xs font-medium text-gray-400">
                            March 12, 2025
                        </span>
                    </div>
                </div>

                <div
                    class="bg-white  shadow-xl overflow-hidden
           hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <img src="{{ asset('example.jpeg') }}" class="object-cover w-full h-[12rem] sm:h-[14rem]">

                    <div class="flex flex-col justify-between p-5 min-h-[11rem]">
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800">
                                Starlite Project
                            </h3>

                            <p class="mt-2 text-sm sm:text-sm text-gray-600 leading-relaxed">
                                A modern web application built to showcase creative projects
                                with clean UI and smooth interactions.
                            </p>
                        </div>

                        <span class="mt-4 text-xs font-medium text-gray-400">
                            March 12, 2025
                        </span>
                    </div>
                </div>



                <div
                    class="bg-white  shadow-xl overflow-hidden
           hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <img src="{{ asset('example.jpeg') }}" class="object-cover w-full h-[12rem] sm:h-[14rem]">

                    <div class="flex flex-col justify-between p-5 min-h-[11rem]">
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800">
                                Starlite Project
                            </h3>

                            <p class="mt-2 text-sm sm:text-sm text-gray-600 leading-relaxed">
                                A modern web application built to showcase creative projects
                                with clean UI and smooth interactions.
                            </p>
                        </div>

                        <span class="mt-4 text-xs font-medium text-gray-400">
                            March 12, 2025
                        </span>
                    </div>
                </div>


                <div
                    class="bg-white  shadow-xl overflow-hidden
           hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <img src="{{ asset('example.jpeg') }}" class="object-cover w-full h-[12rem] sm:h-[14rem]">

                    <div class="flex flex-col justify-between p-5 min-h-[11rem]">
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800">
                                Starlite Project
                            </h3>

                            <p class="mt-2 text-sm sm:text-sm text-gray-600 leading-relaxed">
                                A modern web application built to showcase creative projects
                                with clean UI and smooth interactions.
                            </p>
                        </div>

                        <span class="mt-4 text-xs font-medium text-gray-400">
                            March 12, 2025
                        </span>
                    </div>
                </div>


                <div
                    class="bg-white  shadow-xl overflow-hidden
           hover:-translate-y-2 hover:shadow-2xl transition-all duration-300">

                    <img src="{{ asset('example.jpeg') }}" class="object-cover w-full h-[12rem] sm:h-[14rem]">

                    <div class="flex flex-col justify-between p-5 min-h-[11rem]">
                        <div>
                            <h3 class="text-lg sm:text-xl font-bold text-gray-800">
                                Starlite Project
                            </h3>

                            <p class="mt-2 text-sm sm:text-sm text-gray-600 leading-relaxed">
                                A modern web application built to showcase creative projects
                                with clean UI and smooth interactions.
                            </p>
                        </div>

                        <span class="mt-4 text-xs font-medium text-gray-400">
                            March 12, 2025
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </section>



    <br><br>


    @include('master.footer')
@endsection
