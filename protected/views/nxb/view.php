<?php
/* @var $this NxbController */
/* @var $model Nxb */

$this->breadcrumbs=array(
	'Nxbs'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Nxb', 'url'=>array('index')),
	array('label'=>'Create Nxb', 'url'=>array('create')),
	array('label'=>'Update Nxb', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Nxb', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Nxb', 'url'=>array('admin')),
);
?>

<h1>View Nxb #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'profile',
		'frequency',
	),
)); ?>
