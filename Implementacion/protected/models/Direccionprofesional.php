<?php

/**
 * This is the model class for table "direccionprofesional".
 *
 * The followings are the available columns in table 'direccionprofesional':
 * @property integer $Direccion_id
 * @property integer $Organizacion_nit
 *
 * The followings are the available model relations:
 * @property Direccion $direccion
 * @property Organizacion $organizacionNit
 * @property Usuario[] $usuarios
 */
class Direccionprofesional extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccionprofesional';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('Direccion_id', 'required'),
			array('Direccion_id, Organizacion_nit', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('Direccion_id, Organizacion_nit', 'safe', 'on'=>'search'),
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
			'direccion' => array(self::BELONGS_TO, 'Direccion', 'Direccion_id'),
			'organizacionNit' => array(self::BELONGS_TO, 'Organizacion', 'Organizacion_nit'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'direccionProfesional'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'Direccion_id' => 'Direccion',
			'Organizacion_nit' => 'Organizacion Nit',
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

		$criteria->compare('Direccion_id',$this->Direccion_id);
		$criteria->compare('Organizacion_nit',$this->Organizacion_nit);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccionprofesional the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
