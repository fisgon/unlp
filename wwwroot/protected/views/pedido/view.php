<?php
/* @var $this PedidoController */
/* @var $model Pedido */
?>

<?php
$this->breadcrumbs=array(
	'Pedidos'=>array('index'),
	$model->idPedido,
);

$this->menu=array(
	array('label'=>'List Pedido', 'url'=>array('index')),
	array('label'=>'Create Pedido', 'url'=>array('create')),
	array('label'=>'Update Pedido', 'url'=>array('update', 'id'=>$model->idPedido)),
	array('label'=>'Delete Pedido', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idPedido),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Pedido', 'url'=>array('admin')),
);
?>

<h1>View Pedido #<?php echo $model->idPedido; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'idPedido',
		'idusuario',
		'idEstadoDePedido',
		'fechaPedido',
	),
)); ?>