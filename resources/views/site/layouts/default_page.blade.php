<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1.0"
		/>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
		<!-- <link
			rel="stylesheet"
			href="style.css"
		/> -->
		<script
			src="https://kit.fontawesome.com/a669ad54c0.js"
			crossorigin="anonymous"
		></script>

		<title>RPiDesk - @yield('titulo')</title>
	</head>

	<body>
    @yield('body')
  </body>
</html>