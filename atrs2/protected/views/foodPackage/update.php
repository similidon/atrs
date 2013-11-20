<?php
/* @var $this FoodPackageController */
/* @var $model FoodPackage */

$this->breadcrumbs=array(
	'Food Packages'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List FoodPackage', 'url'=>array('index')),
	array('label'=>'Create FoodPackage', 'url'=>array('create')),
	array('label'=>'View FoodPackage', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage FoodPackage', 'url'=>array('admin')),
);
?>

<h1>Update FoodPackage <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>