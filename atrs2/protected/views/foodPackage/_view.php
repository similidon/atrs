<?php
/* @var $this FoodPackageController */
/* @var $data FoodPackage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('food_quantity')); ?>:</b>
	<?php echo CHtml::encode($data->food_quantity); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('price')); ?>:</b>
	<?php echo CHtml::encode($data->price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('package_name')); ?>:</b>
	<?php echo CHtml::encode($data->package_name); ?>
	<br />


</div>