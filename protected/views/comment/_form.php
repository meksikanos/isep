<?php 

	$form=$this->beginWidget('bootstrap.widgets.TbActiveForm',array(
		'id'=>'comment-form',
		'enableAjaxValidation'=>false,
	)); 

?>

<p class="help-block">Pola oznaczone <span class="required">*</span> są wymagane.</p>

<?php 

	echo $form->errorSummary($model); 

	echo $form->dropDownListRow($model,'project_id', $model->getProjects(), array('prompt' => '(Wybierz projekt)',
									'options' => array(
													$project_id => array('selected' => true)
													)
								)
			); 

	echo $form->dropDownListRow($model,'eventtype_id', $model->getEventTypes(), array('prompt' => '(Wybierz zdarzenie)')); 

	echo $form->datePickerRow($model, 'comment_date', 
						array( 'options' => array( 
										'format' => 'yyyy-mm-dd', 
                                        'weekStart'=> 1,
                                        'showButtonPanel' => true,
                                        'showAnim'=>'fold',
										),
										));
	
	echo $form->labelEx($model,'comment');
	
	$this->widget('bootstrap.widgets.TbRedactorJs',
		array(
			'model' => $model,
			'attribute'=>'comment',
		)
	);
	
?>

<div class="form-actions">

<?php 

	$this->widget('bootstrap.widgets.TbButton', array(
		'buttonType'=>'submit',
		'type'=>'primary',
		'label'=>$model->isNewRecord ? 'Dodaj zdarzenie' : 'Zapisz zmiany',
	));
		 
?>

</div>

<?php $this->endWidget(); ?>