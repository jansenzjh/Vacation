<?php
/* @var $this OffDateController */
/* @var $data OffDate */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('employeeId')); ?>:</b>
	<?php echo CHtml::encode($data->employeeId); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fromDate')); ?>:</b>
	<?php echo CHtml::encode($data->fromDate); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('toDate')); ?>:</b>
	<?php echo CHtml::encode($data->toDate); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('applyDate')); ?>:</b>
	<?php echo CHtml::encode($data->applyDate); ?>
	<br />
        
        <b><?php echo "Days"; ?>:</b>
        <?php echo Chtml::encode(SharedModel::days_different($data->fromDate, $data->toDate)); ?>
	<br />
        
	<b><?php echo CHtml::encode($data->getAttributeLabel('description')); ?>:</b>
	<?php echo CHtml::encode($data->description); ?>
	<br />


</div>