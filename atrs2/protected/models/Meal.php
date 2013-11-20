<?php

/**
 * This is the model class for table "meal".
 *
 * The followings are the available columns in table 'meal':
 * @property integer $id
 * @property string $food_name
 * @property string $food_description
 *
 * The followings are the available model relations:
 * @property MenuPackage[] $menuPackages
 */
class Meal extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'meal';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('food_name, food_description', 'required'),
			array('food_name', 'length', 'max'=>60),
			array('food_description', 'length', 'max'=>445),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, food_name, food_description', 'safe', 'on'=>'search'),
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
			'menuPackages' => array(self::HAS_MANY, 'MenuPackage', 'meal_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'food_name' => 'Food Name',
			'food_description' => 'Food Description',
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
		$criteria->compare('food_name',$this->food_name,true);
		$criteria->compare('food_description',$this->food_description,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Meal the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
