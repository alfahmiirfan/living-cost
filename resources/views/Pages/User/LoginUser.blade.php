<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <link rel="icon" type="image/x-icon" href="image/logo-sma.png">
</head>

<body>
    <div class="">
        <div class="flex w-full items-center justify-center">
            <div class="w-full px-6 pt-8">
                <div class="flex justify-center pb-8 pt-8">
                    <div class="">
                        <img src="image/logo-sma.png" alt="" class="">
                    </div>
                </div>
                <form id="login-form" action="" method="POST" class="rounded-md bg-white p-8">
                    @csrf
                    <h1 class="mb-1 pb-8 text-center text-2xl font-bold text-gray-800">LOGIN </h1>
                    <div class="pb-6">
                        <input id="nisn" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" type="nisn" name="nisn" placeholder="Masukkan NISN" required />
                    </div>
                    <div class="">
                        <div class="pb-6">
                            <label for="password" class="sr-only mb-2 text-sm font-medium text-gray-900 dark:text-white"></label>
                            <div class="relative">
                                <input name="kata_sandi" type="password" id="password" class="block w-full rounded-lg border border-gray-300 bg-gray-50 px-5 py-2.5 text-sm text-gray-900 focus:border-blue-500 focus:ring-blue-500 dark:border-gray-600 dark:bg-gray-700 dark:text-white dark:placeholder-gray-400 dark:focus:border-blue-500 dark:focus:ring-blue-500" placeholder="Masukkan Password" required value="" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex float-right pb-8">
                        <a href="/LupaPassword" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all font-light">Lupa Password ?</a>
                    </div> --}}
                    <div class="pb-5 pt-5">
                        <button type="submit" class="w-full justify-center rounded-xl bg-[#F5E81D] py-2 pt-2 font-bold text-black transition-all duration-500 hover:-translate-y-1 hover:bg-yellow-300">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>

</html>
