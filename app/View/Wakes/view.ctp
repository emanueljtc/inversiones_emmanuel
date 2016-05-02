<div class="wakes view">
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
</div>
