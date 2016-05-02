<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos del Empleado</h4>

					</center>
				</div>
			<div class="bloque">
				<div class="row">
					<div class="col col-sm-4">
						<?php //echo $this->Html->image('../files/Personal/foto/'. $Personal['Personal']['foto_dir'].'/'.'vga_'.$Personal['Personal']['foto']); ?>
						<?php echo $this->Html->image('../img/hombre.png'); ?>
					</div>
					<div class="clol col-sm-5">
								<br>

							<strong>Fecha de Ingreso : <?php echo h($personal['Personal']['date_reg']); ?> </strong>

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
<!-- <div class="personals view">
<h2><?php echo __('Personal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personal['Position']['id'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Reg'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['date_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born Date'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['born_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal'), array('action' => 'edit', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal'), array('action' => 'delete', $personal['Personal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $personal['Personal']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
