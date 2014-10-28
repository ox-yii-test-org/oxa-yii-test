<?php
/* @var $this FemaleController */
/* @var $model Female */

$this->breadcrumbs=array(
	'Females'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Female', 'url'=>array('index')),
	array('label'=>'Manage Female', 'url'=>array('admin')),
);
?>

<h1>Create Female</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>