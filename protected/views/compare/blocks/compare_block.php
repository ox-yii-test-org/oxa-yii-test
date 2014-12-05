<div class="compare-block" data-name="<?php echo $model; ?>">
    <?php if ($models):?>
        <?php foreach ($models as $modelItem):?>
            <div class="view" data-id="<?php echo $modelItem->id?>">
                <?php if($modelItem->image) :?>
<!--                    --><?php //echo CHtml::image(Yii::app()->controller->createUrl('male/loadImage', array('id' => $data->id)), 'image', array('width' => 200));?>
                    <?php echo CHtml::image(Yii::app()->controller->createUrl('compare/loadImage', array('id' => $modelItem->id, 'type' => $model)), 'image', array('width' => 200));?>
                <?php endif;?>
                <div class="compare-info">
                    <b><?php echo CHtml::encode($modelItem->getAttributeLabel('name')); ?>:</b>
                    <?php echo CHtml::encode($modelItem->name); ?>
                    <br />

                    <b><?php echo CHtml::encode($modelItem->getAttributeLabel('desc')); ?>:</b>
                    <?php echo CHtml::encode($modelItem->desc); ?>
                    <br />

                    <b><?php echo CHtml::encode($modelItem->getAttributeLabel('status')); ?>:</b>
                    <?php echo CHtml::encode(Male::getMaleStatus($modelItem->status)); ?>
                    <br />

                    <b><?php echo CHtml::encode($modelItem->getAttributeLabel('id')); ?>:</b>
                    <?php echo CHtml::encode($modelItem->id); ?>
                    <br />
                </div>
            </div>
        <?php endforeach;?>
    <?php else:?>
        <p>Nothing to compare</p>
        <input type="button" class="view-button" value="Refresh">
    <?php endif;?>
</div>