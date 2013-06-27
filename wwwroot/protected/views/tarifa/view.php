<?php
/* @var $this TarifaController */
/* @var $model Tarifa */
?>

<?php
$this->breadcrumbs=array(
	'Tarifas'=>array('index'),
	$model->idTarifa,
);

$this->menu=array(
	array('label'=>'List Tarifa', 'url'=>array('index')),
	array('label'=>'Create Tarifa', 'url'=>array('create')),
	array('label'=>'Update Tarifa', 'url'=>array('update', 'id'=>$model->idTarifa)),
	array('label'=>'Delete Tarifa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idTarifa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tarifa', 'url'=>array('admin')),
);
?>

<h1>View Tarifa #<?php echo $model->idTarifa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView',array(
    'htmlOptions' => array(
        'class' => 'table table-striped table-condensed table-hover',
    ),
    'data'=>$model,
    'attributes'=>array(
		'idTarifa',
		'cantidadMaxima',
		'eliminado',
	),
)); ?>