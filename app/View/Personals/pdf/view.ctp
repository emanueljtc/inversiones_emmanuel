														<center>
								<h1>Inversiones Emmanuel 1108 A.C</h1>
												<h2>RIF. J-40136924-3</h2>
																<br>
												<h3>Constancia de Trabajo</h3>

														</center>











<!--
<div class="fecha">
<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div >

<table id="cabezera">

		<tr class="cabezera">
			<th class="cabezera">
				<div class="destacada">
					 <img src="/var/www/html/inversiones_emmanuel/app/webroot/img/foto2.jpg" width="210px" height="150px" alt="Inversiones Emmanuel"> INSERTANDO LOGO
					 <?php	echo $this->Html->image(('../img/foto2.jpg'),array('class'=>'img'));?>
				</div>
			</th>
			<th class="cabezera">

					<h3>Reporte Individual</h3>

			</th>
</table>
<br>
		<table id="datos">
			<thead>
					<tr>
						<th>Cargo</th>
						<th>Fecha de Ingreso</th>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Edad</th>
						<th>Telefono</th>
						<th>Correo</th>
					</tr>
			</thead>

				<tr>
							<td>
									<?php echo $this->Html->link($personal['Position']['position'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>

							</td>
					     <td>
							  	<?php echo $this->Html->link($personal['Personal']['date_reg'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?>

							 </td>
							 <td>
							  	<?php echo $this->Html->link($personal['Personal']['name'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?>

							 </td>
							 <td>
							  	<?php echo $this->Html->link($personal['Personal']['last_name'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?>

							 </td>

					     <td>
							 		<?php echo $this->Html->link($personal['Personal']['age'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?>

							 </td>
					     <td>
							 		<?php echo $this->Html->link($personal['Personal']['cell_phone'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?>

							 </td>
							 <td>
							  	<?php echo $this->Html->link($personal['Personal']['email'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?>

							 </td>
				</tr>

		</table> -->
