<?php
$this->breadcrumbs=array(
	'Lista członków zespołu'=>array('index'),
	$model->name.' '.$model->surname=>array('view','id'=>$model->id),
	'Aktualizacja danych członka zespołu',
);

	$this->menu=array(
	array('label'=>'List teammember','url'=>array('index')),
	array('label'=>'Create teammember','url'=>array('create'),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'View teammember','url'=>array('view','id'=>$model->id),'visible'=>Yii::app()->user->checkAccess('admin')),
	array('label'=>'Manage teammember','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
	);
	?>

	<h1>Update teammember <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>