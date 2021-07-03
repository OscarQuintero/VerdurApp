@extends('layouts.main')
@section('contenido')
	<h1>Alta de Productor</h1>

	<form action="{{ route('productor.store') }}" method="POST">
		<label for="Nombre del productor"></label>
		<input type="tezt" name="Nombre del productor" id="Nombre del productor">

		<label for="Direccion"></label>
		<input type="text" name="Direccion" id="Direccion">

		<label for="Ciudad"></label>
		<input type="text" name="Ciudad" id="Ciudad">

		<label for="CP"></label>
		<input type="text" name="CP" id="CP">

		<label for="ruta de la imagen"></label>
		<input type="text" name="ruta de la imagen" id="ruta de la imagen">
		
	</form>

	
@endsection