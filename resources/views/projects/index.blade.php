@extends('master.layout')
@section('title', 'Projects | PT Duta Anugrah')
@section('content')
    @include('master.navbar')

    <section class="relative flex items-center justify-center w-full h-[40vh] pt-20 bg-fixed bg-center bg-cover"
        style="background-image: url('{{ asset('bg.png') }}');">

        <div class="absolute inset-0 bg-gradient-to-b from-red-900/70 to-black/60"></div>

        <div class="relative z-10 px-6 text-center text-white">

            <h1 class="mb-3 text-4xl font-extrabold md:text-6xl drop-shadow-2xl">
                Our Projects
            </h1>
            <p class="max-w-xl mx-auto text-sm text-gray-200 md:text-base">
                Membangun infrastruktur digital Indonesia melalui dedikasi dan profesionalisme tinggi.
            </p>
        </div>
    </section>

    <section class="sticky top-[64px] z-20 py-4 transition-all duration-300 bg-transparent backdrop-blur-md">
        <div class="max-w-5xl px-6 mx-auto">
            <div
                class="flex flex-wrap justify-center gap-2 px-4 py-2 border rounded-full shadow-sm md:gap-4 bg-white/20 border-white/30">
                @php $categories = ['All', 'Starlite', 'AsiaNet', 'Fiberstar', 'Telkom', 'ZTE']; @endphp
                @foreach ($categories as $cat)
                    <a href="#"
                        class="filter-btn px-4 py-1.5 text-xs md:text-sm font-bold transition-all border-2 rounded-full
                        {{ $loop->first
                            ? 'bg-red-600 text-white border-red-600 shadow-lg shadow-red-600/30'
                            : 'bg-white/40 text-gray-800 border-transparent hover:bg-red-600 hover:text-white hover:border-red-600' }}">
                        {{ $cat }}
                    </a>
                @endforeach
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

    <section class="py-20 bg-gray-50">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="flex items-center justify-between mb-12">
                <h2 class="text-3xl font-bold text-gray-900">Latest Works</h2>
                <div class="w-20 h-1 bg-red-600"></div>
            </div>

            <div class="grid grid-cols-1 gap-10 sm:grid-cols-2 lg:grid-cols-3">
                @for ($i = 0; $i < 6; $i++)
                    <div
                        class="overflow-hidden transition-all duration-500 bg-white border border-gray-100 shadow-sm group rounded-xl hover:shadow-2xl">
                        <div class="relative overflow-hidden">
                            <img src="{{ asset('example.jpeg') }}"
                                class="object-cover w-full h-64 transition-transform duration-500 group-hover:scale-110">
                            <div class="absolute top-4 left-4">
                                <span class="px-3 py-1 text-xs font-bold text-white rounded bg-red-600/90">Starlite</span>
                            </div>
                        </div>

                        <div class="p-6">
                            <h3 class="text-xl font-bold text-gray-800 transition-colors group-hover:text-red-600">
                                Starlite Project Expansion
                            </h3>
                            <p class="mt-3 text-sm leading-relaxed text-gray-600">
                                Penyediaan layanan Fiber To The Home (FTTH) untuk area urban dengan standar instalasi
                                tinggi.
                            </p>

                            <div class="flex items-center justify-between pt-6 mt-6 border-t border-gray-100">
                                <span class="text-xs font-semibold tracking-tighter text-gray-400 uppercase">March
                                    2025</span>
                                <a href="#" class="text-sm italic font-bold text-red-600 hover:underline">Read More
                                    →</a>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="mt-16 text-center">
                <button
                    class="px-8 py-3 font-bold text-red-600 transition border-2 border-red-600 rounded-lg hover:bg-red-600 hover:text-white">
                    Load More Projects
                </button>
            </div>
        </div>
    </section>

    @include('master.footer')
@endsection
