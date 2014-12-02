<?php

/**
 * This is the model class for table "persona".
 *
 * The followings are the available columns in table 'persona':
 * @property integer $dni
 * @property string $nombre
 * @property string $primerApellido
 * @property string $segundoApellido
 * @property string $nombreBibliografico
 * @property string $fechaNacimiento
 * @property integer $direccionR
 * @property integer $direccionP
 * @property integer $usuario
 * @property integer $tipoDocumento
 * @property integer $genero
 * @property integer $ciudadExpedicion
 * @property integer $ciudadNacimiento
 * @property integer $organizacion
 *
 * The followings are the available model relations:
 * @property Centro[] $centros
 * @property Convocatoria[] $convocatorias
 * @property Evento[] $eventos
 * @property Evento[] $eventos1
 * @property Grupo[] $grupos
 * @property Grupo[] $grupos1
 * @property Grupo[] $grupos2
 * @property Ciudad $ciudadExpedicion0
 * @property Ciudad $ciudadNacimiento0
 * @property Direccionp $direccionP0
 * @property Direccionr $direccionR0
 * @property Genero $genero0
 * @property Organizacion $organizacion0
 * @property Tipodocumento $tipoDocumento0
 * @property Usuario $usuario0
 * @property Proyecto[] $proyectos
 * @property Publicacion[] $publicacions
 * @property Red[] $reds
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
			array('dni','required','message'=>'Este campo no puede ser vacio'),
			array('dni, direccionR, direccionP, usuario, tipoDocumento, genero, ciudadExpedicion, ciudadNacimiento, organizacion', 'numerical', 'integerOnly'=>true,'message'=>'Este campo solo acepta numeros'),
			array('nombre, primerApellido, segundoApellido, nombreBibliografico', 'length', 'max'=>45),
			array('fechaNacimiento', 'safe'),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('dni, nombre, primerApellido, segundoApellido, nombreBibliografico, fechaNacimiento, direccionR, direccionP, usuario, tipoDocumento, genero, ciudadExpedicion, ciudadNacimiento, organizacion', 'safe', 'on'=>'search'),
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
			'centros' => array(self::MANY_MANY, 'Centro', 'centro_persona(id_persona, id_centro)'),
			'convocatorias' => array(self::HAS_MANY, 'Convocatoria', 'persona'),
			'eventos' => array(self::HAS_MANY, 'Evento', 'expositor'),
			'eventos1' => array(self::MANY_MANY, 'Evento', 'evento_persona(id_persona, id_evento)'),
			'grupos' => array(self::HAS_MANY, 'Grupo', 'codirector'),
			'grupos1' => array(self::HAS_MANY, 'Grupo', 'director'),
			'grupos2' => array(self::MANY_MANY, 'Grupo', 'grupo_persona(id_persona, id_grupo)'),
			'ciudadExpedicion0' => array(self::BELONGS_TO, 'Ciudad', 'ciudadExpedicion'),
			'ciudadNacimiento0' => array(self::BELONGS_TO, 'Ciudad', 'ciudadNacimiento'),
			'direccionP0' => array(self::BELONGS_TO, 'Direccionp', 'direccionP'),
			'direccionR0' => array(self::BELONGS_TO, 'Direccionr', 'direccionR'),
			'genero0' => array(self::BELONGS_TO, 'Genero', 'genero'),
			'organizacion0' => array(self::BELONGS_TO, 'Organizacion', 'organizacion'),
			'tipoDocumento0' => array(self::BELONGS_TO, 'Tipodocumento', 'tipoDocumento'),
			'usuario0' => array(self::BELONGS_TO, 'Usuario', 'usuario'),
			'proyectos' => array(self::MANY_MANY, 'Proyecto', 'proyecto_persona(id_persona, id_proyecto)'),
			'publicacions' => array(self::MANY_MANY, 'Publicacion', 'publicacion_persona(id_persona, id_publicacion)'),
			'reds' => array(self::MANY_MANY, 'Red', 'red_persona(id_persona, id_red)'),
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
			'nombreBibliografico' => 'Nombre Bibliografico',
			'fechaNacimiento' => 'Fecha Nacimiento',
			'direccionR' => 'Direccion R',
			'direccionP' => 'Direccion P',
			'usuario' => 'Usuario',
			'tipoDocumento' => 'Tipo Documento',
			'genero' => 'Genero',
			'ciudadExpedicion' => 'Ciudad Expedicion',
			'ciudadNacimiento' => 'Ciudad Nacimiento',
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
		$criteria->compare('nombreBibliografico',$this->nombreBibliografico,true);
		$criteria->compare('fechaNacimiento',$this->fechaNacimiento,true);
		$criteria->compare('direccionR',$this->direccionR);
		$criteria->compare('direccionP',$this->direccionP);
		$criteria->compare('usuario',$this->usuario);
		$criteria->compare('tipoDocumento',$this->tipoDocumento);
		$criteria->compare('genero',$this->genero);
		$criteria->compare('ciudadExpedicion',$this->ciudadExpedicion);
		$criteria->compare('ciudadNacimiento',$this->ciudadNacimiento);
		$criteria->compare('organizacion',$this->organizacion);

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
