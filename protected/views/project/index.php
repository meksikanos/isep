<?php 

	$this->menu=array( 
		array('label' => 'Dodaj nowy projekt', 'url' => array('create'),'visible'=>Yii::app()->user->checkAccess('admin')), 
		array('label' => 'Zarządzaj projektami', 'url' => array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
		array('label' => 'Statystyki aktualnych projektów','url'=>array('projectstats')), 
	);
	
?>

<h3>Lista aktualnie trwających projektów</h3>

<?php 

	$this -> widget('bootstrap.widgets.TbGridView', 
		array(
			'dataProvider' => $dataProvider, 
			
			'columns' => array(
								'name',
																
								array(
									'name'=> 'custom_filter_status',
									'value'=> '$data->status->statusName',
								),
								
								array(
									'name'=> 'custom_filter_type',
									'value'=> '$data->type->projectType',
								),
								
								'path',
								
								'firstAllocTime',
								
								array(
									'class'=>'bootstrap.widgets.TbButtonColumn',
									'template'=>'{view} {event}',
									
									'buttons'=>array
									            (
									                'event' => array
									                (
									                    'label'=>'Dodaj zdarzenie',
									                    'icon'=>'plus',
									                    'url'=>'Yii::app()->createUrl("comment/create", array("project_id"=>$data->id))',
									                    /*'options'=>array(
									                        'class'=>'btn btn-small', 
														 * 'class'=>'btn btn-small btn-success',
														 * 'class'=>'btn btn-small btn-info',
														 *  
									                    ),*/
									                ),
									                
													'view' => array
													(
														'label'=>'Szczegóły projektu',
													),
												),
												/*												
												'htmlOptions'=>array(
												'style'=>'width: 220px',
												),
												*/					
								),
							)

			)
	);
	 
?>