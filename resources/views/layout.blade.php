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
            <div class="about-bar">
                <div class="about-bar-menu">
                    <ul>
                        <li>PERSONAL</li>
                        <li>ENTERPRISE</li>
                        <li>TENTANG KAMI</li>
                    </ul>
                </div>
                <div class="about-bar-menu">
                    <ul>
                        <li>TSHOP</li>
                        <li>MYTELKOMSEL</li>
                        <li>EN | ID</li>
                    </ul>
                </div>
            </div>
        </div>
    </body>
</html>
