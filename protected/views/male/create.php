<?php
/* @var $this MaleController */
/* @var $model Male */

$this->breadcrumbs=array(
	'Males'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Male', 'url'=>array('index')),
	array('label'=>'Manage Male', 'url'=>array('admin')),
);
?>

<h1>Create Male</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>