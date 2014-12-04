<?php
/* @var $this FemaleController */
/* @var $model Female */

$this->breadcrumbs=array(
	'Females'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Female', 'url'=>array('index')),
	array('label'=>'Create Female', 'url'=>array('create')),
	array('label'=>'Update Female', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Female', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Female', 'url'=>array('admin')),
);
?>

<h1>View Female #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
        'id',
		'name',
        'desc',
		array(
            'name' => 'status',
            'value' => Female::getfemaleStatus($model->status)
        ),
        array(
            'name' => 'image',
            'type' => 'raw',
            'value' => $model->image ? CHtml::image(Yii::app()->controller->createUrl('female/loadImage', array('id' => $model->id)), 'image', array('width' => 200)) : ''
        ),
	),
)); ?>
