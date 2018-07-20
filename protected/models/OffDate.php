<?php

/**
 * This is the model class for table "OffDate".
 *
 * The followings are the available columns in table 'OffDate':
 * @property integer $id
 * @property integer $employeeId
 * @property string $fromDate
 * @property string $toDate
 * @property string $applyDate
 * @property string $description
 */
class OffDate extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return OffDate the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'OffDate';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('employeeId, fromDate, toDate, applyDate, description', 'required'),
			array('employeeId', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, employeeId, fromDate, toDate, applyDate, description', 'safe', 'on'=>'search'),
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
			'employeeId' => 'Employee',
			'fromDate' => 'From Date',
			'toDate' => 'To Date',
			'applyDate' => 'Apply Date',
			'description' => 'Description',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('employeeId',$this->employeeId);
		$criteria->compare('fromDate',$this->fromDate,true);
		$criteria->compare('toDate',$this->toDate,true);
		$criteria->compare('applyDate',$this->applyDate,true);
		$criteria->compare('description',$this->description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}