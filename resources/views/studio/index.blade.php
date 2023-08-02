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
            </div>

            <div class="flex items-center justify-between">
                <span class="text-sm font-light text-gray-600 dark:text-gray-400"></span>
                <a class="px-3 py-1 text-sm font-bold text-gray-100 transition-colors duration-300 transform bg-gray-600 rounded cursor-pointer hover:bg-gray-500"
                    tabindex="0" role="button" onclick="closePopup()">Close</a>
            </div>

        </div>
    </div>
    <!-- END -->


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
