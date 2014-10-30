<?php

/**
 * This is the model class for table "convocatoria".
 *
 * The followings are the available columns in table 'convocatoria':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property string $objeto
 * @property string $dirigido
 * @property string $fechaApertura
 * @property string $fechaCierre
 * @property string $fechaPreliminar
 * @property string $fechaDefinitiva
 * @property double $maximoFinanciacion
 * @property double $minimoFinanciacion
 * @property double $maxMontoFinanciacion
 * @property double $maximoMeses
 * @property double $montoTotal
 * @property integer $subtipo
 * @property integer $areaConocimiento
 * @property integer $persona
 *
 * The followings are the available model relations:
 * @property Areaconocimiento $areaConocimiento0
 * @property Persona $persona0
 * @property Subtipoconvocatoria $subtipo0
 */
class Convocatoria extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'convocatoria';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('subtipo, areaConocimiento, persona', 'numerical', 'integerOnly'=>true),
			array('maximoFinanciacion, minimoFinanciacion, maxMontoFinanciacion, maximoMeses, montoTotal', 'numerical'),
			array('nombre', 'length', 'max'=>45),
			array('descripcion, objeto, dirigido', 'length', 'max'=>500),
			array('fechaApertura, fechaCierre, fechaPreliminar, fechaDefinitiva', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, objeto, dirigido, fechaApertura, fechaCierre, fechaPreliminar, fechaDefinitiva, maximoFinanciacion, minimoFinanciacion, maxMontoFinanciacion, maximoMeses, montoTotal, subtipo, areaConocimiento, persona', 'safe', 'on'=>'search'),
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
			'persona0' => array(self::BELONGS_TO, 'Persona', 'persona'),
			'subtipo0' => array(self::BELONGS_TO, 'Subtipoconvocatoria', 'subtipo'),
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
			'descripcion' => 'Descripcion',
			'objeto' => 'Objeto',
			'dirigido' => 'Dirigido',
			'fechaApertura' => 'Fecha Apertura',
			'fechaCierre' => 'Fecha Cierre',
			'fechaPreliminar' => 'Fecha Preliminar',
			'fechaDefinitiva' => 'Fecha Definitiva',
			'maximoFinanciacion' => 'Maximo Financiacion',
			'minimoFinanciacion' => 'Minimo Financiacion',
			'maxMontoFinanciacion' => 'Max Monto Financiacion',
			'maximoMeses' => 'Maximo Meses',
			'montoTotal' => 'Monto Total',
			'subtipo' => 'Subtipo',
			'areaConocimiento' => 'Area Conocimiento',
			'persona' => 'Persona',
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
		$criteria->compare('descripcion',$this->descripcion,true);
		$criteria->compare('objeto',$this->objeto,true);
		$criteria->compare('dirigido',$this->dirigido,true);
		$criteria->compare('fechaApertura',$this->fechaApertura,true);
		$criteria->compare('fechaCierre',$this->fechaCierre,true);
		$criteria->compare('fechaPreliminar',$this->fechaPreliminar,true);
		$criteria->compare('fechaDefinitiva',$this->fechaDefinitiva,true);
		$criteria->compare('maximoFinanciacion',$this->maximoFinanciacion);
		$criteria->compare('minimoFinanciacion',$this->minimoFinanciacion);
		$criteria->compare('maxMontoFinanciacion',$this->maxMontoFinanciacion);
		$criteria->compare('maximoMeses',$this->maximoMeses);
		$criteria->compare('montoTotal',$this->montoTotal);
		$criteria->compare('subtipo',$this->subtipo);
		$criteria->compare('areaConocimiento',$this->areaConocimiento);
		$criteria->compare('persona',$this->persona);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Convocatoria the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
