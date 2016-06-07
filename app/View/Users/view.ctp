<div class="panel panel-primary">
				<div class="panel-heading">
					<center>
						<h4>Datos del Usuario</h4>

					</center>
				</div>
			<div class="bloque">
				<div class="row">
					<div class="col col-sm-4">
						<?php if($user['User']['group_id']== 1){
								echo $this->Html->image('../img/administrador.gif');

						}else if($user['User']['group_id']== 2){
								echo $this->Html->image('../img/secretaria.gif');
						} ?>
					</div>
					<div class="clol col-sm-5">
							<br>

							<strong>Nombre y Apellido : <?php echo h($user['User']['fullname']); ?> </strong>
							<br>
							<strong>Nombre de Usuario : <?php echo h($user['User']['username']); ?> </strong>
							<br>
							<strong>Tipo de Usuario : <?php echo $this->Html->link($user['Group']['name'], array('controller' => 'positions', 'action' => 'view', $user['Group']['id'])); ?></strong>
							<br>
							<strong>Creado : <?php echo h($user['User']['created']); ?> </strong>

							<br><br>

					</div>

		  </div>


		</div>

</div>
<div class="btn-group btn-group-justified">

				<?php echo $this->Html->link(__('Editar Usuario'), array('action' => 'edit', $user['User']['id']), array('class' => 'btn btn-info')); ?>
				<?php echo $this->Html->link(__('Lista de Usuarios'), array('action' => 'index'), array('class' => 'btn btn-danger')); ?>
				<?php echo $this->Html->link(__('Nuevo Usuario'), array('action' => 'add'), array('class' => 'btn btn-primary')); ?>

</div>
<!-- <div class="users view">
<h2><?php echo __('User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($user['User']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($user['User']['fullname']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Username'); ?></dt>
		<dd>
			<?php echo h($user['User']['username']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Password'); ?></dt>
		<dd>
			<?php echo h($user['User']['password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Group'); ?></dt>
		<dd>
			<?php echo $this->Html->link($user['Group']['name'], array('controller' => 'groups', 'action' => 'view', $user['Group']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($user['User']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($user['User']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit User'), array('action' => 'edit', $user['User']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete User'), array('action' => 'delete', $user['User']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $user['User']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Groups'), array('controller' => 'groups', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Group'), array('controller' => 'groups', 'action' => 'add')); ?> </li>
	</ul>
</div> -->
