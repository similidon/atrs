<?php
/* @var $this CateringController */
/* @var $model Catering */

$this->breadcrumbs=array(
	'Caterings'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Catering', 'url'=>array('index')),
	array('label'=>'Create Catering', 'url'=>array('create')),
	array('label'=>'View Catering', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Catering', 'url'=>array('admin')),
);
?>

<h1>Update Catering <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>