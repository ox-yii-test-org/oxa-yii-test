<?php
/* @var $this FemaleController */
/* @var $model Female */

$this->breadcrumbs=array(
	'Females'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Female', 'url'=>array('index')),
	array('label'=>'Create Female', 'url'=>array('create')),
	array('label'=>'View Female', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Female', 'url'=>array('admin')),
);
?>

<h1>Update Female <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>