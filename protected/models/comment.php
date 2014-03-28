<?php

/**
 * This is the model class for table "comment".
 *
 * The followings are the available columns in table 'comment':
 * @property integer $id
 * @property string $creation_ts
 * @property string $modification_ts
 * @property integer $project_id
 * @property integer $eventtype_id
 * @property string $author
 * @property string $last_mod_author
 * @property string $comment_date
 * @property string $comment
 *
 * The followings are the available model relations:
 * @property Project $project
 * @property Eventtype $eventtype
 */
class comment extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'comment';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('creation_ts, project_id, eventtype_id, author, comment_date, comment', 'required'),
			array('project_id, eventtype_id', 'numerical', 'integerOnly'=>true),
			array('author, last_mod_author', 'length', 'max'=>128),
			array('modification_ts', 'safe'),
//			array('modification_ts', 'default', 'value'=>null, 'setOnEmpty'=>false),
			
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, creation_ts, modification_ts, project_id, eventtype_id, author, last_mod_author, comment_date, comment', 'safe', 'on'=>'search'),
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
			'project' => array(self::BELONGS_TO, 'Project', 'project_id'),
			'eventtype' => array(self::BELONGS_TO, 'Eventtype', 'eventtype_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identyfikator zdarzenia',
			'creation_ts' => 'Czas utworzenia',
			'modification_ts' => 'Czas ostatniej modyfikacji',
			'project_id' => 'Projekt',
			'eventtype_id' => 'Rodzaj zdarzenia',
			'author' => 'Autor',
			'last_mod_author' => 'Autor ostatniej modyfikacji',
			'comment_date' => 'Data wystąpienia zdarzenia',
			'comment' => 'Szczegółowy opis zdarzenia',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('creation_ts',$this->creation_ts,true);
		$criteria->compare('modification_ts',$this->modification_ts,true);
		$criteria->compare('project_id',$this->project_id);
		$criteria->compare('eventtype_id',$this->eventtype_id);
		$criteria->compare('author',$this->author,true);
		$criteria->compare('last_mod_author',$this->last_mod_author,true);
		$criteria->compare('comment_date',$this->comment_date,true);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	public function getCurrentUserName()
	{
		$u=strtolower(Yii::app()->user->name);
		
		$criteria = new CDbCriteria;
		$criteria->condition = 'LOWER(login) = :u';
		$criteria->limit = 1;
		$criteria->params = array(':u'=>$u);
		
		$ret = teammember::model()->find(
			$criteria
		);
		
		if($ret===null)
                throw new CHttpException(404,'Brak użytkownika o podanym loginie!!!.');

		return $ret->name.' '.$ret->surname;
	}

	public function getProjects()
	{
		$ret = project::model()->findAll(
									array(
										'select'=>'id,name',
										'order'=>'name',
									)
		);
				
		$list = CHtml::listData($ret,'id', 'name');
		return $list;
	}

	public function getEventTypes()
	{
		$ret = eventtype::model()->findAll(
									array(
										'select'=>'id,type',
										'order'=>'type',
									)
		);
		
		$list = CHtml::listData($ret,'id', 'type');
		return $list;
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return comment the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}