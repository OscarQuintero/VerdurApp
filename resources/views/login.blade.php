@extends('layouts.main')
@section('contenido')
	<h1>Log In</h1>
	
	<form id="formulario-login" method="POST" action="store.php">
		<label for="user">Nombre de Usuario</label>
		<input type="pass" name="user" id="">
		<br/>
		<label for="pass">Contrasena</label>
		<input type="text" name="pass" id="">
		<br/>
		
		<br/>
		<input type="submit" value="Ingresar">

	</form>
	<hr/>
	
@endsection