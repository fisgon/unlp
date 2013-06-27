<?php

/**
 * This is the model class for table "Textos".
 *
 * The followings are the available columns in table 'Textos':
 * @property integer $idTexto
 * @property string $nombreTexto
 * @property string $archivoHash
 *
 * The followings are the available model relations:
 * @property TextosPedidos[] $textosPedidoses
 */
class Texto extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Texto the static model class
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
		return 'Textos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nombreTexto, archivoHash', 'required'),
			array('nombreTexto', 'length', 'max'=>45),
			array('archivoHash', 'length', 'max'=>100),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idTexto, nombreTexto, archivoHash', 'safe', 'on'=>'search'),
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
			'textosPedidoses' => array(self::HAS_MANY, 'TextosPedidos', 'idTexto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTexto' => 'Id Texto',
			'nombreTexto' => 'Nombre Texto',
			'archivoHash' => 'Archivo Hash',
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

		$criteria->compare('idTexto',$this->idTexto);
		$criteria->compare('nombreTexto',$this->nombreTexto,true);
		$criteria->compare('archivoHash',$this->archivoHash,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}