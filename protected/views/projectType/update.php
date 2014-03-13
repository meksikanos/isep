<?php
$this->breadcrumbs=array(
	'Project Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List projectType','url'=>array('index')),
	array('label'=>'Create projectType','url'=>array('create')),
	array('label'=>'View projectType','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage projectType','url'=>array('admin')),
	);
	?>

	<h1>Update projectType <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>