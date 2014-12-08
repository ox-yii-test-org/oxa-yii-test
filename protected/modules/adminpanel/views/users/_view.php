<?php
/* @var $this UsersController */
/* @var $data Users */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
    <?php echo CHtml::encode(Users::getUsersType($data->type)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
    <?php echo CHtml::encode($data->name); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('password')); ?>:</b>
    <?php echo CHtml::encode($data->password); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('status')); ?>:</b>
    <?php echo CHtml::encode(Users::getUsersStatus($data->status)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('desc')); ?>:</b>
    <?php echo CHtml::encode($data->desc); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
    <?php if ($data->image) {?>
        <?php echo CHtml::image(Yii::app()->controller->createUrl('users/loadImage', array('id' => $data->id)), 'image', array('width' => 200));?>
    <?php }?>
    <br />

</div>