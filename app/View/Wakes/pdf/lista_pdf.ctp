


	<div class="fecha">
	<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
	</div >

<table id="cabezera">

			<tr class="cabezera">
				<th class="cabezera">
					<div class="imagen">
						<!-- INSERTANDO LOGO-->
						<?php	echo $this->Html->image(('../img/foto2.jpg'),array('class'=>'img'));?>
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
			<?php $acumulador = 0; ?>

			<?php foreach ($wake as $wake): ?>
			<tr>
				<!-- <td><?php echo h($wake['Wake']['id']); ?>&nbsp;</td> -->


				<td><?php echo h($wake['Personal']['full_name']); ?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['payment_day']); ?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['holiday']);?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['extra_hours']);?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['payment_type']);?>&nbsp;</td>
				<td><?php echo h($wake['Wake']['amount']);?>&nbsp;</td>

				<?php $acumulador += $wake['Wake']['amount']; ?>

			</tr>
				
		<?php endforeach; ?>
		
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td><strong>TOTAL</strong></td>
			<td><?php echo $acumulador; ?></td>
		</tr>
		
</table>
