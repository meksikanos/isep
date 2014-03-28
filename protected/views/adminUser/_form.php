<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */
/* @var $form CActiveForm */
?>

<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'eventtype-form',
		'enableAjaxValidation'=>false,
	)); 
?>

<p class="help-block">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php 
	
	echo $form->errorSummary($model);
	echo $form->textFieldRow($model,'username',array('size'=>60,'maxlength'=>128)); 
	echo $form->textFieldRow($model,'password',array('size'=>60,'maxlength'=>128));
	echo $form->textFieldRow($model,'roles',array('size'=>60,'maxlength'=>128));
	echo $form->textFieldRow($model,'email',array('size'=>60,'maxlength'=>128));
?>

<div class="form-actions">

<?php 
	
	$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>$model->isNewRecord ? 'Utwórz nowy' : 'Zapisz miany',
	)); 

?>

</div>

<?php $this->endWidget(); ?>