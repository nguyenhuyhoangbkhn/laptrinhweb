<?php
/* @var $this GiohangController */
/* @var $model Giohang */

$this->breadcrumbs=array(
	'Giohangs'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Giohang', 'url'=>array('index')),
	array('label'=>'Create Giohang', 'url'=>array('create')),
	array('label'=>'View Giohang', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Giohang', 'url'=>array('admin')),
);
?>

<h1>Update Giohang <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>