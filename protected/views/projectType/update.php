<?php

	$this->breadcrumbs=array(
		'Rodzaje projektów'=>array('index'),
		$model->projectType=>array('view','id'=>$model->id),
		'Aktualizacja rodzaju',
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów projektów','url'=>array('index')),
		array('label'=>'Utwórz nowy rodzaj projektu','url'=>array('create')),
		array('label'=>'Szczegóły rodzaju projektu','url'=>array('view','id'=>$model->id)),
		array('label'=>'Zarządzaj rodzajami projektów','url'=>array('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Modyfikuj rodzaj projektu',
	        'headerIcon' => 'icon-list-alt',
	    )
	);

	$this->renderPartial('_form',array('model'=>$model)); 
	
	$this->endWidget();
?>