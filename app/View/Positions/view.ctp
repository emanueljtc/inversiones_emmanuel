<div class="positions view">
<h2><?php echo __('Position'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($position['Position']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo h($position['Position']['position']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Day Hour'); ?></dt>
		<dd>
			<?php echo h($position['Position']['day_hour']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Value'); ?></dt>
		<dd>
			<?php echo h($position['Position']['time_value']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Position'), array('action' => 'edit', $position['Position']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Position'), array('action' => 'delete', $position['Position']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $position['Position']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Personals'); ?></h3>
	<?php if (!empty($position['Personal'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Date Reg'); ?></th>
		<th><?php echo __('Dni'); ?></th>
		<th><?php echo __('Name'); ?></th>
		<th><?php echo __('Last Name'); ?></th>
		<th><?php echo __('Born Date'); ?></th>
		<th><?php echo __('Sex'); ?></th>
		<th><?php echo __('Age'); ?></th>
		<th><?php echo __('Cell Phone'); ?></th>
		<th><?php echo __('Phone'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Address'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['Personal'] as $personal): ?>
		<tr>
			<td><?php echo $personal['id']; ?></td>
			<td><?php echo $personal['position_id']; ?></td>
			<td><?php echo $personal['date_reg']; ?></td>
			<td><?php echo $personal['dni']; ?></td>
			<td><?php echo $personal['name']; ?></td>
			<td><?php echo $personal['last_name']; ?></td>
			<td><?php echo $personal['born_date']; ?></td>
			<td><?php echo $personal['sex']; ?></td>
			<td><?php echo $personal['age']; ?></td>
			<td><?php echo $personal['cell_phone']; ?></td>
			<td><?php echo $personal['phone']; ?></td>
			<td><?php echo $personal['email']; ?></td>
			<td><?php echo $personal['address']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'personals', 'action' => 'view', $personal['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'personals', 'action' => 'edit', $personal['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'personals', 'action' => 'delete', $personal['id']), array('confirm' => __('Are you sure you want to delete # %s?', $personal['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
