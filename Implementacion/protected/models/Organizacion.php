<?php

/**
 * This is the model class for table "organizacion".
 *
 * The followings are the available columns in table 'organizacion':
 * @property integer $nit
 * @property string $nombre
 * @property string $sigla
 * @property string $direccion
 * @property string $telefono
 * @property string $fax
 * @property string $email
 * @property string $sitioWeb
 * @property integer $ciudad
 * @property integer $usuario
 *
 * The followings are the available model relations:
 * @property Administrador[] $administradors
 * @property Ciudad $ciudad0
 * @property Usuario $usuario0
 * @property Persona[] $personas
 * @property Proyecto[] $proyectos
 * @property Representantelegal[] $representantelegals
 */
class Organizacion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'organizacion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nit', 'required'),
			array('nit, ciudad, usuario', 'numerical', 'integerOnly'=>true),
			array('nombre, sigla, direccion, telefono, fax, email, sitioWeb', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nit, nombre, sigla, direccion, telefono, fax, email, sitioWeb, ciudad, usuario', 'safe', 'on'=>'search'),
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
			'administradors' => array(self::HAS_MANY, 'Administrador', 'organizacion'),
			'ciudad0' => array(self::BELONGS_TO, 'Ciudad', 'ciudad'),
			'usuario0' => array(self::BELONGS_TO, 'Usuario', 'usuario'),
			'personas' => array(self::HAS_MANY, 'Persona', 'organizacion'),
			'proyectos' => array(self::HAS_MANY, 'Proyecto', 'organizacion'),
			'representantelegals' => array(self::HAS_MANY, 'Representantelegal', 'organizacion'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nit' => 'Nit',
			'nombre' => 'Nombre',
			'sigla' => 'Sigla',
			'direccion' => 'Direccion',
			'telefono' => 'Telefono',
			'fax' => 'Fax',
			'email' => 'Email',
			'sitioWeb' => 'Sitio Web',
			'ciudad' => 'Ciudad',
			'usuario' => 'Usuario',
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

		$criteria->compare('nit',$this->nit);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('sigla',$this->sigla,true);
		$criteria->compare('direccion',$this->direccion,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('fax',$this->fax,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('sitioWeb',$this->sitioWeb,true);
		$criteria->compare('ciudad',$this->ciudad);
		$criteria->compare('usuario',$this->usuario);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Organizacion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
