<?php

class UrlHelper
{
    public static function getFileUploadPath($model)
    {
        return Yii::getPathOfAlias('webroot') . '/images/uploads/' . $model->tableName() . '/';
    }

    public static function getFileViewPath($model)
    {
        return Yii::app()->getBaseUrl(true) . '/images/uploads/' . $model->tableName() . '/';
    }
}
