@extends('layouts.app')

@section('title','Form')

@section('content')

	<section class="container">
		<form action="{{ (isset($user))? url('Usuario/update'): url('Usuario/save')}}" method="post">
			@csrf
			@isset($user)
			<input name="id" type="hidden" class="form-control" value="{{$user->id}}">
			@endisset

			<div class="row">
				<div class="col-md-8">
					<div class="col-md-4">
						
						<div class="from-group">
							<label for="">Nombre: </label>
							<input name="nombre" type="text" class="form-control" value="{{(isset($user))? $user->nombre: ''}}">
						</div>
					</div>
					<div class="col-md-4">
						<div class="from-group">
							<label for="">Apellido: </label>
							<input name="apellido" type="text" class="form-control" value="{{(isset($user))? $user->apellido: ''}}">
						</div>
					</div>

					<br><br>
					<div class="col-md-4">
							<button type="submit" class="btn btn-primary btn-block">Enviar</button>
					</div>
				</div>

				<div class="col-md-4">
					

				</div>

			</div>

		</form>

	</section>

@endsection