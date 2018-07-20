<?php
/* @var $this OffDateController */
/* @var $model OffDate */

$this->breadcrumbs=array(
	'Off Dates'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List OffDate', 'url'=>array('index')),
	array('label'=>'Create OffDate', 'url'=>array('create')),
	array('label'=>'Update OffDate', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete OffDate', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage OffDate', 'url'=>array('admin')),
);
?>

<h1>View OffDate #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'employeeId',
		'fromDate',
		'toDate',
		'applyDate',
		'description',
	),
)); ?>
