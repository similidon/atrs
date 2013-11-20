<?php
/* @var $this FoodPackageController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Food Packages',
);

$this->menu=array(
	array('label'=>'Create FoodPackage', 'url'=>array('create')),
	array('label'=>'Manage FoodPackage', 'url'=>array('admin')),
);
?>

<h1>Food Packages</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
