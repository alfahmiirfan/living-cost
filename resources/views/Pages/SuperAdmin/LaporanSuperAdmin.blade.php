{{-- <x-navbar-super-admin>Pengelolaan Keuangan - Pengeluaran</x-navbar-super-admin> --}}
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Laporan Keuangan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Laporan Keuangan" />
        <div class="flex">
            <x-search-super-admin />
            <div class="absolute top-30 right-10 flex justify-between items-center rounded-md"> 
                <div class="">
                    <a href="/Laporan-LihatSuperAdmin">
                        <button type="button" class="px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                            <div class="pr-2">
                                <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M6.42554 9.75V1H22.7021V9.75" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M6.42553 21H3.71277C2.9933 21 2.30329 20.7366 1.79455 20.2678C1.28581 19.7989 1 19.163 1 18.5V12.25C1 11.587 1.28581 10.9511 1.79455 10.4822C2.30329 10.0134 2.9933 9.75 3.71277 9.75H25.4149C26.1344 9.75 26.8244 10.0134 27.3331 10.4822C27.8419 10.9511 28.1277 11.587 28.1277 12.25V18.5C28.1277 19.163 27.8419 19.7989 27.3331 20.2678C26.8244 20.7366 26.1344 21 25.4149 21H22.7021" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M22.7021 16H6.42554V26H22.7021V16Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </div>
                            Lihat & Cetak PDF
                        </button>
                    </a>
                </div>
            </div>
        </div>
        {{-- Table --}}
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-sm text-white uppercase bg-yale-blue dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama Item
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Kategori
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Jumlah
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Harga
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $dummyData = [
                            [
                            'no' => 1,
                            'namaItem' => 'Ayam Kampung',
                            'kategori' => 'Pangan',
                            'jumlah' => 'alfahmiirfan',
                            'harga' => '123456',
                            'tanggal' => '22/05/2024',
                            ],
                            ];
                                ?>
                    <?php foreach ($dummyData as $index => $data): ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            <?=$data['no']?>
                        </th>
                        <td class="px-6 py-2">
                            <?=$data['namaItem']?>
                        </td>
                        <td class="px-6 py-2">
                            <?=$data['kategori']?>
                        </td>
                        <td class="px-6 py-2">
                            <?=$data['jumlah']?>
                        </td>
                        <td class="px-6 py-2">
                            <?=$data['harga']?>
                        </td>
                        <td class="px-6 py-2">
                            <?=$data['tanggal']?>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </x-layout-super-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
