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
                Directors
            </h1>
        </div>








    </section>

<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

<section
  class="py-24 bg-white"
  x-data="{
    active: 0,
    directors: [
      {
        role: 'Commisioner',
        name: 'Daniel',
        surname: 'Leonardo',
        title: '',
        bio: 'Daniel Leonardo brings over 15 years of executive expertise in business development and strategic foresight. Since joining the board, he has been instrumental in driving the company’s vision toward global sustainability and operational excellence.',
        image: '{{ asset('padaniel.jpg') }}'
      },
      {
        role: 'Director',
        name: 'Steven ',
        surname: 'Oktavianus',
        title: ' ',
        bio: 'Sarah leads our operational strategy with a focus on digital transformation and lean management. Her career spans two decades of building high-performing teams across Southeast Asia.',
        image: '{{ asset('pasteven.jpg') }}'
      },
      {
        role: 'General Project Manager',
        name: 'Nicolas',
        surname: 'Abraham',
        title: '',
        bio: 'Michael specializes in market expansion and venture capital relations. He ensures that our long-term objectives align with emerging global trends and shareholder value.',
        image: '{{ asset('panico.jpg') }}'
      },
       {
        role: 'Sub Bussines Unit',
        name: 'Mulyo',
        surname: '',
        title: '',
        bio: 'Michael specializes in market expansion and venture capital relations. He ensures that our long-term objectives align with emerging global trends and shareholder value.',
        image: '{{ asset('pamulyo.jpg') }}'
      },
    ]
  }"
>
  <div class="max-w-6xl px-10 mx-auto">
    <div class="grid items-center gap-16 md:grid-cols-12">

      <div class="md:col-span-5 lg:col-span-4">
        <div class="relative overflow-hidden rounded-sm shadow-2xl aspect-[4/5] bg-gray-100">
            <template x-for="(director, index) in directors" :key="index">
                <img
                  x-show="active === index"
                  x-transition:enter="transition ease-out duration-700"
                  x-transition:enter-start="opacity-0 scale-105"
                  x-transition:enter-end="opacity-100 scale-100"
                  x-transition:leave="transition ease-in duration-300"
                  x-transition:leave-start="opacity-100"
                  x-transition:leave-end="opacity-0"
                  :src="director.image"
                  :alt="director.name"
                  class="absolute inset-0 object-cover w-full h-full transition-all duration-700 grayscale hover:grayscale-0"
                />
            </template>
        </div>
      </div>

      <div class="md:col-span-7 lg:col-span-8">
        <h3 class="mb-3 text-xs font-bold tracking-[0.3em] text-red-700 uppercase"
            x-text="directors[active].role">
        </h3>

        <h2 class="mb-4 text-5xl font-light tracking-tight text-gray-900">
          <span x-text="directors[active].name"></span>
          <span class="font-bold" x-text="directors[active].surname"></span>
        </h2>

        <p class="mb-8 text-xl italic font-light text-gray-400"
           x-text="directors[active].title">
        </p>

        <div class="relative overflow-hidden">
             <p class="mb-10 text-lg leading-loose text-gray-600 min-h-[160px] md:min-h-[120px]"
                x-text="directors[active].bio">
             </p>
        </div>

        <div class="flex items-center gap-10 pt-8 border-t border-gray-100">
          <div class="flex gap-4">
            <button
                @click="active = (active === 0) ? directors.length - 1 : active - 1"
                class="flex items-center justify-center w-12 h-12 transition-all border border-gray-200 rounded-full hover:border-red-600 hover:text-red-600 active:scale-90"
                aria-label="Previous Profile"
            >
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>

            <button
                @click="active = (active === directors.length - 1) ? 0 : active + 1"
                class="flex items-center justify-center w-12 h-12 transition-all border border-gray-200 rounded-full hover:border-red-600 hover:text-red-600 active:scale-90"
                aria-label="Next Profile"
            >
              <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>

          <div class="text-sm font-semibold tracking-widest text-gray-300">
            <span class="text-gray-900" x-text="'0' + (active + 1)"></span>
            <span class="mx-2">/</span>
            <span x-text="'0' + directors.length"></span>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="py-6">
  <a
    href="{{ route('organization') }}"
    class="flex items-center justify-center gap-2 font-semibold text-red-600 transition-all duration-300 hover:text-red-800"
  >
    See More Our Organization
    <span class="transition-transform duration-300 group-hover:translate-x-1">→</span>
  </a>
</section>




    @include('master.footer')
@endsection
