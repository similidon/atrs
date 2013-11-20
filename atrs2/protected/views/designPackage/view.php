<?php
/* @var $this DesignPackageController */
/* @var $model DesignPackage */

$this->breadcrumbs=array(
	'Design Packages'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List DesignPackage', 'url'=>array('index')),
	array('label'=>'Create DesignPackage', 'url'=>array('create')),
	array('label'=>'Update DesignPackage', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete DesignPackage', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage DesignPackage', 'url'=>array('admin')),
);
?>

<h1>View DesignPackage #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'design_name',
		'description',
		'pic_path',
		'price',
	),
)); ?>
