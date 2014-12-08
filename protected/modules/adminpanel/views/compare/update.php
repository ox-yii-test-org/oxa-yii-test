<?php
/* @var $this CompareController */
/* @var $model Compare */

$this->breadcrumbs=array(
    'Compares'=>array('index'),
    $model->id=>array('view','id'=>$model->id),
    'Update',
);

$this->menu=array(
    array('label'=>'List Compare', 'url'=>array('index')),
    array('label'=>'Create Compare', 'url'=>array('create')),
    array('label'=>'View Compare', 'url'=>array('view', 'id'=>$model->id)),
    array('label'=>'Manage Compare', 'url'=>array('admin')),
);
?>

<h1>Update Compare <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>