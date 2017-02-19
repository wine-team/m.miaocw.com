<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>浏览历史</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div class="gd load" id="lazy">
		<?php foreach ($res as $r) :?>
		<a href="<?php echo site_url($r->goods_id);?>" class="ga">
			<div class="pm">
				<img src="<?php echo $this->config->show_image_url('mall',strstr($r->goods_img,'|',true));?>>" class="gm">
				<h3 class="gt"><?php echo $r->goods_name;?></h3>
				<p class="lp"><em class="xj"><?php echo $r->shop_price;?></em><del><?php echo $r->market_price;?></del></p>
			</div>
		</a>
		<?php endforeach;?>
	</div>
</div>
<div class="hmnv mt10">
	<a href="<?php echo site_url('sex/home/search?cateid=1');?>" class="da">
		<img src="m/images/b1.png" class="dam"/>
		<p>男用</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=2');?>" class="da">
		<img src="m/images/b2.png" class="dam"/>
		<p>女用</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=21');?>" class="da">
		<img src="m/images/b3.png" class="dam"/>
		<p>延时</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=22');?>" class="da">
		<img src="m/images/b4.png" class="dam"/>
		<p>情趣内衣</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=14');?>" class="da">
		<img src="m/images/b5.png" class="dam"/>
		<p>仿真阳具</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=3');?>" class="da xx">
		<img src="m/images/b6.png" class="dam"/>
		<p>飞机杯</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=23');?>" class="da xx">
		<img src="m/images/b7.png" class="dam"/>
		<p>SM情趣</p>
	</a>
	<a href="<?php echo site_url('sex/home/search?cateid=11');?>" class="da">
		<img src="m/images/b8.png" class="dam"/>
		<p>土豪玩具</p>
	</a>
	<a href="<?php echo site_url('sex/cart/index')?>" class="da">
		<img src="m/images/b9.png" class="dam">
		<p>购物车</p>
	</a>
	<a href="<?php echo site_url('sex/home/category');?>" class="da">
		<img src="m/images/b10.png" class="dam"/>
		<p>全部分类</p>
	</a>
	<div class="clear"></div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
