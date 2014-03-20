<div class="view">

		<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('creation_ts')); ?>:</b>
	<?php echo CHtml::encode($data->creation_ts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('modification_ts')); ?>:</b>
	<?php echo CHtml::encode($data->modification_ts); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('project_id')); ?>:</b>
	<?php echo CHtml::encode($data->project_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eventtype_id')); ?>:</b>
	<?php echo CHtml::encode($data->eventtype_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('last_mod_author')); ?>:</b>
	<?php echo CHtml::encode($data->last_mod_author); ?>
	<br /><hr/>

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('comment_date')); ?>:</b>
	<?php echo CHtml::encode($data->comment_date); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('comment')); ?>:</b>
	<?php echo CHtml::encode($data->comment); ?>
	<br />

	*/ ?>
</div>