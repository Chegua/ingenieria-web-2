<section class="container">
	<table class="table table-hover table-bordered">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Apellidos</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($result as $value): ?>
				<tr>
					<td><?=$value['nombre']?></td>	
					<td><?=$value['apellido']?></td>					
				</tr>
			<?php endforeach ?>

		</tbody>
	</table>
</section>