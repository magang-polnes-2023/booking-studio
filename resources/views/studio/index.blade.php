<x-app-layout>
    <!-- STUDIO -->
    <section class="bg-white dark:bg-gray-900">
        <div class="container px-6 py-5 mx-auto">
            <h1 class="text-2xl font-semibold text-gray-800 capitalize lg:text-3xl dark:text-white text-center">Studio
            </h1>

            <div class="flex justify-center mx-auto mt-4">
                <span class="inline-block w-40 h-1 bg-stone-400 rounded-full"></span>
                <span class="inline-block w-3 h-1 mx-1 bg-stone-400 rounded-full"></span>
                <span class="inline-block w-1 h-1 bg-stone-400 rounded-full"></span>
            </div>

            <div class="relative mt-8 lg:-mx-1 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-70 lg:h-80"
                    src="{{ asset('image/cobaja2.jpg') }}"alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">{{ $studio1->nama_studio }}</p>

                    <a class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                        Self Studio: Portraits of You
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        In self photo studio you can freely express various styles with friends, bestfriends or
                        girlfriends.
                    </p>

                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Please read the rules before booking on the <span style="color: blue;">more info</span> page
                    </p>

                    <div class="flex items-center mt-1">
                        <div class="flex justify-between mt-3 item-center">

                            @if (Auth::check())
                                <a href="{{ route('booking', ['id' => $studio1->id]) }}">
                                    <button
                                        class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                        id="bookingBtn">Book Now</button>
                                </a>
                            @else
                                <a onclick="checkIfLoggedIn()"><button
                                        class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                        id="bookingBtn">Book Now</button>
                                </a>
                            @endif
                            <a button
                                class="px-3 py-2 ml-5 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                id="seeMoreBtn" data-popup="popupContainer1">More Info</a>
                        </div>
                    </div>

                </div>

            </div>

            <div class="relative mt-8 lg:-mx-1 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-70 lg:h-80"
                    src="{{ asset('image/fotoangkatan.jpg') }}"alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">{{ $studio2->nama_studio }}</p>

                    <a class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                        Make Memories Together
                    </a>

                    <p class="mt-3 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Here you can capture for special moments with family or others
                    </p>

                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Please read the rules before booking on the <span style="color: blue;">more info</span> page
                    </p>

                    <div class="flex items-center mt-1">
                        <div class="flex justify-between mt-3 item-center">
                            @if (Auth::check())
                                <a href="{{ route('booking', ['id' => $studio2->id]) }}"><button
                                        class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                        id="bookingBtn">Book Now</button>
                                </a>
                            @else
                                <a onclick="checkIfLoggedIn()"><button
                                        class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                        id="bookingBtn">Book Now</button>
                                </a>
                            @endif
                            <a button
                                class="px-3 py-2 ml-5 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                id="seeMoreBtn" data-popup="popupContainer2">More Info</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative mt-8 lg:-mx-1 lg:flex lg:items-center">
                <img class="object-cover w-full lg:mx-6 lg:w-1/2 rounded-xl h-70 lg:h-80"
                    src="{{ asset('image/katalog12.jpg') }}"alt="">

                <div class="mt-6 lg:w-1/2 lg:mt-0 lg:mx-6 ">
                    <p class="text-sm text-blue-500 uppercase">{{ $studio3->nama_studio }}</p>

                    <a class="block mt-4 text-2xl font-semibold text-gray-800 hover:underline dark:text-white">
                        Exploration of Product Beauty in Every Frame
                    </a>

                    <p class="mt-3 text-sm text-stone-500 dark:text-stone-300 md:text-sm">
                        Take your catalog photos here
                    </p>

                    <p class="mt-5 text-sm text-gray-500 dark:text-gray-300 md:text-sm">
                        Please read the rules before booking on the <span style="color: blue;">more info</span> page
                    </p>
                    <div class="flex items-center mt-1">
                        <div class="flex justify-between mt-3 item-center">
                            @if (Auth::check())
                                <a href="{{ route('booking', ['id' => $studio3->id]) }}"><button
                                        class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                        id="bookingBtn">Book Now</button>
                                </a>
                            @else
                                <a onclick="checkIfLoggedIn()"><button
                                        class="px-3 py-2 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                        id="bookingBtn">Book Now</button>
                                </a>
                            @endif

                            <a button
                                class="px-3 py-2 ml-5 text-xs font-bold text-white uppercase transition-colors duration-300 transform bg-gray-800 rounded dark:bg-gray-700 hover:bg-gray-700 dark:hover:bg-gray-600 focus:outline-none focus:bg-gray-700 dark:focus:bg-gray-600"
                                id="seeMoreBtn" data-popup="popupContainer3">More Info</a>
                        </div>
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
    <!-- END -->

    <!-- SEE MORE -->
    <div class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-70 flex justify-center items-center hidden"
        id="popupContainer1">
        <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Isi Card Berita -->
            <div class="mt-2">
                <a class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                    tabindex="0" role="link">Rules !</a>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    <li>Bertanggung jawab atas peralatan dan fasilitas studio selama penyewaan.</li>
                    <li>Kami tidak bertanggung jawab atas kehilangan, pencurian, atau cedera pribadi yang terjadi
                        selama penyewaan. </li>
                    <li>Diharapkan menjaga kebersihan studio selama dan setelah penyewaan. Harap tidak
                        merokok, atau mengonsumsi minuman beralkohol di dalam studio. </li>
                    <li>Kapasitas Maksimum 4 orang, jika melebihi kapasitas maka akan dikenakan <span
                            style="color: red;">additional cost</span> Rp 25.000/orang
                    </li>
                    <li>Tidak dapat membatalkan pesanan jika sudah dibooking</li>
                </p>

                <p class="mt-2 font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">
                    <a> Fasilitas : </a>
                    <li> Free Wifi </li>
                    <li> Full AC </li>
                    <li> Ruang ganti </li>
                </p>

                <p class="mt-2 font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">
                    <a> Harga : Rp 75.000/jam </a>
                </p>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400"></span>
                <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                    tabindex="0" role="button" onclick="closePopup()">Close</a>
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-70 flex justify-center items-center hidden"
        id="popupContainer2">
        <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Isi Card Berita -->
            <div class="mt-2">
                <a class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                    tabindex="0" role="link">Rules !</a>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    <li>Bertanggung jawab atas peralatan dan fasilitas studio selama penyewaan.</li>
                    <li>Kami tidak bertanggung jawab atas kehilangan, pencurian, atau cedera pribadi yang terjadi
                        selama penyewaan. </li>
                    <li>Diharapkan menjaga kebersihan studio selama dan setelah penyewaan. Harap tidak
                        merokok, atau mengonsumsi minuman beralkohol di dalam studio. </li>
                    <li>Kapasitas Maksimum 25 orang, jika melebihi kapasitas maka akan dikenakan <span
                            style="color: red;">additional cost</span> Rp 25.000/orang
                    </li>
                    <li>Tidak dapat membatalkan pesanan jika sudah dibooking</li>
                </p>

                <p class="mt-2 font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">
                    <a> Fasilitas : </a>
                    <li> Free Wifi </li>
                    <li> Full AC </li>
                    <li> Ruang ganti </li>
                </p>

                <p class="mt-2 font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">
                    <a> Harga : Rp 150.000/jam </a>
                </p>
            </div>
            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400"></span>
                <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                    tabindex="0" role="button" onclick="closePopup()">Close</a>
            </div>
        </div>
    </div>

    <div class="fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-70 flex justify-center items-center hidden"
        id="popupContainer3">
        <div class="max-w-2xl px-8 py-4 bg-white rounded-lg shadow-md dark:bg-gray-800">
            <!-- Isi Card Berita -->
            <div class="mt-2">
                <a class="text-xl font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200 hover:underline"
                    tabindex="0" role="link">Rules !</a>
                <p class="mt-2 text-gray-600 dark:text-gray-300">
                    <li>Bertanggung jawab atas peralatan dan fasilitas studio selama penyewaan.</li>
                    <li>Kami tidak bertanggung jawab atas kehilangan, pencurian, atau cedera pribadi yang terjadi
                        selama penyewaan.</li>
                    <li>Diharapkan menjaga kebersihan studio selama dan setelah penyewaan. Harap tidak
                        merokok, atau mengonsumsi minuman beralkohol di dalam studio.</li>
                    <li>Tidak dapat membatalkan pesanan jika sudah dibooking</li>
                </p>

                <p class="mt-2 font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">
                    <a> Fasilitas : </a>
                    <li> Free Wifi </li>
                    <li> Full AC </li>
                    <li> Ruang ganti dan Area bersantai</li>
                    <li> Meja rias dilengkapi dengan kaca</li>
                    <li> Tersedia meja dan kursi</li>
                </p>

                <p class="mt-2 font-bold text-gray-700 dark:text-white hover:text-gray-600 dark:hover:text-gray-200">
                    <a> Harga : Rp 175.000/jam </a>
                </p>
            </div>

            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400"></span>
                <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                    tabindex="0" role="button" onclick="closePopup()">Close</a>
            </div>

        </div>
    </div>
    <!-- END -->

    {{-- <section class="bg-white dark:bg-gray-900"> --}}
    {{-- <div class="container px-11 py-5 mx-auto">
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
        </div> --}}
    {{-- </section> --}}

    <!-- BOTTON BOOKING -->
    <script>
        function checkIfLoggedIn() {
            var userLoggedIn = false;

            if (userLoggedIn) {
                window.location.href = "/register";
            } else {
                var confirmation = confirm("Anda Harus Login Terlebih Dahulu");

                if (confirmation) {
                    window.location.href = "/register";
                } else {}
            }
        }
    </script>

    <!-- END -->

    <!-- BOTTON SEE MORE -->
    <script>
        // Function untuk menampilkan pop-up
        function showPopup(popupId) {
            const popupContainer = document.getElementById(popupId);
            if (popupContainer) {
                popupContainer.classList.remove('hidden');
                document.body.classList.add('popup-open');
            }
        }

        // Function untuk menyembunyikan pop-up
        function hidePopup(popupId) {
            const popupContainer = document.getElementById(popupId);
            if (popupContainer) {
                popupContainer.classList.add('hidden');
                document.body.classList.remove('popup-open');
            }
        }

        // Event listener untuk setiap tombol "See More" untuk menampilkan pop-up yang sesuai
        const seeMoreBtns = document.querySelectorAll("[data-popup]");
        seeMoreBtns.forEach(btn => {
            btn.addEventListener('click', function() {
                const popupId = btn.getAttribute('data-popup');
                hideAllPopups();
                showPopup(popupId);
            });
        });

        // Event listener untuk menutup pop-up saat mengklik area di luar konten pop-up
        window.addEventListener('click', function(event) {
            const popupContainers = document.querySelectorAll(
                ".fixed.top-0.left-0.w-full.h-full.bg-gray-800.bg-opacity-70.flex.justify-center.items-center");
            popupContainers.forEach(container => {
                if (event.target === container) {
                    hidePopup(container.id);
                }
            });
        });

        // Function untuk menyembunyikan semua pop-up
        function hideAllPopups() {
            const popupContainers = document.querySelectorAll(
                ".fixed.top-0.left-0.w-full.h-full.bg-gray-800.bg-opacity-70.flex.justify-center.items-center");
            popupContainers.forEach(container => {
                container.classList.add('hidden');
            });
            document.body.classList.remove('popup-open');
        }

        // Fungsi untuk menutup popup berdasarkan elemen tombol "Close" yang diklik
        function closePopup() {
            hideAllPopups();
        }

        document.addEventListener("DOMContentLoaded", function() {
            const closeButtonElements = document.querySelectorAll("[role='button']");
            closeButtonElements.forEach(function(closeButton) {
                closeButton.addEventListener("click", closePopup);
            });
        });
    </script>

</x-app-layout>
