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
        <div class="pb-8">
            <a href="/ProfileUser">
                <button type="button" class="pl-5 px-6 py-2 text-md font-medium text-black in    items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    Profile
                </button>
            </a>
        </div>
        <div class="pt-4 pb-4">
            <h1 class="text-base font-semibold ">Dashboard </h1>
        </div>
        <div class="w-full">
            <div class="grid gap-6">
                <a href="/UploadUser">
                    <div class="flex items-center justify-center h-36 w-full col-span-1 border-gray-300 rounded-md bg-yale-blue">
                        <div class="pt-2 justify-items-end flex-row items-center justify-center">
                            <div class=" flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-10 w-10 text-white lucide lucide-user-round">
                                    <path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4" />
                                    <polyline points="17 8 12 3 7 8" />
                                    <line x1="12" x2="12" y1="3" y2="15" /></svg>
                            </div>
                            <div class="pt-4">
                                <p class="text-white text-base tracking-wide">Upload Bukti Pembayaran</p>
                            </div>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="flex items-center justify-center h-36 w-full col-span-1 border-gray-300 rounded-md bg-yale-blue">
                        <div class="pt-2 justify-items-end flex-row items-center justify-center">
                            <div class=" flex justify-center">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="h-10 w-10 text-white lucide lucide-user-round">
                                    <path d="M4 19.5v-15A2.5 2.5 0 0 1 6.5 2H20v20H6.5a2.5 2.5 0 0 1 0-5H20" />
                                    <path d="M8 7h6" />
                                    <path d="M8 11h8" /></svg>
                            </div>
                            <div class="pt-2">
                                <p class="text-white text-base tracking-wide">Informasi Pembayaran Living Cost</p>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <x-tab-user />
        </div>
    </x-layout-user>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
