<!doctype html>
<html lang="e">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="">
	<meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
	<meta name="generator" content="Jekyll v4.1.1">
	<title>Signin Template · Bootstrap</title>

	<link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

	<!-- Bootstrap core CSS -->
	<link href="<?= constant('URL'); ?>public/assets/dist/css/bootstrap.min.css" rel="stylesheet">

	<style>
		.bd-placeholder-img {
			font-size: 1.125rem;
			text-anchor: middle;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}

		@media (min-width: 768px) {
			.bd-placeholder-img-lg {
				font-size: 3.5rem;
			}
		}
	</style>
	<!-- Custom styles for this template -->
	<link href="<?= constant('URL'); ?>public/signin.css" rel="stylesheet">
</head>

<body class="text-center">
	<form class="form-signin">
		<img class="mb-4" src="<?= constant('URL'); ?>public/assets/brand/bootstrap-solid.svg" alt="" width="72" height="72">
		<h1 class="h3 mb-3 font-weight-normal">Ingreso Panel Administración</h1>

		<label for="email" class="sr-only">Correo Electronico</label>
		<input type="email" id="email" class="form-control" placeholder="Correo Electronico" required autofocus>

		<label for="password" class="sr-only">Contraseña</label>
		<input type="password" id="password" class="form-control" placeholder="Contraseña" required>

		<button class="btn btn-lg btn-primary btn-block" type="submit">Entrar</button>

		<p class="mt-5 mb-3 text-muted">&copy; 2020</p>
	</form>
</body>

</html>