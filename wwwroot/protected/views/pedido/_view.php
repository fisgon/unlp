<?php
/* @var $this PedidoController */
/* @var $data Pedido */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idPedido')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idPedido),array('view','id'=>$data->idPedido)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idusuario')); ?>:</b>
	<?php echo CHtml::encode($data->idusuario); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('idEstadoDePedido')); ?>:</b>
	<?php echo CHtml::encode($data->idEstadoDePedido); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('fechaPedido')); ?>:</b>
	<?php echo CHtml::encode($data->fechaPedido); ?>
	<br />


</div>