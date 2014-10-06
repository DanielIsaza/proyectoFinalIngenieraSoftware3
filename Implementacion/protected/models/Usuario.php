<?php

/**
 * This is the model class for table "usuario".
 *
 * The followings are the available columns in table 'usuario':
 * @property string $nombreBibliografico
 * @property string $lugarExpedicionDocumento
 * @property string $fechaNacimiento
 * @property string $Persona_numeroDocumento
 * @property integer $nacionalidad
 * @property integer $genero_id
 * @property integer $EstadoCivil_id
 * @property integer $paisNacimiento
 * @property integer $departamentoNacimiento
 * @property integer $ciudadNacimiento
 * @property integer $direccionPersonal
 * @property integer $direccionProfesional
 * @property string $Log_login
 *
 * The followings are the available model relations:
 * @property Ciudad $ciudadNacimiento0
 * @property Departamento $departamentoNacimiento0
 * @property Direccion $direccionPersonal0
 * @property Direccionprofesional $direccionProfesional0
 * @property Estadocivil $estadoCivil
 * @property Log $logLogin
 * @property Pais $nacionalidad0
 * @property Pais $paisNacimiento0
 * @property Persona $personaNumeroDocumento
 * @property Genero $genero
 */
class Usuario extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Persona_numeroDocumento', 'required'),
			array('nacionalidad, genero_id, EstadoCivil_id, paisNacimiento, departamentoNacimiento, ciudadNacimiento, direccionPersonal, direccionProfesional', 'numerical', 'integerOnly'=>true),
			array('nombreBibliografico', 'length', 'max'=>50),
			array('lugarExpedicionDocumento, Persona_numeroDocumento', 'length', 'max'=>45),
			array('Log_login', 'length', 'max'=>12),
			array('fechaNacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nombreBibliografico, lugarExpedicionDocumento, fechaNacimiento, Persona_numeroDocumento, nacionalidad, genero_id, EstadoCivil_id, paisNacimiento, departamentoNacimiento, ciudadNacimiento, direccionPersonal, direccionProfesional, Log_login', 'safe', 'on'=>'search'),
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
			'ciudadNacimiento0' => array(self::BELONGS_TO, 'Ciudad', 'ciudadNacimiento'),
			'departamentoNacimiento0' => array(self::BELONGS_TO, 'Departamento', 'departamentoNacimiento'),
			'direccionPersonal0' => array(self::BELONGS_TO, 'Direccion', 'direccionPersonal'),
			'direccionProfesional0' => array(self::BELONGS_TO, 'Direccionprofesional', 'direccionProfesional'),
			'estadoCivil' => array(self::BELONGS_TO, 'Estadocivil', 'EstadoCivil_id'),
			'logLogin' => array(self::BELONGS_TO, 'Log', 'Log_login'),
			'nacionalidad0' => array(self::BELONGS_TO, 'Pais', 'nacionalidad'),
			'paisNacimiento0' => array(self::BELONGS_TO, 'Pais', 'paisNacimiento'),
			'personaNumeroDocumento' => array(self::BELONGS_TO, 'Persona', 'Persona_numeroDocumento'),
			'genero' => array(self::BELONGS_TO, 'Genero', 'genero_id'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nombreBibliografico' => 'Nombre Bibliografico',
			'lugarExpedicionDocumento' => 'Lugar Expedicion Documento',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'Persona_numeroDocumento' => 'Persona Numero Documento',
			'nacionalidad' => 'Nacionalidad',
			'genero_id' => 'Genero',
			'EstadoCivil_id' => 'Estado Civil',
			'paisNacimiento' => 'Pais Nacimiento',
			'departamentoNacimiento' => 'Departamento Nacimiento',
			'ciudadNacimiento' => 'Ciudad Nacimiento',
			'direccionPersonal' => 'Direccion Personal',
			'direccionProfesional' => 'Direccion Profesional',
			'Log_login' => 'Log Login',
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

		$criteria->compare('nombreBibliografico',$this->nombreBibliografico,true);
		$criteria->compare('lugarExpedicionDocumento',$this->lugarExpedicionDocumento,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('Persona_numeroDocumento',$this->Persona_numeroDocumento,true);
		$criteria->compare('nacionalidad',$this->nacionalidad);
		$criteria->compare('genero_id',$this->genero_id);
		$criteria->compare('EstadoCivil_id',$this->EstadoCivil_id);
		$criteria->compare('paisNacimiento',$this->paisNacimiento);
		$criteria->compare('departamentoNacimiento',$this->departamentoNacimiento);
		$criteria->compare('ciudadNacimiento',$this->ciudadNacimiento);
		$criteria->compare('direccionPersonal',$this->direccionPersonal);
		$criteria->compare('direccionProfesional',$this->direccionProfesional);
		$criteria->compare('Log_login',$this->Log_login,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Usuario the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
