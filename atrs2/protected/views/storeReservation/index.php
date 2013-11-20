<?php
/* @var $this StoreReservationController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Store Reservations',
);

$this->menu=array(
	array('label'=>'Create StoreReservation', 'url'=>array('create')),
	array('label'=>'Manage StoreReservation', 'url'=>array('admin')),
);
?>

<h1>Store Reservations</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
