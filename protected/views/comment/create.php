<?php

	$this->breadcrumbs=array(
		'Zdarzenia w projekcie'=>array('index'),
		'Rejestracja nowego zdarzenia',
	);

	$this->menu=array(
		array('label'=>'Lista zdarzeń w projektach','url'=>array('index')),
		array('label'=>'Zarządzaj zdarzeniami','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Rejestruj zdarzenie',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	echo $this->renderPartial('_form', array('model'=>$model, 'project_id'=>$project_id));
	
	$this->endWidget();
 
?>