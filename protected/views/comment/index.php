<?php

	$this->breadcrumbs=array(
		'Zdarzenia',
	);

	$this->menu=array(
		array('label'=>'Dodaj nowe zdarzenie','url'=>array('create')),
		array('label'=>'Zarządzaj zdarzeniami','url'=>array('admin')),
	);
	
?>

<h2>Zdarzenia</h2>

<?php 

	if(!isset($selected_project_id)) 
	{
		$selected_project_id = 0; 
	}

	$this -> renderPartial('_search_index', array('model' => new comment(), 'selected_id' => $selected_project_id));
	
	$this->widget('bootstrap.widgets.TbListView',
		array(
			'dataProvider'=>$dataProvider,
			'itemView'=>'_view',
			)
	);
	 
?>