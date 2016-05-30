<style>
h3 {

	font-size: 30px;
	font-family:Lucida Sans Unicode;
	text-decoration: none;
}
p {
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	text-align : justify;

}
a.nounderline:link
{
 text-decoration:none;
}
table, thead,th, td {
		font-size: 18px;

}
th{
    padding: 5px;
    text-align: left;
		color: black;
    background-color: #16c8e6;
		text-decoration: none;
		border: #ddd 1px solid;


}
td {
    padding: 5px;
    text-align: left;
		border: #ddd 1px solid;

}

table#cabezera {
    width: 80%;
		text-align: center;
		border-collapse: separate;
		text-decoration: none;

}
th.cabezera{
	padding: 5px;
	ext-align: left;
	background-color: #ffffff;
	border: white 1px solid;
}
tr.cabezera {
    padding: 5px;
		text-align: left;
		border: white 1px solid;
}
table#datos {
    width: 100%;
		text-align: center;
		border-collapse: collapse;
		border: 1px solid #ddd;
		text-decoration: none;
}

membrete{
	font-size: 25px;
	font-weight: bold;
	text-decoration: none;
}
.fecha{
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	text-align: right;
}
</style>
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

		</table>
