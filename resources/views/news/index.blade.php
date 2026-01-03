@extends('master.layout')
@section('title', 'Berita Infrastruktur | PT Duta Anugrah')

@section('content')
@include('master.navbar')

<section class="bg-gray-50 py-14">
    <div class="px-6 mx-auto max-w-7xl">

        {{-- Page Title --}}
        <div class="mb-10 text-center">
            <h1 class="text-3xl font-bold text-gray-800 md:text-4xl">
                Berita Infrastruktur & Teknologi Internet
            </h1>
            <p class="max-w-2xl mx-auto mt-3 text-gray-600">
                Informasi terbaru seputar Internet Provider, Kabel Optik, Modem, WiFi, dan perkembangan teknologi jaringan.
            </p>
        </div>

        {{-- News Grid --}}
        <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @forelse($news as $item)
                <article class="overflow-hidden transition bg-white rounded-lg shadow hover:shadow-xl">

                    {{-- Image --}}
                    @if(!empty($item['urlToImage']))
                        <img src="{{ $item['urlToImage'] }}"
                             alt="news image"
                             class="object-cover w-full h-48">
                    @else
                        <div class="flex items-center justify-center h-48 text-gray-500 bg-gray-200">
                            No Image Available
                        </div>
                    @endif

                    {{-- Body --}}
                    <div class="p-6">
                        <h2 class="mb-3 text-lg font-semibold text-gray-800 line-clamp-2">
                            {{ $item['title'] }}
                        </h2>

                        <p class="mb-4 text-sm text-gray-600 line-clamp-3">
                            {{ $item['description'] ?? 'Deskripsi tidak tersedia.' }}
                        </p>

                        <div class="flex items-center justify-between text-xs text-gray-500">
                            <span>
                                {{ \Carbon\Carbon::parse($item['publishedAt'])->translatedFormat('d M Y') }}
                            </span>

                            <a href="{{ $item['url'] }}" target="_blank"
                               class="font-semibold text-red-600 hover:underline">
                                Baca Selengkapnya →
                            </a>
                        </div>
                    </div>

                </article>
            @empty
                <p class="text-center text-gray-500 col-span-full">
                    Berita belum tersedia saat ini.
                </p>
            @endforelse
        </div>

    </div>
</section>

@include('master.footer')
@endsection
