


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

						<h3>Lista General de Salarios</h3>

				</th>
</table>
<br>
<table id="datos">
		<thead>
				<tr>

						<th>Empleado</th>
						<th>Fecha de Pago</th>
						<th>Dias Feriados</th>
						<th>Horas Extras</th>
						<th>Tipo de Pago</th>
						<th>Monto Total</th>


				</tr>
		</thead>
		<tbody>

			<?php foreach ($wake as $wake): ?>
			<tr>
				<!-- <td><?php echo h($wake['Wake']['id']); ?>&nbsp;</td> -->


				<td><?php echo $this->Html->link($wake['Personal']['full_name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['payment_day']); ?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['holiday']);?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['extra_hours']);?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['payment_type']);?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['amount']);?>&nbsp;</td>


			</tr>
		<?php endforeach; ?>
</table>
