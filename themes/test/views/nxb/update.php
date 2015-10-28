<?php
/* @var $this NxbController */
/* @var $model Nxb */

$this->breadcrumbs=array(
	'Nxbs'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Nxb', 'url'=>array('index')),
	array('label'=>'Create Nxb', 'url'=>array('create')),
	array('label'=>'View Nxb', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Nxb', 'url'=>array('admin')),
);
?>

<h1>Update Nxb <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>