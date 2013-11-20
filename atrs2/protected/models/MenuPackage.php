<?php

/**
 * This is the model class for table "menu_package".
 *
 * The followings are the available columns in table 'menu_package':
 * @property integer $food_package_id
 * @property integer $meal_id
 * @property integer $quantity_id
 *
 * The followings are the available model relations:
 * @property FoodPackage $foodPackage
 * @property Meal $meal
 * @property ReservationDetails[] $reservationDetails
 */
class MenuPackage extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'menu_package';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('food_package_id, meal_id, quantity_id', 'required'),
			array('food_package_id, meal_id, quantity_id', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('food_package_id, meal_id, quantity_id', 'safe', 'on'=>'search'),
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
			'foodPackage' => array(self::BELONGS_TO, 'FoodPackage', 'food_package_id'),
			'meal' => array(self::BELONGS_TO, 'Meal', 'meal_id'),
			'reservationDetails' => array(self::HAS_MANY, 'ReservationDetails', 'menu_package_food_package_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'food_package_id' => 'Food Package',
			'meal_id' => 'Meal',
			'quantity_id' => 'Quantity',
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

		$criteria->compare('food_package_id',$this->food_package_id);
		$criteria->compare('meal_id',$this->meal_id);
		$criteria->compare('quantity_id',$this->quantity_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return MenuPackage the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
