<?php
/* @var $this OffDateController */
/* @var $model OffDate */
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
		<?php echo $form->label($model,'employeeId'); ?>
		<?php echo $form->textField($model,'employeeId'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'fromDate'); ?>
		<?php echo $form->textField($model,'fromDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'toDate'); ?>
		<?php echo $form->textField($model,'toDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'applyDate'); ?>
		<?php echo $form->textField($model,'applyDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->