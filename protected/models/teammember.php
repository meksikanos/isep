<?php

/**
 * This is the model class for table "teamMember".
 *
 * The followings are the available columns in table 'teamMember':
 * @property integer $id
 * @property string $name
 * @property string $surname
 * @property string $company
 * @property string $position
 * @property string $role
 * @property string $login
 * @property integer $active
 * @property string $comment
 */
class teammember extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'teamMember';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, surname, company, position, role, login, active', 'required'),
			array('active', 'numerical', 'integerOnly'=>true),
			array('name, surname, company, position, role, login', 'length', 'max'=>128),
			array('comment', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, surname, company, position, role, login, active, comment', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'Identyfikator',
			'name' => 'Imię',
			'surname' => 'Nazwisko',
			'company' => 'Firma',
			'position' => 'Pozycja w strukturze',
			'role' => 'Rola w zespole',
			'login' => 'Login z aplikacji',
			'active' => 'Czy osoba nadal pracuje?',
			'comment' => 'Dodatkowe uwagi',
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
		$criteria->compare('name',$this->name,true);
		$criteria->compare('surname',$this->surname,true);
		$criteria->compare('company',$this->company,true);
		$criteria->compare('position',$this->position,true);
		$criteria->compare('role',$this->role,true);
		$criteria->compare('login',$this->login,true);
		$criteria->compare('active',$this->active);
		$criteria->compare('comment',$this->comment,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return teammember the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
