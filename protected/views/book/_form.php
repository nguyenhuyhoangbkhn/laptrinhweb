<?php
/* @var $this BookController */
/* @var $model Book */
/* @var $form CActiveForm */
?>

<div class="form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'id'=>'book-form',
	// Please note: When you enable ajax validation, make sure the corresponding
	// controller action is handling ajax validation correctly.
	// There is a call to performAjaxValidation() commented in generated controller code.
	// See class documentation of CActiveForm for details on this.
	'enableAjaxValidation'=>false,
)); ?>

	<p class="note">Fields with <span class="required">*</span> are required.</p>

	<?php echo $form->errorSummary($model); ?>

	<div class="row">
		<?php echo $form->labelEx($model,'nxb'); ?>
		<?php echo $form->textField($model,'nxb',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'nxb'); ?>
	</div>

	<div class="row">
		<h2>Mời bạn nhập tên tác giả</h2>
		<?php $this->widget('CAutoComplete', array(
			'model'=>$model,
			'attribute'=>'author',
			'url'=>array('suggestTags'),
			'multiple'=>true,
			'htmlOptions'=>array('size'=>50),
		)); ?>
		<p class="hint">Please separate different tags with commas.</p>
		<?php echo $form->error($model,'author'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'km_id'); ?>
		<?php echo $form->textField($model,'km_id'); ?>
		<?php echo $form->error($model,'km_id'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'name'); ?>
		<?php echo $form->textField($model,'name',array('size'=>60,'maxlength'=>200)); ?>
		<?php echo $form->error($model,'name'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'type'); ?>
		<?php echo $form->textField($model,'type',array('size'=>60,'maxlength'=>128)); ?>
		<?php echo $form->error($model,'type'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'cost'); ?>
		<?php echo $form->textField($model,'cost'); ?>
		<?php echo $form->error($model,'cost'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'introduc'); ?>
		<?php echo $form->textArea($model,'introduc',array('rows'=>6, 'cols'=>50)); ?>
		<?php echo $form->error($model,'introduc'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'image'); ?>
		<?php echo $form->textField($model,'image',array('size'=>60,'maxlength'=>300)); ?>
		<?php echo $form->error($model,'image'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'namxb'); ?>
		<?php echo $form->textField($model,'namxb'); ?>
		<?php echo $form->error($model,'namxb'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slnhap'); ?>
		<?php echo $form->textField($model,'slnhap'); ?>
		<?php echo $form->error($model,'slnhap'); ?>
	</div>

	<div class="row">
		<?php echo $form->labelEx($model,'slcon'); ?>
		<?php echo $form->textField($model,'slcon'); ?>
		<?php echo $form->error($model,'slcon'); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton($model->isNewRecord ? 'Create' : 'Save'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- form -->