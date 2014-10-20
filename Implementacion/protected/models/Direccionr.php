<?php

/**
 * This is the model class for table "direccionr".
 *
 * The followings are the available columns in table 'direccionr':
 * @property integer $id
 * @property string $direccion
 * @property string $barrio
 * @property string $telFijo
 * @property string $telMovil
 * @property string $apartadoPostal
 * @property string $codPostal
 * @property string $email
 * @property string $SitioWeb
 * @property integer $ciudad
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudad0
 * @property Persona[] $personas
 */
class Direccionr extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccionr';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('id', 'required'),
			array('id, ciudad', 'numerical', 'integerOnly'=>true),
			array('direccion, barrio, telFijo, telMovil, apartadoPostal, codPostal, email, SitioWeb', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, direccion, barrio, telFijo, telMovil, apartadoPostal, codPostal, email, SitioWeb, ciudad', 'safe', 'on'=>'search'),
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
			'ciudad0' => array(self::BELONGS_TO, 'Ciudad', 'ciudad'),
			'personas' => array(self::HAS_MANY, 'Persona', 'direccionR'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'direccion' => 'Direccion',
			'barrio' => 'Barrio',
			'telFijo' => 'Tel Fijo',
			'telMovil' => 'Tel Movil',
			'apartadoPostal' => 'Apartado Postal',
			'codPostal' => 'Cod Postal',
			'email' => 'Email',
			'SitioWeb' => 'Sitio Web',
			'ciudad' => 'Ciudad',
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
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('telFijo',$this->telFijo,true);
		$criteria->compare('telMovil',$this->telMovil,true);
		$criteria->compare('apartadoPostal',$this->apartadoPostal,true);
		$criteria->compare('codPostal',$this->codPostal,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('SitioWeb',$this->SitioWeb,true);
		$criteria->compare('ciudad',$this->ciudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccionr the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
