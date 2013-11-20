<?php
/* @var $this StoreReservationController */
/* @var $model StoreReservation */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'store-reservation-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'branch_id'); ?>
		<?php echo $form->textField($model,'branch_id'); ?>
		<?php echo $form->error($model,'branch_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hall'); ?>
		<?php echo $form->textField($model,'hall',array('size'=>45,'maxlength'=>45)); ?>
		<?php echo $form->error($model,'hall'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'hall_price'); ?>
		<?php echo $form->textField($model,'hall_price'); ?>
		<?php echo $form->error($model,'hall_price'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'guest_capacity'); ?>
		<?php echo $form->textField($model,'guest_capacity'); ?>
		<?php echo $form->error($model,'guest_capacity'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->