<section class="container">
	<form action="<?=URL?>/usuarios/create" method="post">
		<div class="row">
			<div class="col-md-8">
				<div class="col-md-4">
					<div class="from-group">
						<label for="">Nombre: </label>
						<input name="nombre" type="text" class="form-control">
					</div>
				</div>
				<div class="col-md-4">
					<div class="from-group">
						<label for="">Apellido: </label>
						<input name="apellido" type="text" class="form-control">
					</div>
				</div>

				<div class="col-md-4">
					<div class="from-group">
						<label for="">Edad: </label>
						<input name="edad" type="text" class="form-control">
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