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
		<dt><?php echo __('Hour Worked'); ?></dt>
		<dd>
			<?php echo h($position['Position']['hour_worked']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Time Value'); ?></dt>
		<dd>
			<?php echo h($position['Position']['time_value']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Daily Salary'); ?></dt>
		<dd>
			<?php echo h($position['Position']['daily_salary']); ?>
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
		<li><?php echo $this->Html->link(__('List Dh Extras'), array('controller' => 'dh_extras', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('controller' => 'personals', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('controller' => 'personals', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Wakes'), array('controller' => 'wakes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Wake'), array('controller' => 'wakes', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Dh Extras'); ?></h3>
	<?php if (!empty($position['DhExtra'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Personal Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('N Day'); ?></th>
		<th><?php echo __('N Hour'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Payment Day'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['DhExtra'] as $dhExtra): ?>
		<tr>
			<td><?php echo $dhExtra['id']; ?></td>
			<td><?php echo $dhExtra['personal_id']; ?></td>
			<td><?php echo $dhExtra['position_id']; ?></td>
			<td><?php echo $dhExtra['n_day']; ?></td>
			<td><?php echo $dhExtra['n_hour']; ?></td>
			<td><?php echo $dhExtra['amount']; ?></td>
			<td><?php echo $dhExtra['payment_day']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'dh_extras', 'action' => 'view', $dhExtra['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'dh_extras', 'action' => 'edit', $dhExtra['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'dh_extras', 'action' => 'delete', $dhExtra['id']), array('confirm' => __('Are you sure you want to delete # %s?', $dhExtra['id']))); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dh Extra'), array('controller' => 'dh_extras', 'action' => 'add')); ?> </li>
		</ul>
	</div>
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
<div class="related">
	<h3><?php echo __('Related Wakes'); ?></h3>
	<?php if (!empty($position['Wake'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Personal Id'); ?></th>
		<th><?php echo __('Position Id'); ?></th>
		<th><?php echo __('Payment Day'); ?></th>
		<th><?php echo __('Amount'); ?></th>
		<th><?php echo __('Payment Type'); ?></th>
		<th><?php echo __('Start'); ?></th>
		<th><?php echo __('End'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($position['Wake'] as $wake): ?>
		<tr>
			<td><?php echo $wake['id']; ?></td>
			<td><?php echo $wake['personal_id']; ?></td>
			<td><?php echo $wake['position_id']; ?></td>
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
