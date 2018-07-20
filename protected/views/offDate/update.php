<?php
/* @var $this OffDateController */
/* @var $model OffDate */

$this->breadcrumbs=array(
	'Off Dates'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List OffDate', 'url'=>array('index')),
	array('label'=>'Create OffDate', 'url'=>array('create')),
	array('label'=>'View OffDate', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage OffDate', 'url'=>array('admin')),
);
?>

<h1>Update OffDate <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>