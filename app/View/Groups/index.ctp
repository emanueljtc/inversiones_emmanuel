<div>


					<div id="page-wrapper">

									<div class="container-fluid">

											<!-- Page Heading -->
											<div class="row">
													<div class="col-lg-12">
														<marquee loop="1" SCROLLAMOUNT="25" behavior = "slide" direction="left">
																	<Titulo>
																			<h3>Lista de Grupos</h3><hr>
																	</Titulo>
															</marquee>
															<ol class="breadcrumb">
																	<li>
																			<i class="fa fa-dashboard"></i>  <a href="index.html">Inicio</a>
																	</li>
																	<li class="active">
																			<i class="fa fa-table"></i> Lista de Grupos </li>
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

																							<th><?php echo $this->Paginator->sort('Nombre'); ?></th>
																							<th><?php echo $this->Paginator->sort('Creado'); ?></th>
																							<!-- <th class="actions"><?php echo __('Acciones'); ?></th> -->
																					</tr>
																			</thead>
																			<tbody>
																			<?php foreach ($groups as $group): ?>
																			<tr>
																				<!-- <td><?php echo h($group['Group']['id']); ?>&nbsp;</td> -->
																				<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
																				<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
																				<!-- <td class="actions">
																					<?php echo $this->Html->link(__(''), array('action' => 'view', $group['Group']['id']), array('class' => 'glyphicon glyphicon-search')); ?>
																					<?php echo $this->Html->link(__(''), array('action' => 'edit', $group['Group']['id']), array('class' => 'glyphicon glyphicon-edit')); ?>
																					<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('action' => 'delete', $group['Group']['id']), array('escape' => false), __('Seguro quieres eliminar el grupo %s?', $group['Group']['name'])); ?>
																				</td> -->
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

									<?php echo $this->Html->link(__('Nuevo Grupo'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
									<?php echo $this->Html->link(__('Lista de Usuarios'), array('controller'=>'users','action' ), array('class' => 'btn btn-danger')); ?>
									<?php echo $this->Html->link(__('Nuevo Usuario'), array('controller' => 'users', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

					</div>
</div>

<!-- <div class="groups index">
	<h2><?php echo __('Groups'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($groups as $group): ?>
	<tr>
		<td><?php echo h($group['Group']['id']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['name']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['created']); ?>&nbsp;</td>
		<td><?php echo h($group['Group']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $group['Group']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $group['Group']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $group['Group']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $group['Group']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Group'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
