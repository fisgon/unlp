<?php

/**
 * This is the model class for table "MontosActualizados".
 *
 * The followings are the available columns in table 'MontosActualizados':
 * @property integer $idMontoActualizado
 * @property string $precioUnitario
 * @property string $fechaActualizacion
 * @property integer $idTarifa
 * @property integer $idPedido
 *
 * The followings are the available model relations:
 * @property Tarifas $idTarifa0
 * @property Pedidos $idPedido0
 */
class MontoActualizado extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return MontoActualizado the static model class
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
		return 'MontosActualizados';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('precioUnitario, fechaActualizacion, idTarifa, idPedido', 'required'),
			array('idTarifa, idPedido', 'numerical', 'integerOnly'=>true),
			array('precioUnitario', 'length', 'max'=>10),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idMontoActualizado, precioUnitario, fechaActualizacion, idTarifa, idPedido', 'safe', 'on'=>'search'),
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
			'idTarifa0' => array(self::BELONGS_TO, 'Tarifas', 'idTarifa'),
			'idPedido0' => array(self::BELONGS_TO, 'Pedidos', 'idPedido'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idMontoActualizado' => 'Id Monto Actualizado',
			'precioUnitario' => 'Precio Unitario',
			'fechaActualizacion' => 'Fecha Actualizacion',
			'idTarifa' => 'Id Tarifa',
			'idPedido' => 'Id Pedido',
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

		$criteria->compare('idMontoActualizado',$this->idMontoActualizado);
		$criteria->compare('precioUnitario',$this->precioUnitario,true);
		$criteria->compare('fechaActualizacion',$this->fechaActualizacion,true);
		$criteria->compare('idTarifa',$this->idTarifa);
		$criteria->compare('idPedido',$this->idPedido);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}