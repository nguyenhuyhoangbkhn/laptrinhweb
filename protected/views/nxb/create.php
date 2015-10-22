<?php
/* @var $this NxbController */
/* @var $model Nxb */

$this->breadcrumbs=array(
	'Nxbs'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List Nxb', 'url'=>array('index')),
	array('label'=>'Manage Nxb', 'url'=>array('admin')),
);
?>

<h1>Create Nxb</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>