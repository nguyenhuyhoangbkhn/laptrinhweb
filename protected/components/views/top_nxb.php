<div class="col-sm-12 top">
	<div class="row top-title">
		<p>
			Top nhà xuất bản
		</p>
	</div>
	<?php foreach($list as  $data):?>		
	<div class="row">
		<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/nxb/view&id=<?php echo $data->id;?>">
			<img src="<?php echo $data->image; ?>" class="col-md-5 margin-top-20">
			<p class="top-name "><?php echo $data->name;?></p>
		</a>
	</div>
	<?php endforeach;?>		
</div>