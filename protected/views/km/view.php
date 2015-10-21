<?php
/* @var $this KmController */
/* @var $model Km */

$this->breadcrumbs=array(
	'Kms'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Km', 'url'=>array('index')),
	array('label'=>'Create Km', 'url'=>array('create')),
	array('label'=>'Update Km', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Km', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Km', 'url'=>array('admin')),
);
?>

<h1>View Km #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'content',
		'phantram',
	),
)); ?>
