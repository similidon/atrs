<?php
/* @var $this MenuPackageController */
/* @var $model MenuPackage */

$this->breadcrumbs=array(
	'Menu Packages'=>array('index'),
	$model->food_package_id,
);

$this->menu=array(
	array('label'=>'List MenuPackage', 'url'=>array('index')),
	array('label'=>'Create MenuPackage', 'url'=>array('create')),
	array('label'=>'Update MenuPackage', 'url'=>array('update', 'id'=>$model->food_package_id)),
	array('label'=>'Delete MenuPackage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->food_package_id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage MenuPackage', 'url'=>array('admin')),
);
?>

<h1>View MenuPackage #<?php echo $model->food_package_id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'food_package_id',
		'meal_id',
		'quantity_id',
	),
)); ?>
