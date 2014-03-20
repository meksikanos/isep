<?php
$this->breadcrumbs=array(
	'Eventtypes',
);

$this->menu=array(
array('label'=>'Create eventtype','url'=>array('create')),
array('label'=>'Manage eventtype','url'=>array('admin')),
);
?>

<h1>Eventtypes</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
'dataProvider'=>$dataProvider,
'itemView'=>'_view',
)); ?>
