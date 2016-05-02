<div class="wakes index">
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
</div>
