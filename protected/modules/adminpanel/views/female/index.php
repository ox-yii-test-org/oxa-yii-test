<?php
/* @var $this FemaleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Females',
);

$this->menu=array(
	array('label'=>'Create Female', 'url'=>array('create')),
	array('label'=>'Manage Female', 'url'=>array('admin')),
);
?>

<h1>Females</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
