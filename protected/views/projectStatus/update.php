<?php

	$this->breadcrumbs=array(
		'Statusy projektów'=>array('index'),
		$model->statusName=>array('view','id'=>$model->id),
		'Aktualizacja statusu',
	);

	$this->menu=array(
		array('label'=>'Lista statusów projektu','url'=>array('index')),
		array('label'=>'Utwórz nowy status projektu','url'=>array('create')),
		array('label'=>'Szczegóły statusu projektu','url'=>array('view','id'=>$model->id)),
		array('label'=>'Zarządzaj statusami projektu','url'=>array('admin')),
	);

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Modyfikuj status projektu',
	        'headerIcon' => 'icon-list-alt',
	    )
	);
	
	$this->renderPartial('_form',array('model'=>$model));

	$this->endWidget();
	
?>