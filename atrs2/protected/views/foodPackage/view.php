<?php
/* @var $this FoodPackageController */
/* @var $model FoodPackage */

$this->breadcrumbs=array(
	'Food Packages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List FoodPackage', 'url'=>array('index')),
	array('label'=>'Create FoodPackage', 'url'=>array('create')),
	array('label'=>'Update FoodPackage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete FoodPackage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage FoodPackage', 'url'=>array('admin')),
);
?>

<h1>View FoodPackage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'food_quantity',
		'price',
		'package_name',
	),
)); ?>
