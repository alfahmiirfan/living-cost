<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Dashboard Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <x-layout-user>
        <x-navbar-user title="Muhammad Alfahmi Irfan" />
        <div class="pt-4 pb-4">
            <h1 class="text-base font-semibold ">Upload Bukti Pembayaran</h1>
        </div>
        <div class="border-2 border-black h-64">
        </div>
        <div class="pt-3">
            <a href="#">
                <button type="button" class=" px-3 py-1 text-sm font-medium text-black inline-flex items-center bg-gray-300  rounded-lg text-center ">
                    Pilih Foto
                </button>
            </a>
        </div>
        <div class="absolute bottom-0 pb-28 right-8 left-8">
            <div class="pb-6 rounded-md">
                <button data-modal-target="small-modal" data-modal-toggle="small-modal" class="m-auto justify-center w-1/2 px-5 py-2 text-sm font-medium text-black flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800" type="button">
                    <span class="group-hover:text-gray-700 text-center justify-items-center">Upload</span>
                </button>
            </div>
        </div>
        <div id="small-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
            <div class="relative p-4 w-full max-w-md max-h-full">
                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                    <button type="button" class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="small-modal">
                        <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                        <span class="sr-only">Close modal</span>
                    </button>
                    <div class="p-4 md:p-5 text-center">
                        <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                        </svg>
                        <h3 class="mb-5 text-lg font-normal text-black dark:text-black">Apakah anda yakin ingin mengupload bukti pembayaran ?</h3>
                        <button data-modal-hide="small-modal" type="button" class="text-black bg-[#F5E81D] hover:bg-yellow-400 focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-400 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                            Ya
                        </button>
                        <button data-modal-hide="small-modal" type="button" class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-red-600 rounded-lg border border-red-200 hover:bg-red-100 hover:text-red-700 focus:z-10 focus:ring-4 focus:ring-red-100 dark:focus:ring-red-700 dark:bg-red-800  dark:border-red-600 dark:hover:text-white dark:hover:bg-red-700">Tidak</button>
                    </div>
                </div>
            </div>
        </div>
        <x-tab-user />
    </x-layout-user>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
