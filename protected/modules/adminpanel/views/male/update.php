<?php
/* @var $this MaleController */
/* @var $model Male */

$this->breadcrumbs=array(
	'Males'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Male', 'url'=>array('index')),
	array('label'=>'Create Male', 'url'=>array('create')),
	array('label'=>'View Male', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Male', 'url'=>array('admin')),
);
?>

<h1>Update Male <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>