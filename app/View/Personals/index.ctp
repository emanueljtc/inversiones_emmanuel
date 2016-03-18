<div class="personals index">
	<h2><?php echo __('Personals'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<thead>
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_reg'); ?></th>
			<th><?php echo $this->Paginator->sort('cedula'); ?></th>
			<th><?php echo $this->Paginator->sort('nombres'); ?></th>
			<th><?php echo $this->Paginator->sort('apellidos'); ?></th>
			<th><?php echo $this->Paginator->sort('fecha_nac'); ?></th>
			<th><?php echo $this->Paginator->sort('sexo'); ?></th>
			<th><?php echo $this->Paginator->sort('edad'); ?></th>
			<th><?php echo $this->Paginator->sort('celular'); ?></th>
			<th><?php echo $this->Paginator->sort('telefono_local'); ?></th>
			<th><?php echo $this->Paginator->sort('correo'); ?></th>
			<th><?php echo $this->Paginator->sort('direccion'); ?></th>
			<th><?php echo $this->Paginator->sort('cargo'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	</thead>
	<tbody>
	<?php foreach ($personals as $personal): ?>
	<tr>
		<td><?php echo h($personal['Personal']['id']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['fecha_reg']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['cedula']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['nombres']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['apellidos']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['fecha_nac']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['sexo']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['edad']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['celular']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['telefono_local']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['correo']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['direccion']); ?>&nbsp;</td>
		<td><?php echo h($personal['Personal']['cargo']); ?>&nbsp;</td>
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
	</ul>
</div>
