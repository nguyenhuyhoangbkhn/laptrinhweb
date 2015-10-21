<?php
/* @var $this TacgiaController */
/* @var $model Tacgia */

$this->breadcrumbs=array(
	'Tacgias'=>array('index'),
	$model->name,
);

$this->menu=array(
	array('label'=>'List Tacgia', 'url'=>array('index')),
	array('label'=>'Create Tacgia', 'url'=>array('create')),
	array('label'=>'Update Tacgia', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Tacgia', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Tacgia', 'url'=>array('admin')),
);
?>

<h1>View Tacgia #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'name',
		'profile',
		'frequency',
	),
)); ?>
