


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

						<th>Cargo</th>
						<th>Horas Trabajadas</th>
						<th>Valor de la Hora</th>
						<th>Salario Diario</th>


				</tr>
		</thead>
		<tbody>

			<?php foreach ($position as $position): ?>
			<tr>

				<td><?php echo h($position['Position']['position']); ?>&nbsp;</td>
				<td><?php echo h($position['Position']['hour_worked']); ?>&nbsp;Horas</td>
				<td><?php echo h($position['Position']['time_value']); ?>&nbsp;bs</td>
				<td><?php echo h($position['Position']['daily_salary']); ?>&nbsp;bs</td>

			</tr>
		<?php endforeach; ?>
</table>
