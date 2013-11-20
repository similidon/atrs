<?php
/* @var $this DesignPackageController */
/* @var $model DesignPackage */

$this->breadcrumbs=array(
	'Design Packages'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List DesignPackage', 'url'=>array('index')),
	array('label'=>'Manage DesignPackage', 'url'=>array('admin')),
);
?>

<h1>Create DesignPackage</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>