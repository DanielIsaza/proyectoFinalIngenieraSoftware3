<?php

/**
 * This is the model class for table "red".
 *
 * The followings are the available columns in table 'red':
 * @property integer $id
 * @property string $nombre
 * @property string $descripcion
 * @property integer $areaconocimiento
 * @property integer $privacidad
 * @property string $link
 *
 * The followings are the available model relations:
 * @property Areaconocimiento $areaconocimiento0
 * @property Privacidad $privacidad0
 * @property Persona[] $personas
 */
class Red extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'red';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('areaconocimiento, privacidad', 'numerical', 'integerOnly'=>true),
			array('nombre, link', 'length', 'max'=>100),
			array('descripcion', 'length', 'max'=>500),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('id, nombre, descripcion, areaconocimiento, privacidad, link', 'safe', 'on'=>'search'),
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
			'areaconocimiento0' => array(self::BELONGS_TO, 'Areaconocimiento', 'areaconocimiento'),
			'privacidad0' => array(self::BELONGS_TO, 'Privacidad', 'privacidad'),
			'personas' => array(self::MANY_MANY, 'Persona', 'red_persona(id_red, id_persona)'),
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
			'areaconocimiento' => 'Areaconocimiento',
			'privacidad' => 'Privacidad',
			'link' => 'Link',
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
		$criteria->compare('areaconocimiento',$this->areaconocimiento);
		$criteria->compare('privacidad',$this->privacidad);
		$criteria->compare('link',$this->link,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return Red the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
