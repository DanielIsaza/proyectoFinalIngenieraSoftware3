<?php

/**
 * This is the model class for table "evento".
 *
 * The followings are the available columns in table 'evento':
 * @property integer $id
 * @property string $nombre
 * @property integer $tipo
 * @property string $fecha
 * @property integer $expositor
 * @property string $informacion
 * @property integer $areaConocimiento
 *
 * The followings are the available model relations:
 * @property Areaconocimiento $areaConocimiento0
 * @property Persona $expositor0
 * @property Tipoevento $tipo0
 * @property Persona[] $personas
 */
class Evento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'evento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('tipo, expositor, areaConocimiento', 'numerical', 'integerOnly'=>true),
			array('nombre', 'length', 'max'=>100),
			array('informacion', 'length', 'max'=>500),
			array('fecha', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, tipo, fecha, expositor, informacion, areaConocimiento', 'safe', 'on'=>'search'),
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
			'expositor0' => array(self::BELONGS_TO, 'Persona', 'expositor'),
			'tipo0' => array(self::BELONGS_TO, 'Tipoevento', 'tipo'),
			'personas' => array(self::MANY_MANY, 'Persona', 'evento_persona(id_evento, id_persona)'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'nombre' => 'Nombre',
			'tipo' => 'Tipo',
			'fecha' => 'Fecha',
			'expositor' => 'Expositor',
			'informacion' => 'Informacion',
			'areaConocimiento' => 'Area Conocimiento',
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
		$criteria->compare('nombre',$this->nombre,true);
		$criteria->compare('tipo',$this->tipo);
		$criteria->compare('fecha',$this->fecha,true);
		$criteria->compare('expositor',$this->expositor);
		$criteria->compare('informacion',$this->informacion,true);
		$criteria->compare('areaConocimiento',$this->areaConocimiento);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Evento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
