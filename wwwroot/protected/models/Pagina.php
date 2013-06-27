<?php

/**
 * This is the model class for table "Paginas".
 *
 * The followings are the available columns in table 'Paginas':
 * @property integer $idPagina
 * @property integer $idTextoPedido
 * @property integer $desde
 * @property integer $hasta
 * @property integer $copias
 *
 * The followings are the available model relations:
 * @property TextosPedidos $idTextoPedido0
 */
class Pagina extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Pagina the static model class
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
		return 'Paginas';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idTextoPedido, desde, hasta, copias', 'required'),
			array('idTextoPedido, desde, hasta, copias', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('idPagina, idTextoPedido, desde, hasta, copias', 'safe', 'on'=>'search'),
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
			'idTextoPedido0' => array(self::BELONGS_TO, 'TextosPedidos', 'idTextoPedido'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'idPagina' => 'Id Pagina',
			'idTextoPedido' => 'Id Texto Pedido',
			'desde' => 'Desde',
			'hasta' => 'Hasta',
			'copias' => 'Copias',
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

		$criteria->compare('idPagina',$this->idPagina);
		$criteria->compare('idTextoPedido',$this->idTextoPedido);
		$criteria->compare('desde',$this->desde);
		$criteria->compare('hasta',$this->hasta);
		$criteria->compare('copias',$this->copias);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}