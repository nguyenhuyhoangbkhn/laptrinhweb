<?php
/* @var $this TacgiaController */
/* @var $model Tacgia */

$this->breadcrumbs=array(
	'Tacgias'=>array('index'),
	$model->name=>array('view','id'=>$model->id),
	'Update',
);

$this->menu=array(
	array('label'=>'List Tacgia', 'url'=>array('index')),
	array('label'=>'Create Tacgia', 'url'=>array('create')),
	array('label'=>'View Tacgia', 'url'=>array('view', 'id'=>$model->id)),
	array('label'=>'Manage Tacgia', 'url'=>array('admin')),
);
?>

<h1>Update Tacgia <?php echo $model->id; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>