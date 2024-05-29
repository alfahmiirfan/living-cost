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
            <div class="pb-6 rounded-md   ">
                <a href="#">
                    <button type="button" class="m-auto justify-center w-1/2 px-5 py-2 text-sm font-medium text-black flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                        <span class="group-hover:text-gray-700 text-center justify-items-center">Upload</span>
                    </button>
                </a>
            </div>
        </div>
        <x-tab-user />
    </x-layout-user>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
