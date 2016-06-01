
	<div class="fecha">
	<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
	</div >

<table id="cabezera">

			<tr class="cabezera">
				<th class="cabezera">
					<div class="imagen">
					<img src="/var/www/html/inversiones_emmanuel/app/webroot/img/foto2.jpg" width="300px" height="200px" alt="Texto Alternativo"> <!-- INSERTANDO LOGO-->
					</div>
				</th>
				<th class="cabezera">

						<h3>Lista General del Personal Registrado</h3>

				</th>
</table>
<br>
<table id="datos">
		<thead>
				<tr>

						<th>Nombres</th>
						<th>Apellidos</th>
						<th>Cedula</th>
						<th>Celular</th>
						<th>Cargo</th>

				</tr>
		</thead>
		<tbody>
		<?php foreach ($personals as $personal): ?>
		<tr>
			<!-- <td><?php echo h($personal['Personal']['id']); ?>&nbsp;</td> -->


			<td><?php echo h($personal['Personal']['name']); ?>&nbsp;</td>
			<td><?php echo h($personal['Personal']['last_name']); ?>&nbsp;</td>
			<td><?php echo h($personal['Personal']['dni']); ?>&nbsp;</td>
			<td><?php echo h($personal['Personal']['cell_phone']);?>&nbsp;</td>
		<td>
				<?php echo $this->Html->link($personal['Position']['position'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
			</td>

		</tr>
	<?php endforeach; ?>
</table>
