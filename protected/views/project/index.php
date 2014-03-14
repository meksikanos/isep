<?php 

//$this -> breadcrumbs = array('Lista aktualnych projektów', );

$this -> menu = array( 
						array('label' => 'Dodaj nowy projekt', 'url' => array('create'),'visible'=>Yii::app()->user->checkAccess('admin')), 
						array('label' => 'Zarządzaj projektami', 'url' => array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')), 
					);
?>

<h2>Lista aktualnie trwających projektów</h2>

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
									'template'=>'{view}'
								),
							)

			)
	); 

/*
 * @property string $name
 * @property integer $status_id
 * @property string $description
 * @property integer $type_id
 * @property integer $regulatory
 * @property string $path
 * @property string $init
 * @property string $firstAllocTime
 * @property string $teamSipu
 * @property string $teamAit
 * @property string $teamBiz
 * @property string $analyst
 * @property string $platforms
*/
 	
?>
