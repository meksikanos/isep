<?php

	$this->breadcrumbs=array(
		'Zdarzenia w projektach'=>array('index'),
		$model->author,
	);

	$this->menu=array(
		array('label'=>'Lista zdarzeń w projektach','url'=>array('index')),
		array('label'=>'Dodaj nowe zdarzenie','url'=>array('create')),
		array('label'=>'Aktualizuj dane zdarzenia','url'=>array('update','id'=>$model->id)),
		array('label'=>'Usuń zdarzenie','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
		array('label'=>'Zarządzaj zdarzeniami','url'=>array('admin')),
	);

?>

<h3>Komentarz: <?php echo $model->author; ?></h3>

<?php 

	$this->widget('bootstrap.widgets.TbDetailView',array(
		'data'=>$model,
		'attributes'=>array(
				'id',
				'creation_ts',
				'modification_ts',
				'project_id',
				'eventtype_id',
				'author',
				'last_mod_author',
				'comment_date',
				'comment',
		),
	)); 

?>
