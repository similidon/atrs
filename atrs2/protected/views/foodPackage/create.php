<?php
/* @var $this FoodPackageController */
/* @var $model FoodPackage */

$this->breadcrumbs=array(
	'Food Packages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List FoodPackage', 'url'=>array('index')),
	array('label'=>'Manage FoodPackage', 'url'=>array('admin')),
);
?>

<h1>Create FoodPackage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>