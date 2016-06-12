<style>
h3{
			text-decoration: underline;
			font-family: "Times New Roman", Georgia, Serif;

}
p{
	text-decoration: none;
	text-align: justify;
	font-family: "Times New Roman", Georgia, Serif;
	font-size: 130%;
	text-indent: 3em;
}
a:link {
    color: #000;
		text-decoration: none;
}
img{
	width: 150px;
	height: 130px;
	float: left;
}
</style>
<br>
<?php	echo $this->Html->image(('../img/foto2.jpg'),array('class'=>'img'));?>

														<center>
								<h1>Inversiones Emmanuel 1108 A.C</h1>
											<h2>RIF. J-40136924-3</h2>
															<br><br>
									  <h3>Constancia de Trabajo</h3>
														</center>
<br>
<p>
				Hacemos constar por medio de la presente que <strong><?php echo $this->Html->link($personal['Personal']['full_name'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?></strong>,
		 titular de la cedula de identidad <strong>Nº <?php echo $this->Html->link($personal['Personal']['dni'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id']));?></strong>, mayor de edad,
		 domiciliado en <strong><?php echo $this->Html->link($personal['Personal']['address'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id']));?></strong>, desempeña el cargo de
		 <strong><?php echo $this->Html->link($personal['Position']['position'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id']));?></strong> dentro de nuestra empresa desde el
		 <strong><?php echo $this->Html->link($personal['Personal']['date_reg'], array('controller' => 'Personals', 'action' => 'view', $personal['Personal']['id'])); ?></strong>, y demuestra ser una persona servicial, puntual
		 y responsable en las labores encomendadas.
</p>
<br>
<p>
				Se expide la presente constancia a la parte interesada en Maracay, Estado Aragua Venezuela
			a los <?php echo date("d"); ?> dias del mes <?php echo date("m"); ?> del
			<?php echo date("Y"); ?>.
</p>
<br><br><br>
															  <center>

											   _______________________
												 		      <br>
															 Presidente
										 						  <br>
											<strong>Jaime G. Romero</strong>
																	<br>

															 </center>








<!--
<div class="fecha">
<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div >

<table id="cabezera">

		<tr class="cabezera">
			<th class="cabezera">
				<div class="destacada">
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
