@extends('master.layout')
@section('title', 'Directors | PT Duta Anugrah')
@section('content')
    @include('master.navbar')


    <section class="relative flex items-center justify-center w-full h-[35vh] pt-24 bg-center bg-cover"
        style="background-image: url('bg.png');">

        <!-- Red Overlay -->
        <div class="absolute inset-0 bg-gradient-to-b from-red-900/70 to-black/60"></div>

        <!-- Hero Content -->
        <div class="relative px-6 text-center text-white">
            <h1 class="mb-3 text-3xl font-extrabold md:text-5xl drop-shadow-lg ">
                Organization
            </h1>
        </div>

    </section>


    @include('master.footer')
@endsection
