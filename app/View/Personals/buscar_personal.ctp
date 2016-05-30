<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos del Empleado</h4>

					</center>
				</div>
			<div class="bloque">
				<div class="row">
					<div class="col col-sm-4">
						<?php if($personal['Personal']['sex']=='Femenino'){
								echo $this->Html->image('../img/mujer.png');

						}else if($personal['Personal']['sex']=='Masculino'){
								echo $this->Html->image('../img/hombre.jpg');
						} ?>
					</div>
					<div class="clol col-sm-5">
							<br>

							<strong>Fecha de Ingreso : <?php echo h($personal['Personal']['date_reg']); ?> </strong>
							<br>
							<strong>Cargo : <?php echo $this->Html->link($personal['Position']['position'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?></strong>
							<br>
							<strong>Nombre : <?php echo h($personal['Personal']['name']); ?> </strong>
							<br>
							<strong>Apellido : <?php echo h($personal['Personal']['last_name']); ?> </strong>
							<br>
							<strong>Cedula : <?php echo h($personal['Personal']['dni']); ?></strong>
							<br>
							<strong>Sexo : <?php echo h($personal['Personal']['sex']); ?></strong>
							<br>
							<strong>Edad : <?php echo h($personal['Personal']['age']); ?></strong>
							<br>
							<strong>Nacimiento : <?php echo h($personal['Personal']['born_date']); ?></strong>
							<br>
							<strong>Email : <?php echo h($personal['Personal']['email']); ?></strong>
							<br>
							<strong>Direccion : <?php echo h($personal['Personal']['address']); ?></strong>
							<br><br>

					</div>

		  </div>


		</div>

</div>
<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Añadir Empleado'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Personal'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Registrar Pago'), array('controller' => 'wakes', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
