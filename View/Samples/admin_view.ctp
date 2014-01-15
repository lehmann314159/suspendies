<div class="samples view">
<h2><?php echo __('Sample'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($sample['Sample']['name']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Sample'), array('action' => 'edit', $sample['Sample']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Sample'), array('action' => 'delete', $sample['Sample']['id']), null, __('Are you sure you want to delete # %s?', $sample['Sample']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Samples'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Sample'), array('action' => 'add')); ?> </li>
	</ul>
</div>
