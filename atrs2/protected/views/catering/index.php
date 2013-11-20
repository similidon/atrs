<?php
/* @var $this CateringController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Caterings',
);

$this->menu=array(
	array('label'=>'Create Catering', 'url'=>array('create')),
	array('label'=>'Manage Catering', 'url'=>array('admin')),
);
?>

<h1>Caterings</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
