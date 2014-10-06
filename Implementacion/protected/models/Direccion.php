<?php

/**
 * This is the model class for table "direccion".
 *
 * The followings are the available columns in table 'direccion':
 * @property integer $id
 * @property string $barrio
 * @property string $telefono
 * @property string $apartadoPostal
 * @property integer $codigoPostal
 * @property integer $email
 * @property string $sitioWeb
 *
 * The followings are the available model relations:
 * @property Direccionprofesional $direccionprofesional
 * @property Usuario[] $usuarios
 */
class Direccion extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'direccion';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigoPostal, email', 'numerical', 'integerOnly'=>true),
			array('barrio', 'length', 'max'=>50),
			array('telefono, apartadoPostal', 'length', 'max'=>45),
			array('sitioWeb', 'length', 'max'=>60),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, barrio, telefono, apartadoPostal, codigoPostal, email, sitioWeb', 'safe', 'on'=>'search'),
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
			'direccionprofesional' => array(self::HAS_ONE, 'Direccionprofesional', 'Direccion_id'),
			'usuarios' => array(self::HAS_MANY, 'Usuario', 'direccionPersonal'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id' => 'ID',
			'barrio' => 'Barrio',
			'telefono' => 'Telefono',
			'apartadoPostal' => 'Apartado Postal',
			'codigoPostal' => 'Codigo Postal',
			'email' => 'Email',
			'sitioWeb' => 'Sitio Web',
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
		$criteria->compare('barrio',$this->barrio,true);
		$criteria->compare('telefono',$this->telefono,true);
		$criteria->compare('apartadoPostal',$this->apartadoPostal,true);
		$criteria->compare('codigoPostal',$this->codigoPostal);
		$criteria->compare('email',$this->email);
		$criteria->compare('sitioWeb',$this->sitioWeb,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Direccion the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
