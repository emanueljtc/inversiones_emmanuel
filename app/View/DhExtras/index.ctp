<div class="dhExtras index">
	<h2><?php echo __('Dh Extras'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('personal_id'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id'); ?></th>
			<th><?php echo $this->Paginator->sort('n_day'); ?></th>
			<th><?php echo $this->Paginator->sort('n_hour'); ?></th>
			<th><?php echo $this->Paginator->sort('amount'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_day'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($dhExtras as $dhExtra): ?>
	<tr>
		<td><?php echo h($dhExtra['DhExtra']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dhExtra['Personal']['name'], array('controller' => 'personals', 'action' => 'view', $dhExtra['Personal']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dhExtra['Position']['id'], array('controller' => 'positions', 'action' => 'view', $dhExtra['Position']['id'])); ?>
		</td>
		<td><?php echo h($dhExtra['DhExtra']['n_day']); ?>&nbsp;</td>
		<td><?php echo h($dhExtra['DhExtra']['n_hour']); ?>&nbsp;</td>
		<td><?php echo h($dhExtra['DhExtra']['amount']); ?>&nbsp;</td>
		<td><?php echo h($dhExtra['DhExtra']['payment_day']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $dhExtra['DhExtra']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $dhExtra['DhExtra']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $dhExtra['DhExtra']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dhExtra['DhExtra']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
