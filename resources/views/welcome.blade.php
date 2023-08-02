<x-app-layout>
    <div id="default-carousel" class="relative w-full h-[30rem]" data-carousel="slide">
        <!-- Carousel wrapper -->
        <div class="relative h-56 overflow-hidden rounded-lg md:h-full">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/galeri (1).jpg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 2 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/Studio Schanz by Gerdesmeyer Krohn.jpeg') }}"
                    class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="...">
            </div>
            <!-- Item 3 -->
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="{{ asset('image/galeri (2).jpg') }}"
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
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
                data-carousel-slide-to="1"></button>
            <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
                data-carousel-slide-to="2"></button>
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

    {{-- <div class="container px-11 py-1 mx-auto">
        <img src="{{ asset('image/fotosatu.jpg') }}" class="d-block w-screen" alt="">
    </div> --}}
    <!-- END -->
    {{-- <header class="bg-white dark:bg-gray-900">
        <div class="container px-11 py-1 mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg">
                        <h1 class="text-3xl font-semibold text-gray-800 dark:text-white lg:text-xl"> Mengapa
                            memilih <span class="text-stone-400 ">Kami ?</span></h1>

                        <p class="subpixel-antialiased mt-3 text-gray-600 dark:text-gray-400">Lorem ipsum dolor sit
                            amet, consectetur
                            adipisicing elit. Porro beatae error laborum ab amet sunt recusandae? Reiciendis natus
                            perspiciatis optio.</p>

                        <button
                            class="w-full px-5 py-2 mt-6 text-sm tracking-wider text-white uppercase transition-colors duration-300 transform bg-blue-600 rounded-lg lg:w-auto hover:bg-blue-500 focus:outline-none focus:bg-blue-500">Shop
                            Now</button>
                    </div>
                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                    <img class="w-96 h-full lg:max-w-2xl" src="{{ asset('image/Questions-pana.png') }}" alt="#">
                </div>
            </div>
        </div>
    </header> --}}

    <!-- ABOUT -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-12 mx-auto">
            <h1
                class="max-w-2xl mx-auto text-2xl font-semibold tracking-tight text-gray-800 xl:text-3xl dark:text-white text-center">
                About
            </h1>

            <div class="flex justify-center mx-auto mt-4">
                <span class="inline-block w-40 h-1 bg-stone-400 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-stone-400 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-stone-400 rounded-full"></span>
            </div>

            <div class="flex items-start max-w-6xl mx-auto mt-9">
                <div>
                    <p class="flex items-center text-center text-gray-500 lg:mx-8">
                        Kami berdedikasi untuk mengabadikan momen berharga dalam hidup Anda dengan sentuhan kreatif dan
                        unik
                        gaya.
                        Kami memahami betapa pentingnya foto yang indah dan berkualitas untuk menceritakan kisah Anda,
                        mengabadikannya
                        kenangan tak terlupakan, dan menghadirkan keajaiban di setiap momen.
                        Di studio foto ini Anda bisa bereksperimen dimana kreativitas bisa berjalan bebas. Kami bahagia
                        menyajikan yang baru
                        ide dan konsep segar di setiap sesi foto,
                        sehingga menghasilkan gambar yang unik dan berbeda dari yang lain.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- END -->

    <section class="bg-white dark:bg-gray-900">
        <div class="container px-11 py-5 mx-auto">
            <div class="text-center">
                <h1 class="text-2xl font-semibold text-gray-800 lg:text-3xl dark:text-white"> Blog
                </h1>

                <div class="flex justify-center mx-auto mt-4">
                    <span class="inline-block w-40 h-1 bg-stone-400 rounded-full"></span>
                    <span class="inline-block w-3 h-1 mx-1 bg-stone-400 rounded-full"></span>
                    <span class="inline-block w-1 h-1 bg-stone-400 rounded-full"></span>
                </div>

            </div>

            <div class="grid grid-cols-1 gap-9 mt-8 lg:grid-cols-2">
                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="{{ asset('image/trencewekkue.jpg') }}"alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            Cewek Kue, Tren Fashion Colour Blocking ala TikTok
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm text-justify">
                            Istilah cewe kue saat ini tengah menjadi tren di kalangan pecinta fashion.
                            Dalam dunia fashion, mengenakan busana warna terang dan bertabrakan disebut dengan color
                            blocking. Gaya busana ini akan membantu penggunanya untuk tetap terlihat modis dan
                            memberikan kesan cheerful. Warna-warna yang biasa digunakan untuk gaya busana ini adalah
                            kuning cerah, shocking pink, electric blue, hijau neon, ungu, dan oranye.
                        </p>


                        <p class="mt-3 text-sm text-blue-500">17 Juni 2023</p>
                    </div>
                </div>

                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="{{ asset('image/Sagegreen.jpg') }}" alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            Warna Sage Green, Jadi Tren di Lebaran 2023
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm text-justify">
                            Warna Sage merupakan singkatan dari kata a shade of green yang tengah trending.
                            Jika dilihat dari namanya yakni sage green, warna sage green sudah pasti merupakan warna
                            hijau.Namun sage green adalah warna hijau muted yang menciptakan nuansa damai jika dipandang
                            oleh mata. Baju dengan warna Sage ini cocok untuk dikenakan saat hangout bersama dengan
                            teman-teman ataupun untuk sehari-hari dikenakan
                            bekerja.
                        </p>

                        <p class="mt-3 text-sm text-blue-500">23 April 2023</p>
                    </div>
                </div>

                <div>
                    <img class="relative z-10 object-cover w-full rounded-md h-96"
                        src="{{ asset('image/duadua.jpg') }}" alt="">

                    <div class="relative z-20 max-w-lg p-6 mx-auto -mt-20 bg-white rounded-md shadow dark:bg-gray-900">
                        <a class="font-semibold text-gray-800 hover:underline dark:text-white md:text-xl">
                            Self Photo Studio, Konsep Foto Unik ala Korea yang Digandrungi Kalangan Muda
                        </a>

                        <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm text-justify">
                            Self photo studio saat ini sedang digandrungi anak muda. seperti studio pada umumnya, di
                            ruangan studio disediakan beragam background.
                            bedanya, di self studio sudah tertata rapi kamera diatas tripod dan lampu studio yang
                            menyorot menghadap background.
                            Tak hanya itu, ada pula layar kecil untuk melihat pose hasil tangkapan kamera.
                        </p>

                        <p class="mt-3 text-sm text-blue-500">16 Agustus 2022</p>
                    </div>
                </div>


            </div>
        </div>
    </section>
</x-app-layout>
