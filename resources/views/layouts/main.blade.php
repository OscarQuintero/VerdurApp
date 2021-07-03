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
			<li><a href="/acercade">Acerca de VerdurApp</li>
		</ul>
		<ul>
			<li><a href="">Log In</a></li>
			<li><a href="/signup">Sign Up</a></li>
			 
		</ul>
	</navbar>
	<main>
		<h1>VerdurApp</h1>
		@yield('contenido')
	</main>
	
</body>
<footer>
	<ul>
		<li>Programacion para Internet</li>
		<li>Seccion D13</li>
		<li>Oscar Quintero</li>
		<li>VerdurApp</li>
		<li>2021A</li>
	</ul>
</footer>
</html>