<?php
/* @var $this GiohangController */
/* @var $model Giohang */

$this->breadcrumbs=array(
	'Giohangs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Giohang', 'url'=>array('index')),
	array('label'=>'Manage Giohang', 'url'=>array('admin')),
);
?>

<h1>Create Giohang</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>