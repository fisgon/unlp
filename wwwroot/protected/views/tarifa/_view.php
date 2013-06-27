<?php
/* @var $this TarifaController */
/* @var $data Tarifa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idTarifa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idTarifa),array('view','id'=>$data->idTarifa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cantidadMaxima')); ?>:</b>
	<?php echo CHtml::encode($data->cantidadMaxima); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('eliminado')); ?>:</b>
	<?php echo CHtml::encode($data->eliminado); ?>
	<br />


</div>