<?php
$this->breadcrumbs=array(
	'Lista członków zespołu'=>array('index'),
	'Dodaj nowego członka zespołu',
);

$this->menu=array(
	array('label'=>'Lista członków zespołu','url'=>array('index')),
	array('label'=>'Zarządzaj członkami zespołu','url'=>array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
);
?>

<h2>Dodaj nowego członka zespołu</h2>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>