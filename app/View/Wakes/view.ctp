<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos de Factura</h4>

					</center>
				</div>
			<div class="bloque">
				<div class="row">
					<div class="col col-sm-4">
						<?php if($wake['Personal']['sex']=='Femenino'){
								echo $this->Html->image('../img/mujer.png');

						}else if($wake['Personal']['sex']=='Masculino'){
								echo $this->Html->image('../img/hombre.jpg');
						} ?>
					</div>
					<div class="clol col-sm-5">
								<br>
							<strong>Factura Nº : 000<?php echo h($wake['Wake']['id']); ?> </strong>
						  <br>
							<strong>Fecha de Pago : <?php echo h($wake['Wake']['payment_day']); ?> </strong>
					    <br>
							<strong>Empleado : <?php echo $this->Html->link($wake['Personal']['full_name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?> </strong>
							<br>
							<strong>Cedula : <?php echo $this->Html->link($wake['Personal']['dni'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?></strong>
							<br>
							<strong>Cargo : <?php echo $this->Html->link($wake['Position']['position'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?> </strong>
							<br>
							<strong>Salario Diario : <?php echo h($wake['Position']['daily_salary']); ?>Bs.</strong>
							<br>
							<strong>Tipo de Pago : <?php echo h($wake['Wake']['payment_type']); ?></strong>
							<br>
							<h4>Pago por Horas Extras y Dias Feriados: </h4>
							<strong>Horas Extras : <?php echo h($wake['Wake']['extra_hours']); ?>Horas</strong>
							<br>
							<strong>Dias Feriados : <?php echo h($wake['Wake']['holiday']); ?>Dias</strong>
							<br>
							<strong>Pago: <?php echo h($wake['Wake']['amount']); ?>Bs.</strong>
							<br>
							<h4>Pago por Rango de Tiempo: </h4>
							<strong>Fecha Inicio : <?php echo h($wake['Wake']['start']); ?></strong>
							<br>
							<strong>Fecha Fin : <?php echo h($wake['Wake']['end']); ?></strong>
							<br>
							<strong>Pago: <?php echo h($wake['Wake']['salary_date']); ?>Bs.</strong>
							<br>
							<h4>Monto Total: </h4>
							<?php $montototal = $wake['Wake']['amount'] + $wake['Wake']['salary_date'];?>
							<strong> <?php echo h($montototal); ?>Bs.</strong>
							<br>
							<br>


					</div>

		  </div>


		</div>

</div>
<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Registrar Pago'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Salarios'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Lista del Personal'), array('controller' => 'personals', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
