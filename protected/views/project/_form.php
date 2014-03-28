<?php
/* @var $this ProjectController */
/* @var $model project */
/* @var $form TbActiveForm */
?>

<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'project-form',
		'enableAjaxValidation'=>false,
	)); 

?>

<p class="help-block">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php 

	echo $form->errorSummary($model); 
	
	echo $form->textFieldRow($model,'name',array('class'=>'span5','maxlength'=>128));
	
	echo $form->dropDownListRow($model,'status_id', $model->getCategories(), array('prompt' => '(Wybierz status)'));
	
	echo $form->dropDownListRow($model,'type_id', $model->getTypes(), array('prompt' => '(Wybierz ścieżkę'));
	
	echo $form->textFieldRow($model, 'path');
	
	echo $form->datePickerRow($model, 'firstAllocTime', 
						array( 'options' => array( 
										'format' => 'yyyy-mm-dd', 
                                        'weekStart'=> 1,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold',
										),
										));

	echo $form->typeAheadRow($model, 'init', array(
	    'options' => array(
	        'source' => array('AiT','BiRSiPU','Biznes','Biznes Postpaid','UKE','OCS'),
	    ),
	));

	echo $form->checkBoxRow($model, 'regulatory', array('checked' => $model->regulatory));

	echo $form->textAreaRow($model,'description',array('class'=>'span5','maxlength'=>1024));

	echo $form->typeAheadRow($model, 'analyst', array(
	    'options' => array(
	        'source' => array('Smętkowski Bartłomiej','Ciężki Fabian','Kucharek Hubert','Surdykowski Krzysztof','Komuda Łukasz','Horzela Tomasz','Wiśniewski Przesmysław','Tylek Krzysztof'),
	    ),
	));

	echo $form->textAreaRow($model,'teamSipu',array('class'=>'span5','maxlength'=>1024));

	echo $form->textAreaRow($model,'teamAit',array('class'=>'span5','maxlength'=>1024));
	
	echo $form->textAreaRow($model,'teamBiz',array('class'=>'span5','maxlength'=>1024));
	
	echo $form->textAreaRow($model,'platforms',array('class'=>'span5','maxlength'=>1024));
	
?>

<div class="form-actions">
	<?php $this->widget('bootstrap.widgets.TbButton', array(
			'buttonType'=>'submit',
			'type'=>'primary',
			'label'=>$model->isNewRecord ? 'Dodaj projekt' : 'Zapisz zmiany',
		)); ?>
</div>

<?php $this->endWidget(); ?>