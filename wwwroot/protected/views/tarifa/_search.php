<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('bootstrap.widgets.TbActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<?php echo $form->textFieldControlGroup($model,'idTarifa',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'cantidadMaxima',array('span'=>5)); ?>

	<?php echo $form->textFieldControlGroup($model,'eliminado',array('span'=>5)); ?>

	<div class="form-actions">
		<?php echo TbHtml::submitButton('Search',  array('color' => TbHtml::BUTTON_COLOR_PRIMARY,));?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->