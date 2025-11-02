<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Duta Anugrah Damai Sejahtera</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-sans bg-gray-100" x-data="{ mobileOpen: false }">

  <!-- ✅ Fixed Navbar -->
  <header class="fixed top-0 left-0 w-full z-50 bg-gradient-to-b from-red-900/90 to-transparent ">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-6 py-4 text-white">
      
      <!-- Logo -->
      <div class="flex items-center space-x-2">
        <img src="{{asset('logokecil.png')}}" alt="Logo" class="w-12 h-12">
      </div>

      <!-- Desktop Menu -->
      <nav class="hidden md:flex text-sm font-medium relative items-center space-x-6">
        <a href="#" class="hover:text-red-400">Home</a>
        <a href="#" class="hover:text-red-400">Project</a>

        <!-- Dropdown Our Team -->
        <div x-data="{ open: false }" class="relative">
          <button @click="open = !open" @click.outside="open = false"
                  class="hover:text-red-400 flex items-center gap-1 focus:outline-none">
            Our Team
            <svg xmlns="http://www.w3.org/2000/svg" class="w-4 h-4 mt-0.5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
            </svg>
          </button>

          <div x-show="open" x-transition
               class="absolute left-0 mt-2 bg-white text-gray-800 rounded-md shadow-lg w-44 py-2 z-50"
               style="display: none;">
            <a href="#" class="block px-4 py-2 hover:bg-red-100 hover:text-red-600 transition">Director</a>
            <a href="#" class="block px-4 py-2 hover:bg-red-100 hover:text-red-600 transition">Organization</a>
          </div>
        </div>

        <a href="#" class="hover:text-red-400">News</a>
        <a href="#" class="hover:text-red-400">Awards</a>
        <a href="#" class="hover:text-red-400">Career</a>
        <a href="#" class="hover:text-red-400">Contact</a>
        <a href="#" class="hover:text-red-400">About</a>
      </nav>

      <!-- Mobile Hamburger -->
      <button @click="mobileOpen = true" class="md:hidden focus:outline-none">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
      </button>
    </div>
  </header>
<!-- ✅ Mobile Sidebar Menu -->
<div x-show="mobileOpen" x-transition
     class="fixed inset-0 z-50 flex"
     style="display: none;">
  <!-- Overlay -->
  <div class="flex-1 bg-black/50" @click="mobileOpen = false"></div>

  <!-- Sidebar -->
  <div class="w-64 bg-white text-gray-800 h-full shadow-lg flex flex-col p-6 space-y-4 overflow-y-auto">
    <!-- Close Button -->
    <div class="flex justify-between items-center mb-4">
      <img src="logokecil.png" class="w-10 h-10" alt="Logo">
      <button @click="mobileOpen = false" class="text-gray-500 hover:text-red-500">
        ✕
      </button>
    </div>

    <a href="#" class="block py-2 hover:text-red-600">Home</a>
    <a href="#" class="block py-2 hover:text-red-600">Project</a>

    <!-- Dropdown inside mobile -->
    <div x-data="{ open: false }">
      <button @click="open = !open" class="w-full text-left py-2 flex justify-between items-center hover:text-red-600">
        Our Team
        <svg xmlns="http://www.w3.org/2000/svg" :class="{ 'rotate-180': open }" class="w-4 h-4 transform transition-transform" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
        </svg>
      </button>
      <div x-show="open" x-transition class="ml-4 border-l border-gray-200 pl-3 space-y-2">
        <a href="#" class="block py-1 text-sm hover:text-red-600">Director</a>
        <a href="#" class="block py-1 text-sm hover:text-red-600">Organization</a>
      </div>
    </div>

    <a href="#" class="block py-2 hover:text-red-600">News</a>
    <a href="#" class="block py-2 hover:text-red-600">Awards</a>
    <a href="#" class="block py-2 hover:text-red-600">Career</a>
    <a href="#" class="block py-2 hover:text-red-600">Contact</a>
    <a href="#" class="block py-2 hover:text-red-600">About</a>
  </div>
