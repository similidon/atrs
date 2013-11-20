<?php
/* @var $this StoreReservationController */
/* @var $model StoreReservation */

$this->breadcrumbs=array(
	'Store Reservations'=>array('index'),
	$model->branch_id,
);

$this->menu=array(
	array('label'=>'List StoreReservation', 'url'=>array('index')),
	array('label'=>'Create StoreReservation', 'url'=>array('create')),
	array('label'=>'Update StoreReservation', 'url'=>array('update', 'id'=>$model->branch_id)),
	array('label'=>'Delete StoreReservation', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->branch_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage StoreReservation', 'url'=>array('admin')),
);
?>

<h1>View StoreReservation #<?php echo $model->branch_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'branch_id',
		'hall',
		'hall_price',
		'guest_capacity',
	),
)); ?>
