@extends('layouts.main')
@section('contenido')
	<h1>Lista de Tipos de Productos</h1>

	<table>
		<thead>
			<tr>
				<td>Tipo de Producto</td>

			</tr>
		</thead>
		<tbody>
			@foreach ($tipos_de_productos as $tipo_de_producto)
			<tr>{{ $tipo_de_producto->nombre }}</tr>
			@endforeach
		</tbody>
	</table>

@endsection

