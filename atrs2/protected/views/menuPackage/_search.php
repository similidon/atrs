<?php
/* @var $this MenuPackageController */
/* @var $model MenuPackage */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'food_package_id'); ?>
		<?php echo $form->textField($model,'food_package_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'meal_id'); ?>
		<?php echo $form->textField($model,'meal_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'quantity_id'); ?>
		<?php echo $form->textField($model,'quantity_id'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->