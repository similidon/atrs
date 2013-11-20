<?php
/* @var $this ReservationDetailsController */
/* @var $model ReservationDetails */

$this->breadcrumbs=array(
	'Reservation Details'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List ReservationDetails', 'url'=>array('index')),
	array('label'=>'Manage ReservationDetails', 'url'=>array('admin')),
);
?>

<h1>Create ReservationDetails</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>