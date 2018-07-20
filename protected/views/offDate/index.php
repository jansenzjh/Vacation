<?php
/* @var $this OffDateController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Off Dates',
);

$this->menu=array(
	array('label'=>'Create OffDate', 'url'=>array('create')),
	array('label'=>'Manage OffDate', 'url'=>array('admin')),
);
?>

<h1>Off Dates</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
