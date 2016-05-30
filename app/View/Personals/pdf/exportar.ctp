<style>
h3 {

	font-size: 28px;
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
	padding: 2px;
	background-color: #ffffff;
	border: white 1px solid;
}
tr.cabezera {
    padding: 2px;
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
