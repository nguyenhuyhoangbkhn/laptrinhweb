<?php
/* @var $this GiohangController */
/* @var $model Giohang */

$this->breadcrumbs=array(
	'Giohangs'=>array('index'),
	$model->id,
);

$this->menu=array(
	array('label'=>'List Giohang', 'url'=>array('index')),
	array('label'=>'Create Giohang', 'url'=>array('create')),
	array('label'=>'Update Giohang', 'url'=>array('update', 'id'=>$model->id)),
	array('label'=>'Delete Giohang', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->id),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage Giohang', 'url'=>array('admin')),
);
?>

<h1>View Giohang #<?php echo $model->id; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'id',
		'id_book',
		'id_user',
		'name_book',
		'cost',
		'number',
		'status',
	),
)); ?>
