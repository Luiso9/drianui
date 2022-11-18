@extends('layout.navbar')
@section('container')

		@section('navbar')
        @parent
            <div class="navbar-center tooltip tooltip-bottom" data-tip="Home">
                <a href="/" class="btn btn-ghost btn-circle hover:text-[#E94B3CFF]"><i class="gg-home"></i></a>
            </div>
            <div class="navbar-center tooltip tooltip-bottom" data-tip="About Me">
                <a href="/about" class="btn btn-ghost btn-circle text-[#E94B3CFF] hover:text-[#E94B3CFF]"><i class="fas fa-share"></i></a>
            </div>
            <div class="navbar-center tooltip tooltip-bottom" data-tip="Project">
                <a href="/project" class="btn btn-ghost btn-circle hover:text-[#E94B3CFF]"><i class="fas fa-project-diagram"></i></a>
            </div>
        @stop

		<div class="container-fluid">
			<div class="container mx-auto px-4">
				{{-- Tentang Saya --}}
				<h1 class="text-6xl text-left absolute left-[4rem] top-[6rem]" style="font-family: 'Rubik', sans-serif;
                        ">Tentang Saya</h1>
				<p class="text-xl text-left absolute left-[4rem] top-[11rem] font-bold" style="font-family: 'Barlow Condensed', sans-serif;">Halo saya, <span class="text-[#E94B3CFF]">Muhammad Andrian S.</span></p>
				<span  class="text-xl text-left absolute left-[4rem] top-[13rem]" style="font-family: 'Barlow Condensed', sans-serif;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint repellat, nam? <br> Nulla velit molestiae neque quas nemo ea tenetur hic aliquam laborum deleniti <br> modi sequi sunt similique voluptates ratione, ex!</span>

				{{-- Progress Bar --}}
				<div class="flex justify-end">
					<h2 class="text-6xl text-right absolute top-[22rem] mt-2" style="font-family: 'Rubik', sans-serif;
                        ">Programming Skill</h2>
				</div>
					<div class="flex justify-end" style="font-family: 'Barlow Condensed', sans-serif;">
						<p class="text-right absolute bottom-[14rem] font-bold" ><i class="fab fa-html5"></i> HTML5/CSS3</p>
						<progress class="progress bg-[#E94B3CFF] w-56 text-right absolute bottom-[13rem]" value="30" max="100"></progress>
					</div>
					<div class="flex justify-end">
						<p class="mt-2 pt-2 text-right absolute bottom-[11rem] font-semibold"><i class="fab fa-js-square"></i> JavaScript</p>
						<progress class="progress bg-[#E94B3CFF] w-56 text-right absolute bottom-[10rem]" value="70" max="100"></progress>
					</div>
					<div class="flex justify-end">
						<p class="mt-2 pt-2 text-right absolute bottom-[8rem] font-semibold"><i class="fas fa-chess-pawn"></i> Pawn</p>
						<progress class="progress bg-[#E94B3CFF] w-56 text-right absolute bottom-[7rem]" value="60" max="100"></progress>
					</div>

				{{-- Gambar samping div diatas --}}
				<div class="flex-1 justify-end">
					<div class="avatar absolute right-[15rem] top-[6.5rem] ">
						<div class="z-[1] w-36 rounded-full">
							<img src="img/lugas.png" loading="lazy"/>
						</div>
						<div class="z-[0] avatar w-36 rounded-full bg-[#e94b3cff] absolute left-[2rem]"></div>
					</div>
				</div>

				<div class="flex-1 justify-start" style="font-family: 'Barlow Condensed', sans-serif;">
					<ul class="z-[1] menu lg:menu-normal bg-white w-56 p-2 rounded-md absolute left-[4rem] top-[23rem] shadow-2xl">
						<a class="menu-title text-2xl text-center font-bold">Sosial Media</a>
						<li class="hover:bg-[#e94b3cff] hover:text-[#2d2926ff] hover:font-semibold"><a href="#"><i class="fab fa-github"></i>Github</a></li>
						<li class="hover:bg-[#e94b3cff] hover:text-[#2d2926ff] hover:font-semibold"><a href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
						<li class="hover:bg-[#e94b3cff] hover:text-[#2d2926ff] hover:font-semibold"><a href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
					</ul>

					<div class="z-[0] w-56 h-52 bg-[#e94b3cff] p-2 rounded-md absolute left-[6rem] top-[21rem]"></div>
				</div>
			</div>
		</div>

@endsection