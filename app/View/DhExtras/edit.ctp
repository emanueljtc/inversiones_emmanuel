<div class="dhExtras form">
<?php echo $this->Form->create('DhExtra'); ?>
	<fieldset>
		<legend><?php echo __('Edit Dh Extra'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('personal_id');
		echo $this->Form->input('position_id');
		echo $this->Form->input('n_day');
		echo $this->Form->input('n_hour');
		echo $this->Form->input('amount');
		echo $this->Form->input('payment_day');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('DhExtra.id')), array('confirm' => __('Are you sure you want to delete # %s?', $this->Form->value('DhExtra.id')))); ?></li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
