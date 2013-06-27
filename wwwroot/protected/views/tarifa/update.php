<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
?>

<?php
$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->idTarifa=>array('view','id'=>$model->idTarifa),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tarifa', 'url'=>array('index')),
	array('label'=>'Create Tarifa', 'url'=>array('create')),
	array('label'=>'View Tarifa', 'url'=>array('view', 'id'=>$model->idTarifa)),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>Update Tarifa <?php echo $model->idTarifa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>