<?php
/* @var $this HolidayController */
/* @var $model Holiday */

$this->breadcrumbs=array(
	'Holidays'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Holiday', 'url'=>array('index')),
	array('label'=>'Create Holiday', 'url'=>array('create')),
	array('label'=>'View Holiday', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Holiday', 'url'=>array('admin')),
);
?>

<h1>Update Holiday <?php echo $model->id; ?></h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>