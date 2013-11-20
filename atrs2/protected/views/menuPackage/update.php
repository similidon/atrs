<?php
/* @var $this MenuPackageController */
/* @var $model MenuPackage */

$this->breadcrumbs=array(
	'Menu Packages'=>array('index'),
	$model->food_package_id=>array('view','id'=>$model->food_package_id),
	'Update',
);

$this->menu=array(
	array('label'=>'List MenuPackage', 'url'=>array('index')),
	array('label'=>'Create MenuPackage', 'url'=>array('create')),
	array('label'=>'View MenuPackage', 'url'=>array('view', 'id'=>$model->food_package_id)),
	array('label'=>'Manage MenuPackage', 'url'=>array('admin')),
);
?>

<h1>Update MenuPackage <?php echo $model->food_package_id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>