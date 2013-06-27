<?php

/**
 * This is the model class for table "Mensajes".
 *
 * The followings are the available columns in table 'Mensajes':
 * @property integer $idMensaje
 * @property string $asunto
 * @property string $contenido
 * @property integer $idusuarioOrigen
 * @property integer $idusuarioDestino
 *
 * The followings are the available model relations:
 * @property Usuarios $idusuarioOrigen0
 * @property Usuarios $idusuarioDestino0
 */
class Mensaje extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Mensaje the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'Mensajes';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idMensaje, idusuarioOrigen, idusuarioDestino', 'required'),
			array('idMensaje, idusuarioOrigen, idusuarioDestino', 'numerical', 'integerOnly'=>true),
			array('asunto', 'length', 'max'=>30),
			array('contenido', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMensaje, asunto, contenido, idusuarioOrigen, idusuarioDestino', 'safe', 'on'=>'search'),
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
			'idusuarioOrigen0' => array(self::BELONGS_TO, 'Usuarios', 'idusuarioOrigen'),
			'idusuarioDestino0' => array(self::BELONGS_TO, 'Usuarios', 'idusuarioDestino'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMensaje' => 'Id Mensaje',
			'asunto' => 'Asunto',
			'contenido' => 'Contenido',
			'idusuarioOrigen' => 'Idusuario Origen',
			'idusuarioDestino' => 'Idusuario Destino',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idMensaje',$this->idMensaje);
		$criteria->compare('asunto',$this->asunto,true);
		$criteria->compare('contenido',$this->contenido,true);
		$criteria->compare('idusuarioOrigen',$this->idusuarioOrigen);
		$criteria->compare('idusuarioDestino',$this->idusuarioDestino);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}