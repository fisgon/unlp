<?php

/**
 * This is the model class for table "Tarifas".
 *
 * The followings are the available columns in table 'Tarifas':
 * @property integer $idTarifa
 * @property integer $cantidadMaxima
 * @property integer $eliminado
 *
 * The followings are the available model relations:
 * @property MontosActualizados[] $montosActualizadoses
 */
class Tarifa extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Tarifa the static model class
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
		return 'Tarifas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('cantidadMaxima', 'required'),
			array('cantidadMaxima, eliminado', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idTarifa, cantidadMaxima, eliminado', 'safe', 'on'=>'search'),
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
			'montosActualizadoses' => array(self::HAS_MANY, 'MontosActualizados', 'idTarifa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTarifa' => 'Id Tarifa',
			'cantidadMaxima' => 'Cantidad Maxima',
			'eliminado' => 'Eliminado',
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

		$criteria->compare('idTarifa',$this->idTarifa);
		$criteria->compare('cantidadMaxima',$this->cantidadMaxima);
		$criteria->compare('eliminado',$this->eliminado);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}