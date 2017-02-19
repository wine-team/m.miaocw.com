<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>购物车</h2>
		<a href="<?php echo site_url('sex/home/index');?>" class="b_r">继续购物</a>
	</div>
</div>
<div class="pageauto">
	<div class="g_tss alC" style="line-height:2.5rem">
		在线支付满99元包邮
	</div>
	<div class="lh35 ept alC">
		<p><img src="m/images/carnull.png" class="nucar"></p>
		<p class="f14 c9">购物里好寂寞，快去选购吧</p>
		<p class="lh25">&nbsp;</p>
		<a href="<?php echo site_url('sex/home/index');?>" class="gbtn" style="width:70%;">去选购</a>
	</div>
	<?php if(!empty($hot)):?>
	<div class="pd10">
		<h2 class="alC hx_line">
			<b>热销推荐</b>
			<p class="hx_fline"></p>
		</h2>
		<div class="heng">
			<?php foreach ($hot as $item):?>
			<a href="<?php echo site_url('sex/home/goods/'.$item->goods_id)?>" class="henga">
				<img src="<?php echo (strpos($item->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($item->goods_img, '|',true)) : strstr($item->goods_img, '|',true);?>" width="130" height="130">
				<p><?php echo $item->goods_name;?></p>
				<p><b class="red">¥<?php echo $item->shop_price;?></b></p>
			</a>
			<?php endforeach;?>
		</div>
	</div>
	<?php endif;?>
	<div class="pd10 ov">
		<a href="<?php echo site_url('sex/home/index');?>" class="da">
			<img src="m/images/g1.png" class="dam"><p>首页</p>
		</a>
		<a href="<?php echo site_url('sex/home/today');?>" class="da">
			<img src="m/images/g2.png" class="dam"><p>抢购</p>
		</a>
		<a href="<?php echo site_url('sex/home/hot');?>" class="da">
			<img src="m/images/g3.png" class="dam"><p>热销</p>
		</a>
		<a href="<?php echo site_url('sex/home/hot');?>" class="da">
			<img src="m/images/g4.png" class="dam"><p>新品</p
		></a>
		<a href="<?php echo site_url('sex/home/category');?>" class="da">
			<img src="m/images/g5.png" class="dam"><p>商品分类</p>
		</a>
	</div>
	<p class="lh35"> </p>
	<p class="lh35"> </p>
</div>
<?php $this->load->view('layout/footer');?>
