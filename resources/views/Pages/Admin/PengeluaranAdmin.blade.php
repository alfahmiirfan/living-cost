<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pengeluaran Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-admin>
        <x-navbar-admin title="Pengelolaan Keuangan - Pengeluaran" />
        <div class="flex">
            <x-search-super-admin />
            <div class="absolute top-30 right-10 flex justify-between items-center rounded-md">
                <a href="/Pengeluaran-TambahAdmin">
                    <button type="button" class="px-5 py-1 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M23.75 3.75H6.25C4.86929 3.75 3.75 4.86929 3.75 6.25V23.75C3.75 25.1307 4.86929 26.25 6.25 26.25H23.75C25.1307 26.25 26.25 25.1307 26.25 23.75V6.25C26.25 4.86929 25.1307 3.75 23.75 3.75Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M10 15H20" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path d="M15 10V20" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        Tambah
                    </button>
                </a>
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
                        <th scope="col" class="px-6 py-3">
                            Aksi
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
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="/Pengeluaran-UbahAdmin">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                        <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <x-pop-up-delete />
                            </div>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </x-layout-admin>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
