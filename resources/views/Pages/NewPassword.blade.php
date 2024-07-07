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
                    <img src="image/logo-sma.png" alt="" class=" m-auto rounded-full object-cover lg:w-64 lg:h-64">
                </div>
            </div>
        </div>
        <div class="flex w-full lg:w-1/2 justify-center items-center bg-yale-blue space-y-8">
            <div class="w-full px-12 md:px-32 lg:px-24">
                <form action="" method="POST" class="bg-white rounded-md shadow-2xl p-10">
                    @csrf
                    <input type="hidden" name="email" value="{{ $user->email }}" />
                    <input type="hidden" name="otp" value="{{ $user->otp }}" />
                    <h1 class="text-gray-800 font-bold text-2xl mb-1 text-center pb-4">Buat Password Baru</h1>
                    <div class="flex items-center border-2 mb-8 py-2 px-3 rounded-2xl">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path strokeLinecap="round" strokeLinejoin="round" strokeWidth="2" d="M16 12a4 4 0 10-8 0 4 4 0 008 0zm0 0v1.5a2.5 2.5 0 005 0V12a9 9 0 10-9 9m4.5-1.206a8.959 8.959 0 01-4.5 1.207" />
                        </svg> --}}
                        <input class="pl-2 w-full outline-none border-none" type="password" name="kata_sandi" id="password" placeholder="Masukkan Password Baru" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <div class="flex items-center border-2 py-2 px-3 rounded-2xl ">
                        {{-- <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor">
                            <path fillRule="evenodd" d="M5 9V7a5 5 0 0110 0v2a2 2 0 012 2v5a2 2 0 01-2 2H5a2 2 0 01-2-2v-5a2 2 0 012-2zm8-2v2H7V7a3 3 0 016 0z" clipRule="evenodd" />
                        </svg> --}}
                        <input class="pl-2 w-full outline-none border-none" type="password" name="kata_sandi_confirmation" id="password" placeholder="Masukkan Ulang Password Baru" />
                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-eye">
                            <path d="M2 12s3-7 10-7 10 7 10 7-3 7-10 7-10-7-10-7Z" />
                            <circle cx="12" cy="12" r="3" />
                        </svg>
                    </div>
                    <div class="flex float-right pb-8">
                        <span class="text-sm ml-2 hover:text-blue-500 cursor-pointer hover:-translate-y-1 duration-500 transition-all font-light">Lupa Password ?</span>
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
