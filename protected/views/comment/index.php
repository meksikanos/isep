<?php

	$this->breadcrumbs=array(
		'Zdarzenia w projektach',
	);

	$this->menu=array(
		array('label'=>'Dodaj nowe zdarzenie','url'=>array('create')),
		array('label'=>'Zarządzaj zdarzeniami','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
	);

	if(!isset($selected_project_id)) 
	{
		$selected_project_id = 0; 
	}

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Wyszukiwanie zdarzeń',
	        'headerIcon' => 'icon-search',
	    )
	);

	$this -> renderPartial('_search_index', array('model' => new comment(), 'selected_id' => $selected_project_id));
	
	$this->endWidget();
	
	$this->widget('bootstrap.widgets.TbListView',
		array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)
	);
	 
?>