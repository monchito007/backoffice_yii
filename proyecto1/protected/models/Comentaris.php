<?php

/**
 * This is the model class for table "comentaris".
 *
 * The followings are the available columns in table 'comentaris':
 * @property string $id
 * @property string $llocs_id
 * @property integer $usuaris_id
 * @property string $data_hora
 * @property string $comentari
 */
class Comentaris extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Comentaris the static model class
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
		return 'comentaris';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('llocs_id, usuaris_id', 'required'),
			array('usuaris_id', 'numerical', 'integerOnly'=>true),
			array('llocs_id', 'length', 'max'=>6),
			array('data_hora, comentari', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, llocs_id, usuaris_id, data_hora, comentari', 'safe', 'on'=>'search'),
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
                     'llocs'=>array(self::BELONGS_TO,'Llocs','llocs_id'),  //Muchos_a_1
                     'usuaris'=>array(self::BELONGS_TO,'Usuaris','usuaris_id')  //Muchos_a_1
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'llocs_id' => 'Llocs',
			'usuaris_id' => 'Usuaris',
			'data_hora' => 'Data Hora',
			'comentari' => 'Comentari',
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

                $criteria->with = 'llocs'; // esto es nuevo, si no me equivoco es equivalente a un join en SQL.
                //$criteria->with = 'usuaris'; // esto es nuevo, si no me equivoco es equivalente a un join en SQL.

		$criteria->compare('id',$this->id,true);
		//$criteria->compare('llocs_id',$this->llocs_id,true);
		$criteria->compare('llocs.nom',$this->llocs_id,true);
		//$criteria->compare('usuaris_id',$this->usuaris_id);
		$criteria->compare('usuaris.nom_usuari',$this->usuaris_id);
		$criteria->compare('data_hora',$this->data_hora,true);
		$criteria->compare('comentari',$this->comentari,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}