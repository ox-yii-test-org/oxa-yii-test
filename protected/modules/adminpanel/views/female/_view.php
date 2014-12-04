<?php
/* @var $this FemaleController */
/* @var $data Female */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode(Female::getFemaleStatus($data->status)); ?>
    <br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
	<?php echo CHtml::encode($data->desc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
    <?php if($data->image) {?>
        <?php echo CHtml::image(Yii::app()->controller->createUrl('female/loadImage', array('id' => $data->id)), 'image', array('width' => 200));?>
    <?php }?>
    <br />

</div>