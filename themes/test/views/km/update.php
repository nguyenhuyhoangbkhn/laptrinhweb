<?php
/* @var $this KmController */
/* @var $model Km */

$this->breadcrumbs=array(
	'Kms'=>array('index'),
	$model->id=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Km', 'url'=>array('index')),
	array('label'=>'Create Km', 'url'=>array('create')),
	array('label'=>'View Km', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Km', 'url'=>array('admin')),
);
?>

<h1>Update Km <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>