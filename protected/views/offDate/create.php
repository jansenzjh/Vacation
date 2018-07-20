<?php
/* @var $this OffDateController */
/* @var $model OffDate */

$this->breadcrumbs=array(
	'Off Dates'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OffDate', 'url'=>array('index')),
	array('label'=>'Manage OffDate', 'url'=>array('admin')),
);
?>

<h1>Create OffDate</h1>

<?php echo $this->renderPartial('_form', array('model'=>$model)); ?>