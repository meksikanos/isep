<?php

	$this->breadcrumbs=array(
		'Projekty'=>array('index'),
		'Dodaj nowy projekt',
	);

	$this->menu=array(
		array('label'=>'Lista aktualnych projektów','url'=>array('index')),
		array('label'=>'Zarządzaj projektami','url'=>array('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Nowy projekt',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	echo $this->renderPartial('_form', array('model'=>$model));
	
	$this->endWidget();
	
?>