<?php
/* @var $this CateringController */
/* @var $model Catering */

$this->breadcrumbs=array(
	'Caterings'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Catering', 'url'=>array('index')),
	array('label'=>'Manage Catering', 'url'=>array('admin')),
);
?>

<h1>Create Catering</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>