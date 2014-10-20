<?php

/**
 * This is the model class for table "administrador".
 *
 * The followings are the available columns in table 'administrador':
 * @property integer $dni
 * @property string $nombre
 * @property string $primerApellido
 * @property string $segundoApellido
 * @property string $cargo
 * @property string $telFijo
 * @property string $email
 * @property integer $tipoDocumento
 * @property integer $organizacion
 *
 * The followings are the available model relations:
 * @property Organizacion $organizacion0
 * @property Tipodocumento $tipoDocumento0
 */
class Administrador extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'administrador';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('dni', 'required'),
			array('dni, tipoDocumento, organizacion', 'numerical', 'integerOnly'=>true),
			array('nombre, primerApellido, segundoApellido, cargo, telFijo, email', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dni, nombre, primerApellido, segundoApellido, cargo, telFijo, email, tipoDocumento, organizacion', 'safe', 'on'=>'search'),
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
			'organizacion0' => array(self::BELONGS_TO, 'Organizacion', 'organizacion'),
			'tipoDocumento0' => array(self::BELONGS_TO, 'Tipodocumento', 'tipoDocumento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'dni' => 'Dni',
			'nombre' => 'Nombre',
			'primerApellido' => 'Primer Apellido',
			'segundoApellido' => 'Segundo Apellido',
			'cargo' => 'Cargo',
			'telFijo' => 'Tel Fijo',
			'email' => 'Email',
			'tipoDocumento' => 'Tipo Documento',
			'organizacion' => 'Organizacion',
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

		$criteria->compare('dni',$this->dni);
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('primerApellido',$this->primerApellido,true);
		$criteria->compare('segundoApellido',$this->segundoApellido,true);
		$criteria->compare('cargo',$this->cargo,true);
		$criteria->compare('telFijo',$this->telFijo,true);
		$criteria->compare('email',$this->email,true);
		$criteria->compare('tipoDocumento',$this->tipoDocumento);
		$criteria->compare('organizacion',$this->organizacion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Administrador the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
