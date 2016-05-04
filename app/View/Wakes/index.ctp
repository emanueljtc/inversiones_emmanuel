<div>


		<div id="page-wrapper">

				<div class="container-fluid">

						<!-- Page Heading -->
						<div class="row">
								<div class="col-lg-12">
										<h1 class="page-header">
												<?php echo __('Lista de Salarios'); ?>
										</h1>
										<ol class="breadcrumb">
												<li>
														<i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
												</li>
												<li class="active">
														<i class="fa fa-table"></i> Lista de Salarios
												</li>
										</ol>
								</div>
						</div>
						<!-- /.row -->

						<div class="row">
								<div class="col-lg-6">

										<div class="table-responsive">
												<table class="table table-bordered table-hover">
														<thead>
																<tr>

																		<th><?php echo $this->Paginator->sort('Empleado'); ?></th>
																		<th><?php echo $this->Paginator->sort('Fecha de Pago'); ?></th>
																		<th><?php echo $this->Paginator->sort('Dias Feriados'); ?></th>
																		<th><?php echo $this->Paginator->sort('Horas Extras'); ?></th>
																		<th><?php echo $this->Paginator->sort('Tipo de Pago'); ?></th>
																		<th><?php echo $this->Paginator->sort('Monto Total');?></th>

																		<th class="actions"><?php echo __('Acciones'); ?></th>
																</tr>
														</thead>
														<tbody>
														<?php foreach ($wakes as $wake): ?>
														<tr>
															<!-- <td><?php echo h($personal['Personal']['id']); ?>&nbsp;</td> -->


															<td><?php echo $this->Html->link($wake['Personal']['full_name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?>&nbsp;</td>
															<td><?php echo h($wake['Wake']['payment_day']); ?>&nbsp;</td>
															<td><?php echo $this->Html->link($wake['DhExtra']['n_day'], array('controller' => 'dh_extras', 'action' => 'view', $wake['DhExtra']['id'])); ?>&nbsp;</td>
															<td><?php echo $this->Html->link($wake['DhExtra']['n_hour'], array('controller' => 'dh_extras', 'action' => 'view', $wake['DhExtra']['id'])); ?>&nbsp;</td>
															<td><?php echo h($wake['Wake']['payment_type']);?>&nbsp;</td>
															<td><?php echo h($wake['Wake']['amount']);?>&nbsp;</td>

															<td class="actions">
																<?php echo $this->Html->link(__(''), array('action' => 'view', $wake['Wake']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
																<?php echo $this->Html->link(__(''), array('action' => 'edit', $wake['Wake']['id']), array('class' => 'glyphicon glyphicon-edit')); ?>
																<!-- <?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''),  array('action' => 'delete', $wake['Wake']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wake['Wake']['id']))); ?> -->
																<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $wake['Wake']['id']), array('escape' => false), __('Seguro quieres eliminar al empleado %s?', $wake['Wake']['id'])); ?>
															</td>
														</tr>
													<?php endforeach; ?>
												</table>
										</div>
								</div>


						</div>
						<!-- /.bloque -->

				</div>
				<!-- /.contenedor-->

		</div>
		<!-- /#page-wrapper -->

</div>
<center>
				<paginador><!-- etiqueta personalidad-->
						<?php echo $this->element('paginador');?>
				</paginador>
				</center>
		</div>
<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Registrar Pago'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Registrar Bonos'), array('controller' => 'DhExtras', 'action' => 'add'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Lista de Salarios'), array('action' => 'index'), array('class' => 'btn btn-primary')); ?>

</div>

<!-- <div class="wakes index">
	<h2><?php echo __('Wakes'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_id'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id'); ?></th>
			<th><?php echo $this->Paginator->sort('dh_extra_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_day'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_type'); ?></th>
			<th><?php echo $this->Paginator->sort('start'); ?></th>
			<th><?php echo $this->Paginator->sort('end'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($wakes as $wake): ?>
	<tr>
		<td><?php echo h($wake['Wake']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($wake['Personal']['name'], array('controller' => 'personals', 'action' => 'view', $wake['Personal']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($wake['Position']['id'], array('controller' => 'positions', 'action' => 'view', $wake['Position']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($wake['DhExtra']['id'], array('controller' => 'dh_extras', 'action' => 'view', $wake['DhExtra']['id'])); ?>
		</td>
		<td><?php echo h($wake['Wake']['payment_day']); ?>&nbsp;</td>
		<td><?php echo h($wake['Wake']['amount']); ?>&nbsp;</td>
		<td><?php echo h($wake['Wake']['payment_type']); ?>&nbsp;</td>
		<td><?php echo h($wake['Wake']['start']); ?>&nbsp;</td>
		<td><?php echo h($wake['Wake']['end']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $wake['Wake']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $wake['Wake']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $wake['Wake']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wake['Wake']['id']))); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</tbody>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
		'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Wake'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
