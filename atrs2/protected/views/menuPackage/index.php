<?php
/* @var $this MenuPackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Menu Packages',
);

$this->menu=array(
	array('label'=>'Create MenuPackage', 'url'=>array('create')),
	array('label'=>'Manage MenuPackage', 'url'=>array('admin')),
);
?>

<h1>Menu Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
