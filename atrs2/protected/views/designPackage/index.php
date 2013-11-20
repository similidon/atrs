<?php
/* @var $this DesignPackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Design Packages',
);

$this->menu=array(
	array('label'=>'Create DesignPackage', 'url'=>array('create')),
	array('label'=>'Manage DesignPackage', 'url'=>array('admin')),
);
?>

<h1>Design Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
