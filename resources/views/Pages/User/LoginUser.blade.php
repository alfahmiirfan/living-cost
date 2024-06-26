<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    <div class="">
        <div class="flex w-full justify-center items-center">
            <div class="w-full px-6 pt-8">
                <div class="pt-8 pb-8 flex justify-center">
                    <div class="">
                        <img src="https://www.sman10pentagonkaur.sch.id/wp-content/uploads/2020/03/logo.png" alt="" class="">
                    </div>
                </div>
                <form action="" method="POST" class="bg-white rounded-md  p-8">
                    @csrf
                    <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center pb-8">LOGIN </h1>
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        <input id="nisn" class=" pl-2 w-full outline-none border-none" type="nisn" name="nisn" placeholder="Masukkan NISN" required />
                    </div>
                    <div class="">
                        <div class="pb-6">
                            <label for="password" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white"></label>
                            <div class="relative">
                                <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                </div>
                                <input name="kata_sandi" type="password" id="password" class="px-5 py-2.5 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Masukkan Password" required value="" />
                            </div>
                        </div>
                    </div>
                    {{-- <div class="flex float-right pb-8">
                        <a href="/LupaPassword" class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all font-light">Lupa Password ?</a>
                    </div> --}}
                    <div class="pt-5 pb-5">
                        <button type="submit" class=" bg-[#F5E81D] w-full justify-center  pt-2 py-2 rounded-xl hover:bg-yellow-300 hover:-translate-y-1 transition-all duration-500 text-black font-bold">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
