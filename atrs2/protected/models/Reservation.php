<?php

/**
 * This is the model class for table "reservation".
 *
 * The followings are the available columns in table 'reservation':
 * @property integer $id
 * @property integer $customer_id
 * @property integer $employee_id
 * @property integer $reservation_details_id
 * @property string $type
 * @property string $date
 * @property integer $no_of_guests
 * @property integer $no_of_table
 * @property integer $no_of_chair
 * @property string $start_time
 * @property string $end_time
 * @property string $note
 *
 * The followings are the available model relations:
 * @property Customer $customer
 * @property Employee $employee
 * @property ReservationDetails $reservationDetails
 */
class Reservation extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservation';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('customer_id, employee_id, reservation_details_id, type, date, no_of_guests, no_of_table, no_of_chair, start_time, end_time, note', 'required'),
			array('customer_id, employee_id, reservation_details_id, no_of_guests, no_of_table, no_of_chair', 'numerical', 'integerOnly'=>true),
			array('type', 'length', 'max'=>45),
			array('note', 'length', 'max'=>445),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, customer_id, employee_id, reservation_details_id, type, date, no_of_guests, no_of_table, no_of_chair, start_time, end_time, note', 'safe', 'on'=>'search'),
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
			'customer' => array(self::BELONGS_TO, 'Customer', 'customer_id'),
			'employee' => array(self::BELONGS_TO, 'Employee', 'employee_id'),
			'reservationDetails' => array(self::BELONGS_TO, 'ReservationDetails', 'reservation_details_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'customer_id' => 'Customer',
			'employee_id' => 'Employee',
			'reservation_details_id' => 'Reservation Details',
			'type' => 'Type',
			'date' => 'Date',
			'no_of_guests' => 'No Of Guests',
			'no_of_table' => 'No Of Table',
			'no_of_chair' => 'No Of Chair',
			'start_time' => 'Start Time',
			'end_time' => 'End Time',
			'note' => 'Note',
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
		$criteria->compare('customer_id',$this->customer_id);
		$criteria->compare('employee_id',$this->employee_id);
		$criteria->compare('reservation_details_id',$this->reservation_details_id);
		$criteria->compare('type',$this->type,true);
		$criteria->compare('date',$this->date,true);
		$criteria->compare('no_of_guests',$this->no_of_guests);
		$criteria->compare('no_of_table',$this->no_of_table);
		$criteria->compare('no_of_chair',$this->no_of_chair);
		$criteria->compare('start_time',$this->start_time,true);
		$criteria->compare('end_time',$this->end_time,true);
		$criteria->compare('note',$this->note,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Reservation the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
