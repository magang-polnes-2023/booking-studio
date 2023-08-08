<x-app-layout>
    <div id="default-carousel" class="relative w-full h-[30rem]" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-full">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/galeri (1).jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 4 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/fotosatu.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 5 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/fotodua.jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
        </div>
        <!-- Slider indicators -->
        <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
            <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
                data-carousel-slide-to="0"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4"
                data-carousel-slide-to="3"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5"
                data-carousel-slide-to="4"></button>
        </div>
        <!-- Slider controls -->
        <button type="button"
            class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-prev>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M5 1 1 5l4 4" />
                </svg>
                <span class="sr-only">Previous</span>
            </span>
        </button>
        <button type="button"
            class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
            data-carousel-next>
            <span
                class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
        <script src="https://unpkg.com/flowbite@1.4.0/dist/flowbite.js"></script>
    </div>

    {{-- <section class="bg-white dark:bg-gray-900">
        <div class="flex justify-center">
            <img class="object-cover w-full h-96 rounded-xl lg:w-11/12" src="{{ asset('image/galeri (1).jpg') }}" />
        </div>
    </section> --}}

    <!-- ABOUT -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h1
                class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white text-center">
                The Studio
            </h1>

            <div class="flex justify-center mx-auto mt-4">
                <span class="inline-block w-40 h-1 bg-stone-400 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-stone-400 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-stone-400 rounded-full"></span>
            </div>

            <div class="flex items-start max-w-6xl mx-auto mt-9">
                <div>
                    <p class="flex items-center text-center text-gray-500 lg:mx-8">
                        The Studio menawarkan beberapa studio foto dengan konsep yang menarik, memberikan kesempatan
                        untuk
                        mengalami pengalaman kreatif yang menyenangkan dengan harga yang terjangkau pula. Serta
                        memberikan
                        kenyamanan dan privasi bagi Anda.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section class="bg-white dark:bg-gray-900">
        <div class="container flex flex-col items-center px-4 py-3 mx-auto text-center">
            <div class="inline-flex w-full mt-6 sm:w-auto">
                <a href="{{ route('studio') }}"
                    class="inline-flex items-center justify-center w-full px-6 py-2 text-white duration-300 bg-blue-600 rounded-lg hover:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-80">
                    Book Now
                </a>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-10 mx-auto">
            <h2
                class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white text-center">
                How it Works
            </h2>

            <div class="grid gap-8 mt-8 sm:grid-cols-1 lg:grid-cols-1 xl:grid-cols-3 px-7 items-center">
                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-56 mx-auto rounded-lg"
                        src="{{ asset('image/Attached files-cuate.png') }}" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-stone-500 dark:text-stone-500">Booking</h3>
                        <span class="mt-1 font-small text-gray-500 dark:text-gray-200">isi form pemesanan</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-56 mx-auto rounded-lg"
                        src="{{ asset('image/E-Wallet-rafiki (1).png') }}" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-stone-500 dark:text-stone-500">Payment</h3>
                        <span class="mt-1 font-small text-gray-500 dark:text-gray-200">lakukan pembayaran, lalu upload
                            bukti pembayaran pada konfirmasi</span>
                    </div>
                </div>

                <div class="w-full max-w-xs text-center">
                    <img class="object-cover object-center w-full h-56 mx-auto rounded-lg"
                        src="{{ asset('image/Confirmed-rafiki.png') }}" alt="avatar" />

                    <div class="mt-2">
                        <h3 class="text-lg font-medium text-stone-500 dark:text-stone-500">Checked</h3>
                        <span class="mt-1 font-small text-gray-500 dark:text-gray-200">admin akan mengkonfirmasi
                            booking</span>
                    </div>
                </div>
            </div>
        </div>


        <footer class="bg-white rounded-lg shadow dark:bg-gray-900 m-4">
            <div class="w-full max-w-screen-xl mx-auto p-4 md:py-8">
                <div class="sm:flex sm:items-center sm:justify-between">
                    <a href="/" class="flex items-center mb-4 sm:mb-0">
                        <img src="{{ asset('image/camera.jpeg') }}" class="h-8 mr-3" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap dark:text-white">The
                            Studio</span>
                    </a>
                </div>
                <hr class="my-6 border-gray-200 sm:mx-auto dark:border-gray-700 lg:my-8" />
                <span class="block text-sm text-gray-500 sm:text-center dark:text-gray-400">© 2023 <a href="/"
                        class="hover:underline">The Studio™</a>. All Rights Reserved.</span>
            </div>
        </footer>
    </section>
</x-app-layout>
