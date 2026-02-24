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

            {{-- about bar --}}
            <div class="about-bar flex justify-between bg-red-50 text-sm text-[#131749]">
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
        </div>
    </body>
</html>
