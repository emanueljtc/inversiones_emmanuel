<style>
.title{
	background-color: #fafafa;
  margin: 1rem;
  padding: 1rem;
	position: relative;
  /*border: 2px solid #ccc;*/
  /* IMPORTANTE */
  text-align: center;
	z-index: 2;
}
.imagen{
	background: red;
  width: 210px;
  /*IMPORTANTE*/
  height: 150px;
  position: absolute;
  top: 10%;
  transform: translateY(-50%);
	z-index: 1;
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
h3{
	background:#fff;
	color: #000;
	font-family:'Gill Sans','lucida grande', helvetica, arial, sans-serif;;
	font-size: 180%;


}
table#datos {
    width: 100%;
		text-align: center;
		border-collapse: collapse;
		border: 1px solid #ddd;
		text-decoration: none;
}
</style>



				<div class="title">
					<div class="imagen">
					<img src="/var/www/html/inversiones_emmanuel/app/webroot/img/foto2.jpg" width="210px" height="150px" alt="Inversiones Emmanuel"> <!-- INSERTANDO LOGO-->
					</div>
					<h3>CONSTANCIA PAGO DE SALARIO</h3>
					<h2>Factura: 000<?php echo h($wake['Wake']['id']); ?> del <?php echo h($wake['Wake']['start']); ?> al <?php echo h($wake['Wake']['end']); ?></h2>
				</div>
<div class="bloque1">
	<strong>DATOS DE FACTURA:

	</strong>
	<br><br><br><br>
	<table id="datos">
		<thead>
				<tr>
					<th>Empleado</th>
					<th>Cedula</th>
					<th>Cargo</th>
					<th>Fecha de Pago</th>
					<th>Tipo de Pago</th>
					<th>Dias Feriados</th>
					<th>Horas Extras</th>
					<th>Monto Total</th>
				</tr>
		</thead>

			<tr>
						<td>
								<?php echo $this->Html->link($wake['Personal']['full_name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?>
						</td>
						 <td>
								<?php echo $this->Html->link($wake['Personal']['dni'], array('controller' => 'personals', 'action' => 'index', $wake['Position']['id'])); ?>
						 </td>
						 <td>
							<?php echo $this->Html->link($wake['Wake']['position_id'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['position'])); ?>
						 </td>
						 <td>
								<?php echo h($wake['Wake']['payment_day']); ?>

						 </td>
						 <td>
						 		<?php echo h($wake['Wake']['payment_type']); ?>
						</td>
						 <td>
							 	<?php echo h($wake['Wake']['holiday']); ?>
						 </td>
						 <td>
							 <?php echo h($wake['Wake']['extra_hours']); ?>
						 </td>
						 <td>
							 <?php echo h($wake['Wake']['amount']); ?>
						 </td>

			</tr>

	</table>
								<br><br><br><br>
									<center>
									<strong>________________________</strong>
									<br><br>
									         <strong>FIRMA</strong>
									<center>

</div>










<!-- <div class="fecha">
<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div > -->
