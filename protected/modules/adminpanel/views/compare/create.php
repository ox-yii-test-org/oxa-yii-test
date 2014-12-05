<?php
/* @var $this FemaleController */
/* @var $model Female */

$this->breadcrumbs=array(
	'Compare'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Compare', 'url'=>array('index')),
	array('label'=>'Manage Compare', 'url'=>array('admin')),
);
?>

<h1>Create Compare</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>