<?php
$this->breadcrumbs=array(
	'Project Statuses'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List projectStatus','url'=>array('index')),
array('label'=>'Create projectStatus','url'=>array('create')),
array('label'=>'Update projectStatus','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete projectStatus','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage projectStatus','url'=>array('admin')),
);
?>

<h1>View projectStatus #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
'data'=>$model,
'attributes'=>array(
		'id',
		'statusName',
),
)); ?>
