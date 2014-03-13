<?php

/**
 * This is the model class for table "project".
 *
 * The followings are the available columns in table 'project':
 * @property integer $id
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
 *
 * The followings are the available model relations:
 * @property Projectstatus $status
 * @property Projecttype $type
 * 
 * Custom properties
 * @property custom_filter_status
 * @property custom_filter_type
 */
class project extends CActiveRecord
{
	var $custom_filter_status;
	var $custom_filter_type;
	
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'project';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, description, type_id, regulatory, init, firstAllocTime, teamSipu, analyst, platforms', 'required'),
			array('status_id, type_id, regulatory', 'numerical', 'integerOnly'=>true),
			array('name, analyst', 'length', 'max'=>128),
			array('path, init', 'length', 'max'=>50),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, status_id, description, type_id, regulatory, path, init, firstAllocTime, teamSipu, teamAit, teamBiz, analyst, platforms, custom_filter_status, custom_filter_type', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'status' => array(self::BELONGS_TO, 'Projectstatus', 'status_id'),
			'type' => array(self::BELONGS_TO, 'Projecttype', 'type_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'name' => 'Nazwa techniczna',
			'status_id' => 'Aktualny status',
			'description' => 'Opis zakresu',
			'type_id' => 'Rodzaj ścieżki wdrożeniowej',
			'regulatory' => 'Czy projekt regulacyjny?',
			'path' => 'Numer ścieżki',
			'init' => 'Inicjator projektu',
			'firstAllocTime' => 'Czas pierwszej alokacji',
			'teamSipu' => 'Zespół po stronie BiRSiPU',
			'teamAit' => 'Zespół po stronie AiT',
			'teamBiz' => 'Zespół po stronie Biznesu',
			'analyst' => 'Analityk z PMO',
			'platforms' => 'Lista zaangażowanych platform',
			
			'custom_filter_status'=>'Aktualny status',
			'custom_filter_type'=>'Rodzaj ścieżki wdrożeniowej',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;
		$criteria->together = true;
		
		$criteria->with = array('type','status');

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('status_id',$this->status_id);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('type_id',$this->type_id);
		$criteria->compare('regulatory',$this->regulatory);
		$criteria->compare('path',$this->path,true);
		$criteria->compare('init',$this->init,true);
		$criteria->compare('firstAllocTime',$this->firstAllocTime,true);
		$criteria->compare('teamSipu',$this->teamSipu,true);
		$criteria->compare('teamAit',$this->teamAit,true);
		$criteria->compare('teamBiz',$this->teamBiz,true);
		$criteria->compare('analyst',$this->analyst,true);
		$criteria->compare('platforms',$this->platforms,true);

		if($this->custom_filter_type)
		$criteria->compare('type.projectType',$this->custom_filter_type,true);
		
		if($this->custom_filter_status)
		$criteria->compare('status.statusName',$this->custom_filter_status,true);

		$sort = new CSort;
		$sort->attributes = array (
			'name',
			
			'custom_filter_status' => array(
				'asc' => 'status.statusName',
				'desc' => 'status.statusName DESC',
			),

			'custom_filter_type' => array(
				'asc' => 'type.projectType',
				'desc' => 'type.projectType DESC',
			),
			
		);
		
		return new CActiveDataProvider($this, array(
			
			'criteria'=>$criteria,
			
			'sort'=>$sort,
			
			 'pagination'=>array(
	            'pageSize'=>50,
        	),
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return project the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
	
	public static function getCategories()
	{
		$ret = projectStatus::model()->findAll(array('select'=>'id,statusName'));
		$list = CHtml::listData($ret,'id', 'statusName');
		return $list;
	}
	
	public static function getTypes()
	{
		$ret = projectType::model()->findAll(array('select'=>'id,projectType'));
		$list = CHtml::listData($ret,'id', 'projectType');
		return $list;	
	}
}
