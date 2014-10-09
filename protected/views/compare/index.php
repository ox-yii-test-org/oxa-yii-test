<script type="text/javascript">
    $(function() {
        $(document).on('click', '.view, .view-button', function(){
            <?php
                echo CHtml::ajax(
                    array('url'=>$this->createUrl('/compare/index'),
                        'type'=>'POST',
                        'data'=>array('id'=>'js:$(this).data("id")'),
                        'dataType' => 'json',
                        'success'=>'function(data){
                            if (data.message) {
                                $(".flash-success").html(data.message).show().delay(1000).fadeOut();
                            }
                            $(".compare-model").html(data.model);
                            $(".compare-block").html(data.result);
                        }',
                        'beforeSend' => 'function() {
                            $(".compare-block").addClass("loading");
                        }',
                        'complete' => 'function() {
                            $(".compare-block").removeClass("loading");
                        }',
                    )
                );
            ?>
        });
    });
</script>

<?php
/* @var $this CompareController */
/* @var $model string */

$this->pageTitle=Yii::app()->name . ' - Compare';
$this->breadcrumbs=array(
    'Compare',
);
?>
<h1>Compare</h1>
<strong>Choose your favorite (<span class="compare-model"><?php echo $model;?></span>):</strong>
<div id="flash-msgs-custom">
    <div class="flash-success"></div>
</div>
<?php $this->renderPartial('blocks/compare_block',array(
    'models' => $models,
));?>
