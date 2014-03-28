<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'eventtype-form',
		'enableAjaxValidation'=>false,
	)); 
	
?>

<p class="help-block">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php 

	echo $form->errorSummary($model); 
	echo $form->textFieldRow($model,'type',array('class'=>'span5','maxlength'=>128)); 

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