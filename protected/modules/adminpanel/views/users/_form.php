<?php
/* @var $this UsersController */
/* @var $model Users */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
    'id'=>'users-form',
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
        <?php echo $form->dropDownList($model, 'type', array('0' => '', '1'=>'Male', '2'=>'Female'), array('options' => array($model->type => array('selected' => true))));?>
        <?php echo $form->error($model, 'type'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'role'); ?>
        <?php echo $form->dropDownList($model, 'role', array('user'=>'User', 'admin'=>'Admin'), array('options' => array($model->type => array('selected' => true))));?>
        <?php echo $form->error($model, 'role'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'name'); ?>
        <?php echo $form->textField($model, 'name', array('size'=>60, 'maxlength'=>255)); ?>
        <?php echo $form->error($model, 'name'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'password'); ?>
        <?php echo $form->textField($model, 'password', array('size'=>60, 'maxlength'=>10)); ?>
        <?php echo $form->error($model, 'password'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'status'); ?>
        <?php echo $form->dropDownList($model, 'status', array('1'=>'Active', '2'=>'Inactive'), array('options' => array($model->status => array('selected' => true))));?>
        <?php echo $form->error($model, 'status'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'desc'); ?>
        <?php echo $form->textArea($model, 'desc', array('rows'=>6, 'cols'=>50)); ?>
        <?php echo $form->error($model, 'desc'); ?>
    </div>

    <div class="row">
        <?php echo $form->labelEx($model, 'image'); ?>
        <?php echo $form->fileField($model, 'image'); ?>
        <?php echo $form->error($model, 'image'); ?>
    </div>

    <?php if (!$model->isNewRecord && $model->image) {?>
        <div class="row">
            <?php echo CHtml::image(Yii::app()->controller->createUrl('users/loadImage', array('id' => $model->id)), 'image', array('width' => 200));?>
        </div>
    <?php } ?>

    <div class="row buttons">
        <?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
    </div>

<?php $this->endWidget(); ?>

</div><!-- form -->