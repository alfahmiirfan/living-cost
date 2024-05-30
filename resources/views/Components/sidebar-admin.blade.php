<div class="fixed left-0 top-0">
    <aside class="bg-[#085288] fixed top-0 px-6 h-full flex flex-col justify-between  border-r transition duration-300 w-[20%] items-center  ">
        <div class=" pt-8 text-center">
            <img src="https://www.sman10pentagonkaur.sch.id/wp-content/uploads/2020/03/logo.png" alt="" class=" m-auto rounded-full object-cover lg:w-36 lg:h-36">
        </div>
        <div class="absolute top-56">
            <ul class="">
                <div class="">
                    <li>
                        @php
                        $path1 = ['/DashboardAdmin'];
                        @endphp
                        <a href="/DashboardAdmin" class="relative px-4 py-2 flex items-center space-x-4 rounded-md text-white  @if (in_array(Request::path(), $path1)) bg-[#06416C] 
        @else
            hover:bg-yale-blue @endif">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25 3.75H5C4.30964 3.75 3.75 4.30964 3.75 5V13.75C3.75 14.4404 4.30964 15 5 15H11.25C11.9404 15 12.5 14.4404 12.5 13.75V5C12.5 4.30964 11.9404 3.75 11.25 3.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25 3.75H18.75C18.0596 3.75 17.5 4.30964 17.5 5V8.75C17.5 9.44036 18.0596 10 18.75 10H25C25.6904 10 26.25 9.44036 26.25 8.75V5C26.25 4.30964 25.6904 3.75 25 3.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M25 15H18.75C18.0596 15 17.5 15.5596 17.5 16.25V25C17.5 25.6904 18.0596 26.25 18.75 26.25H25C25.6904 26.25 26.25 25.6904 26.25 25V16.25C26.25 15.5596 25.6904 15 25 15Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.25 20H5C4.30964 20 3.75 20.5596 3.75 21.25V25C3.75 25.6904 4.30964 26.25 5 26.25H11.25C11.9404 26.25 12.5 25.6904 12.5 25V21.25C12.5 20.5596 11.9404 20 11.25 20Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="group-hover:text-gray-700">Dashboard</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li>
                        <div class="px-4 py-1 flex items-center space-x-4 rounded-md text-white group">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M13.75 18.75H16.25C16.913 18.75 17.5489 18.4866 18.0178 18.0178C18.4866 17.5489 18.75 16.913 18.75 16.25C18.75 15.587 18.4866 14.9511 18.0178 14.4822C17.5489 14.0134 16.913 13.75 16.25 13.75H12.5C11.75 13.75 11.125 14 10.75 14.5L3.75 21.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M8.75 26.2499L10.75 24.4999C11.125 23.9999 11.75 23.7499 12.5 23.7499H17.5C18.875 23.7499 20.125 23.2499 21 22.2499L26.75 16.7499C27.2324 16.294 27.5139 15.6652 27.5326 15.0018C27.5514 14.3384 27.3058 13.6947 26.85 13.2124C26.3942 12.73 25.7654 12.4485 25.102 12.4297C24.4385 12.411 23.7949 12.6565 23.3125 13.1124L18.0625 17.9874" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M2.5 20L10 27.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20 14.875C22.002 14.875 23.625 13.252 23.625 11.25C23.625 9.24797 22.002 7.625 20 7.625C17.998 7.625 16.375 9.24797 16.375 11.25C16.375 13.252 17.998 14.875 20 14.875Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M7.5 10C9.57107 10 11.25 8.32107 11.25 6.25C11.25 4.17893 9.57107 2.5 7.5 2.5C5.42893 2.5 3.75 4.17893 3.75 6.25C3.75 8.32107 5.42893 10 7.5 10Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="">Pengelolaan Keuangan</span>
                        </div>
                    </li>
                </div>
                <div class="">
                    <li>
                        @php
                        $path2 = ['/PemasukanAdmin', '/Pemasukan-StatusAdmin'];
                        @endphp
                        <a href="/PemasukanAdmin" class="flex items-center p-2 text-base font-normal ml-16 rounded-md text-white @if (in_array(Request::path(), $path2)) bg-[#06416C] 
        @else
            hover:bg-yale-blue @endif">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M3.75 6.25V23.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M26.25 15H8.75" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M18.75 22.5L26.25 15L18.75 7.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="group-hover:text-gray-700 pl-2">Pemasukan</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li>
                        @php
                        $path3 = [
                        '/PengeluaranAdmin',
                        '/Pengeluaran-TambahAdmin',
                        '/Pengeluaran-UbahAdmin',
                        ];
                        @endphp
                        <a href="/PengeluaranAdmin" class="flex items-center p-2 text-base font-normal ml-16 rounded-md text-white @if (in_array(Request::path(), $path3)) bg-[#06416C] 
        @else
            hover:bg-yale-blue @endif">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M11.25 7.5L3.75 15L11.25 22.5" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M3.75 15H21.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M26.25 23.75V6.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="group-hover:text-gray-700 pl-2">Pengeluaran</span>
                        </a>
                    </li>
                </div>
                <div class="">
                    <li>
                        @php
                        $path3 = [
                        '/PendataanAdmin',
                        '/Pendataan-TambahAdmin',
                        '/Pendataan-UbahAdmin',
                        ];
                        @endphp
                        <a href="/PendataanAdmin" class="relative px-4 py-2 flex items-center space-x-4 rounded-md text-white @if (in_array(Request::path(), $path3)) bg-[#06416C] 
        @else
            hover:bg-yale-blue @endif">
                            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M20 26.25V23.75C20 22.4239 19.4732 21.1521 18.5355 20.2145C17.5979 19.2768 16.3261 18.75 15 18.75H7.5C6.17392 18.75 4.90215 19.2768 3.96447 20.2145C3.02678 21.1521 2.5 22.4239 2.5 23.75V26.25" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M11.25 13.75C14.0114 13.75 16.25 11.5114 16.25 8.75C16.25 5.98858 14.0114 3.75 11.25 3.75C8.48858 3.75 6.25 5.98858 6.25 8.75C6.25 11.5114 8.48858 13.75 11.25 13.75Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M27.5 26.2496V23.7496C27.4992 22.6418 27.1304 21.5656 26.4517 20.69C25.773 19.8144 24.8227 19.1891 23.75 18.9121" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M20 3.91211C21.0755 4.18749 22.0288 4.81299 22.7095 5.69C23.3903 6.56701 23.7598 7.64565 23.7598 8.75586C23.7598 9.86607 23.3903 10.9447 22.7095 11.8217C22.0288 12.6987 21.0755 13.3242 20 13.5996" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                            <span class="group-hover:text-gray-700 ">Pendataan Siswa</span>
                        </a>
                    </li>
                </div>
            </ul>
        </div>
        <div class="pb-6 rounded-md items-center justify-center  ">
            <a href="#">
                <button type="button" class="w-full px-5 py-1.5 text-sm font-medium text-black inline-flex items-center bg-[#F5E81D] hover:bg-yellow-300 focus:ring-4 focus:outline-none focus:ring-yellow-400 rounded-lg text-center dark:bg-yellow-600 dark:hover:bg-yellow-700 dark:focus:ring-yellow-800">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                    <span class="group-hover:text-gray-700 text-center">Logout</span>
                </button>
            </a>
        </div>
    </aside>
</div>
