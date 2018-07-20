<?php
/* @var $this OffDateController */
/* @var $model OffDate */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'off-date-form',
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	

	<div class="row">
		<?php echo $form->labelEx($model,'fromDate'); ?>
		<?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'fromDate',
                        'htmlOptions' => array(
                            'size' => '12',         // textField size
                            'maxlength' => '10',    // textField maxlength
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'fromDate'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'toDate'); ?>
		<?php
                    $this->widget('zii.widgets.jui.CJuiDatePicker', array(
                        'model' => $model,
                        'attribute' => 'toDate',
                        'htmlOptions' => array(
                            'size' => '12',         // textField size
                            'maxlength' => '10',    // textField maxlength
                        ),
                    ));
                ?>
		<?php echo $form->error($model,'toDate'); ?>
	</div>


	<div class="row">
		<?php echo $form->labelEx($model,'description'); ?>
		<?php echo $form->textArea($model,'description',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'description'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->