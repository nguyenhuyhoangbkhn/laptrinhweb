<?php
/* @var $this TacgiaController */
/* @var $model Tacgia */

$this->breadcrumbs=array(
	'Tacgias'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Tacgia', 'url'=>array('index')),
	array('label'=>'Manage Tacgia', 'url'=>array('admin')),
);
?>

<h1>Create Tacgia</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>