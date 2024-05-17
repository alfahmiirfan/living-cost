<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Pemasukan Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-super-admin>
        <x-navbar-super-admin title="Pengelolaan Keuangan - Pemasukan" />
        <div class="flex">
            <x-search-super-admin />
            <div class="absolute top-30 right-10 flex justify-between items-center rounded-md">
                <a href="Pemasukan-StatusSuperAdmin">
                    <button type="button" class="px-5 py-2 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-square-check">
                            <rect width="18" height="18" x="3" y="3" rx="2" />
                            <path d="m9 12 2 2 4-4" />
                        </svg>
                        Status
                    </button>
                </a>
            </div>
        </div>
        <!-- component -->
        {{-- Table --}}
        <div class="relative overflow-x-auto">
            <table class="w-full text-sm text-left rtl:text-right">
                <thead class="text-sm text-white uppercase bg-yale-blue dark:bg-gray-700 dark:text-gray-400">
                    <tr>
                        <th scope="col" class="px-6 py-3">
                            No
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Nama
                        </th>
                        <th scope="col" class="px-6 py-3">
                            NISN
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Bulan
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Tanggal Upload
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Aksi
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 text-sm">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            1
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="#">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#085288" fill-opacity="0.8" />
                                        <path d="M5 15C5 15 8 8 15 8C22 8 25 15 25 15C25 15 22 22 15 22C8 22 5 15 5 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 18C16.6569 18 18 16.6569 18 15C18 13.3431 16.6569 12 15 12C13.3431 12 12 13.3431 12 15C12 16.6569 13.3431 18 15 18Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.929688" width="30" height="30" rx="5" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            2
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="#">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#085288" fill-opacity="0.8" />
                                        <path d="M5 15C5 15 8 8 15 8C22 8 25 15 25 15C25 15 22 22 15 22C8 22 5 15 5 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 18C16.6569 18 18 16.6569 18 15C18 13.3431 16.6569 12 15 12C13.3431 12 12 13.3431 12 15C12 16.6569 13.3431 18 15 18Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.929688" width="30" height="30" rx="5" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            3
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="#">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#085288" fill-opacity="0.8" />
                                        <path d="M5 15C5 15 8 8 15 8C22 8 25 15 25 15C25 15 22 22 15 22C8 22 5 15 5 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 18C16.6569 18 18 16.6569 18 15C18 13.3431 16.6569 12 15 12C13.3431 12 12 13.3431 12 15C12 16.6569 13.3431 18 15 18Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.929688" width="30" height="30" rx="5" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            4
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="#">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#085288" fill-opacity="0.8" />
                                        <path d="M5 15C5 15 8 8 15 8C22 8 25 15 25 15C25 15 22 22 15 22C8 22 5 15 5 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 18C16.6569 18 18 16.6569 18 15C18 13.3431 16.6569 12 15 12C13.3431 12 12 13.3431 12 15C12 16.6569 13.3431 18 15 18Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.929688" width="30" height="30" rx="5" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-2 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            5
                        </th>
                        <td class="px-6 py-2">
                            Muhammad Alfahmi Irfan
                        </td>
                        <td class="px-6 py-2">
                            0123456789
                        </td>
                        <td class="px-6 py-2">
                            November
                        </td>
                        <td class="px-6 py-2">
                            15/05/2024
                        </td>
                        <td class="px-6 py-2">
                            <div class="flex">
                                <a href="#">
                                    <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect width="30" height="30" rx="5" fill="#085288" fill-opacity="0.8" />
                                        <path d="M5 15C5 15 8 8 15 8C22 8 25 15 25 15C25 15 22 22 15 22C8 22 5 15 5 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M15 18C16.6569 18 18 16.6569 18 15C18 13.3431 16.6569 12 15 12C13.3431 12 12 13.3431 12 15C12 16.6569 13.3431 18 15 18Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </a>
                                <a href="#">
                                    <svg width="31" height="30" viewBox="0 0 31 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <rect x="0.929688" width="30" height="30" rx="5" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" fill="#32D62F" />
                                        <path d="M25.4683 9L13.2316 20L7.66943 15" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
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

    </x-layout-super-admin>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
