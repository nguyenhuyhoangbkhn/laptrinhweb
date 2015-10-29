<?php
/* @var $this GiohangController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Giohangs',
);

$this->menu=array(
	array('label'=>'Create Giohang', 'url'=>array('create')),
	array('label'=>'Manage Giohang', 'url'=>array('admin')),
);
?>

<h1>Giohangs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
