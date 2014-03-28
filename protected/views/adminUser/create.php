<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */

	$this->breadcrumbs=array(
		'Lista użytkowników'=>array('index'),
		'Tworzenie nowego użytkownika',
	);

	$this->menu=array(
		array('label'=>'Lista użytkowników', 'url'=>array('index')),
		array('label'=>'Zarządzaj użytkownikami', 'url'=>array('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Nowy użytkownik',
	        'headerIcon' => 'icon-list-alt',
	    )
	);

	$this->renderPartial('_form', array('model'=>$model));

	$this->endWidget();

?>