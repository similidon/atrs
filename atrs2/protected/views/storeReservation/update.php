<?php
/* @var $this StoreReservationController */
/* @var $model StoreReservation */

$this->breadcrumbs=array(
	'Store Reservations'=>array('index'),
	$model->branch_id=>array('view','id'=>$model->branch_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List StoreReservation', 'url'=>array('index')),
	array('label'=>'Create StoreReservation', 'url'=>array('create')),
	array('label'=>'View StoreReservation', 'url'=>array('view', 'id'=>$model->branch_id)),
	array('label'=>'Manage StoreReservation', 'url'=>array('admin')),
);
?>

<h1>Update StoreReservation <?php echo $model->branch_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>