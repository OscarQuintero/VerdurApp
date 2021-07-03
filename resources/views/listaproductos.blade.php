@extends('layouts.main')
@section('contenido')
<h1>Lista de Productos</h1>
<table>
		<thead>
			<tr>
				<td>Producto</td>
				<td>Tipo de Producto</td>

			</tr>
		</thead>
		<tbody>
			@foreach ($productos as $producto)
			<tr>
				<td>{{ $producto->nombre }}</td>
				<td>{{ $producto->tipo_de_producto_id}}</td>
			</tr>
				
			@endforeach
		</tbody>
	</table>
@endsection
