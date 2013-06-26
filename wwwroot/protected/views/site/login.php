<?php
/* @var $this SiteController */
/* @var $model LoginForm */
/* @var $form CActiveForm  */

$this->pageTitle=Yii::app()->name . ' - Login';
$this->breadcrumbs=array(
	'Login',
);
?>
<div class="explain">

<h2>Ingresar</h2>
<p class="intro">Acceda con su cuenta de moodle</p>

<div class="row-fluid">
	<div class="span9">
		<?php $form=$this->beginWidget('CActiveForm', array(
			'id'=>'login-form',
			'enableClientValidation'=>true,
			'clientOptions'=>array(
				'validateOnSubmit'=>true,
			),
		)); ?>

		<p class="note">Los campos con <span class="required">*</span> son obligatorios.</p>

		<div class="control-group">
			<?php echo $form->labelEx($model,'username'); ?>
			<div class="controls">
				<?php echo $form->textField($model,'username'); ?>
				<?php echo $form->error($model,'username'); ?>
			</div>
		</div>

		<div class="control-group">
			<?php echo $form->labelEx($model,'password'); ?>
			<div class="controls">
				<?php echo $form->passwordField($model,'password'); ?>
				<?php echo $form->error($model,'password'); ?>
			</div>
		</div>

		<div class="control-group rememberMe">
			<?php echo $form->checkBox($model,'rememberMe'); ?>
			<div class="controls">
				<?php echo $form->label($model,'rememberMe'); ?>
				<?php echo $form->error($model,'rememberMe'); ?>
			</div>
		</div>

		<div class="control-group buttons">
			<?php echo CHtml::submitButton('Ingresar', array('class' => 'm-btn blue')); ?>
		</div>

	<?php $this->endWidget(); ?>
	</div>
</div><!-- form -->
</div>