<div class="row">
<img class="col-md-5 img-sachmoi"src="<?php echo $model->image;?>">
	<p class="title-ranking"><?php echo $model->name;?> </p>
	<span class="author">Tác giả: </span>
	<span><?php echo $model->author; ?></span>
	<br/>
	<br/>
	<span class="author">Nhà xuất bản: </span>
	<span><?php echo $model->nxb; ?></span>
	<br/>
	<br/>
	<button class="btn btn-create">Đặt mua</button>
	<div class="col-md-12 margin-top-20">
	<span class="author">Giới thiệu: </span>
	<span class="decription"><?php echo $model->introduc; ?></span>
	</div>
</div>
<?php
	$this->renderPartial('comment.views.comment.commentList',array(
		'model'=>$model
		));
?>