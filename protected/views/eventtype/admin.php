<?php

	$this->breadcrumbs=array(
		'Rodzaje zdarzeń w projektach'=>array('index'),
		'Zarządzanie listą zdarzeń',
	);

	$this->menu=array(
		array('label'=>'Lista rodzajów zdarzeń','url'=>array('index')),
		array('label'=>'Utwórz nowy rodzaj zdarzenia','url'=>array('create')),
	);

	Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
		});
		$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('eventtype-grid', {
		data: $(this).serialize()
		});
		return false;
		});
	");

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Rodzaje zdarzeń',
	        'headerIcon' => 'icon-search',
	    )
	);
	
?>

<p>
	Możesz opcjonanie użyć następujących operatorów (<b>&lt;</b>, <b>&lt;=</b>, <b>&gt;</b>, <b>&gt;=</b>, <b>
		&lt;&gt;</b>
	lub <b>=</b>) na początku każdej z szukanych wartości.
</p>

<?php 

	echo CHtml::link('Formularz wyszukiwania','#',array('class'=>'search-button btn')); 
	
?>

<div class="search-form" style="display:none">
</br>

<?php 

	$this->renderPartial('_search',array(
		'model'=>$model,
	)); 

	$this->endWidget();

?>

</div><!-- search-form -->

<?php 

	$this->widget('bootstrap.widgets.TbGridView',array(
			'id'=>'eventtype-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
					'type',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
						'template'=>'{view} {update} {delete}',
						'buttons'=>array
						            (
										'view' => array
										(
											'label'=>'Szczegóły zdarzenia',
										),
										
										'update' => array
										(
											'label'=>'Modyfikuj zdarzenie',
										),
										
										'delete' => array
										(
											'label'=>'Usuń zdarzenie',
										),
									),
					),
			),
	)); 
	
?>