<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos de Factura</h4>

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
							<strong>Factura Nº : <?php echo h($wake['Wake']['id']); ?> </strong>
						  <br>
							<strong>Fecha de Pago : <?php echo h($wake['Wake']['payment_day']); ?> </strong>
					    <br>
							<strong>Fecha Inicio : <?php echo h($wake['Wake']['start']); ?></strong>
							<br>
							<strong>Fecha Fin : <?php echo h($wake['Wake']['end']); ?></strong>
							<br>
							<strong>Empleado : <?php echo $this->Html->link($wake['Personal']['full_name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?> </strong>
							<br>
							<strong>Cedula : <?php echo $this->Html->link($wake['Personal']['dni'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?></strong>
							<br>
							<strong>Cargo : <?php echo $this->Html->link($wake['Position']['position'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?> </strong>
							<br>
							<strong>Tipo de Pago : <?php echo h($wake['Wake']['payment_type']); ?></strong>
							<br>
							<strong>Monto Horas Extras : <?php echo $this->Html->link($wake['DhExtra']['amount'], array('controller' => 'positions', 'action' => 'view', $wake['DhExtra']['id'])); ?></strong>
							<br>
							<strong>Monto Total : <?php echo h($wake['Wake']['amount']); ?></strong>
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
<!-- <div class="wakes view">
<h2><?php echo __('Wake'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($wake['Wake']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wake['Personal']['name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wake['Position']['id'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dh Extra'); ?></dt>
		<dd>
			<?php echo $this->Html->link($wake['DhExtra']['id'], array('controller' => 'dh_extras', 'action' => 'view', $wake['DhExtra']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Day'); ?></dt>
		<dd>
			<?php echo h($wake['Wake']['payment_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($wake['Wake']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Type'); ?></dt>
		<dd>
			<?php echo h($wake['Wake']['payment_type']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Start'); ?></dt>
		<dd>
			<?php echo h($wake['Wake']['start']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('End'); ?></dt>
		<dd>
			<?php echo h($wake['Wake']['end']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Wake'), array('action' => 'edit', $wake['Wake']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Wake'), array('action' => 'delete', $wake['Wake']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wake['Wake']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
