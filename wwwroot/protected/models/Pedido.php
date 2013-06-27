<?php

/**
 * This is the model class for table "Pedidos".
 *
 * The followings are the available columns in table 'Pedidos':
 * @property integer $idPedido
 * @property integer $idusuario
 * @property integer $idEstadoDePedido
 * @property string $fechaPedido
 *
 * The followings are the available model relations:
 * @property MontosActualizados[] $montosActualizadoses
 * @property Usuarios $idusuario0
 * @property EstadosDePedido $idEstadoDePedido0
 * @property TextosPedidos[] $textosPedidoses
 */
class Pedido extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pedido the static model class
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
		return 'Pedidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idusuario, idEstadoDePedido, fechaPedido', 'required'),
			array('idusuario, idEstadoDePedido', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPedido, idusuario, idEstadoDePedido, fechaPedido', 'safe', 'on'=>'search'),
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
			'montosActualizadoses' => array(self::HAS_MANY, 'MontosActualizados', 'idPedido'),
			'idusuario0' => array(self::BELONGS_TO, 'Usuarios', 'idusuario'),
			'idEstadoDePedido0' => array(self::BELONGS_TO, 'EstadosDePedido', 'idEstadoDePedido'),
			'textosPedidoses' => array(self::HAS_MANY, 'TextosPedidos', 'idPedido'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPedido' => 'Id Pedido',
			'idusuario' => 'Idusuario',
			'idEstadoDePedido' => 'Id Estado De Pedido',
			'fechaPedido' => 'Fecha Pedido',
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

		$criteria->compare('idPedido',$this->idPedido);
		$criteria->compare('idusuario',$this->idusuario);
		$criteria->compare('idEstadoDePedido',$this->idEstadoDePedido);
		$criteria->compare('fechaPedido',$this->fechaPedido,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}