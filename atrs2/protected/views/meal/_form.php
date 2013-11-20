<?php
/* @var $this MealController */
/* @var $model Meal */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'meal-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'food_name'); ?>
		<?php echo $form->textField($model,'food_name',array('size'=>60,'maxlength'=>60)); ?>
		<?php echo $form->error($model,'food_name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'food_description'); ?>
		<?php echo $form->textField($model,'food_description',array('size'=>60,'maxlength'=>445)); ?>
		<?php echo $form->error($model,'food_description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->