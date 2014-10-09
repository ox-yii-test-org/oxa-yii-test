<?php

class CompareController extends Controller
{
    public function filters()
    {
        return array(
            'accessControl', // perform access control for CRUD operations
        );
    }

    public function accessRules()
    {
        return array(
            array('allow', // allow authenticated user to perform actions
                'actions'=>array('index'),
                'users'=>array('@'),
            ),
            array('allow', // allow admin user to perform actions
                'actions'=>array('index'),
                'users'=>array('admin'),
            ),
            array('deny',  // deny all users
                'users'=>array('*'),
            ),
        );
    }

    public function actionIndex()
    {
        if(Yii::app()->request->isAjaxRequest) {
            $message = '';

            if(isset($_POST['id'])){
                // ...
                $message = 'Accepted! Going for the next one!';
            }

            $model = $this->getCompareModelName();
            $models = $this->getCompareModels($model);
            $result = $this->renderPartial('blocks/compare_block', array(
                    'models' => $models,
                    'model' => $model,
            ), true);

            echo CJSON::encode(array('result' => $result, 'model' => $model, 'message' => $message));
            exit();
        }

        $model = $this->getCompareModelName();
        $models = $this->getCompareModels($model);

        $this->render('index', array('models' => $models, 'model' => $model));
    }

    public function getCompareModelName()
    {
        $entities = array('Male', 'Female');
        $model = $entities[mt_rand(0, count($entities) - 1)];

        return $model;
    }

    public function getCompareModels($model)
    {
        $models = $model::model()->findAll(array(
            'order' => 'rand()',
            'limit' => 2
        ));

        return $models;
    }
}