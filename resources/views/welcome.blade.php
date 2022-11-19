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

                        <div class="group bg-primary" />
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
        <div class="container mx-auto px-4 bg-red-200">
          <div class="text-center">
            <div class="text-2xl antialiased uppercase font-bold">
              <h2>FRAMEWORK THAT I USE</h2>
            </div>
            <div class="columns-3">
              <div class="card">
                <div class="card-body">
                  <img src="" alt="">
                  <h3 class="card-title">Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                      sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                      exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
                      Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
              </div>
            </div>
          </div>
        </div>

    @endsection
