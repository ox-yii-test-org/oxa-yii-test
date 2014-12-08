<?php
/* @var $this UsersController */
/* @var $model Users */

$this->breadcrumbs=array(
    'Users'=>array('index'),
    $model->name,
);

$this->menu=array(
    array('label'=>'List User', 'url'=>array('index')),
    array('label'=>'Create User', 'url'=>array('create')),
    array('label'=>'Update User', 'url'=>array('update', 'id'=>$model->id)),
    array('label'=>'Delete User', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
    array('label'=>'Manage User', 'url'=>array('admin')),
);
?>

<h1>View User #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
    'data'=>$model,
    'attributes'=>array(
        'id',
        array(
            'name' => 'type',
            'value' => Users::getUsersType($model->type)
        ),
        'name',
        'password',
        'desc',
        array(
            'name' => 'status',
            'value' => Users::getUsersStatus($model->status)
        ),
        array(
            'name' => 'image',
            'type' => 'raw',
            'value' => $model->image ? CHtml::image(Yii::app()->controller->createUrl('users/loadImage', array('id' => $model->id)), 'image', array('width' => 200)) : ''
        ),
    ),
)); ?>
