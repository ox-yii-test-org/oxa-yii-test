<div class="compare-block">
    <?php if ($models):?>
        <?php foreach ($models as $model):?>
            <div class="view" data-id="<?php echo $model->id?>">
                <b><?php echo CHtml::encode($model->getAttributeLabel('name')); ?>:</b>
                <?php echo CHtml::encode($model->name); ?>
                <br />

                <b><?php echo CHtml::encode($model->getAttributeLabel('desc')); ?>:</b>
                <?php echo CHtml::encode($model->desc); ?>
                <br />

                <b><?php echo CHtml::encode($model->getAttributeLabel('status')); ?>:</b>
                <?php echo CHtml::encode(Male::getMaleStatus($model->status)); ?>
                <br />

                <b><?php echo CHtml::encode($model->getAttributeLabel('image')); ?>:</b>
                <?php if($model->image) {?>
                    <?php echo CHtml::image(Yii::app()->controller->createUrl($model->tableName() . '/loadImage', array('id' => $model->id)), 'image', array('width' => 200));?>
                <?php }?>
                <br />
            </div>
        <?php endforeach;?>
    <?php else:?>
        <p>Nothing to compare</p>
        <input type="button" class="view-button" value="Refresh">
    <?php endif;?>
</div>