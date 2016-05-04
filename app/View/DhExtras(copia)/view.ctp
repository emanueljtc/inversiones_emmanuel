<div class="dhExtras view">
<h2><?php echo __('Dh Extra'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($dhExtra['DhExtra']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Personal'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dhExtra['Personal']['name'], array('controller' => 'personals', 'action' => 'view', $dhExtra['Personal']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($dhExtra['Position']['id'], array('controller' => 'positions', 'action' => 'view', $dhExtra['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Day'); ?></dt>
		<dd>
			<?php echo h($dhExtra['DhExtra']['n_day']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('N Hour'); ?></dt>
		<dd>
			<?php echo h($dhExtra['DhExtra']['n_hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount'); ?></dt>
		<dd>
			<?php echo h($dhExtra['DhExtra']['amount']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Day'); ?></dt>
		<dd>
			<?php echo h($dhExtra['DhExtra']['payment_day']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Dh Extra'), array('action' => 'edit', $dhExtra['DhExtra']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Dh Extra'), array('action' => 'delete', $dhExtra['DhExtra']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dhExtra['DhExtra']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Wakes'); ?></h3>
	<?php if (!empty($dhExtra['Wake'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Personal Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Dh Extra Id'); ?></th>
		<th><?php echo __('Payment Day'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Payment Type'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($dhExtra['Wake'] as $wake): ?>
		<tr>
			<td><?php echo $wake['id']; ?></td>
			<td><?php echo $wake['personal_id']; ?></td>
			<td><?php echo $wake['position_id']; ?></td>
			<td><?php echo $wake['dh_extra_id']; ?></td>
			<td><?php echo $wake['payment_day']; ?></td>
			<td><?php echo $wake['amount']; ?></td>
			<td><?php echo $wake['payment_type']; ?></td>
			<td><?php echo $wake['start']; ?></td>
			<td><?php echo $wake['end']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'wakes', 'action' => 'view', $wake['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'wakes', 'action' => 'edit', $wake['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'wakes', 'action' => 'delete', $wake['id']), array('confirm' => __('Are you sure you want to delete # %s?', $wake['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
