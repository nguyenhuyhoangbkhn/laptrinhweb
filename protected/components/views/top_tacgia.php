<div class="col-sm-12 top">
	<div class="row top-title">
		<p>
			Top nhà tác giả
		</p>
	</div>
	<?php foreach($list as  $data):?>		
	<div class="row">
		<a href="#">
			<img src="<?php echo $data->image; ?>" class="col-md-5 margin-top-20">
			<p class="top-name "><?php echo $data->name;?></p>
		</a>
	</div>
	<?php endforeach;?>		
</div>