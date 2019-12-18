@extends('layouts.app')

@section('title','List')

@section('content')

<section class="container">
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>Acciones</th>

			</tr>
		</thead>
		<tbody>
			@foreach($users as $user)
			<tr>
				<th>{{$user->nombre}}</th>
				<th>{{$user->apellido}}</th>
				<th>
					<a class="btn btn-warning btn-sm" href="{{url('Usuario/edit/'.$user->id)}}">Editar</a>
					<a class="btn btn-danger btn-sm" href="{{url('Usuario/delete/'.$user->id)}}">Eliminar</a>
				</th>

			</tr>
			@endforeach
		</tbody>
	</table>
</section>
@endsection