<?php
$this->breadcrumbs=array(
	'Projekty'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'Zaktualizuj dane projektu','url'=>array('update','id'=>$model->id),'visible'=>Yii::app()->user->checkAccess('admin','member')),
	array('label'=>'Lista aktualnych projektów','url'=>array('index')),
	array('label'=>'Zarządzaj projektami','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'Dodaj nowy projekt','url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'Usuń projekt','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Czy na pewno chcesz usunąć ten projekt?'),'visible'=>Yii::app()->user->checkAccess('admin')),
);
?>

<h1>Szczegóły projektu <b><?php echo $model->name; ?></b></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'status_id',
),
)); ?>
