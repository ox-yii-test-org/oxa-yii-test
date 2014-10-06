<?php

/**
 * This is the model class for table "Male".
 *
 * The followings are the available columns in table 'Male':
 * @property integer $id
 * @property string $name
 * @property string $desc
 * @property integer $status
 * @property string $hash
 * @property string $image
 */
class Male extends CActiveRecord
{
    const ACTIVE_STATUS = 1;
    const INACTIVE_STATUS = 2;

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'male';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
            array('status', 'numerical', 'integerOnly' => true),
			array('name', 'length', 'max'=>40),
			array('name', 'required'),
			array('desc', 'safe'),
            array('image', 'file', 'types'=>'jpg, gif, png', 'maxSize' => 4194304, 'allowEmpty' => true, 'on' => 'update'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, name, desc, status, image', 'safe', 'on'=>'search'),
		);
	}

    public function beforeSave()
    {
        if ($this->isNewRecord) {
            $this->hash = md5($this->name);
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
			'desc' => 'Desc',
			'status' => 'Status',
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

		$criteria->compare('id',$this->id);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('desc',$this->desc,true);
		$criteria->compare('status',$this->status);
		$criteria->compare('hash',$this->hash);
		$criteria->compare('image',$this->image);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Male the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
