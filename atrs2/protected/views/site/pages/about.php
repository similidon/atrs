<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);


echo "<h1>Create</h1>";
?>

<?php 
echo "Create new";
echo CHtml::button('Branch',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=branch/create"'    
));
echo "<br>"; ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Catering',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=catering/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Customer',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=customer/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Design Package',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=designPackage/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Employee',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=employee/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Food Package',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=foodPackage/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Meal',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=meal/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Menu Package',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=menuPackage/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Reservation',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=reservation/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Reservation Details',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=reservationDetails/create"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('Create Store Reservation',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=storeReservation/create"'    
)); ?>
