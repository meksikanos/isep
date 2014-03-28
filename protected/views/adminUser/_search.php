<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */
/* @var $form CActiveForm */
?>

<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); 

	echo $form->textFieldRow($model,'id',array('class'=>'span5'));
	
	echo $form->textFieldRow($model,'username',array('size'=>60,'maxlength'=>128)); 

	echo $form->textFieldRow($model,'roles',array('size'=>60,'maxlength'=>128));
	
	echo $form->textFieldRow($model,'email',array('size'=>60,'maxlength'=>128));
?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType' => 'submit',
		'type'=>'primary',
		'label'=>'Wyszukaj',
	)); ?>
</div>

<?php $this->endWidget(); ?>