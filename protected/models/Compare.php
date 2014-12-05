<?php

/**
 * This is the model class for table "Compare".
 *
 * The followings are the available columns in table 'Compare':
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property integer $status
 * @property string $hash
 * @property string $image
 */
class Compare extends CActiveRecord
{
    public $type;
    public $time;
    public $id_vouter;
    public $id_winner;
    public $id_looser;

    public function tableName()
    {
        return 'compare';
    }

    public static function model($className=__CLASS__)
    {
        return parent::model($className);
    }

    /**
     * Declares the validation rules.
     */
    public function rules()
    {
        return array(
            // type, time, id_vouter, id_winner and id_looser are required
            array('type, time, id_vouter, id_winner, id_looser', 'required'),
        );
    }

    /**
     * Declares customized attribute labels.
     * If not declared here, an attribute would have a label that is
     * the same as its name with the first letter in upper case.
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'type' => 'Type',
            'time' => 'Time',
            'id_vouter' => 'IdVouter',
            'id_winner' => 'IdWinner',
            'id_looser' => 'IdLooser',
        );
    }

    public function beforeSave()
    {
        if ($this->isNewRecord) {
//            $this->hash = md5(time() . $this->name);
        }

        return parent::beforeSave();
    }

    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;

        $criteria->compare('type',$this->type,true);
        $criteria->compare('time',$this->time);
        $criteria->compare('id_vouter',$this->id_vouter);
        $criteria->compare('id_winner',$this->id_winner);
        $criteria->compare('id_looser',$this->id_looser);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
        ));
    }
}
