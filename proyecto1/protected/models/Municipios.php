<?php

/**
 * This is the model class for table "municipios".
 *
 * The followings are the available columns in table 'municipios':
 * @property integer $id
 * @property integer $provincias_id
 * @property string $municipio
 */
class Municipios extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Municipios the static model class
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
		return 'municipios';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('provincias_id', 'required'),
			array('provincias_id', 'numerical', 'integerOnly'=>true),
			array('municipio', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, provincias_id, municipio', 'safe', 'on'=>'search'),
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
                     'provincias'=>array(self::BELONGS_TO,'Provincias','provincias_id'),  //Muchos_a_1
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'provincias_id' => 'Provincias',
			'municipio' => 'Municipio',
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
		$criteria->compare('provincias_id',$this->provincias_id);
		$criteria->compare('municipio',$this->municipio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}