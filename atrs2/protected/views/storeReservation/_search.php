<?php
/* @var $this StoreReservationController */
/* @var $model StoreReservation */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hall'); ?>
		<?php echo $form->textField($model,'hall',array('size'=>45,'maxlength'=>45)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'hall_price'); ?>
		<?php echo $form->textField($model,'hall_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'guest_capacity'); ?>
		<?php echo $form->textField($model,'guest_capacity'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->