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
                Our Teams
            </h1>
        </div>








    </section>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <section class="py-12 bg-white md:py-24" x-data="{
        currentCategory: 'Directors',
        scrollPercent: 0,
        teams: {
            'Directors': [
                { role: 'Commissioner', name: 'Daniel', surname: 'Leonardo', bio: 'Daniel Leonardo brings over 15 years of executive expertise...', image: '{{ asset('padaniel.jpg') }}' },
                { role: 'Director', name: 'Steven', surname: 'Oktavianus', bio: 'Steven leads our operational strategy...', image: '{{ asset('pasteven.jpg') }}' },
                { role: 'General Project Manager', name: 'Nicolas', surname: 'Abraham', bio: 'Michael specializes in market expansion...', image: '{{ asset('panico.jpg') }}' },
                { role: 'Sub Business Unit', name: 'Mulyo', surname: '', bio: 'Michael specializes in market expansion...', image: '{{ asset('pamulyo.jpg') }}' },
            ],
            'HR/GA/Procurement': [],
            'Finance & Accounting': [],
            'Project Control': [
                { role: 'Project Control Payment' }
            ],
            'Document Control': [],
            'Office Boy': []
        },

        getCurrentList() {
            return this.teams[this.currentCategory];
        },

        switchCategory(cat, el) {
            this.currentCategory = cat;

            this.$nextTick(() => {
                this.scrollToTab(el);
                this.updateScroll();
            });
        },

        scrollToTab(el) {
            if (!el) return;

            el.scrollIntoView({
                behavior: 'smooth',
                inline: 'center',
                block: 'nearest'
            });
        },

        updateScroll() {
            const nav = this.$refs.scrollNav;
            const max = nav.scrollWidth - nav.clientWidth;
            this.scrollPercent = max > 0 ? (nav.scrollLeft / max) * 100 : 0;
        }



    }">
        <div class="px-6 mx-auto max-w-7xl">
            <div class="flex flex-col gap-8 md:grid md:grid-cols-12 md:items-start md:gap-10">

                <!-- SIDEBAR -->
                <div class="md:col-span-3 lg:col-span-2 md:sticky md:top-24">
                    <h3 class="hidden md:block mb-4 text-[10px] font-bold tracking-[0.2em] text-gray-400 uppercase">
                        Departments
                    </h3>

                    <div class="relative">
                        <!-- SCROLL INDICATOR -->
                        <div class="absolute top-0 left-0 h-[2px] bg-red-600 transition-all duration-200"
                            :style="`width: ${scrollPercent}%`">
                        </div>

                        <nav x-ref="scrollNav" @scroll="updateScroll()"
                            class="relative flex flex-row px-6 pt-2 -mx-6 overflow-x-auto border-b border-gray-100 flex-nowrap md:mx-0 md:px-0 md:pt-0 md:mb-0 md:flex-col md:overflow-visible md:border-b-0 md:border-l scrollbar-hide overscroll-x-contain touch-pan-x">
                            <template x-for="(list, category) in teams" :key="category">
                                <button @click="switchCategory(category, $el)"
                                    :class="currentCategory === category ?
                                        'text-red-600 font-bold bg-red-50/50 shadow-[inset_0_-2px_0_0_rgba(220,38,38,1)] md:shadow-[inset_2px_0_0_0_rgba(220,38,38,1)]' :
                                        'text-gray-500 md:hover:text-red-600 md:hover:bg-gray-50'"
                                    class="flex-shrink-0 px-5 py-4 text-xs text-left transition-all outline-none whitespace-nowrap"
                                    x-text="category">
                                </button>

                            </template>
                        </nav>
                    </div>
                </div>

                <!-- CONTENT -->
                <div class="md:col-span-9 lg:col-span-10">
                    <div class="grid grid-cols-2 gap-x-4 gap-y-8 md:grid-cols-3 lg:grid-cols-4">

                        <template x-for="(person, index) in getCurrentList()" :key="currentCategory + index">
                            <div class="group">
                                <div class="relative mb-3 overflow-hidden bg-gray-100 rounded-sm shadow-sm aspect-[4/5]">
                                    <img :src="person.image" :alt="person.name"
                                        class="object-cover w-full h-full transition-all duration-500 md:grayscale group-hover:grayscale-0 group-hover:scale-105" />
                                </div>

                                <div>
                                    <h3 class="mb-1 text-[9px] md:text-[10px] font-bold tracking-wider text-red-700 uppercase"
                                        x-text="person.role">
                                    </h3>
                                    <h2 class="mb-1 text-sm leading-tight text-gray-900 md:text-base">
                                        <span class="font-light" x-text="person.name"></span>
                                        <span class="font-bold" x-text="person.surname"></span>
                                    </h2>
                                    <p class="text-[10px] md:text-[11px] leading-relaxed text-gray-500 line-clamp-2 md:line-clamp-3"
                                        x-text="person.bio">
                                    </p>
                                </div>
                            </div>
                        </template>

                    </div>

                    <template x-if="getCurrentList().length === 0">
                        <div
                            class="flex flex-col items-center justify-center py-12 border-2 border-gray-100 border-dashed rounded-lg">
                            <p class="px-4 text-xs italic text-center text-gray-400">
                                No team members recorded for
                                <span class="font-bold" x-text="currentCategory"></span>
                            </p>
                        </div>
                    </template>
                </div>

            </div>
        </div>
    </section>

    <style>
        .scrollbar-hide {
            -webkit-overflow-scrolling: touch;
            scrollbar-width: none;
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }
    </style>


    @include('master.footer')
@endsection
