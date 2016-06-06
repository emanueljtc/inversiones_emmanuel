<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos del Grupo</h4>

					</center>
				</div>
			<div class="bloque">
				<div class="row">
					<div class="col col-sm-4">
						<?php if($group['Group']['name']== "administrador"){
								echo $this->Html->image('../img/administrador.gif');

						}else if($group['Group']['name']== "secretaria(o)"){
								echo $this->Html->image('../img/secretaria.gif');
						} ?>
					</div>
					<div class="clol col-sm-5">
							<br>

							<strong>Nombre del Grupo : <?php echo h($group['Group']['name']); ?> </strong>


							<br><br>

					</div>

		  </div>


			</div>
		</div>

</div>

<div class="related">
	<h3><?php echo __('Usuarios Relacionados'); ?></h3>
	<br>
	<?php if (!empty($group['User'])): ?>
		<div class="table-responsive">
				<table class="table table-bordered table-hover">
				<tr>
					<th><?php echo __('Nombre de Usuario'); ?></th>
					<th><?php echo __('Creado'); ?></th>
					<th class="actions"><?php echo __('Acciones'); ?></th>
				</tr>
				<?php foreach ($group['User'] as $user): ?>
					<tr>
						<td><?php echo $user['username']; ?></td>
						<td><?php echo $user['created']; ?></td>
						<td class="actions">
							<?php echo $this->Html->link(__(''), array('controller' => 'users', 'action' => 'view', $user['id']), array('class' => 'glyphicon glyphicon-search')); ?>
							<?php echo $this->Html->link(__(''), array('controller' => 'users', 'action' => 'edit', $user['id']), array('class' => 'glyphicon glyphicon-edit')); ?>
							<?php echo $this->Form->postLink('<i class="fa fa-trash-o fa-fw"></i> ' . __(''), array('controller'=>'users','action' => 'delete', $user['id']), array('escape' => false), __('Seguro quieres eliminar al usuario %s?', $user['username'])); ?>

						</td>
					</tr>
				<?php endforeach; ?>
				</table>
			</div>
<?php endif; ?>

<center>

<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Grupos'), array('action'=> 'index' ), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Nuevo Grupo'), array('controller' => 'groups', 'action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
<br><br>


</div>
