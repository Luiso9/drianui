@extends('layout.navbar')
@section('container')

	
		@section('navbar')
        @parent
            <div class="navbar-center tooltip tooltip-bottom" data-tip="Home">
                <a href="/" class="btn btn-ghost btn-circle hover:text-[#E94B3CFF]"><i class="gg-home"></i></a>
            </div>
            <div class="navbar-center tooltip tooltip-bottom" data-tip="About Me">
                <a href="/about" class="btn btn-ghost btn-circle hover:text-[#E94B3CFF]"><i class="fas fa-share"></i></a>
            </div>
            <div class="navbar-center tooltip tooltip-bottom" data-tip="Project">
                <a href="/project" class="btn btn-ghost btn-circle text-[#E94B3CFF] hover:text-[#E94B3CFF]"><i class="fas fa-project-diagram"></i></a>
	        </div>
        @stop


		<div class="container mx-auto absolute top-[5rem] right-[3rem]">
			<div class="columns-3">
				<div class="grid-row-2 gap-4">

       				 @foreach ($table as $github)
					<div class="card h-auto w-96 shadow-xl rounded mt-8 hover:bg-[#e94b3cff] hover:scale-105 hover:transition-all hover:ease-out transition-all ease-in hover:text-bold mt-8 mx-auto">
						<div class="card-body">
							<a class="card-title text-xl font-bold">{{ $github->title }}
								<div class="badge badge-neutral badge-md">Public</div></a>
							<p>{{$github->deskripsi}}</p>
							<div class="card-actions justify-end mt-4 pt-4">
								<div class="badge badge-outline">{{$github->tag}}</div>
							</div>
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</div>

		<style>
			
			@layer base {
				h1 {
					font-family: 'Rubik', sans-serif;
				}

				a {
					font-family: 'Barlow Condensed', sans-serif;
				}
			}

		</style>

@endsection