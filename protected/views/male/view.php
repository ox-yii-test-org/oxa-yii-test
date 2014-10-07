<?php
/* @var $this MaleController */
/* @var $model Male */

$this->breadcrumbs=array(
	'Males'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Male', 'url'=>array('index')),
	array('label'=>'Create Male', 'url'=>array('create')),
	array('label'=>'Update Male', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Male', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Male', 'url'=>array('admin')),
);
?>

<h1>View Male #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'desc',
        array(
            'name' => 'status',
            'value' => ViewHelper::getMaleStatus($model->status)
        ),
        array(
            'name' => 'image',
            'type' => 'raw',
            'value' => $model->image ? CHtml::image(Yii::app()->controller->createUrl('male/loadImage', array('id' => $model->id)), 'image', array('width' => 200)) : ''
        ),
	),
)); ?>
