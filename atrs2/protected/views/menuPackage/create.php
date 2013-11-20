<?php
/* @var $this MenuPackageController */
/* @var $model MenuPackage */

$this->breadcrumbs=array(
	'Menu Packages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List MenuPackage', 'url'=>array('index')),
	array('label'=>'Manage MenuPackage', 'url'=>array('admin')),
);
?>

<h1>Create MenuPackage</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>