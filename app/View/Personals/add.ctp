<div class="personals form">
<?php echo $this->Form->create('Personal'); ?>
	<fieldset>
		<legend><?php echo __('Add Personal'); ?></legend>
	<?php
		echo $this->Form->input('position_id');
		echo $this->Form->input('date_reg');
		echo $this->Form->input('dni');
		echo $this->Form->input('name');
		echo $this->Form->input('last_name');
		echo $this->Form->input('born_date');
		echo $this->Form->input('sex');
		echo $this->Form->input('age');
		echo $this->Form->input('cell_phone', array(
		'label'=>'','placeholder' => 'Celular','type'=>'text','class'=>'form-control'
			));
		echo $this->Form->input('phone');
		echo $this->Form->input('email');
		echo $this->Form->input('address');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
