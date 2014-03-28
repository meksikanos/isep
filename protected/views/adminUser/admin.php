<?php
/* @var $this AdminUserController */
/* @var $model AdminUser */

	$this->breadcrumbs=array(
		'Lista użytkowników'=>array('index'),
		'Zarządzanie użytkownikami',
	);

	$this->menu=array(
		array('label'=>'Lista użytkowników', 'url'=>array('index')),
		array('label'=>'Dodaj nowego użytkownika', 'url'=>array('create')),
	);

	Yii::app()->clientScript->registerScript('search', "
		$('.search-button').click(function(){
			$('.search-form').toggle();
			return false;
		});
		$('.search-form form').submit(function(){
			$('#admin-user-grid').yiiGridView('update', {
				data: $(this).serialize()
			});
			return false;
		});
	");

	$this->beginWidget(
	    'bootstrap.widgets.TbBox',
	    array(
	        'title' => 'Użytkownicy',
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
			'id'=>'admin-user-grid',
			'dataProvider'=>$model->search(),
			'filter'=>$model,
			'columns'=>array(
					'id',
					'username',
					'password',
					'roles',
					'email',
					array(
						'class'=>'bootstrap.widgets.TbButtonColumn',
						'template'=>'{view} {update} {delete}',
						'buttons'=>array
						            (
										'view' => array
										(
											'label'=>'Szczegóły użytkownika',
										),
										
										'update' => array
										(
											'label'=>'Modyfikuj dane użytkownika',
										),
										
										'delete' => array
										(
											'label'=>'Usuń użytkownika',
										),
									),
					),
			),
	));

?>
