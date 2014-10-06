<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property string $nombres
 * @property string $primerApellido
 * @property string $segundoApellido
 * @property string $numeroDocumento
 * @property integer $TipoDocumento_id
 *
 * The followings are the available model relations:
 * @property Tipodocumento $tipoDocumento
 * @property Representantelegal $representantelegal
 * @property Usuario $usuario
 */
class Persona extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'persona';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('numeroDocumento', 'required'),
			array('TipoDocumento_id', 'numerical', 'integerOnly'=>true),
			array('nombres', 'length', 'max'=>50),
			array('primerApellido, segundoApellido, numeroDocumento', 'length', 'max'=>45),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('nombres, primerApellido, segundoApellido, numeroDocumento, TipoDocumento_id', 'safe', 'on'=>'search'),
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
			'tipoDocumento' => array(self::BELONGS_TO, 'Tipodocumento', 'TipoDocumento_id'),
			'representantelegal' => array(self::HAS_ONE, 'Representantelegal', 'Persona_numeroDocumento'),
			'usuario' => array(self::HAS_ONE, 'Usuario', 'Persona_numeroDocumento'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'nombres' => 'Nombres',
			'primerApellido' => 'Primer Apellido',
			'segundoApellido' => 'Segundo Apellido',
			'numeroDocumento' => 'Numero Documento',
			'TipoDocumento_id' => 'Tipo Documento',
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

		$criteria->compare('nombres',$this->nombres,true);
		$criteria->compare('primerApellido',$this->primerApellido,true);
		$criteria->compare('segundoApellido',$this->segundoApellido,true);
		$criteria->compare('numeroDocumento',$this->numeroDocumento,true);
		$criteria->compare('TipoDocumento_id',$this->TipoDocumento_id);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Persona the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
