<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="css/main.css">
		<title>DrianUI</title>
		<link href='https://css.gg/home.css' rel='stylesheet'>
		<link href="https://cdn.jsdelivr.net/npm/daisyui@2.39.1/dist/full.css" rel="stylesheet" type="text/css" />
		<link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@600&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Barlow+Condensed:wght@200&display=swap" rel="stylesheet">
        <link rel="icon" type="image/x-icon" href="img/profile.png">
	</head>
	<body>
		
			<div class="container-fluid">
				<div class="container mx-auto px-4">
					<div class="navbar bg-transparent sticky shadow-xl">
						<div class="navbar-start group">
							<a href="/" class="btn btn-ghost rounded-md text-xl capitalize group-hover:text-[#E94B3CFF]">Drian<span class="text-[#E94B3CFF] group-hover:text-black">UI</span></a>
						</div>
						@section('navbar')
						
						@show

				@auth
				<div class="flex justify-end">
					<div class="dropdown dropdown-end">
						<label tabindex="0" class="btn btn-ghost btn-circle avatar">
							<div class="w-10 rounded-full">
								<img src="{{auth() -> user() -> avatar}}" loading="lazy"/>
							</div>
						</label>
						<ul tabindex="0" class="mt-3 p-2 shadow menu menu-compact dropdown-content bg-base-100 rounded-box w-52">
							<li>
								<a class="">
									{{auth() -> user() -> username}}#{{auth() -> user() -> discriminator}}
								</a>
							</li>
							<li><a href="{{route("logout")}}">Logout</a></li>
						</ul>
						@else
						<div class="navbar-end">
							<div class="dropdown dropdown-end">
								<label tabindex="0" class="btn btn-ghost btn-circle avatar">
									<div class="w-10 rounded-full">
										<img src="img/ico.gif" loading="lazy"/>
									</div>
								</label>
								<ul tabindex="0" class="mt-3 p-2 shadow menu dropdown-content bg-base-100 rounded-box w-52">
									<li>
										<a class="underline" href="https://discord.com/oauth2/authorize?client_id={{env("DISCORD_CLIENT_ID")}}&redirect_uri={{env("DISCORD_REDIRECT_URI")}}&response_type=code&scope=identify%20email">Login</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				@endauth
			</div>

		<div>
			@yield('container')
		</div>

		<script src="https://cdn.tailwindcss.com"></script>
		<script src="https://kit.fontawesome.com/60f4a26759.js" crossorigin="anonymous"></script>
	</body>
</html>