</div>


  <!-- ✅ Hero Section (with scroll padding for fixed navbar) -->
  <section 
    class="relative h-screen w-full flex items-center justify-center bg-cover bg-center pt-24" 
    style="background-image: url('bg.png');"
  >
    <!-- Red Overlay -->
    <div class="absolute inset-0 bg-gradient-to-b from-red-900/70 to-black/60"></div>

    <!-- Hero Content -->
    <div class="relative text-center text-white px-6">
      <h1 class="text-3xl md:text-5xl font-extrabold mb-3 drop-shadow-lg">
        DUTA ANUGRAH DAMAI SEJAHTERA
      </h1>
      <p class="text-sm md:text-base text-red-400 mb-8">
        To Become Trusted Company to Provide Prosperous Life
      </p>
      <button class="border border-red-500 text-red-400 px-6 py-2 rounded-md hover:bg-red-500 hover:text-white transition">
        Explore
      </button>
      <p class="mt-4 italic text-blue-300">Est. 2011</p>
    </div>
  </section>

  <!-- Dummy content to show scroll behavior -->
<!-- What We Do Section --><section class="bg-white py-16 px-6 md:px-16 h-auto md:h-[40rem] flex items-center">
  <div class="max-w-6xl mx-auto">
    <!-- Section Title -->
    <h2 class="text-red-600 text-sm font-semibold uppercase mb-2">What We Do</h2>
    <div class="border-b-2 border-blue-900 w-16 mb-6"></div>

    <!-- Content Grid -->
    <div class="grid md:grid-cols-2 gap-10 items-center">
      <!-- Text Content -->
      <div>
        <h3 class="text-3xl font-extrabold text-gray-900 mb-4">PT.DADS</h3>
        <p class="text-gray-700 leading-relaxed mb-6 text-sm md:text-base">
          Engaged in the procurement and development of telecommunications infrastructure, 
          with a primary focus on optical cable networks. Its activities include both 
          construction and service operations, as well as the supply of materials essential 
          to communication network systems.
        </p>
        <a href="#" 
           class="inline-block bg-blue-900 text-white text-sm px-5 py-2 rounded-md hover:bg-blue-700 transition">
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

    <div class="absolute inset-0 bg-black/60 flex items-center justify-center">
      <div class="grid grid-cols-3 md:grid-cols-3 gap-6 text-center text-white px-6 py-8 md:py-16 w-full max-w-6xl">
        
        <div class="flex flex-col items-center">
          <div class="bg-red-600/80 p-3 rounded-full mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-2 h-2 md:w-10 md:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M17 20h5v-2a4 4 0 00-3-3.87V12a7 7 0 10-14 0v2.13A4 4 0 002 18v2h5" />
            </svg>
          </div>
          <h4 class="text-[8px]  md:text-lg font-bold">Clients</h4>
          <p class="text-red-400 text-xl md:text-3xl font-extrabold mt-1">100</p>
        </div>

        <div class="flex flex-col items-center">
          <div class="bg-red-600/80 p-3 rounded-full mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-2 h-2 md:w-10 md:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M16 11c1.104 0 2-.896 2-2s-.896-2-2-2-2 .896-2 2 .896 2 2 2zM8 11c1.104 0 2-.896 2-2S9.104 7 8 7 6 7.896 6 9s.896 2 2 2zm8 2c-2.21 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4zm-8 0c-2.21 0-4 1.79-4 4v2h8v-2c0-2.21-1.79-4-4-4z" />
            </svg>
          </div>
          <h4 class="text-[8px] md:text-lg font-bold">Employees</h4>
          <p class="text-red-400 text-xl md:text-3xl font-extrabold mt-1">300</p>
        </div>

        <div class="flex flex-col items-center">
          <div class="bg-red-600/80 p-3 rounded-full mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" 
                 class="w-2 h-2 md:w-10 md:h-10" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M13 10V3L4 14h7v7l9-11h-7z" />
            </svg>
          </div>
          <h4 class="text-[8px] md:text-lg font-bold text-center px-3">Infrastructure Completion</h4>
          <p class="text-red-400 text-xl md:text-3xl font-extrabold mt-1">10,000</p>
        </div>
      </div>
    </div>
  </div>
</section>


