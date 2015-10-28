<?php
/* @var $this BookController */
/* @var $data Book */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('id')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->id), array('view', 'id'=>$data->id)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('nxb')); ?>:</b>
	<?php echo CHtml::encode($data->nxb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('author')); ?>:</b>
	<?php echo CHtml::encode($data->author); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('km_id')); ?>:</b>
	<?php echo CHtml::encode($data->km_id); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('name')); ?>:</b>
	<?php echo CHtml::encode($data->name); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('type')); ?>:</b>
	<?php echo CHtml::encode($data->type); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('cost')); ?>:</b>
	<?php echo CHtml::encode($data->cost); ?>
	<br />

	<?php /*
	<b><?php echo CHtml::encode($data->getAttributeLabel('introduc')); ?>:</b>
	<?php echo CHtml::encode($data->introduc); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('image')); ?>:</b>
	<?php echo CHtml::encode($data->image); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('namxb')); ?>:</b>
	<?php echo CHtml::encode($data->namxb); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slnhap')); ?>:</b>
	<?php echo CHtml::encode($data->slnhap); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('slcon')); ?>:</b>
	<?php echo CHtml::encode($data->slcon); ?>
	<br />

	*/ ?>

</div>