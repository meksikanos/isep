<?php

/**
 * This is the model class for table "all_data_types".
 *
 * The followings are the available columns in table 'all_data_types':
 * @property integer $id
 * @property string $varchar
 * @property integer $tinyint
 * @property string $text
 * @property string $date
 * @property integer $smallint
 * @property integer $mediumint
 * @property integer $int
 * @property string $bigint
 * @property double $float
 * @property double $double
 * @property string $decimal
 * @property string $datetime
 * @property string $timestamp
 * @property string $time
 * @property string $year
 * @property string $char
 * @property string $tinyblob
 * @property string $tinytext
 * @property string $blob
 * @property string $mediumblob
 * @property string $mediumtext
 * @property string $longblob
 * @property string $longtext
 * @property string $enum
 * @property string $set
 * @property integer $bool
 * @property string $binary
 * @property string $varbinary
 */
class all_data_types extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'all_data_types';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('varchar, tinyint, text, date, smallint, mediumint, int, bigint, float, double, decimal, datetime, timestamp, time, year, char, tinyblob, tinytext, blob, mediumblob, mediumtext, longblob, longtext, enum, set, bool, binary, varbinary', 'required'),
			array('tinyint, smallint, mediumint, int, bool', 'numerical', 'integerOnly'=>true),
			array('float, double', 'numerical'),
			array('varchar, bigint, binary, varbinary', 'length', 'max'=>20),
			array('decimal, char', 'length', 'max'=>10),
			array('year', 'length', 'max'=>4),
			array('enum', 'length', 'max'=>1),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, varchar, tinyint, text, date, smallint, mediumint, int, bigint, float, double, decimal, datetime, timestamp, time, year, char, tinyblob, tinytext, blob, mediumblob, mediumtext, longblob, longtext, enum, set, bool, binary, varbinary', 'safe', 'on'=>'search'),
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
			'id' => 'ID',
			'varchar' => 'Varchar',
			'tinyint' => 'Tinyint',
			'text' => 'Text',
			'date' => 'Date',
			'smallint' => 'Smallint',
			'mediumint' => 'Mediumint',
			'int' => 'Int',
			'bigint' => 'Bigint',
			'float' => 'Float',
			'double' => 'Double',
			'decimal' => 'Decimal',
			'datetime' => 'Datetime',
			'timestamp' => 'Timestamp',
			'time' => 'Time',
			'year' => 'Year',
			'char' => 'Char',
			'tinyblob' => 'Tinyblob',
			'tinytext' => 'Tinytext',
			'blob' => 'Blob',
			'mediumblob' => 'Mediumblob',
			'mediumtext' => 'Mediumtext',
			'longblob' => 'Longblob',
			'longtext' => 'Longtext',
			'enum' => 'Enum',
			'set' => 'Set',
			'bool' => 'Bool',
			'binary' => 'Binary',
			'varbinary' => 'Varbinary',
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
		$criteria->compare('varchar',$this->varchar,true);
		$criteria->compare('tinyint',$this->tinyint);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('smallint',$this->smallint);
		$criteria->compare('mediumint',$this->mediumint);
		$criteria->compare('int',$this->int);
		$criteria->compare('bigint',$this->bigint,true);
		$criteria->compare('float',$this->float);
		$criteria->compare('double',$this->double);
		$criteria->compare('decimal',$this->decimal,true);
		$criteria->compare('datetime',$this->datetime,true);
		$criteria->compare('timestamp',$this->timestamp,true);
		$criteria->compare('time',$this->time,true);
		$criteria->compare('year',$this->year,true);
		$criteria->compare('char',$this->char,true);
		$criteria->compare('tinyblob',$this->tinyblob,true);
		$criteria->compare('tinytext',$this->tinytext,true);
		$criteria->compare('blob',$this->blob,true);
		$criteria->compare('mediumblob',$this->mediumblob,true);
		$criteria->compare('mediumtext',$this->mediumtext,true);
		$criteria->compare('longblob',$this->longblob,true);
		$criteria->compare('longtext',$this->longtext,true);
		$criteria->compare('enum',$this->enum,true);
		$criteria->compare('set',$this->set,true);
		$criteria->compare('bool',$this->bool);
		$criteria->compare('binary',$this->binary,true);
		$criteria->compare('varbinary',$this->varbinary,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return all_data_types the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
