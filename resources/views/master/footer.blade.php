<footer class="bg-[#7b0000] text-white py-12">
    <div class="grid max-w-6xl grid-cols-1 gap-8 px-6 mx-auto md:grid-cols-3">
        <!-- Logo + About -->
        <div>
            <img src="{{ asset('logokecil.png') }}" alt="Logo" class="w-6 mb-4">
            <p class="text-sm leading-relaxed text-gray-200">
                Delivering innovation in network infrastructure and communication technology to connect people,
                businesses, and the future.
            </p>
        </div>

        <!-- Contact Info -->
        <div>
            <h4 class="mb-3 text-lg font-semibold">Contact</h4>
            <p class="text-sm">Email: <a href="mailto:info@ptdads.com" class="hover:underline">info@ptdads.com</a></p>
            <p class="text-sm">Phone: (022)-2007686, 2020888</p>
            <p class="text-sm">Address: Setrasari Mall Blok B1 No.33 Jln. Prof. Dr. Ir. Sutami, Sukajadi Bandung 40163
            </p>
        </div>

        <!-- Social Links -->
        <div>
            <h4 class="mb-3 text-lg font-semibold">Follow Us</h4>

            <div class="flex flex-col justify-start gap-4">

                <!-- LinkedIn -->
                <a href="https://www.linkedin.com/company/pt-duta-anugrah-damai-sejahtera/posts/?feedView=all"
                    class="flex items-center gap-2 hover:text-gray-300">
                    <img src="{{ asset('linkedin.png') }}" class="h-5" alt="LinkedIn">
                    <span class = 'text-sm'>PT. Duta Anugrah Damai Sejahtera</span>
                </a>

                <!-- Instagram -->
                <a href="https://www.instagram.com/ptdads/" class="flex items-center gap-2 hover:text-gray-300">
                    <img src = "{{ asset('instagram.png') }}" class ='h-5' alt='Instagram Link'>
                    <span class = 'text-sm'>ptdads</span>
                </a>

                <a href="https://wa.me/+6282325256266" class="flex items-center gap-2 hover:text-gray-300">
                    <img src = "{{ asset('telephone.png') }}" class ='h-5' alt='Instagram Link'>
                    <span class = 'text-sm'>+6282325256266</span>
                </a>

                <a href="https://www.instagram.com/ptdads/" class="flex items-center gap-2 hover:text-gray-300">
                    <img src = "{{ asset('email.png') }}" class ='h-5' alt='Instagram Link'>
                    <span class = 'text-sm'>info@ptdads.com</span>
                </a>

                <a href="https://maps.app.goo.gl/FTi1NDxsNGCVvLQ17" class="flex items-center gap-2 hover:text-gray-300">
                    <img src = "{{ asset('map.png') }}" class ='h-5' alt='Instagram Link'>
                    <span class = 'text-sm'>Prof. Dr. Surya Sumantri , Komp. Ruko Setrasari Plaza, Blok B1 No. 33,
                        Sukagalih, Kec. Sukajadi, Kota Bandung, Jawa Barat 40163</span>
                </a>



                <!-- Facebook -->
                <a href="#" class="hover:text-gray-300">
                    <i class="text-2xl fab fa-facebook"></i>
                </a>

            </div>
        </div>


        <div class="pt-6 mt-8 text-sm text-center text-gray-300 border-t border-white/20">
            © {{ date('Y') }} PT Dads. All rights reserved.
        </div>
</footer>
