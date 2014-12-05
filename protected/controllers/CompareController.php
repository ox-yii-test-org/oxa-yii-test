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
                'actions'=>array('index', 'loadImage'),
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
                $looserId  = $_POST['looserId'];
                $typeModel = $_POST['type'];
                $modelCompare=new Compare();
                $modelCompare->attributes=array('type'=>$typeModel, 'time' => date('Y-m-d H:i:s',time()), 'id_vouter' => 3, 'id_winner' => $_POST['id'], 'id_looser' => $looserId);

                $valid=$modelCompare->validate();

                if ($valid){
                    $modelCompare->save();

                    $updateWinner=$typeModel::model()->findByPk($_POST['id']);
                    $updateWinner->count_winner+=1;
                    $updateWinner->count+=1;
                    $updateWinner->save();

                    $updateLooser=$typeModel::model()->findByPk($looserId);
                    $updateLooser->count+=1;
                    $updateLooser->save();

                    $message = 'Your voice was accepted';
                } else {
                    $message = 'Error! Data is invalid.';
                }

//                $command = Yii::app()->db->createCommand();
//                $command->insert('compare', array(
//                    'time' => date('Y-m-d H:i:s',time()),
//                    'type' => $model,
//                    'id_vouter' => 1,
//                    'id_winner' => $_POST['id'],
//                    'id_looser' => $looserId,
//                ));
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

    public function loadModel($id, $type)
    {
        $model=$type::model()->findByPk($id);
        if($model===null)
            throw new CHttpException(404,'The requested page does not exist.');
        return $model;
    }

    public function actionloadImage($id, $type)
    {
        //var_dump(325); exit;
        $model = $this->loadModel($id, $type);
        $this->renderPartial(
            'image',
            array(
                'model' => $model
            )
        );
    }
}