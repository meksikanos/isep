<?php

	$this->breadcrumbs=array(
		'Projekty'=>array('index'),
		$model->name=>array('view','id'=>$model->id),
		'Aktualizacja danych o projekcie',
	);

	$this->menu=array(
		array('label'=>'Szczegóły projektu','url'=>array('view','id'=>$model->id)),
		array('label'=>'Lista aktualnych projektów','url'=>array('index')),
		array('label'=>'Dodaj nowy projekt','url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('admin')),
		array('label'=>'Zarządzaj projektami','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
	);
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Modyfikuj dane pojektu: '.$model->name,
	        'headerIcon' => 'icon-list-alt',
	    )
	);

	echo $this->renderPartial('_form',array('model'=>$model));
	
	$this->endWidget();
	
?>