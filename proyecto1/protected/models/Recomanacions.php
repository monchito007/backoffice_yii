<?php

/**
 * This is the model class for table "recomanacions".
 *
 * The followings are the available columns in table 'recomanacions':
 * @property integer $id
 * @property integer $usuaris_id
 * @property string $llocs_id
 */
class Recomanacions extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Recomanacions the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'recomanacions';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('usuaris_id, llocs_id', 'required'),
			array('usuaris_id', 'numerical', 'integerOnly'=>true),
			array('llocs_id', 'length', 'max'=>6),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, usuaris_id, llocs_id', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
                    'usuaris'=>array(self::BELONGS_TO,'Usuaris','usuaris_id'),  //Muchos_a_1
                    'llocs'=>array(self::BELONGS_TO,'Llocs','llocs_id'),  //Muchos_a_1
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'usuaris_id' => 'Usuaris',
			'llocs_id' => 'Llocs',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id',$this->id);
		$criteria->compare('usuaris_id',$this->usuaris_id);
		$criteria->compare('llocs_id',$this->llocs_id,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}