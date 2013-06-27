<?php

/**
 * This is the model class for table "Movimientos".
 *
 * The followings are the available columns in table 'Movimientos':
 * @property integer $idMovimiento
 * @property integer $idusuario
 * @property string $diferencia
 * @property string $fechaMovimiento
 * @property string $descripcion
 *
 * The followings are the available model relations:
 * @property Usuarios $idusuario0
 */
class Movimiento extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Movimiento the static model class
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
		return 'Movimientos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idusuario, diferencia', 'required'),
			array('idusuario', 'numerical', 'integerOnly'=>true),
			array('descripcion', 'length', 'max'=>30),
			array('fechaMovimiento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMovimiento, idusuario, diferencia, fechaMovimiento, descripcion', 'safe', 'on'=>'search'),
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
			'idusuario0' => array(self::BELONGS_TO, 'Usuarios', 'idusuario'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMovimiento' => 'Id Movimiento',
			'idusuario' => 'Idusuario',
			'diferencia' => 'Diferencia',
			'fechaMovimiento' => 'Fecha Movimiento',
			'descripcion' => 'Descripcion',
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

		$criteria->compare('idMovimiento',$this->idMovimiento);
		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('diferencia',$this->diferencia,true);
		$criteria->compare('fechaMovimiento',$this->fechaMovimiento,true);
		$criteria->compare('descripcion',$this->descripcion,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}