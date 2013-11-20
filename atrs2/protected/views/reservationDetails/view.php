<?php
/* @var $this ReservationDetailsController */
/* @var $model ReservationDetails */

$this->breadcrumbs=array(
	'Reservation Details'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List ReservationDetails', 'url'=>array('index')),
	array('label'=>'Create ReservationDetails', 'url'=>array('create')),
	array('label'=>'Update ReservationDetails', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete ReservationDetails', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage ReservationDetails', 'url'=>array('admin')),
);
?>

<h1>View ReservationDetails #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'menu_package_food_package_id',
		'design_package_id',
		'store_reservation_branch_id',
		'catering_id',
		'total_price',
	),
)); ?>
