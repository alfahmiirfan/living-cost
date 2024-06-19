<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login Super Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>
<body>
    {{-- <x-auth-layout>
    </x-auth-layout> --}}

    <div class="h-screen flex">
        <div class="hidden lg:flex w-full lg:w-1/2 login_img_section justify-around items-center">
            <div class="  bg-black opacity-20 inset-0 z-0">
            </div>
            <div class="w-full mx-auto px-20 flex-col items-center ">
                <div class=" pt-8 text-center">
                    <img src="https://www.sman10pentagonkaur.sch.id/wp-content/uploads/2020/03/logo.png" alt="" class=" m-auto rounded-full object-cover lg:w-64 lg:h-64">
                </div>
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-yale-blue space-y-8">
            <div class="w-full px-12 md:px-32 lg:px-24">
                <form class="bg-white rounded-md shadow-2xl p-10">
                    <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center pb-4">Kode OTP </h1>
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg> --}}
                        <input id="email" class=" pl-2 w-full outline-none border-none" type="email" name="email" placeholder="Masukkan Kode OTP" />
                    </div>
                    <div class="pt-5 pb-5">
                        <button type="submit" class=" bg-[#F5E81D] w-full justify-center  pt-2 py-2 rounded-xl hover:bg-yellow-300 hover:-translate-y-1 transition-all duration-500 text-black font-semibold">Kirim</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
</body>
</html>
