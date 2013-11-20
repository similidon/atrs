<?php
/* @var $this ReservationDetailsController */
/* @var $data ReservationDetails */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('menu_package_food_package_id')); ?>:</b>
	<?php echo CHtml::encode($data->menu_package_food_package_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('design_package_id')); ?>:</b>
	<?php echo CHtml::encode($data->design_package_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('store_reservation_branch_id')); ?>:</b>
	<?php echo CHtml::encode($data->store_reservation_branch_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('catering_id')); ?>:</b>
	<?php echo CHtml::encode($data->catering_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('total_price')); ?>:</b>
	<?php echo CHtml::encode($data->total_price); ?>
	<br />


</div>