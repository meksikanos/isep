<?php
/* @var $this ProjectController */
/* @var $model project */
/* @var $form TbActiveForm */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id),array('view','id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status_id')); ?>:</b>
	<?php echo CHtml::encode($data->status->statusName); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type_id')); ?>:</b>
	<?php echo CHtml::encode($data->type->projectType); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('regulatory')); ?>:</b>
	<?php echo CHtml::encode($data->regulatory); ?>
	<br />

</div>