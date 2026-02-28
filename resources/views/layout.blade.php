<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />


    </head>
    <body class="antialiased">
        <div class="bg-slate-300 h-screen">
            {{-- header section --}}
            <div>
                {{-- about bar --}}
                <div class="about-bar flex justify-between bg-red-50 text-[12px] flex-wrap md:flex-nowrap text-[#131749]">
                    <div class="about-bar-menu px-10 py-4">
                        <ul class="flex justify-between space-x-5">
                            <li class="font-[670] text-red-500">PERSONAL</li>
                            <li>ENTERPRISE</li>
                            <li>TENTANG KAMI</li>
                        </ul>
                    </div>
                    <div class="about-bar-menu px-10 py-4">
                        <ul class="flex justify-between space-x-5">
                            <li>TSHOP</li>
                            <li>MYTELKOMSEL</li>
                            {{-- <div>
                                <span>ID</span>
                                <span class="mx-2">|</span>
                                <span>EN</span>
                            </div> --}}
                        </ul>
                    </div>
                </div>
                {{-- logo navbar --}}
                <div class="about-bar flex justify-between bg-red-50 text-sm text-[#131749] border-b-[3px] border-gray-400">
                    <div class="about-bar-menu px-5 py-3">
                        <img src="{{ asset('img/logo-telkomsel.png') }}" alt="Telkomsel" class="w-33">
                    </div>
                    <div class="about-bar-menu px-5 py-3 bg-red-50 flex items-center">
                        <ul class="flex items-center justify-between space-x-5">
                            <li>*LOGO SEARCH</li>
                            {{-- <li>*HAMBURGER UNTUK MOBILE</li> --}}
                            {{-- <div>
                                <span>ID</span>
                                <span class="mx-2">|</span>
                                <span>EN</span>
                            </div> --}}
                        </ul>
                    </div>
                </div>
                {{-- honeycomb --}}
                <div class="honeycomb flex justify-start space-x-3 hover:text-[#5a5d88] bg-red-50 text-sm text-[#131749] px-6 py-4">
                    <a href="#">HOME</a>
                    <span>/</span>
                    <a href="#">INDIHOME</a>
                </div>
            </div>


            {{-- content section --}}
            <div class="xl:px-[100px]">
                {{-- splash --}}
                <div class="bg-[linear-gradient(to_right,#a50016_0%,#a50016_80%,#e0326c_90%)] bg-[#e0326c] py-10 md:px-28 px-6 flex lg:flex-row flex-col md:space-x-5  -space-y-4 text-blue-50 md:rounded-bl-[100px] rounded-bl-[50px] md:text-[70px] text-[30px]">
                    <h1 class="font-bold">Katalog Paket</h1>
                    <h1 class="font-bold"> Indihome</h1>
                </div>

                {{-- nama konten --}}
                <div class="flex justify-center py-14 items-center space-y-10 flex-col">
                    <div class="bg-[#a50016] w-[120px] h-1"></div>
                    <h1 class="md:text-[60px] text-[#10164d] text-[30px] font-[650]">
                        Piihan Paket Indihome
                    </h1>
                </div>

                {{-- isi konten --}}
                <div class="bg-red-500 flex">
                    <div class="item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque tempora distinctio placeat? Vel doloribus odit modi quis, sit voluptatibus dolor! Doloremque eligendi, molestias sint suscipit illo adipisci molestiae, officiis a vel reiciendis voluptates omnis!</div>
                    <div class="item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque tempora distinctio placeat? Vel doloribus odit modi quis, sit voluptatibus dolor! Doloremque eligendi, molestias sint suscipit illo adipisci molestiae, officiis a vel reiciendis voluptates omnis!</div>
                    <div class="item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque tempora distinctio placeat? Vel doloribus odit modi quis, sit voluptatibus dolor! Doloremque eligendi, molestias sint suscipit illo adipisci molestiae, officiis a vel reiciendis voluptates omnis!</div>
                    <div class="item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque tempora distinctio placeat? Vel doloribus odit modi quis, sit voluptatibus dolor! Doloremque eligendi, molestias sint suscipit illo adipisci molestiae, officiis a vel reiciendis voluptates omnis!</div>
                    <div class="item-content">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eaque tempora distinctio placeat? Vel doloribus odit modi quis, sit voluptatibus dolor! Doloremque eligendi, molestias sint suscipit illo adipisci molestiae, officiis a vel reiciendis voluptates omnis!</div>
                </div>
            </div>

        </div>
    </body>
</html>
