{{-- <x-navbar-super-admin>Pengelolaan Keuangan - Pengeluaran</x-navbar-super-admin> --}}
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pendataan Siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Pendataan Siswa" />
        <div class="flex">
            <x-search-super-admin />
            <div class="pl-[890px]">
                <a href="Pendataan-TambahSuperAdmin">
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
        <div class="tab">
            <div class="">
                <table class="table-fixed text-left w-full">
                    <thead class="bg-yale-blue flex text-white w-full">
                        <tr class="flex w-full max-h-10 items-center">
                            <th class="p-4 w-40">No</th>
                            <th class="p-4 w-96">Nama</th>
                            <th class="p-4 w-1/4">NISN</th>
                            <th class="p-4 w-1/4">Angkatan</th>
                            <th class="p-4 w-1/4">Aksi</th>
                        </tr>
                    </thead>
                    <!-- Remove the nasty inline CSS fixed height on production and replace it with a CSS class — this is just for demonstration purposes! -->
                    <tbody class="bg-grey-light flex flex-col items-center justify-between overflow-y-scroll w-full" style="height: 30vh;">
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">1</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2020</td>
                            <td class="p-4 w-1/4">
                                <div class="flex">
                                    <a href="/Pendataan-UbahSuperAdmin">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                            <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.930176" width="30" height="30" rx="5" fill="#F72323" />
                                            <path d="M21.9302 9L9.93018 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.93018 9L21.9302 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">2</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2021</td>
                            <td class="p-4 w-1/4">
                                <div class="flex">
                                    <a href="/Pendataan-UbahSuperAdmin">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                            <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.930176" width="30" height="30" rx="5" fill="#F72323" />
                                            <path d="M21.9302 9L9.93018 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.93018 9L21.9302 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">3</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2022</td>
                            <td class="p-4 w-1/4">
                                <div class="flex">
                                    <a href="/Pendataan-UbahSuperAdmin">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                            <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.930176" width="30" height="30" rx="5" fill="#F72323" />
                                            <path d="M21.9302 9L9.93018 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.93018 9L21.9302 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">4</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2023</td>
                            <td class="p-4 w-1/4">
                                <div class="flex">
                                    <a href="/Pendataan-UbahSuperAdmin">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                            <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.930176" width="30" height="30" rx="5" fill="#F72323" />
                                            <path d="M21.9302 9L9.93018 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.93018 9L21.9302 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                        <tr class="flex w-full max-h-10 items-center border-b-2 border-gray">
                            <td class="p-4 w-20">5</td>
                            <td class="p-4 w-96">Muhammad Alfahmi Irfan</td>
                            <td class="p-4 w-1/4">0123456789</td>
                            <td class="p-4 w-1/4">2024</td>
                            <td class="p-4 w-1/4">
                                <div class="flex">
                                    <a href="/Pendataan-UbahSuperAdmin">
                                        <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect width="30" height="30" rx="5" fill="#F5E81D" />
                                            <path d="M15 21.667H22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M18.75 7.9162C19.0815 7.58468 19.5312 7.39844 20 7.39844C20.2321 7.39844 20.462 7.44416 20.6765 7.533C20.891 7.62184 21.0858 7.75205 21.25 7.9162C21.4142 8.08036 21.5444 8.27523 21.6332 8.48971C21.722 8.70418 21.7678 8.93406 21.7678 9.1662C21.7678 9.39835 21.722 9.62822 21.6332 9.8427C21.5444 10.0572 21.4142 10.2521 21.25 10.4162L10.8333 20.8329L7.5 21.6662L8.33333 18.3329L18.75 7.9162Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M17.5 9.16699L20 11.667" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                    <a href="#">
                                        <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <rect x="0.930176" width="30" height="30" rx="5" fill="#F72323" />
                                            <path d="M21.9302 9L9.93018 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M9.93018 9L21.9302 21" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </x-layout-super-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
