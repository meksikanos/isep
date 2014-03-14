<?php
$this->breadcrumbs=array(
	'Lista członków zespołu'=>array('index'),
	$model->name.' '.$model->surname,
);

$this->menu=array(
	array('label'=>'Lista członków zespołu','url'=>array('index')),
	array('label'=>'Zarządzaj listą członków zespołu','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'Dodaj nowego członka zespołu','url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'Zmień dane członka zespołu','url'=>array('update','id'=>$model->id),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'Usuń członka zespołu','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?'),'visible'=>Yii::app()->user->checkAccess('admin')),
);
?>

<h1>View teammember #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'name',
		'surname',
		'company',
		'position',
		'role',
		'login',
		'active',
		'comment',
),
)); ?>