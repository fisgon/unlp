<?php
/* @var $this TarifaController */
/* @var $dataProvider CActiveDataProvider */
?>

<?php
$this->breadcrumbs=array(
	'Tarifas',
);

$this->menu=array(
	array('label'=>'Create Tarifa','url'=>array('create')),
	array('label'=>'Manage Tarifa','url'=>array('admin')),
);
?>

<h1>Tarifas</h1>

<?php $this->widget('bootstrap.widgets.TbListView',array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>