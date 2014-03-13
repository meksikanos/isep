<?php
$this->breadcrumbs=array(
	'Project Types'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List projectType','url'=>array('index')),
array('label'=>'Create projectType','url'=>array('create')),
array('label'=>'Update projectType','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete projectType','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage projectType','url'=>array('admin')),
);
?>

<h1>View projectType #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'projectType',
),
)); ?>
