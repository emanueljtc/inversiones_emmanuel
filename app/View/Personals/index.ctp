<div class="personals index">
	<h2><?php echo __('Personals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('position_id'); ?></th>
			<th><?php echo $this->Paginator->sort('date_reg'); ?></th>
			<th><?php echo $this->Paginator->sort('dni'); ?></th>
			<th><?php echo $this->Paginator->sort('name'); ?></th>
			<th><?php echo $this->Paginator->sort('last_name'); ?></th>
			<th><?php echo $this->Paginator->sort('born_date'); ?></th>
			<th><?php echo $this->Paginator->sort('sex'); ?></th>
			<th><?php echo $this->Paginator->sort('age'); ?></th>
			<th><?php echo $this->Paginator->sort('cell_phone'); ?></th>
			<th><?php echo $this->Paginator->sort('phone'); ?></th>
			<th><?php echo $this->Paginator->sort('email'); ?></th>
			<th><?php echo $this->Paginator->sort('address'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personals as $personal): ?>
	<tr>
		<td><?php echo h($personal['Personal']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($personal['Position']['id'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
		</td>
		<td><?php echo h($personal['Personal']['date_reg']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['dni']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['name']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['last_name']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['born_date']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['sex']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['age']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['cell_phone']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['phone']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['email']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['address']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $personal['Personal']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $personal['Personal']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $personal['Personal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $personal['Personal']['id']))); ?>
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
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
