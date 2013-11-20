<?php
/* @var $this ReservationDetailsController */
/* @var $model ReservationDetails */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'reservation-details-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'menu_package_food_package_id'); ?>
		<?php echo $form->textField($model,'menu_package_food_package_id'); ?>
		<?php echo $form->error($model,'menu_package_food_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'design_package_id'); ?>
		<?php echo $form->textField($model,'design_package_id'); ?>
		<?php echo $form->error($model,'design_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'store_reservation_branch_id'); ?>
		<?php echo $form->textField($model,'store_reservation_branch_id'); ?>
		<?php echo $form->error($model,'store_reservation_branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'catering_id'); ?>
		<?php echo $form->textField($model,'catering_id'); ?>
		<?php echo $form->error($model,'catering_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'total_price'); ?>
		<?php echo $form->textField($model,'total_price'); ?>
		<?php echo $form->error($model,'total_price'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->