<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'action'=>Yii::app()->createUrl($this->route),
		'method'=>'get',
	)); 

	echo $form->textFieldRow($model,'id',array('class'=>'span5'));

	echo $form->textFieldRow($model,'creation_ts',array('class'=>'span5'));

	echo $form->textFieldRow($model,'modification_ts',array('class'=>'span5'));

	echo $form->textFieldRow($model,'project_id',array('class'=>'span5'));
	
	echo $form->textFieldRow($model,'eventtype_id',array('class'=>'span5'));
	
	echo $form->textFieldRow($model,'author',array('class'=>'span5','maxlength'=>128));
	
	echo $form->textFieldRow($model,'last_mod_author',array('class'=>'span5','maxlength'=>128));
	
	echo $form->textFieldRow($model,'comment_date',array('class'=>'span5'));
	
	echo $form->textAreaRow($model,'comment',array('rows'=>6, 'cols'=>50, 'class'=>'span8'));
?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
		'buttonType' => 'submit',
		'type'=>'primary',
		'label'=>'Wyszukaj',
	)); ?>
</div>

<?php $this->endWidget(); ?>