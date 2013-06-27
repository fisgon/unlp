<?php
/* @var $this PedidoController */
/* @var $model Pedido */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldControlGroup($model,'idPedido',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'idusuario',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'idEstadoDePedido',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'fechaPedido',array('span'=>5)); ?>

	<div class="form-actions">
		<?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->