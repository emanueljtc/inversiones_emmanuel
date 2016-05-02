<div class="positions index">
	<h2><?php echo __('Positions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('position'); ?></th>
			<th><?php echo $this->Paginator->sort('hour_worked'); ?></th>
			<th><?php echo $this->Paginator->sort('time_value'); ?></th>
			<th><?php echo $this->Paginator->sort('daily_salary'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($positions as $position): ?>
	<tr>
		<td><?php echo h($position['Position']['id']); ?>&nbsp;</td>
		<td><?php echo h($position['Position']['position']); ?>&nbsp;</td>
		<td><?php echo h($position['Position']['hour_worked']); ?>&nbsp;</td>
		<td><?php echo h($position['Position']['time_value']); ?>&nbsp;</td>
		<td><?php echo h($position['Position']['daily_salary']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $position['Position']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $position['Position']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $position['Position']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $position['Position']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
