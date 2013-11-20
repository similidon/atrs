<?php
/* @var $this MealController */
/* @var $data Meal */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('food_name')); ?>:</b>
	<?php echo CHtml::encode($data->food_name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('food_description')); ?>:</b>
	<?php echo CHtml::encode($data->food_description); ?>
	<br />


</div>