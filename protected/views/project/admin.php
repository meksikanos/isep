<?php

	$this->breadcrumbs=array(
		'Projekty'=>array('index'),
		'Zarządzanie projektami',
	);

	$this->menu=array(
		array('label'=>'Lista aktualnych projektów','url'=>array('index')),
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
	
		$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Lista wszystkich projektów',
	        'headerIcon' => 'icon-search',
	    )
	);

?>

<p>
	Możesz opcjonalnie użyć następujących operatorów (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	lub <b>=</b>) na początku każdej wartości dla danego filtra.
</p>

<?php

	echo CHtml::link('Formularz wyszukiwania','#',array('class'=>'search-button btn')); 

?>

<div class="search-form" style="display:none">
<br />

<?php 
	
	$this->renderPartial(
		'_search',array
		(
			'model'=>$model,
		)
	);
	
	$this->endWidget();
	
 ?>
</div><!-- search-form -->

<?php 

	$this->widget('bootstrap.widgets.TbGridView',array(

		'id'=>'project-grid',

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
				
				'path',
				
				array(
					'class'=>'bootstrap.widgets.TbButtonColumn',
				),
			),
	)
	); 
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                        