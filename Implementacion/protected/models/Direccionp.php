<?php

/**
 * This is the model class for table "direccionp".
 *
 * The followings are the available columns in table 'direccionp':
 * @property integer $id
 * @property string $direccion
 * @property string $barrio
 * @property string $telFijo
 * @property string $apartadoPostal
 * @property string $codigoPostal
 * @property string $email
 * @property string $sitioWeb
 * @property integer $ciudad
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudad0
 * @property Persona[] $personas
 */
class Direccionp extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccionp';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('ciudad, telFijo', 'numerical', 'integerOnly'=>true,'message'=>'Este campo solo acepta numeros'),
			array('direccion, barrio, telFijo, apartadoPostal, codigoPostal, email, sitioWeb', 'length', 'max'=>45),
			array('email','email','message'=>'El formato del mensaje es incorrecto'),
			array('sitioWeb','url','message'=>'El formato de la pagina web es incorrecto'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, direccion, barrio, telFijo, apartadoPostal, codigoPostal, email, sitioWeb, ciudad', 'safe', 'on'=>'search'),
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
			'personas' => array(self::HAS_MANY, 'Persona', 'direccionP'),
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
			'apartadoPostal' => 'Apartado Postal',
			'codigoPostal' => 'Codigo Postal',
			'email' => 'Email',
			'sitioWeb' => 'Sitio Web',
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
		$criteria->compare('apartadoPostal',$this->apartadoPostal,true);
		$criteria->compare('codigoPostal',$this->codigoPostal,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sitioWeb',$this->sitioWeb,true);
		$criteria->compare('ciudad',$this->ciudad);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccionp the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
