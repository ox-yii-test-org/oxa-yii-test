<?php
/* @var $this CompareController */
/* @var $model Compare */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'compare-form',
    // Please note: When you enable ajax validation, make sure the corresponding
    // controller action is handling ajax validation correctly.
    // There is a call to performAjaxValidation() commented in generated controller code.
    // See class documentation of CActiveForm for details on this.
    'enableAjaxValidation'=>false,
    'htmlOptions'=>array('enctype'=>'multipart/form-data'),
)); ?>

    <p class="note">Fields with <span class="required">*</span> are required.</p>

    <?php echo $form->errorSummary($model); ?>

    <div class="row">
        <?php echo $form->labelEx($model, 'type'); ?>
        <?php echo $form->dropDownList($model, 'type', array('Male'=>'Male', 'Female'=>'Female'), array('options' => array($model->type => array('selected' => true))));?>
        <?php echo $form->error($model, 'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'id_vouter'); ?>
        <?php echo $form->dropDownList($model, 'id_vouter', array(1,2,3,4,5,67,78,9,40,8), array('options' => array($model->id_vouter => array('selected' => true))));?>
        <?php echo $form->error($model, 'id_vouter'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'id_winner'); ?>
        <?php echo $form->dropDownList($model, 'id_winner', array(15,2,3,4,53,67,78,9,40,8), array('options' => array($model->id_winner => array('selected' => true))));?>
        <?php echo $form->error($model, 'id_winner'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'id_looser'); ?>
        <?php echo $form->dropDownList($model, 'id_looser', array(1,2,3,44,6,8,3,7,5,67,78,9,40,8), array('options' => array($model->id_looser => array('selected' => true))));?>
        <?php echo $form->error($model, 'id_looser'); ?>
    </div>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->