<?php
/* @var $this NxbController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Nxbs',
);

$this->menu=array(
	array('label'=>'Create Nxb', 'url'=>array('create')),
	array('label'=>'Manage Nxb', 'url'=>array('admin')),
);
?>

<h1>Nxbs</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