<!-- Our Clients Section -->
<section class="bg-gray-100 py-16 overflow-hidden">
  <div class="max-w-6xl mx-auto text-center px-6">
    <!-- Section Button -->
    <div class="flex justify-center mb-6">
      <button class="bg-red-600 text-white text-sm font-semibold px-6 py-2 rounded-full shadow-md">
        Our Clients
      </button>
    </div>

    <!-- Description -->
    <p class="text-gray-700 max-w-3xl mx-auto leading-relaxed mb-10">
      Over the years, we have built strong partnerships with many leading companies who trust our
      expertise and commitment to excellence in every project we deliver.
    </p>

    <!-- Rolling Logos -->
    <div class="scrollContainer">
      <div class="scrollWrapper">
        <!-- Logo Items -->
        <div class="bg-white shadow-md rounded-xl p-4 flex justify-center items-center w-40 h-24 flex-shrink-0">
          <img src="{{ asset('starlite.png') }}" alt="Starlite" class="h-12 md:h-16 object-contain">
        </div>
        <div class="bg-white shadow-md rounded-xl p-4 flex justify-center items-center w-40 h-24 flex-shrink-0">
          <img src="{{ asset('fiberstar.png') }}" alt="FiberStar" class="h-12 md:h-16 object-contain">
        </div>
        <div class="bg-white shadow-md rounded-xl p-4 flex justify-center items-center w-40 h-24 flex-shrink-0">
          <img src="{{ asset('asianet.jpg') }}" alt="Asianet" class="h-12 md:h-16 object-contain">
        </div>
        <div class="bg-white shadow-md rounded-xl p-4 flex justify-center items-center w-40 h-24 flex-shrink-0">
          <img src="{{ asset('yofc.png') }}" alt="YOFC 1" class="h-12 md:h-16 object-contain">
        </div>
        <div class="bg-white shadow-md rounded-xl p-4 flex justify-center items-center w-40 h-24 flex-shrink-0">
          <img src="{{ asset('tea.jpeg') }}" alt="YOFC 2" class="h-12 md:h-16 object-contain">
        </div>

        <div class="bg-white shadow-md rounded-xl p-4 flex justify-center items-center w-40 h-24 flex-shrink-0">
          <img src="{{ asset('moratel.png') }}" alt="YOFC 2" class="h-12 md:h-16 object-contain">
        </div>


        </div>

      </div>
    </div>
  </div>
</section>

<!-- Add Styles -->
<style>
.scrollContainer {
  max-width: 1200px;
  margin: 0 auto;
  overflow: hidden;
  -webkit-mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
  mask: linear-gradient(90deg, transparent, white 20%, white 80%, transparent);
}

.scrollWrapper {
  display: flex;
  gap: 2rem;
  width: max-content;
  animation: scrollAnim 20s linear infinite;
}

/* Smooth hover pause */
.scrollContainer:hover .scrollWrapper {
  animation-play-state: paused;
}

/* Animation logic */
@keyframes scrollAnim {
  to {
    transform: translateX(calc(-50% - 1rem));
  }
}
</style>

<!-- Add JS -->
<script>
document.addEventListener("DOMContentLoaded", () => {
  const scrollWrapper = document.querySelector('.scrollWrapper');
  const items = [...scrollWrapper.children];

  // Clone each item once to create the continuous scroll illusion
  items.forEach((item) => {
    const clonedItem = item.cloneNode(true);
    scrollWrapper.appendChild(clonedItem);
  });
});
</script>


<!-- 🌟 Project Showcase Section -->
<section class="relative w-full h-[480px] md:h-[560px] overflow-hidden">
  <img src="{{ asset('ftpro.jpeg') }}" 
       alt="Project Showcase"
       class="absolute inset-0 w-full h-full object-cover">
  
  <!-- Dark Overlay -->
  <div class="absolute inset-0 bg-black/60"></div>

  <!-- Showcase Content -->
  <div class="relative z-10 h-full flex flex-col justify-center items-start px-8 md:px-16 text-white">
    <p class="text-sm uppercase tracking-widest mb-2 text-gray-300">Featured</p>
    <h1 class="text-3xl md:text-5xl font-bold leading-tight mb-3">Project Service Showcase</h1>
    <p class="text-sm md:text-base mb-4">11 Mar 2024 · Splice Service</p>
    <a href="#projects" class="text-red-400 font-semibold hover:text-red-500 transition">
      See more projects →
    </a>

    <!-- Arrows -->
    <div class="absolute right-8 bottom-10 flex gap-3">
      <button class="w-10 h-10 bg-white/10 border border-white/30 rounded-full flex items-center justify-center hover:bg-white/20 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
        </svg>
      </button>
      <button class="w-10 h-10 bg-white/10 border border-white/30 rounded-full flex items-center justify-center hover:bg-white/20 transition">
        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
        </svg>
      </button>
    </div>
  </div>
