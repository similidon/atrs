<?php
/* @var $this MenuPackageController */
/* @var $data MenuPackage */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('food_package_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->food_package_id), array('view', 'id'=>$data->food_package_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('meal_id')); ?>:</b>
	<?php echo CHtml::encode($data->meal_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('quantity_id')); ?>:</b>
	<?php echo CHtml::encode($data->quantity_id); ?>
	<br />


</div>