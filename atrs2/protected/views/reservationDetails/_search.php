<?php
/* @var $this ReservationDetailsController */
/* @var $model ReservationDetails */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'id'); ?>
		<?php echo $form->textField($model,'id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'menu_package_food_package_id'); ?>
		<?php echo $form->textField($model,'menu_package_food_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'design_package_id'); ?>
		<?php echo $form->textField($model,'design_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'store_reservation_branch_id'); ?>
		<?php echo $form->textField($model,'store_reservation_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'catering_id'); ?>
		<?php echo $form->textField($model,'catering_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->