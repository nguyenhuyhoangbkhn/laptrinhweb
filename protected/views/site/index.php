<div class="row">
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $dataProvider->id;?>">
<img class="col-md-5 img-sachmoi"src="<?php echo $dataProvider->image;?>">
	<p class="title-ranking"><?php echo $dataProvider->name;?> </p>
</a>
	<span class="author">Author: </span>
	<span><?php echo $dataProvider->author; ?></span>
	<p class="decription"><?php echo $dataProvider->introduc; ?></p>
<a href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $dataProvider->id;?>">
<p class="seemore">Mua sách</p>
</a>
</div>
<div id="ranking-itineary" class="row nplr">
	<p>Sách mới</p>
</div>
<div class=" row">
	<?php for($i=0; $i<9; $i++):?>
    <?php if(isset($list_book[$i])):?>
    <?php $data = $list_book[$i];?>
	<div class="col-sm-4 book-new">
		<a class="sachmoi-ten" href="<?php echo Yii::app()->request->baseUrl; ?>/index.php?r=/book/view&id=<?php echo $list_book[$i]->id;?>">
		<img class="sachmoi"src="<?php echo $list_book[$i]->image?>">
		<p><?php echo $list_book[$i]->name; ?></p>
		</a>
		<p class="sachmoi-ten"><?php echo $list_book[$i]->cost; ?> vnđ</p>
	</div>
	<?php endif;?>
    <?php endfor;?>
</div>
<div id="ranking-itineary" class="row nplr margin-top-20">
	<p>Sách bán chạy</p>

</div>