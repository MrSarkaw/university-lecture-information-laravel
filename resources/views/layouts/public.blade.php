<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>University</title>

        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        @vite('resources/css/app.css')

        <style>
            body, html {
                font-family: 'Nunito', sans-serif;
                background: #f6f7f9
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="bg-[#314ece] py-6 text-white ">
            <header class="w-10/12 mx-auto flex justify-between items-center">
                <div>
                    <i class="fa-solid fa-building-columns text-2xl"></i> Universtiy
                </div>
                <div class="flex space-x-8 items-center">
                    <a href="">Explore</a>
                    <a href="">Apply</a>
                    <a href="">Blog</a>
                    <a href="">Login</a>
                </div>
            </header>

            <div class="text-center mt-20">
                <p class="text-center text-5xl leading-[65px] font-bold">
                    Start Your <br> Future with university
                </p>
                <button class="bg-[#0f2851] p-2 rounded-full px-6 mt-10">Find a program</button>

                <img src="{{ asset('Studying-rafiki.svg') }}" class="w-4/12 mx-auto mt-3" alt="">
            </div>
        </div>

        <div class="w-10/12 mx-auto my-10">
            <p class="">Programs</p>
            <p class="text- font-bold text-2xl">Browse Department by Lectures</p>
            <div class="grid grid-cols-6 gap-10 mt-5">
                <div class="p-4 rounded shadow bg-white text-center">
                    <i class="fa-solid fa-pen text-xl text-[#314ece]"></i>
                    <p class="mt-2">Web Design</p>
                </div>
                <div class="p-4 rounded shadow bg-white text-center">
                    <i class="fa-solid fa-pen text-xl text-[#314ece]"></i>
                    <p class="mt-2">Web Design</p>
                </div>
                <div class="p-4 rounded shadow bg-white text-center">
                    <i class="fa-solid fa-pen text-xl text-[#314ece]"></i>
                    <p class="mt-2">Web Design</p>
                </div>
                <div class="p-4 rounded shadow bg-white text-center">
                    <i class="fa-solid fa-pen text-xl text-[#314ece]"></i>
                    <p class="mt-2">Web Design</p>
                </div>
                <div class="p-4 rounded shadow bg-white text-center">
                    <i class="fa-solid fa-pen text-xl text-[#314ece]"></i>
                    <p class="mt-2">Web Design</p>
                </div>
                <div class="p-4 rounded shadow bg-white text-center">
                    <i class="fa-solid fa-pen text-xl text-[#314ece]"></i>
                    <p class="mt-2">Web Design</p>
                </div>

            </div>


            <div class="mt-24">
                <p>College/Inst</p>
                <p class="text- font-bold text-2xl">Find Colleges</p>
                <div class="grid grid-cols-3 gap-10 mt-5">
                    <div class=" rounded-lg shadow bg-white overflow-hidden">
                        <img src="{{ asset('img/OIdsJNjx7M2zmNrLCLChaQh7aHnYlJxsHYxnT7tl.jpg') }}" class="w-full rounded-lg  h-72 object-cover" alt="">
                        <p class="mt-2 p-2 text-lg">Informatics</p>
                    </div>

                    <div class=" rounded-lg shadow bg-white overflow-hidden">
                        <img src="{{ asset('img/OIdsJNjx7M2zmNrLCLChaQh7aHnYlJxsHYxnT7tl.jpg') }}" class="w-full  rounded-lg h-72 object-cover" alt="">
                        <p class="mt-2 p-2 text-lg">Informatics</p>
                    </div>

                    <div class=" rounded-lg shadow bg-white overflow-hidden">
                        <img src="{{ asset('img/OIdsJNjx7M2zmNrLCLChaQh7aHnYlJxsHYxnT7tl.jpg') }}" class="w-full rounded-lg  h-72 object-cover" alt="">
                        <p class="mt-2 p-2 text-lg">Informatics</p>
                    </div>

                </div>
            </div>
        </div>
        @yield('content')


        <div class="bg-[#314ece] py-6 text-white ">
            <header class="w-10/12 mx-auto flex justify-between items-center">
                <div class="text-xl">
                    <i class="fa-solid fa-building-columns text-3xl"></i> Universtiy
                </div>
                <div class="flex space-x-8 text-xl items-center">
                   <i class="fab fa-facebook"></i>
                   <i class="fab fa-instagram"></i>
                   <i class="fab fa-snapchat"></i>
                   <i class="fas fa-phone"></i>
                </div>
            </header>


        </div>

    </body>
</html>
