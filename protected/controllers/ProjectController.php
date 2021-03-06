<?php

class ProjectController extends Controller {
	/**
	 * @var string the default layout for the views. Defaults to '//layouts/column2', meaning
	 * using two-column layout. See 'protected/views/layouts/column2.php'.
	 */
	public $layout = '//layouts/column2';

	/**
	 * @return array action filters
	 */
	public function filters() {
		return array('accessControl', // perform access control for CRUD operations
		);
	}

	/**
	 * Specifies the access control rules.
	 * This method is used by the 'accessControl' filter.
	 * @return array access control rules
	 */
	public function accessRules() {
		return array( 
		array('allow', // allow all users to perform 'index' and 'view' actions
		'actions' => array('index', 'view', 'ProjectStats'), 'users' => array('*'), ), 
		
		array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('update'), 'roles' => array('admin','member'), ), 
		
		array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin', 'delete', 'create'), 'roles' => array('admin'), ), 
		
		array('deny', // deny all users
		'users' => array('*'), ), );
	}

	/**
	 * Displays a particular model.
	 * @param integer $id the ID of the model to be displayed
	 */
	public function actionView($id) {
		$this -> render('view', array('model' => $this -> loadModel($id), ));
	}

	/**
	 * Creates a new model.
	 * If creation is successful, the browser will be redirected to the 'view' page.
	 */
	public function actionCreate() {
		$model = new project;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['project'])) {
			$model -> attributes = $_POST['project'];
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('create', array('model' => $model, ));
	}

	/**
	 * Updates a particular model.
	 * If update is successful, the browser will be redirected to the 'view' page.
	 * @param integer $id the ID of the model to be updated
	 */
	public function actionUpdate($id) {
		$model = $this -> loadModel($id);

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);

		if (isset($_POST['project'])) {
			$model -> attributes = $_POST['project'];
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('update', array('model' => $model, ));
	}

	/**
	 * Deletes a particular model.
	 * If deletion is successful, the browser will be redirected to the 'admin' page.
	 * @param integer $id the ID of the model to be deleted
	 */
	public function actionDelete($id) {
		if (Yii::app() -> request -> isPostRequest) {
			// we only allow deletion via POST request
			$this -> loadModel($id) -> delete();

			// if AJAX request (triggered by deletion via admin grid view), we should not redirect the browser
			if (!isset($_GET['ajax']))
				$this -> redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('admin'));
		} else
			throw new CHttpException(400, 'Invalid request. Please do not repeat this request again.');
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {

		$criteria=new CDbCriteria;
		$criteria->together = true;
	
		$criteria->with = array('type','status');
		$criteria->condition='status_id in(1,2,3,4,5,6,7,8)';

		$sort = new CSort;
		$sort->attributes = array (
			'name',
			
			'path',
			
			'custom_filter_status' => array(
				'asc' => 'status.statusName',
				'desc' => 'status.statusName DESC',
			),

			'custom_filter_type' => array(
				'asc' => 'type.projectType',
				'desc' => 'type.projectType DESC',
			),
			
			'firstAllocTime',
		);

		$dataProvider = new CActiveDataProvider('project', 
			array(
				
				 'criteria' => $criteria,			 
				 			 
				 'pagination'=> array(
		            'pageSize'=>50,
		        	),
					
				'sort' => $sort,

				)
		);
		
		$this -> render('index', array('dataProvider' => $dataProvider));
	}

	public function actionProjectStats()
	{
		$agg_report = project::model()->getProjectReportsAgg();
		
		//data transformations 
		//for PIE Chart
		$data = $this->prepareArrayResult($agg_report);
		$barYSeries = $this->prepareYSeries($agg_report);
		
		$this -> render('stats', array('data' => $data, 'barYSeries' => $barYSeries));
	}

	private function prepareYSeries($result)
	{
		$new_array = array();
		
		$i=0;
		
		foreach ($result as $each_member) {
			$new_array[$i] = array('name' => "'".$each_member['type']."'", 'data' => array((int)$each_member['count']));
			++$i; 
		}
		
		return $new_array; 
	}

	private function prepareArrayResult($result)
	{
		$new_array = array();
		
		$i=0;
		
		foreach ($result as $each_member) {
			$new_array[$i] = array($each_member['type'], (int)$each_member['count']);
			++$i; 
		}
		
		return $new_array; 
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new project('search');
		$model -> unsetAttributes();
		
		// clear any default values
		if (isset($_GET['project']))
			$model -> attributes = $_GET['project'];

		$this -> render('admin', array('model' => $model, ));
	}
	
	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = project::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'project-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}
}