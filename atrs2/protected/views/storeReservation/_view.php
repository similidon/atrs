<?php
/* @var $this StoreReservationController */
/* @var $data StoreReservation */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('branch_id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->branch_id), array('view', 'id'=>$data->branch_id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hall')); ?>:</b>
	<?php echo CHtml::encode($data->hall); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('hall_price')); ?>:</b>
	<?php echo CHtml::encode($data->hall_price); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('guest_capacity')); ?>:</b>
	<?php echo CHtml::encode($data->guest_capacity); ?>
	<br />


</div>