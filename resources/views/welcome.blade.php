@extends('layout.navbar')
@section('container')
        <!-- Script -->
        <link rel="stylesheet" href="css/welcome.css">
        <link rel="stylesheet" href="css/main.css">
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

                        <div class="group bg-primary">
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
        
    @endsection