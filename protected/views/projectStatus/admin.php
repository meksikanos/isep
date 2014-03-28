<?php

	$this->breadcrumbs=array(
		'Statusy projektów'=>array('index'),
		'Zarządzanie statusami projektów',
	);

	$this->menu=array(
		array('label'=>'Lista statusów projektów','url'=>array('index')),
		array('label'=>'Utwórz nowy status projektu','url'=>array('create')),
	);

	Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
		});
		$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('project-status-grid', {
		data: $(this).serialize()
		});
		return false;
		});
	");
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Statusy projektów',
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
			'id'=>'project-status-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
					'statusName',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
						'template'=>'{view} {update} {delete}',
						'buttons'=>array
						            (
										'view' => array
										(
											'label'=>'Szczegóły statusu',
										),
										
										'update' => array
										(
											'label'=>'Modyfikuj status',
										),
										
										'delete' => array
										(
											'label'=>'Usuń status',
										),
									),
					),
			),
	));

?>