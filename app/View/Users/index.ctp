<div>

				
					<div id="page-wrapper">

									<div class="container-fluid">

											<!-- Page Heading -->
											<div class="row">
													<div class="col-lg-12">
														<marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">
																	<Titulo>
																			<h3>Lista de Usuarios</h3><hr>
																	</Titulo>
															</marquee>
															<ol class="breadcrumb">
																	<li>
																			<i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
																	</li>
																	<li class="active">
																			<i class="fa fa-table"></i> Lista de Usuarios </li>
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

																							<th><?php echo $this->Paginator->sort('Usuario'); ?></th>
																							<th><?php echo $this->Paginator->sort('Password'); ?></th>
																							<th><?php echo $this->Paginator->sort('Grupo'); ?></th>
																							<th><?php echo $this->Paginator->sort('Creado'); ?></th>
																							<th class="actions"><?php echo __('Acciones'); ?></th>
																					</tr>
																			</thead>
																			<tbody>
																			<?php foreach ($users as $user): ?>
																			<tr>
																				<!-- <td><?php echo h($user['User']['id']); ?>&nbsp;</td> -->


																				<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
																				<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
																				<td><?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>&nbsp;</td>
																				<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
																				<td class="actions">
																					<?php echo $this->Html->link(__(''), array('action' => 'view', $user['User']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
																					<?php echo $this->Html->link(__(''), array('action' => 'view', $user['User']['id'], 'ext' => 'pdf' ), array('class' => 'glyphicon glyphicon-print')); ?>
																					<?php echo $this->Html->link(__(''), array('action' => 'edit', $user['User']['id']), array('class' => 'glyphicon glyphicon-edit')); ?>
																					<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $user['User']['id']), array('escape' => false), __('Seguro quieres eliminar al empleado %s?', $user['User']['username'])); ?>
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

									<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
									<?php echo $this->Html->link(__('Lista de Grupos'), array('controller'=>'groups','action' ), array('class' => 'btn btn-danger')); ?>
									<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

					</div>
</div>
<!-- <div class="users index">
	<h2><?php echo __('Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('username'); ?></th>
			<th><?php echo $this->Paginator->sort('password'); ?></th>
			<th><?php echo $this->Paginator->sort('group_id'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($users as $user): ?>
	<tr>
		<td><?php echo h($user['User']['id']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['username']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['password']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
		</td>
		<td><?php echo h($user['User']['created']); ?>&nbsp;</td>
		<td><?php echo h($user['User']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
