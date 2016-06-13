<div>


		<div id="page-wrapper">

				<div class="container-fluid">

						<!-- Page Heading -->
						<div class="row">
								<div class="col-lg-12">
									<marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">
												<Titulo>
														<h3>Lista de Empleados</h3><hr>
												</Titulo>
										</marquee>
										<ol class="breadcrumb">
												<li>
														<i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
												</li>
												<li class="active">
														<i class="fa fa-table"></i> Lista de Empleados </li>
										</ol>
								</div>
						</div>
						<!-- /.row -->

						<div class="row">
								<div class="col-lg-12">

										<div class="table-responsive">
												<table class="table table-bordered table-hover">
														<thead>
																<tr>

																		<th><?php echo $this->Paginator->sort('Nombres'); ?></th>
																		<th><?php echo $this->Paginator->sort('Apellidos'); ?></th>
																		<th><?php echo $this->Paginator->sort('Cedula'); ?></th>
																		<th><?php echo $this->Paginator->sort('Celular'); ?></th>
																		<th><?php echo $this->Paginator->sort('Cargo');?></th>
																		<th><?php echo $this->Paginator->sort('Cargo');?></th>
																		<th class="actions"><?php echo __('Acciones'); ?></th>
																</tr>
														</thead>
														<tbody>
														<?php foreach ($personals as $personal): ?>
														<tr>
															<!-- <td><?php echo h($personal['Personal']['id']); ?>&nbsp;</td> -->


															<td><?php echo h($personal['Personal']['name']); ?>&nbsp;</td>
															<td><?php echo h($personal['Personal']['last_name']); ?>&nbsp;</td>
															<td><?php echo h($personal['Personal']['dni']); ?>&nbsp;</td>
															<td><?php echo h($personal['Personal']['cell_phone']);?>&nbsp;</td>
															<td>
																<?php echo $this->Html->link($personal['Position']['position'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
															</td>
															<td><?php echo h($personal['Personal']['status']);?>&nbsp;</td>
															<td class="actions">
																<?php echo $this->Html->link(__(''), array('action' => 'view', $personal['Personal']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
																<?php echo $this->Html->link(__(''), array('action' => 'view', $personal['Personal']['id'], 'ext' => 'pdf' ), array('class' => 'glyphicon glyphicon-print')); ?>
																<?php echo $this->Html->link(__(''), array('action' => 'edit', $personal['Personal']['id']), array('class' => 'glyphicon glyphicon-edit')); ?>
																<?php  if($current_user['group_id'] == '1'):?>
																		<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $personal['Personal']['id']), array('escape' => false), __('Seguro quieres eliminar al empleado %s?', $personal['Personal']['name'])); ?>
															  <?php endif; ?>
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

				<?php echo $this->Html->link(__('Añadir Empleado'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Exportar Lista del Personal'), array('action' => 'lista_pdf' , $personal['Personal']['id'].'.pdf' ), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Registrar Pago'), array('controller' => 'wakes', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
<!-- <div class="personals index">
	<h2><?php echo __('Personals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_reg'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('born_date'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personals as $personal): ?>
	<tr>
		<td><?php echo h($personal['Personal']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personal['Position']['id'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
		</td>
		<td><?php echo h($personal['Personal']['date_reg']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['dni']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['name']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['born_date']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['sex']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['age']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['phone']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['email']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personal['Personal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personal['Personal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personal['Personal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $personal['Personal']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
