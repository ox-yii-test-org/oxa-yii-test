<?php
/* @var $this CompareController */
/* @var $model Compare */

$this->breadcrumbs=array(
    'Compare'=>array('index'),
    $model->id,
);
//var_dump(235); exit;
$this->menu=array(
    array('label'=>'List Compare', 'url'=>array('index')),
    array('label'=>'Create Compare', 'url'=>array('create')),
    array('label'=>'Update Compare', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete Compare', 'url'=>'#', 'linkOptions'=>array(
        'submit'=>array('delete','id'=>$model->id),
        'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage Compare', 'url'=>array('admin')),
);
?>

<h1>View Compare #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        'type',
        'time',
        'id_vouter',
        'id_winner',
        'id_looser',
    ),
)); ?>