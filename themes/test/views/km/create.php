<?php
/* @var $this KmController */
/* @var $model Km */

$this->breadcrumbs=array(
	'Kms'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Km', 'url'=>array('index')),
	array('label'=>'Manage Km', 'url'=>array('admin')),
);
?>

<h1>Create Km</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>