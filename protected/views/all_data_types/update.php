<?php
$this->breadcrumbs=array(
	'All Data Types'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

	$this->menu=array(
	array('label'=>'List all_data_types','url'=>array('index')),
	array('label'=>'Create all_data_types','url'=>array('create')),
	array('label'=>'View all_data_types','url'=>array('view','id'=>$model->id)),
	array('label'=>'Manage all_data_types','url'=>array('admin')),
	);
	?>

	<h1>Update all_data_types <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form',array('model'=>$model)); ?>