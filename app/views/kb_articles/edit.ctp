<div class="kbArticles form">
<?php echo $this->Form->create('KbArticle');?>
	<fieldset>
 		<legend><?php __('Edit Kb Article'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('kb_category_id');
		echo $this->Form->input('title');
		echo $this->Form->input('content');
		echo $this->Form->input('order');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('KbArticle.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('KbArticle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Kb Articles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Kb Categories', true), array('controller' => 'kb_categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Kb Category', true), array('controller' => 'kb_categories', 'action' => 'add')); ?> </li>
	</ul>
</div>