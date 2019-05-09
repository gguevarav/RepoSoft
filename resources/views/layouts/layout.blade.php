<html lang="es">
<head>
	<title>Repositorio de programas</title>
	<meta charset="utf-8">
	<meta name="viewport"
	content="width=device-width, initial-scale=1, user-scalable=yes">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
</head>
<body>
	<div class="container" style="margin-top: 100px">
		<section id="Menu">
			<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<a class="navbar-brand" href="#">Navbar</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
					<div class="navbar-nav">
						<a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
						<a class="nav-item nav-link" href="#">Features</a>
						<a class="nav-item nav-link" href="#">Pricing</a>
						<a class="nav-item nav-link disabled" href="#">Disabled</a>
					</div>
				</div>
			</nav>
		</section>
		<div>
			<!-- Con la siguiente línea incluimos la vista que necesitamos -->
			@yield('content')
		</div>
		<footer>
			<hr>
			<small>&copy; - 2019 - Gemis Daniel Guevara Villeda - EMPAGUA</small>
		</footer>
	</div>
	<style type="text/css">
	.table {
		border-top: 2px solid #ccc;

	}
</style>
</body>
</html>