<?php

/**
 * This is the model class for table "reservation_details".
 *
 * The followings are the available columns in table 'reservation_details':
 * @property integer $id
 * @property integer $menu_package_food_package_id
 * @property integer $design_package_id
 * @property integer $store_reservation_branch_id
 * @property integer $catering_id
 * @property integer $total_price
 *
 * The followings are the available model relations:
 * @property Reservation[] $reservations
 * @property MenuPackage $menuPackageFoodPackage
 * @property DesignPackage $designPackage
 * @property StoreReservation $storeReservationBranch
 * @property Catering $catering
 */
class ReservationDetails extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'reservation_details';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('menu_package_food_package_id, design_package_id, store_reservation_branch_id, catering_id, total_price', 'required'),
			array('menu_package_food_package_id, design_package_id, store_reservation_branch_id, catering_id, total_price', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, menu_package_food_package_id, design_package_id, store_reservation_branch_id, catering_id, total_price', 'safe', 'on'=>'search'),
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
			'reservations' => array(self::HAS_MANY, 'Reservation', 'reservation_details_id'),
			'menuPackageFoodPackage' => array(self::BELONGS_TO, 'MenuPackage', 'menu_package_food_package_id'),
			'designPackage' => array(self::BELONGS_TO, 'DesignPackage', 'design_package_id'),
			'storeReservationBranch' => array(self::BELONGS_TO, 'StoreReservation', 'store_reservation_branch_id'),
			'catering' => array(self::BELONGS_TO, 'Catering', 'catering_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'menu_package_food_package_id' => 'Menu Package Food Package',
			'design_package_id' => 'Design Package',
			'store_reservation_branch_id' => 'Store Reservation Branch',
			'catering_id' => 'Catering',
			'total_price' => 'Total Price',
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
		$criteria->compare('menu_package_food_package_id',$this->menu_package_food_package_id);
		$criteria->compare('design_package_id',$this->design_package_id);
		$criteria->compare('store_reservation_branch_id',$this->store_reservation_branch_id);
		$criteria->compare('catering_id',$this->catering_id);
		$criteria->compare('total_price',$this->total_price);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return ReservationDetails the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
