<?php
/* @var $this FemaleController */
/* @var $model Female */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'action'=>Yii::app()->createUrl($this->route),
    'method'=>'get',
));   ?>

    <div class="row">
        <?php echo $form->label($model, 'time'); ?>
        <?php echo $form->textField($model, 'time', array('size'=>60,'maxlength'=>255)); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'type'); ?>
        <?php echo $form->textField($model, 'type'); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'id_winner'); ?>
        <?php echo $form->textArea($model, 'id_winner', array('rows'=>6, 'cols'=>50)
        ); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'id_vouter'); ?>
        <?php echo $form->textArea($model, 'id_vouter', array('rows'=>6, 'cols'=>50)
        ); ?>
    </div>
    <div class="row">
        <?php echo $form->label($model, 'id_looser'); ?>
        <?php echo $form->textArea($model, 'id_looser', array('rows'=>6, 'cols'=>50)); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton('Search'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->