<!DOCTYPE html>
<html>
<head>
	<title>Web Tracer Alumni</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style>
		svg {
			margin: 0 10px;
		}
		.fg a[href] {
			text-decoration: none;
			color: black;
		}
		.fg a[href]:hover {
			color: lightseagreen;
			transition: 0.5s;
		}
		td {
			position: relative;
			bottom: 10px;
		}
		p {
			text-indent: 2rem;
		}
	</style>
</head>
<body>
	<main>
		<div class="flex">
			<div class="fg">
				<img src="{{ asset('OIP.jpg') }}" style="border-radius: 100%;" width="150px">
			</div>

			<div class="fg" style="flex-grow: 7;">
				<h1>Web Tracer Alumni SMKN 4 Bandung</h1>
				<p style="position: relative;right: 30px;bottom: 10px;">Lihat Alumni Secara Online</p>
			</div>
		</div>

        @yield('content')
    </main>
</body>
</html>
