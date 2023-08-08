<x-app-layout>

    <a
        class="block max-width p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                <thead
                    class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400 text-center whitespace-no-wrap">
                    <tr>
                        <th scope="col" class="px-4 py-3 border border-gray-200">
                            No
                        </th>
                        <th scope="col" class="px-3 py-3 border border-gray-200">
                            Nama Studio
                        </th>
                        <th scope="col" class="px-7 py-3 border border-gray-200">
                            Nama
                        </th>
                        <th scope="col" class="px-4 py-3 border border-gray-200">
                            Tanggal
                        </th>
                        <th scope="col" class="px-4 py-3 border border-gray-200">
                            Total Harga
                        </th>
                        <th scope="col" class="px-4 py-3 border border-gray-200">
                            Bukti Bayar
                        </th>
                        <th scope="col" class="px-8 py-3 border border-gray-200">
                            Status
                        </th>
                        <th scope="col" class="px-4 py-3 border border-gray-200">
                            Action
                        </th>
                        <th scope="col" class="px-4 py-3 border border-gray-200">
                            Cancel
                        </th>
                    </tr>
                </thead>
                @if ($booking->count() > 0)
                    @foreach ($booking as $item)
                        <tbody>
                            <tr
                                class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 whitespace-no-wrap text-center">
                                <th scope="row"
                                    class="px-4 py-3 font-medium text-gray-900 whitespace-nowrap dark:text-white border border-gray-200">
                                    {{ $loop->iteration }}
                                </th>
                                <td class="px-1 py-3 border border-gray-200">
                                    {{ $item->studio->nama_studio }}
                                </td>
                                <td class="px-7 py-3 border border-gray-200">
                                    {{ $item->user->name }}
                                </td>
                                <td class="px-4 py-3 border border-gray-200">
                                    {{ $item->tanggal }}
                                </td>
                                <td class="px-4 py-3 border border-gray-200">
                                    {{ $item->total }}
                                </td>
                                <td class="px-1 py-3 border border-gray-200">
                                    <!-- File Upload Form -->
                                    @if ($item->bukti_pembayaran)
                                        <!-- Tampilkan gambar payment jika ada -->
                                        <img src="{{ asset('storage/' . $item->bukti_pembayaran) }}" width="50"
                                            height="50" class="mx-auto">
                                    @else
                                        @if ($item->status == 'Canceled')
                                        @else
                                            <form action="{{ route('order', ['id' => $item->id]) }}" method="post"
                                                enctype="multipart/form-data">
                                                @csrf
                                                @method('PUT')

                                                <div class="flex flex-col gap-1 justify-center items-center">
                                                    <div class="mb-4">
                                                        <input type="file" name="bukti_pembayaran"
                                                            id="bukti_pembayaran" class="rounded-md p-2 w-26" required>
                                                        @error('bukti')
                                                            <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                    <div>
                                                        <button type="submit"
                                                            class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-1 px-4 rounded">
                                                            Save
                                                        </button>
                                                    </div>
                                                </div>
                                                @if ($errors->any())
                                                    <div class="mt-4 bg-red-200 text-red-700 p-2 rounded">
                                                        <ul>
                                                            @foreach ($errors->all() as $error)
                                                                <li>{{ $error }}</li>
                                                            @endforeach
                                                        </ul>
                                                    </div>
                                                @endif
                                            </form>
                                        @endif
                                    @endif
                                </td>
                                </td>
                                <td class="px-5 py-3 border border-gray-200">
                                    {{ $item->status }}
                                </td>
                                <td class="px-7 py-3 border border-gray-200">
                                    <div x-data="{ isOpen: false }" class="flex justify-center items-center">
                                        <button @click="isOpen = true"
                                            class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                            Bayar
                                        </button>

                                        <div x-show="isOpen" x-transition:enter="transition duration-300 ease-out"
                                            x-transition:enter-start="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                            x-transition:enter-end="translate-y-0 opacity-100 sm:scale-100"
                                            x-transition:leave="transition duration-150 ease-in"
                                            x-transition:leave-start="translate-y-0 opacity-100 sm:scale-100"
                                            x-transition:leave-end="translate-y-4 opacity-0 sm:translate-y-0 sm:scale-95"
                                            class="fixed inset-0 z-10 overflow-y-auto" aria-labelledby="modal-title"
                                            role="dialog" aria-modal="true">
                                            <div
                                                class="flex items-end justify-center min-h-screen px-4 pt-4 pb-20 text-center sm:block sm:p-0">
                                                <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                    aria-hidden="true">&#8203;</span>

                                                <div
                                                    class="relative inline-block p-4 overflow-hidden text-left align-middle transition-all transform bg-white shadow-xl sm:max-w-xl rounded-xl dark:bg-gray-900 sm:my-8 sm:w-full sm:p-6">

                                                    <div class="mt-5 text-center">
                                                        <h3 class="text-lg font-medium text-gray-800 dark:text-white"
                                                            id="modal-title">
                                                            Order Detail
                                                        </h3>
                                                    </div>

                                                    <div class="mt-5 text-center">
                                                        <h6 class="text-md text-gray-500 dark:text-white">
                                                            Ini adalah detail pesanan Anda, harap segera bayar
                                                            tagihannya dan kami
                                                            akan segera mengkonfirmasi pesanan anda. Terima kasih atas
                                                            kepercayaannya

                                                        </h6>
                                                    </div>

                                                    <div class="grid py-8 grid-cols-2 gap-4">
                                                        <div>
                                                            <label for="small-input"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama</label>
                                                            <input type="text" id="name"
                                                                value="{{ $item->user->name }}" readonly
                                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>

                                                        <div>
                                                            <label for="small-input"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Pilihan
                                                                Studio</label>
                                                            <input type="text" id="studio_id"
                                                                value="{{ $item->studio->nama_studio }}" readonly
                                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>

                                                        <div>
                                                            <label for="small-input"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Tanggal</label>
                                                            <input type="text" id="tanggal"
                                                                value="{{ $item->tanggal }}" readonly
                                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>

                                                        <div>
                                                            <label for="small-input"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam
                                                                Mulai</label>
                                                            <input type="text" id="start"
                                                                value="{{ $item->start }}" readonly
                                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>

                                                        <div>
                                                            <label for="small-input"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Jam
                                                                Selesai</label>
                                                            <input type="text" id="finish"
                                                                value="{{ $item->finish }}" readonly
                                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>

                                                        <div>
                                                            <label for="small-input"
                                                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Total
                                                                bayar
                                                            </label>
                                                            <input type="text" id="total"
                                                                value="{{ $item->total }}" readonly
                                                                class="block w-full p-2 text-gray-900 border border-gray-300 rounded-lg bg-gray-50 sm:text-xs focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        </div>

                                                    </div>

                                                    <div class="mt-2 text-justify">
                                                        <h6 class="text-md text-gray-500 dark:text-white">
                                                            Anda dapat membayar dengan memindai barcode ini:
                                                        </h6>
                                                    </div>

                                                    <div class="flex items-center justify-center mx-auto">
                                                        <img class="h-full rounded-lg w-60"
                                                            src="{{ asset('image/dana.jpg') }}" />
                                                    </div>

                                                    <div
                                                        class="mt-4 sm:flex sm:items-center sm:justify-between sm:mt-6 sm:-mx-2">
                                                        <button @click="isOpen = false"
                                                            class="px-4 sm:mx-2 w-full py-2.5 text-sm font-medium dark:text-gray-200 dark:border-blue-700 dark:hover:bg-blue-700 tracking-wide text-white capitalize transition-colors duration-300 transform bg-blue-700 border border-blue-200 rounded-md hover:bg-blue-100 focus:outline-none focus:ring focus:ring-gray-300 focus:ring-opacity-40">
                                                            Oke
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                @if ($item->status == 'Belum Dibayar')
                                    <td class="px-6 py-1 border border-gray-200">
                                        <form action="{{ route('konfirmasi.cancel', ['id' => $item->id]) }}"
                                            method="post">
                                            @csrf
                                            <div x-data="{ isOpen: false }" class="flex justify-center items-center">
                                                <button @click="isOpen=true"
                                                    class="font-medium text-blue-600 dark:text-blue-500 hover:underline">
                                                    Cancel
                                                </button>
                                            </div>
                                        </form>
                                    </td>
                                @else
                                @endif
                            </tr>
                        </tbody>
                    @endforeach
                @else
                    <tr>
                        <td class="text-center" colspan="10">Tidak Ada Data</td>
                    </tr>
                @endif
            </table>
        </div>
    </a>
</x-app-layout>
