<?php
$this->breadcrumbs=array(
	'Project Statuses',
);

$this->menu=array(
array('label'=>'Create projectStatus','url'=>array('create')),
array('label'=>'Manage projectStatus','url'=>array('admin')),
);
?>

<h1>Project Statuses</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
