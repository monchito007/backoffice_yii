<?php

/**
 * This is the model class for table "woeid".
 *
 * The followings are the available columns in table 'woeid':
 * @property integer $id
 * @property integer $municipios_id
 * @property integer $woeid
 */
class Woeid extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Woeid the static model class
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
		return 'woeid';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('municipios_id', 'required'),
			array('municipios_id, woeid', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, municipios_id, woeid', 'safe', 'on'=>'search'),
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
                    'municipios'=>array(self::BELONGS_TO,'Municipios','municipios_id'),  //Muchos_a_1
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'municipios_id' => 'Municipios',
			'woeid' => 'Woeid',
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
		$criteria->compare('municipios_id',$this->municipios_id);
		$criteria->compare('woeid',$this->woeid);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}