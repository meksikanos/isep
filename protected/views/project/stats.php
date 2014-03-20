<?php 

$this -> breadcrumbs = array(
	'Projekty'=>array('index'),
	'Statystyki aktualnych projektów', 
);

$this -> menu = array( 
						array('label' => 'Dodaj nowy projekt', 'url' => array('create'),'visible'=>Yii::app()->user->checkAccess('admin')), 
						array('label' => 'Zarządzaj projektami', 'url' => array('admin'),'visible'=>Yii::app()->user->checkAccess('admin')),
						array('label'=>'Lista aktualnych projektów','url'=>array('index')), 
					);
?>
<h2>Statystyki - Aktualnie trwające projekty</h2>
<?php

	$this->Widget('bootstrap.widgets.TbHighCharts',
				array(
						'options'=>array(
											'chart' => array(
																'type'=> 'column',
															), 
											'title' => array('text'=>'Ilość projektów per ścieżka wdrożeniowa'),
											'plotOptions' => array(
																	'column'=> array(
																						'pointPadding' => 0.2,
																						'borderWidth' => 1.0,
																					),
																),
											'xAxis' => array(
																'categories' =>// $barXAxis, 
																
																array(
																	'Stan aktualny',
																),
															),
															
											'yAxis' => array(
																'min' => 0,
																'title' => array(
																					'text' => 'Ilość projektów',
																				),
															),
															
											'series' => $barYSeries,
														/*
														array(
																array('name'=> 'Fast Track', 'data' => array(10)),
																array('name'=> 'Release', 'data' => array(100)),
																array('name'=> 'Other', 'data' => array(1000)),
															),*/
			                          	)
			            	)
		);
?>
<br/><br/><br/>
<?php

	$this->Widget('bootstrap.widgets.TbHighCharts',
				array(
						'options'=>array( 
								'title'=>array('text'=>'Procentowy udział projektów per ścieżka wdrożenia'),
								'tooltip'=>array('formatter'=> 'js:function() { 
											return "<b>"+this.point.name+"</b>: "+Math.round(this.percentage)+"%"
		  									}'),
		
								'credits' => array('enabled' => true),
								'exporting' => array('enabled' => true),
								'plotOptions'=>array(
												'pie'=> array(
														'allowPointSelect'=>true,
														'cursor'=>'pointer',
														'dataLabels'=>array('enabled'=>true),
														'showInLegend'=>true
														)
													),
					
								'series' =>	array(
												array(
														'type'=>'pie',                                                             
														'name'=>'Projekty',
														'data' => $data,
													)
				                                            
											)
			                          	)
			            	)
		);

?>