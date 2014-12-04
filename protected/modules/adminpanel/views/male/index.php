<?php
/* @var $this MaleController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Males',
);

$this->menu=array(
	array('label'=>'Create Male', 'url'=>array('create')),
	array('label'=>'Manage Male', 'url'=>array('admin')),
);
?>

<h1>Males</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
