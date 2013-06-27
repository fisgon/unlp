<?php
/* @var $this PedidoController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Pedidos',
);

$this->menu=array(
	array('label'=>'Create Pedido','url'=>array('create')),
	array('label'=>'Manage Pedido','url'=>array('admin')),
);
?>

<h1>Pedidos</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>