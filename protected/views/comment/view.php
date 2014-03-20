<?php
$this->breadcrumbs=array(
	'Comments'=>array('index'),
	$model->id,
);

$this->menu=array(
array('label'=>'List comment','url'=>array('index')),
array('label'=>'Create comment','url'=>array('create')),
array('label'=>'Update comment','url'=>array('update','id'=>$model->id)),
array('label'=>'Delete comment','url'=>'#','linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
array('label'=>'Manage comment','url'=>array('admin')),
);
?>

<h1>View comment #<?php echo $model->id; ?></h1>

<?php $this->widget('bootstrap.widgets.TbDetailView',array(
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
)); ?>
