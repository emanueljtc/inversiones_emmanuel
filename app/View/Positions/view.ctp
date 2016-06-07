<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos del Cargo</h4>

					</center>
				</div>
			<div class="bloque">
				<div class="row">
					<div class="col col-sm-4">
						<?php //echo $this->Html->image('../files/Personal/foto/'. $Personal['Personal']['foto_dir'].'/'.'vga_'.$Personal['Personal']['foto']); ?>
						<?php  ?>
						<?php if($position['Position']['position']=="Gerente"){
								echo $this->Html->image('../img/gerente.jpg');

						}else if($position['Position']['position']=="Secretaria"){
								echo $this->Html->image('../img/secretaria.png');
						}else if($position['Position']['position']=="Tecnico"){
								echo $this->Html->image('../img/tecnico.png');
						}  ?>
					</div>
					<div class="clol col-sm-4" style="text-align:left; font-size:18px;">
								<br>

							<strong>Cargo: <?php echo h($position['Position']['position']);?>&nbsp; </strong>

							<br>
							<strong>Horas Trabajadas : <?php echo h($position['Position']['hour_worked']); ?>&nbsp; Horas.</strong>
							<br>
							<strong>Valor por Hora : <?php echo h($position['Position']['time_value']); ?>&nbsp;Bs.</strong>
							<br>
							<strong>Salario Diario : <?php echo h($position['Position']['daily_salary']); ?>&nbsp;Bs.</strong>
							<br><br>

					</div>

		  </div>


		</div>

</div>


<div class="table-responsive">

	<?php if (!empty($position['Personal'])): ?>
	<h3><?php echo __('Personal Relacionado'); ?></h3>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Cedula'); ?></th>
		<th><?php echo __('Nombre'); ?></th>
		<th><?php echo __('Apellido'); ?></th>
		<th><?php echo __('Fecha de Nacimiento'); ?></th>
		<th><?php echo __('Sexo'); ?></th>
		<th><?php echo __('Edad'); ?></th>
		<th><?php echo __('Celular'); ?></th>
		<th><?php echo __('Telefono'); ?></th>
		<th><?php echo __('Correo'); ?></th>
		<th><?php echo __('Direccion'); ?></th>
		<th class="actions"><?php echo __('Acciones'); ?></th>
	</tr>
	<?php foreach ($position['Personal'] as $personal): ?>
		<tr>
			<td><?php echo $personal['dni']; ?></td>
			<td><?php echo $personal['name']; ?></td>
			<td><?php echo $personal['last_name']; ?></td>
			<td><?php echo $personal['born_date']; ?></td>
			<td><?php
						if($personal['sex'] == 0)
						{echo 'Femenino';}
						else{
						echo 'Masculino';} ?></td>
			<td><?php echo $personal['age']; ?></td>
			<td><?php echo $personal['cell_phone']; ?></td>
			<td><?php echo $personal['phone']; ?></td>
			<td><?php echo $personal['email']; ?></td>
			<td><?php echo $personal['address']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__(''), array('controller' => 'personals', 'action' => 'view', $personal['id']), array('class' => 'glyphicon glyphicon-search')); ?>
				<?php echo $this->Html->link(__(''), array('controller' => 'personals', 'action' => 'edit', $personal['id']), array('class' => 'glyphicon glyphicon-edit')); ?>
				<?php  if($current_user['group_id'] == '1'):?>
						<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('controller' => 'personals','action' => 'delete', $personal['id']), array('escape' => false, 'confirm' => __('Esta Seguro de Eliminar al Empleado  %s?', $personal['full_name']))); ?>
			  <?php endif; ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

</div>


</div>
<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Añadir Empleado'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Personal'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Registrar Pago'), array('controller' => 'wakes', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
