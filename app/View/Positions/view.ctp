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



<!--<div class="actions">
	<h3><?php //echo __('Actions'); ?></h3>
	<ul>
		<li><?php /*echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Position'), array('action' => 'delete', $position['Position']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $position['Position']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); */?> </li>
	</ul>
</div>-->

<!--<div class="table-responsive">
	<h3><?php //echo __('Related Dh Extras'); ?></h3>
	<?php /*if (!empty($position['DhExtra'])): ?>
	<table class="table table-bordered table-hover">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Personal Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('N Day'); ?></th>
		<th><?php echo __('N Hour'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Payment Day'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['DhExtra'] as $dhExtra): ?>
		<tr>
			<td><?php echo $dhExtra['id']; ?></td>
			<td><?php echo $dhExtra['personal_id']; ?></td>
			<td><?php echo $dhExtra['position_id']; ?></td>
			<td><?php echo $dhExtra['n_day']; ?></td>
			<td><?php echo $dhExtra['n_hour']; ?></td>
			<td><?php echo $dhExtra['amount']; ?></td>
			<td><?php echo $dhExtra['payment_day']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dh_extras', 'action' => 'view', $dhExtra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dh_extras', 'action' => 'edit', $dhExtra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dh_extras', 'action' => 'delete', $dhExtra['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dhExtra['id'])));?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; */ ?>
</div>-->
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
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'personals', 'action' => 'view', $personal['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'personals', 'action' => 'edit', $personal['id'])); ?>
				<?php echo $this->Form->postLink(__('Eliminar'), array('controller' => 'personals', 'action' => 'delete', $personal['id']), array('confirm' => __('Are you sure you want to delete # %s?', $personal['id']))); ?>
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