</section>

<!-- 📰 Latest News Section -->
<section class="py-16 bg-white">
  <div class="max-w-6xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-10 text-gray-900">Latest News</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">
      <!-- Card -->
      <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300">
        <img src="{{ asset('opticakl.jpg') }}" alt="Fiber" class="w-full h-48 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold mb-2">What is Fiber Optic?</h3>
          <p class="text-gray-600 text-sm mb-3">Discover how fiber optics revolutionize data transfer.</p>
          <a href="#" class="inline-block text-blue-700 font-semibold hover:underline">Read More</a>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300">
        <img src="{{ asset('pole.jpg') }}" alt="Pole" class="w-full h-48 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold mb-2">What is Pole?</h3>
          <p class="text-gray-600 text-sm mb-3">Understand how utility poles support communication lines.</p>
          <a href="#" class="inline-block text-blue-700 font-semibold hover:underline">Read More</a>
        </div>
      </div>

      <div class="bg-white shadow-lg rounded-xl overflow-hidden hover:-translate-y-2 transition-transform duration-300">
        <img src="{{ asset('fat.jpg') }}" alt="Optic Box" class="w-full h-48 object-cover">
        <div class="p-5">
          <h3 class="text-lg font-semibold mb-2">What is Fiber Optic Box?</h3>
          <p class="text-gray-600 text-sm mb-3">Learn how optic boxes organize and protect cable systems.</p>
          <a href="#" class="inline-block text-blue-700 font-semibold hover:underline">Read More</a>
        </div>
      </div>
    </div>

    <div class="text-center mt-10">
      <a href="#" class="px-6 py-2 bg-blue-700 text-white rounded-full font-medium hover:bg-blue-800 transition">
        See More
      </a>
    </div>
  </div>
</section>

<!-- 🔻 Footer Section -->
<footer class="bg-[#7b0000] text-white py-12">
  <div class="max-w-6xl mx-auto px-6 grid grid-cols-1 md:grid-cols-3 gap-8">
    <!-- Logo + About -->
    <div>
      <img src="{{ asset('logokecil.png') }}" alt="Logo" class="w-6 mb-4">
      <p class="text-sm leading-relaxed text-gray-200">
        Delivering innovation in network infrastructure and communication technology to connect people, businesses, and the future.
      </p>
    </div>

    <!-- Contact Info -->
    <div>
      <h4 class="font-semibold text-lg mb-3">Contact</h4>
      <p class="text-sm">Email: <a href="mailto:info@ptdads.com" class="hover:underline">info@ptdads.com</a></p>
      <p class="text-sm">Phone: (022)-2007686, 2020888</p>
      <p class="text-sm">Address: Setrasari Mall Blok B1 No.33 Jln. Prof. Dr. Ir. Sutami, Sukajadi Bandung 40163</p>
    </div>

    <!-- Social Links -->
    <div>
      <h4 class="font-semibold text-lg mb-3">Follow Us</h4>
      <div class="flex gap-4">
        <a href="#" class="hover:text-gray-300"><i class="fab fa-linkedin text-2xl"></i></a>
        <a href="#" class="hover:text-gray-300"><i class="fab fa-instagram text-2xl"></i></a>
        <a href="#" class="hover:text-gray-300"><i class="fab fa-facebook text-2xl"></i></a>
      </div>
    </div>
  </div>

  <div class="border-t border-white/20 mt-8 pt-6 text-center text-sm text-gray-300">
    © {{ date('Y') }} PT Dads. All rights reserved.
  </div>
</footer>




</body>
</html>
