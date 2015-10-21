<?php
/* @var $this TacgiaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Tacgias',
);

$this->menu=array(
	array('label'=>'Create Tacgia', 'url'=>array('create')),
	array('label'=>'Manage Tacgia', 'url'=>array('admin')),
);
?>

<h1>Tacgias</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
