<?php

/**
 * This is the model class for table "Users".
 *
 * The followings are the available columns in table 'Users':
 * @property integer $id
 * @property string $name
 * @property integer $status
 * @property string $desc
 * @property string $hash
 * @property string $image
 */
class Users extends CActiveRecord
{
    const ACTIVE_STATUS = 1;
    const INACTIVE_STATUS = 2;
    const MALE_TYPE = 1;
    const FEMALE_TYPE = 2;

    public $rating;

    /**
     * @return string the associated database table name
     */
    public function tableName()
    {
        return 'users';
    }

    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(
            array('status', 'numerical', 'integerOnly'=>true),
            array('type', 'numerical', 'integerOnly'=>true),
            array('name', 'length', 'max'=>255),
            array('name', 'unique'),
            array('name, password', 'required'),
            array('desc', 'safe'),
            array(
                'image',
                'file',
                'types'=>'jpg, gif, png',
                'maxSize' => 4194304,
                'allowEmpty' => true,
                'on' => 'update'
            ),
            // The following rule is used by search().
            // @todo Please remove those attributes that should not be searched.
            array('id, type, name, password, status, desc, rating, count, image', 'safe', 'on'=>'search'),
        );
    }

    public function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->hash = md5(time() . $this->name);
        }

        return parent::beforeSave();
    }

    /**
     * @return array relational rules.
     */
    public function relations()
    {
        // NOTE: you may need to adjust the relation name and the related
        // class name for the relations automatically generated below.
        return array(
//            'uid'=>array(self::BELONGS_TO, 'сode', 'code_id'),
//             'rating'=>array(self::STAT,  'Users', 'id', 'select' => 'floor(count_winner/count*100)'),
        );
    }

    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'id' => 'ID',
            'name' => 'Name',
            'password' => 'Password',
            'status' => 'Status',
            'type' => 'Type',
            'desc' => 'Desc',
            'hash' => 'Hash',
            'image' => 'Image',
        );
    }

    /**
     * Retrieves a list of models based on the current search/filter conditions.
     *
     * Typical usecase:
     * - Initialize the model fields with values from filter form.
     * - Execute this method to get CActiveDataProvider instance which will filter
     * models according to data in model fields.
     * - Pass data provider to CGridView, CListView or any similar widget.
     *
     * @return CActiveDataProvider the data provider that can return the models
     * based on the search/filter conditions.
     */
    public function search()
    {
        // @todo Please modify the following code to remove attributes that should not be searched.

        $criteria=new CDbCriteria;
        $criteria->select="*, floor(count_winner/count*100) AS rating";
        $criteria->compare('id', $this->id, true);
        $criteria->compare('name', $this->name, true);
        $criteria->compare('password', $this->password, true);
        $criteria->compare('status', $this->status);
        $criteria->compare('type', $this->type);
        $criteria->compare('desc', $this->desc, true);
        $criteria->compare('count', $this->count, true);
        $criteria->compare('floor(count_winner/count*100)', $this->rating);

        return new CActiveDataProvider($this, array(
            'criteria'=>$criteria,
            'sort'=>array('attributes'=>array("*",'rating'=>array(
                'asc'=>"floor(count_winner/count*100) ASC",
                'desc'=>"floor(count_winner/count*100) DESC",
            ))),
        ));
    }

    /**
     * Returns the static model of the specified AR class.
     * Please note that you should have this exact method in all your CActiveRecord descendants!
     * @param string $className active record class name.
     * @return Users the static model class
     */

    public static function model($className = __CLASS__)
    {
        return parent::model($className);
    }

    public static function getUsersStatus($status)
    {
        switch($status) {
            case self::ACTIVE_STATUS:
                return 'Active';
            case self::INACTIVE_STATUS:
                return 'Inactive';
            default:
                return '';
        }
    }

    public static function getUsersType($type)
    {
        switch($type) {
            case self::MALE_TYPE:
                return 'Male';
            case self::FEMALE_TYPE:
                return 'Female';
            default:
                return '';
        }
    }

    public static function getUsersTypeId($type)
    {
        switch($type) {
            case 'Male':
                return self::MALE_TYPE;
            case 'Female':
                return self::FEMALE_TYPE;
            default:
                return '';
        }
    }

    public static function getUser($name = '')
    {
        $searchedUser = self::model()->findByAttributes(array('name'=>$name));

        return $searchedUser;
    }
}
