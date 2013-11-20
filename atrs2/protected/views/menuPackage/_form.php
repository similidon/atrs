<?php
/* @var $this MenuPackageController */
/* @var $model MenuPackage */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'menu-package-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'food_package_id'); ?>
		<?php echo $form->textField($model,'food_package_id'); ?>
		<?php echo $form->error($model,'food_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'meal_id'); ?>
		<?php echo $form->textField($model,'meal_id'); ?>
		<?php echo $form->error($model,'meal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'quantity_id'); ?>
		<?php echo $form->textField($model,'quantity_id'); ?>
		<?php echo $form->error($model,'quantity_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->