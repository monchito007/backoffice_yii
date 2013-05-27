<?php

/**
 * This is the model class for table "usuaris".
 *
 * The followings are the available columns in table 'usuaris':
 * @property integer $id
 * @property string $nom_usuari
 * @property string $clau
 * @property string $mail
 */
class Usuaris extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Usuaris the static model class
	 */
    
         public function behaviors()
        {
            return array(
                'GPuntos' => array(
                    'class' => 'ext.md5.Gmd5',
                    ),
            );
        }
    
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuaris';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nom_usuari', 'length', 'max'=>20),
			array('clau', 'length', 'max'=>50),
			array('mail', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id, nom_usuari, clau, mail', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nom_usuari' => 'Nom Usuari',
			'clau' => 'Clau',
			'mail' => 'Mail',
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
		$criteria->compare('nom_usuari',$this->nom_usuari,true);
		$criteria->compare('clau',$this->clau,true);
		$criteria->compare('mail',$this->mail,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}

class UserImportForm extends CFormModel
{
    public $file;
    /**
     * @return array validation rules for model attributes.
     */
    public function rules()
    {
        // NOTE: you should only define rules for those attributes that
        // will receive user inputs.
        return array(  
             array('file', 'file', 
                                            'types'=>'csv',
                                            'maxSize'=>1024 * 1024 * 10, // 10MB
                                            'tooLarge'=>'The file was larger than 10MB. Please upload a smaller file.',
                                            'allowEmpty' => false
                              ),
                   );
    }
 
    /**
     * @return array customized attribute labels (name=>label)
     */
    public function attributeLabels()
    {
        return array(
            'file' => 'Select file',
        );
    }
 
}