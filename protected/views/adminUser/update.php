<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */

	$this->breadcrumbs=array(
		'Lista użytkowników'=>array('index'),
		$model->username=>array('view','id'=>$model->id),
		'Aktualizacja danych użytkownika',
	);

	$this->menu=array(
		array('label'=>'Lista użytkowników', 'url'=>array('index')),
		array('label'=>'Dodaj nowego użytkownika', 'url'=>array('create')),
		array('label'=>'Szczegóły użytkownika', 'url'=>array('view', 'id'=>$model->id)),
		array('label'=>'Zarządzaj użytkownikami', 'url'=>array('admin')),
	);
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Modyfikuj dane użytkownika',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	$this->renderPartial('_form', array('model'=>$model));
	
	$this->endWidget();
	
?>