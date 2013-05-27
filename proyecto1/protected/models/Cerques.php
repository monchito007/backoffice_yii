<?php

/**
 * This is the model class for table "cerques".
 *
 * The followings are the available columns in table 'cerques':
 * @property integer $id
 * @property integer $regiones_id
 * @property integer $provincias_id
 * @property integer $municipios_id
 */
class Cerques extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Cerques the static model class
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
		return 'cerques';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cerca,regiones_id, provincias_id, municipios_id', 'required'),
			array('regiones_id, provincias_id, municipios_id', 'numerical', 'integerOnly'=>true),
                        array('cerca', 'length', 'max'=>255),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, cerca,regiones_id, provincias_id, municipios_id', 'safe', 'on'=>'search'),
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
			'cerca' => 'Cerca',
			'regiones_id' => 'Regiones',
			'provincias_id' => 'Provincias',
			'municipios_id' => 'Municipios',
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
		$criteria->compare('cerca',$this->cerca);
		$criteria->compare('regiones_id',$this->regiones_id);
		$criteria->compare('provincias_id',$this->provincias_id);
		$criteria->compare('municipios_id',$this->municipios_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
        
        public static function getListRegiones() //Estàtica pq pot estar disponible per a tots els models en qualsevol lloc que es necessite
        {
            return CHtml::listData(Regiones::model()->findAll(),'id','region');
        }
        public static function getListProvincias() //Estàtica pq pot estar disponible per a tots els models en qualsevol lloc que es necessite
        {
            return CHtml::listData(Provincias::model()->findAll(),'id','provincia');
        }
        
        public static function getListCerques() //Estàtica pq pot estar disponible per a tots els models en qualsevol lloc que es necessite
        {
            $list=Yii::app()->db->createCommand('SELECT count(cerca) as num_cerques,cerca FROM cerques GROUP BY cerca')->queryAll();
                
            $rs=array();
            $cont=0;
            foreach($list as $item){
                //process each item here
                //$rs[$cont]=array($item['id'],$item['cerca']);
                //print_r($item);echo"<br><br>";
                $rs[$cont][0]=$item['num_cerques'];
                $rs[$cont][1]=$item['cerca'];
                $cont++;
            }

        }
        
}