<!DOCTYPE html>
<html lang="es">
<head>
	<title>VerdurApp</title>
	<meta charset="utf-8">
</head>
<body>
	<navbar>
		<ul>
			<li><a href="/">VerdurApp</a></li>
			<li><a href="/productores">Productores</li>
			<li><a href="/acercade">Acerca del proyecto</li>
		</ul>
		<ul>
			<li><a href="/login">Log In</a></li>
			<li><a href="/signup">Sign Up</a></li>
		</ul>
	</navbar>
	<main>
		<h1>VerdurApp</h1>
		@yield('contenido')
	</main>
	
</body>
</html>
