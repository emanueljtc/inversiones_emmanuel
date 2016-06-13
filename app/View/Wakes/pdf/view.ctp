<style>
.titulo{
	font-size:40px;
	font-weight:bold;
}

h3{
	font-family:'Gill Sans','lucida grande', helvetica, arial, sans-serif;;
	font-size: 180%;
}

h4{


}
table {
    	width: 100%;
		text-align: center;
		border-collapse: collapse;
		text-decoration: none;
}

table .cabeza
{
	background-color:#85A6B1;
}

table .contenido
{
	background-color:#8BD7D1;
}

table .subtitulo
{
	background-color:#CAEDDE;
}

.centrar
{
	text-align:center;
}


</style>
<table class="tabla">
	<tr class="cabeza">
		<td class="centrar titulo" colspan="3">RECIBO DE PAGO</td>
	</tr>
	<tr class="contenido">
		<td class="centrar" style="background-color: fff;"><?php	echo $this->Html->image(('../img/foto2.jpg'),array(''=>''));?></td>
		<td class="centrar"><h2>FACTURA Nº: 000<?php echo h($wake['Wake']['id']); ?></h2></td>
		<td class="centrar"><h2><?php echo h($wake['Wake']['start']); ?> al <?php echo h($wake['Wake']['end']); ?></h2></td>
	</tr>
	<tr class="cabeza">
		<td><strong>EMPLEADO :</strong></td>
		<td><strong>CEDULA :</strong></td>
		<td><strong>FECHA DE PAGO: </strong>:</td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo h($wake['Personal']['full_name']); ?></strong></td>
		<td><strong><?php echo h($wake['Personal']['dni']); ?></strong></td>
		<td><strong><?php echo h($wake['Wake']['payment_day']); ?> </strong></td>
	</tr>
	<tr class="cabeza">
		<td><strong>CARGO : </strong></td>
		<td><strong>SALARIO DIARIO :</strong></td>
		<td><strong>TIPO DE PAGO :</strong></td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo h($wake['Position']['position']); ?></strong></td>
		<td><strong><?php echo h($wake['Position']['daily_salary']); ?> Bs.</strong></td>
		<td><strong><?php echo h($wake['Wake']['payment_type']); ?></strong></td>
	</tr>
	<tr class="subtitulo">
		<td colspan="3"><h4>PAGO POR HORAS EXTRAS Y DIAS FERIADOS: </h4></td>
	</tr>
	<tr class="cabeza">
		<td><strong>HORAS EXTRAS :</strong></td>
		<td><strong>DIAS FERIADOS :</strong></td>
		<td><strong>PAGO:</strong></td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo h($wake['Wake']['extra_hours']); ?>Horas</strong></td>
		<td><strong><?php echo h($wake['Wake']['holiday']); ?>Dias</strong></td>
		<td><strong><?php echo h($wake['Wake']['amount']); ?> Bs.</strong></td>
	</tr>
	<tr class="subtitulo">
		<td colspan="3"><h4>PAGO POR RANGO DE TIEMPO: </h4></td>
	</tr>
	<tr class="cabeza">
		<td><strong>FECHA INICIO :</strong></td>
		<td><strong>FECHA FIN : </strong></td>
		<td><strong>PAGO: </strong></td>
	</tr>
	<tr class="contenido">
		<td><strong><?php echo h($wake['Wake']['start']); ?></strong></td>
		<td><strong><?php echo h($wake['Wake']['end']); ?></strong></td>
		<td><strong><?php echo h($wake['Wake']['salary_date']); ?> Bs.</strong></td>
	</tr>
	<tr class="contenido"><?php $montototal = $wake['Wake']['amount'] + $wake['Wake']['salary_date'];?>
		<td></td>
		<td><h4>MONTO TOTAL: </h4></td>
		<td><strong> <?php echo h($montototal); ?> Bs.</strong></td>
	</tr>
</table>


	<!-- <strong>DATOS DE FACTURA:

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
							<?php echo $this->Html->link($wake['Position']['position'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?>
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
									<center> -->

</div>










<!-- <div class="fecha">
<?php echo "" . date("d") . "/" . date("m") . "/" . date("Y"); ?>
</div > -->
