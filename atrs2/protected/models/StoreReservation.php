<?php

/**
 * This is the model class for table "store_reservation".
 *
 * The followings are the available columns in table 'store_reservation':
 * @property integer $branch_id
 * @property string $hall
 * @property integer $hall_price
 * @property integer $guest_capacity
 *
 * The followings are the available model relations:
 * @property ReservationDetails[] $reservationDetails
 * @property Branch $branch
 */
class StoreReservation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'store_reservation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('branch_id, hall, hall_price, guest_capacity', 'required'),
			array('branch_id, hall_price, guest_capacity', 'numerical', 'integerOnly'=>true),
			array('hall', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('branch_id, hall, hall_price, guest_capacity', 'safe', 'on'=>'search'),
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
			'reservationDetails' => array(self::HAS_MANY, 'ReservationDetails', 'store_reservation_branch_id'),
			'branch' => array(self::BELONGS_TO, 'Branch', 'branch_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'branch_id' => 'Branch',
			'hall' => 'Hall',
			'hall_price' => 'Hall Price',
			'guest_capacity' => 'Guest Capacity',
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

		$criteria->compare('branch_id',$this->branch_id);
		$criteria->compare('hall',$this->hall,true);
		$criteria->compare('hall_price',$this->hall_price);
		$criteria->compare('guest_capacity',$this->guest_capacity);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return StoreReservation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
