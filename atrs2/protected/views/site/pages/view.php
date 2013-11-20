<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name . ' - About';
$this->breadcrumbs=array(
	'About',
);


echo "<h1>View</h1>";
?>

<?php 
echo "View new";
echo CHtml::button('Branch',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=branch/index"'    
));
echo "<br>"; ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Catering',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=catering/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Customer',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=customer/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Design Package',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=designPackage/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Employee',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=employee/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Food Package',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=foodPackage/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Meal',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=meal/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Menu Package',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=menuPackage/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Reservation',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=reservation/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Reservation Details',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=reservationDetails/index"'    
)); ?>

<?php echo "<br>" ?>

<?php echo CHtml::button('View Store Reservation',array(
'onclick' => 'js:document.location.href="/atrs2/index.php?r=storeReservation/index"'    
)); ?>
