<?php
$this->breadcrumbs=array(
	'Projects'=>array('index'),
	'Zarządzanie projektami',
);

$this->menu=array(
array('label'=>'Lista projektów','url'=>array('index')),
array('label'=>'Dodaj nowy projekt','url'=>array('create')),
);

Yii::app()->clientScript->registerScript('search', "
$('.search-button').click(function(){
$('.search-form').toggle();
return false;
});
$('.search-form form').submit(function(){
$.fn.yiiGridView.update('project-grid', {
data: $(this).serialize()
});
return false;
});
");
?>

<h1>Manage Projects</h1>

<p>
	You may optionally enter a comparison operator (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	or <b>=</b>) at the beginning of each of your search values to specify how the comparison should be done.
</p>

<?php echo CHtml::link('Advanced Search','#',array('class'=>'search-button btn')); ?>
<div class="search-form" style="display:none">
	<?php $this->renderPartial('_search',array(
	'model'=>$model,
)); ?>
</div><!-- search-form -->

<?php $this->widget('bootstrap.widgets.TbGridView',array(
'id'=>'project-status-grid',
'dataProvider'=>$model->search(),
'filter'=>$model,
'columns'=>array(
		'name',
		
		array(
			'name'=>'custom_filter_status',
			'value'=>'$data->status->statusName',
		),
		
		array(
			'name'=>'custom_filter_type',
			'value'=>'$data->type->projectType',
		),		
		
array(
'class'=>'bootstrap.widgets.TbButtonColumn',
),
),
)); ?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        