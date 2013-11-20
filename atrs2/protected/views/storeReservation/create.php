<?php
/* @var $this StoreReservationController */
/* @var $model StoreReservation */

$this->breadcrumbs=array(
	'Store Reservations'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List StoreReservation', 'url'=>array('index')),
	array('label'=>'Manage StoreReservation', 'url'=>array('admin')),
);
?>

<h1>Create StoreReservation</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>