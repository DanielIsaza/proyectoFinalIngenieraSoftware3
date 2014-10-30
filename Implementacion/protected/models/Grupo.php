<?php

/**
 * This is the model class for table "grupo".
 *
 * The followings are the available columns in table 'grupo':
 * @property string $nombre
 * @property string $fechaCreacion
 * @property integer $id
 * @property string $programaPrincipal
 * @property string $programaSecundario
 * @property integer $areaConocimiento
 * @property integer $director
 * @property integer $codirector
 * @property integer $granArea
 * @property integer $direccion
 *
 * The followings are the available model relations:
 * @property Areaconocimiento $areaConocimiento0
 * @property Persona $codirector0
 * @property Direccionr $direccion0
 * @property Persona $director0
 * @property Granarea $granArea0
 * @property Persona[] $personas
 */
class Grupo extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'grupo';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('areaConocimiento, director, codirector, granArea, direccion', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>45),
			array('programaPrincipal, programaSecundario', 'length', 'max'=>100),
			array('fechaCreacion', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nombre, fechaCreacion, id, programaPrincipal, programaSecundario, areaConocimiento, director, codirector, granArea, direccion', 'safe', 'on'=>'search'),
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
			'areaConocimiento0' => array(self::BELONGS_TO, 'Areaconocimiento', 'areaConocimiento'),
			'codirector0' => array(self::BELONGS_TO, 'Persona', 'codirector'),
			'direccion0' => array(self::BELONGS_TO, 'Direccionr', 'direccion'),
			'director0' => array(self::BELONGS_TO, 'Persona', 'director'),
			'granArea0' => array(self::BELONGS_TO, 'Granarea', 'granArea'),
			'personas' => array(self::MANY_MANY, 'Persona', 'grupo_persona(id_grupo, id_persona)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nombre' => 'Nombre',
			'fechaCreacion' => 'Fecha Creacion',
			'id' => 'ID',
			'programaPrincipal' => 'Programa Principal',
			'programaSecundario' => 'Programa Secundario',
			'areaConocimiento' => 'Area Conocimiento',
			'director' => 'Director',
			'codirector' => 'Codirector',
			'granArea' => 'Gran Area',
			'direccion' => 'Direccion',
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

		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('fechaCreacion',$this->fechaCreacion,true);
		$criteria->compare('id',$this->id);
		$criteria->compare('programaPrincipal',$this->programaPrincipal,true);
		$criteria->compare('programaSecundario',$this->programaSecundario,true);
		$criteria->compare('areaConocimiento',$this->areaConocimiento);
		$criteria->compare('director',$this->director);
		$criteria->compare('codirector',$this->codirector);
		$criteria->compare('granArea',$this->granArea);
		$criteria->compare('direccion',$this->direccion);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Grupo the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
