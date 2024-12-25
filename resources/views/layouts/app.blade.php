<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>E-Commerce store</title>
	@vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body>
	<main>
		<x-navbar />
		@yield('main')
	</main>
</body>

</html>