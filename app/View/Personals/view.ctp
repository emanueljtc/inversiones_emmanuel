<div class="personals view">
<h2><?php echo __('Personal'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Position'); ?></dt>
		<dd>
			<?php echo $this->Html->link($personal['Position']['id'], array('controller' => 'positions', 'action' => 'view', $personal['Position']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Date Reg'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['date_reg']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Dni'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['dni']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Last Name'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['last_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Born Date'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['born_date']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Sex'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['sex']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Age'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['age']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Cell Phone'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['cell_phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Phone'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['phone']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Email'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['email']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Address'); ?></dt>
		<dd>
			<?php echo h($personal['Personal']['address']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Personal'), array('action' => 'edit', $personal['Personal']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Personal'), array('action' => 'delete', $personal['Personal']['id']), array('confirm' => __('Are you sure you want to delete # %s?', $personal['Personal']['id']))); ?> </li>
		<li><?php echo $this->Html->link(__('List Personals'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Personal'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Positions'), array('controller' => 'positions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Position'), array('controller' => 'positions', 'action' => 'add')); ?> </li>
	</ul>
</div>
