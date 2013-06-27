<?php

/**
 * This is the model class for table "TextosPedidos".
 *
 * The followings are the available columns in table 'TextosPedidos':
 * @property integer $idTextoPedido
 * @property integer $idPedido
 * @property integer $idTexto
 *
 * The followings are the available model relations:
 * @property Paginas[] $paginases
 * @property Pedidos $idPedido0
 * @property Textos $idTexto0
 */
class TextoPedido extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return TextoPedido the static model class
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
		return 'TextosPedidos';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idPedido, idTexto', 'required'),
			array('idPedido, idTexto', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idTextoPedido, idPedido, idTexto', 'safe', 'on'=>'search'),
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
			'paginases' => array(self::HAS_MANY, 'Paginas', 'idTextoPedido'),
			'idPedido0' => array(self::BELONGS_TO, 'Pedidos', 'idPedido'),
			'idTexto0' => array(self::BELONGS_TO, 'Textos', 'idTexto'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idTextoPedido' => 'Id Texto Pedido',
			'idPedido' => 'Id Pedido',
			'idTexto' => 'Id Texto',
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

		$criteria->compare('idTextoPedido',$this->idTextoPedido);
		$criteria->compare('idPedido',$this->idPedido);
		$criteria->compare('idTexto',$this->idTexto);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}