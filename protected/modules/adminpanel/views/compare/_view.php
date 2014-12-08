<?php
/* @var $this FemaleController */
/* @var $data Female */
?>

<div class="view">

    <b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
    <?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('time')); ?>:</b>
    <?php echo CHtml::encode($data->time); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_vouter')); ?>:</b>
    <?php echo CHtml::encode($data->id_vouter); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_winner')); ?>:</b>
    <?php echo CHtml::encode($data->id_winner); ?>
    <br />

    <b><?php echo CHtml::encode($data->getAttributeLabel('id_looser')); ?>:</b>
    <?php echo CHtml::encode($data->id_looser); ?>
    <br />

</div>