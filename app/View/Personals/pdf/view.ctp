<style>
h3 {
	text-align: center;
	font-size: 30px;
	font-family:Lucida Sans Unicode;
	text-decoration: underline;
}
p {
	font-size: 20px;
	font-weight: bold;
	text-decoration: none;
	text-align : justify;

}
pastor{
	font-size: 20px;
	font-weight: bold;
	text-align: left;
}
copastor{
	font-size: 20px;
	font-weight: bold;
	text-align: right;
}
table, th, td {

    font-size: 18px;
}
th {
    padding: 5px;
    text-align: left;
    background-color: #940616;

}
td {
    padding: 5px;
    text-align: center;


}

table#forma {
    width: 100%;


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
<div class="imagen">
<img src="/var/www/html/inversiones_emmanuel/app/webroot/img/foto2.jpg" width="300px" height="200px" alt="Texto Alternativo"> <!-- INSERTANDO LOGO-->
</div>
<div class="fecha">
<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div >
<br>
	<membrete>
		Rep&uacute;blica Bolivarina de Venezuela<br>
		Maracay Edo. Aragua<br>
		Inversiones Emmanuel 1108 C.A
	</membrete>

	<br><br><br><br><br>
	<h3>Lista General del Personal Registrado</h3>
	<br><br>

	 <p> Datos del Miembro: </p>
	<br><br>

		<br>
		<table id="forma" border="1">
			<tr>


				<th>Cargo</th>
				<th>Fecha de Ingreso</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Edad</th>
				<th>Telefono</th>
				<th>Correo</th>







			</tr>
			<tr>

						<td>
								<?php echo $this->Html->link($personal['Position']['position'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
						</td>
				     <td>
						  	<?php echo $this->Html->link($personal['Personal']['date_reg'], array('controller' => 'Personals', 'action' => 'index', $personal['Personal']['id'])); ?>
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
