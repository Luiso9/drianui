@extends('layout.navbar')
@section('container')
        <!-- Script -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">

        @section('navbar')
        @parent
            <div class="navbar-center tooltip tooltip-bottom" data-tip="Home">
                <a href="/" class="btn btn-ghost btn-circle text-[#E94B3CFF] hover:text-[#E94B3CFF]"><i class="gg-home"></i></a>
            </div>
            <div class="navbar-center tooltip tooltip-bottom" data-tip="About Me">
                <a href="/about" class="btn btn-ghost btn-circle hover:text-[#E94B3CFF]"><i class="fas fa-share"></i></a>
            </div>
            <div class="navbar-center tooltip tooltip-bottom" data-tip="Project">
                <a href="/project" class="btn btn-ghost btn-circle hover:text-[#E94B3CFF]"><i class="fas fa-project-diagram"></i></a>
            </div>
        @stop

        <!-- Hero -->
        <div class="container-fluid">
            <div class="container mx-auto px-4">
                <div class="hero min-h-screen">
                    <div class="hero-content">
                        <h1 class="text-6xl absolute left-[9rem] bottom-[28rem]"  style="font-family: 'Rubik', sans-serif;
                        ">Sebuah <span class="before:block before:absolute before:-inset-1 before:bg-[#E94B3CFF] relative inline-block">
                            <span class="relative text-white">Website</span>
                        </span> <br> Tanpa Daya Tarik</h1>
                        <p class="text-xl absolute left-[9.5rem] bottom-[21rem]" style="font-family: 'Barlow Condensed', sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit officiis, <br> soluta tempore porro aliquam? Odio, facere delectus quis, saepe labore neque cupiditate <br> distinctio minima eius! Quidem optio pariatur, commodi doloremque.</p>

                        <div class="group bg-primary" />
                        <button class="z-[1] btn btn-lg text-xl  bg-focus group-hover:bg-[#E94B3CFF] group-hover:scale-105 group-hover:text-black uppercase rounded-md absolute left-[9.5rem] bottom-[12rem]">
                            <a href="/about" class="relative text-white">Tentang</a>
                        </button>

                        <div class="z-[0] h-[65px] w-[140px] bg-[#E94B3CFF] absolute left-[10.5rem] bottom-[11rem] group-hover:bg-[#2d2926ff] group-hover:scale-105 rounded-md"></div>
                        </div>
                        <div class="absolute bottom-0 right-0">
                            <figure>
                                <img src="img/azur.png" alt="" width="600" height="600">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- framework -->
        <div class="container mx-auto bg-[#edf2f7] rounded mt-8 pt-8">
            <div class="text-center">
                <div class="text-6xl antialiased uppercase font-bold p-12">
                    <h2>THANKS TO</h2>
                </div>
                <div class="columns-3 flex justify-center items-center gap-6">
                    <div class="w-80 pt-8 pb-12 px-6 border border-gray-200 lg:px-12 lg:border-red-600 transition-all duration-500 ease-out hover:bg-base-100 hover:shadow-2xl hover:ease-linear">
                        <img src="img/laravel.svg" class="max-w-[218px] w-80 mx-auto" alt="laracon">
                        <h3 class="mt-8 font-bold text-red-700 uppercase text-xs">Watch us on Laracasts</h3>
                        <h2 class="mt-3 font-bold text-4xl">Laravel</h2>
                        <p class="mt-4 text-gray-700 text-sm leading-relaxed">Laracasts includes free videos and tutorials covering the entire Laravel ecosystem. Stay up to date by watching our latest videos.</p>
                        <a class="group relative inline-flex border border-red-600 focus:outline-none mt-8" href="https://laracasts.com">
                            <span class="w-62 inline-flex items-center justify-center self-center px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                                Start Watching
                            </span>
                        </a>
                    </div>

                    <div class="w-80 pt-8 pb-12 px-6 border border-gray-200 lg:px-12 lg:border-red-600 transition-all duration-500 ease-out hover:bg-base-100 hover:shadow-2xl hover:ease-linear">
                    <img src="img/tailwind.svg" class="max-w-[218px] w-80 mx-auto" alt="laracon">
                    <h3 class="mt-8 font-bold text-red-700 uppercase text-xs">Watch us on Laracasts</h3>
                    <h2 class="mt-3 font-bold text-4xl">TailWindCSS</h2>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Laracasts includes free videos and tutorials covering the entire Laravel ecosystem. Stay up to date by watching our latest videos.</p>
                    <a class="group relative inline-flex border border-red-600 focus:outline-none mt-8" href="https://laracasts.com">
                        <span class="w-62 inline-flex items-center justify-center self-center px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Start Watching
                        </span>
                    </a>
                </div>

                <div class="w-80 pt-8 pb-12 px-6 border border-gray-200 lg:px-12 lg:border-red-600 transition-all duration-500 ease-out hover:bg-base-100 hover:shadow-2xl hover:ease-linear">
                    <img src="img/sublime.svg" class="max-w-[218px] w-80 mx-auto" alt="laracon">
                    <h3 class="mt-8 font-bold text-red-700 uppercase text-xs">Watch us on Laracasts</h3>
                    <h2 class="mt-3 font-bold text-4xl">SublimeText</h2>
                    <p class="mt-4 text-gray-700 text-sm leading-relaxed">Laracasts includes free videos and tutorials covering the entire Laravel ecosystem. Stay up to date by watching our latest videos.</p>
                    <a class="group relative inline-flex border border-red-600 focus:outline-none mt-8" href="https://laracasts.com">
                        <span class="w-62 inline-flex items-center justify-center self-center px-4 py-2 text-sm text-red-600 text-center font-bold uppercase bg-white ring-1 ring-red-600 ring-offset-1 transform transition-transform group-hover:-translate-y-1 group-hover:-translate-x-1 group-focus:-translate-y-1 group-focus:-translate-x-1">
                            Start Watching
                        </span>
                    </a>
                </div>
                </div>
            </div>
        </div>
    @endsection
