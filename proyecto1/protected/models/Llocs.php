<?php

/**
 * This is the model class for table "llocs".
 *
 * The followings are the available columns in table 'llocs':
 * @property string $id
 * @property integer $regiones_id
 * @property integer $provincias_id
 * @property integer $municipios_id
 * @property string $latitud
 * @property string $longitud
 * @property string $nom
 * @property string $carrer
 * @property string $direccio
 */
class Llocs extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Llocs the static model class
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
		return 'llocs';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('regiones_id, provincias_id, municipios_id, longitud', 'required'),
			array('regiones_id, provincias_id, municipios_id', 'numerical', 'integerOnly'=>true),
			array('latitud, longitud', 'length', 'max'=>11),
			array('nom', 'length', 'max'=>150),
			array('carrer, direccio', 'length', 'max'=>200),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, regiones_id, provincias_id, municipios_id, latitud, longitud, nom, carrer, direccio', 'safe', 'on'=>'search'),
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
                    
                    'regiones'=>array(self::BELONGS_TO,'Regiones','regiones_id'),  //Muchos_a_1
                    'provincias'=>array(self::BELONGS_TO,'Provincias','provincias_id'),  //Muchos_a_1
                    'municipios'=>array(self::BELONGS_TO,'Municipios','municipios_id')  //Muchos_a_1
                    
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'regiones_id' => 'Regiones',
			'provincias_id' => 'Provincias',
			'municipios_id' => 'Municipios',
			'latitud' => 'Latitud',
			'longitud' => 'Longitud',
			'nom' => 'Nom',
			'carrer' => 'Carrer',
			'direccio' => 'Direccio',
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

		$criteria->compare('id',$this->id,true);
		$criteria->compare('regiones_id',$this->regiones_id);
		$criteria->compare('provincias_id',$this->provincias_id);
		$criteria->compare('municipios_id',$this->municipios_id);
		$criteria->compare('latitud',$this->latitud,true);
		$criteria->compare('longitud',$this->longitud,true);
		$criteria->compare('nom',$this->nom,true);
		$criteria->compare('carrer',$this->carrer,true);
		$criteria->compare('direccio',$this->direccio,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}