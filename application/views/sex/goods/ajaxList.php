<?php foreach ($goods as $item):?>
<a href="<?php echo site_url('sex/home/goods/'.$item->goods_id);?>" class="ga">
	<div class="pm">
		<img src="m/images/load.jpg" data-original="<?php echo (strpos($item->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($item->goods_img, '|',true)) : strstr($item->goods_img, '|',true);?>" class="gm lazy" />
		<h3 class="gt">
			<?php echo $item->goods_name;?>
			<em class="i_hot">热销</em>
			<!--  
			<em class="i_video">视频</em>
			-->
		</h3>
		<p class="lp">
			<em class="xj">¥<?php echo $item->shop_price;?></em>
			<del>¥<?php echo $item->shop_price;?></del>
			<?php if($item->freight_id==0 && $item->freight_cost==0):?>
			<i class="gray">包邮</i>
			<?php endif;?>
			<em class="s_s">销售:<?php echo $item->sale_count;?></em>
		</p>
		<p class="gb">销售:<?php echo $item->sale_count;?><em class="ea">|</em>评论:<?php echo $item->review_count;?></p>
	</div>
</a>
<?php endforeach;?>
