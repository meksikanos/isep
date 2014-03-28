<?php 

	$this->breadcrumbs=array(
		'Zdarzenia' => array('index'), 
		'Zarządzanie zdarzeniami w projektach',
	);

	$this->menu=array( 
		array('label' => 'List comment', 'url' => array('index')), 
		array('label' => 'Create comment', 'url' => array('create')), 
	);

	Yii::app() -> clientScript -> registerScript('search', "
		$('.search-button').click(function(){
		$('.search-form').toggle();
		return false;
		});
		$('.search-form form').submit(function(){
		$.fn.yiiGridView.update('comment-grid', {
		data: $(this).serialize()
		});
		return false;
		});
	");
	
	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Zdarzenia w projektach',
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
<br />

<?php 

	$this->renderPartial('_search', array('model' => $model, )); 

	$this->endWidget();

?>
</div><!-- search-form -->

<?php 
	
	$this->widget('bootstrap.widgets.TbGridView',array(
		'id'=>'comment-grid',
		'dataProvider'=>$model->search(),
		'filter'=>$model,
		'columns'=>array(
				'id', 
				'creation_ts', 
				'modification_ts', 
				'project_id', 
				'eventtype_id', 
				'author',
				
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