<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List comment','url'=>array('index')),
	array('label'=>'Create comment','url'=>array('create')),
	array('label'=>'View comment','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage comment','url'=>array('admin')),
	);
	?>

	<h1>Update comment <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model, 'project_id'=>$project_id)); ?>