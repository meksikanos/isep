<?php
/* @var $this ProjectController */
/* @var $model project */
/* @var $form TbActiveForm */
?>

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
	'id'=>'project-form',
	'enableAjaxValidation'=>false,
)); ?>

<p class="help-block">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php echo $form->errorSummary($model); ?>

	<?php echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128)); ?>

	<!--<?php echo $form->textFieldRow($model,'status_id',array('class'=>'span5')); ?>-->
	<?php echo $form->dropDownListRow($model,'status_id', $model->getCategories(), array('prompt' => '(Wybierz status)')); ?>
	
	<?php echo $form->dropDownListRow($model,'type_id', $model->getTypes(), array('prompt' => '(Wybierz ścieżkę')); ?>

	<?php echo $form->textFieldRow($model, 'path'); ?>
	
	<?php echo $form->datePickerRow($model, 'firstAllocTime', 
						array( 'options' => array( 
										'format' => 'yyyy-mm-dd', 
                                        'weekStart'=> 1,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold',
										),
										)); 
	?>

	<?php

	echo $form->typeAheadRow($model, 'init', array(
	    'options' => array(
	        'source' => array('AiT','BiRSiPU','Biznes','Biznes Postpaid','UKE','OCS'),
	    ),
	));

	?>
	
	<?php echo $form->checkBoxRow($model, 'regulatory', array('checked' => $model->regulatory)); ?>

	<?php echo $form->textAreaRow($model,'description',array('class'=>'span5','maxlength'=>1024)); ?>

	<?php

	echo $form->typeAheadRow($model, 'analyst', array(
	    'options' => array(
	        'source' => array('Smętkowski Bartłomiej','Ciężki Fabian','Kucharek Hubert','Surdykowski Krzysztof','Komuda Łukasz','Horzela Tomasz','Wiśniewski Przesmysław','Tylek Krzysztof'),
	    ),
	));

	?>

	<?php echo $form->textAreaRow($model,'teamSipu',array('class'=>'span5','maxlength'=>1024)); ?>
	<?php echo $form->textAreaRow($model,'teamAit',array('class'=>'span5','maxlength'=>1024)); ?>
	<?php echo $form->textAreaRow($model,'teamBiz',array('class'=>'span5','maxlength'=>1024)); ?>
	<?php echo $form->textAreaRow($model,'platforms',array('class'=>'span5','maxlength'=>1024)); ?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Dodaj projekt' : 'Zapisz zmiany',
		)); ?>
</div>

<?php $this->endWidget(); ?>