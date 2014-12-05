<?php
/* @var $this CompareController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Compare',
);

$this->menu=array(
	array('label'=>'Create Compare', 'url'=>array('create')),
	array('label'=>'Manage Compare', 'url'=>array('admin')),
);
?>

<h1>Compare List</h1>

<?php  $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
