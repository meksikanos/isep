<?php

class CommentController extends Controller {
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
		return array( array('allow', // allow all users to perform 'index' and 'view' actions
		'actions' => array('index', 'view','CommentsForProject'), 'users' => array('@'), ), 
		
		array('allow', // allow authenticated user to perform 'create' and 'update' actions
		'actions' => array('create', 'update', 'delete'), 'roles' => array('admin','member'), ), 
		
		array('allow', // allow admin user to perform 'admin' and 'delete' actions
		'actions' => array('admin'), 'roles' => array('admin'), ), 
		
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
		$model = new comment;

		// Uncomment the following line if AJAX validation is needed
		// $this->performAjaxValidation($model);
		$project_id = 0;
		if (isset($_GET['project_id']))
		{
			$project_id = $_GET['project_id'];	
		}
		
		if (isset($_POST['comment'])) {
			$model -> attributes = $_POST['comment'];
	
			$model->creation_ts = date('Y-m-d H:i:s');
			$model->author = $model->getCurrentUserName();
						
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('create', array('model' => $model, 'project_id'=> $project_id));
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

		$project_id = 0;
		if (isset($_GET['project_id']))
		{
			$project_id = $_GET['project_id'];	
		}
		
		if (isset($_POST['comment'])) {
			$model -> attributes = $_POST['comment'];
			
			$model->modification_ts = date('Y-m-d H:i:s');
			$model->last_mod_author = $model->getCurrentUserName();
			
			if ($model -> save())
				$this -> redirect(array('view', 'id' => $model -> id));
		}

		$this -> render('update', array('model' => $model, 'project_id'=> $project_id));
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


	public function actionCommentsForProject($id) {
		
		$proj_id = $id;
		
		$criteria=new CDbCriteria;
		$criteria->together = true;
	
		$criteria->condition='project_id = '.$proj_id;

		$sort = new CSort;
		$sort->attributes = array (
			'project_id',
		);

		$dataProvider = new CActiveDataProvider('comment', 
			array(
				
				 'criteria' => $criteria,			 
				 			 
				 'pagination'=> array(
		            'pageSize'=>50,
		        	),
					
				'sort' => $sort,

				)
		);
		
		$this -> render('index', array('dataProvider' => $dataProvider, 'selected_project_id' => $proj_id));
	}

	/**
	 * Lists all models.
	 */
	public function actionIndex() {
		
		$proj_id = 0;
		//if (Yii::app() -> request -> isPostRequest) {
			
			//$proj_id = Yii::app()->request->getPost('project_id');
	
		if (Yii::app() -> request -> isPostRequest) 
		{
			if (isset($_POST['comment']['project_id']))
			{
				$proj_id = $_POST['comment']['project_id'];
			} 
			
			if ($proj_id === '') {
				$proj_id = 0;
			}
		}
		
		$criteria=new CDbCriteria;
		$criteria->together = true;
	
		$criteria->condition='project_id = '.$proj_id;

		$criteria->order="comment_date desc, creation_ts desc";

		$sort = new CSort;
		$sort->attributes = array (
			'project_id',
			/*
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
			 */
		);

		$dataProvider = new CActiveDataProvider('comment', 
			array(
				
				 'criteria' => $criteria,			 
				 			 
				 'pagination'=> array(
		            'pageSize'=>50,
		        	),
					
				'sort' => $sort,

				)
		);
		
		$this -> render('index', array('dataProvider' => $dataProvider, 'selected_project_id' => $proj_id));
	
	}

	/**
	 * Manages all models.
	 */
	public function actionAdmin() {
		$model = new comment('search');
		$model -> unsetAttributes();
		// clear any default values
		if (isset($_GET['comment']))
			$model -> attributes = $_GET['comment'];

		$this -> render('admin', array('model' => $model, ));
	}

	/**
	 * Returns the data model based on the primary key given in the GET variable.
	 * If the data model is not found, an HTTP exception will be raised.
	 * @param integer the ID of the model to be loaded
	 */
	public function loadModel($id) {
		$model = comment::model() -> findByPk($id);
		if ($model === null)
			throw new CHttpException(404, 'The requested page does not exist.');
		return $model;
	}

	/**
	 * Performs the AJAX validation.
	 * @param CModel the model to be validated
	 */
	protected function performAjaxValidation($model) {
		if (isset($_POST['ajax']) && $_POST['ajax'] === 'comment-form') {
			echo CActiveForm::validate($model);
			Yii::app() -> end();
		}
	}
}