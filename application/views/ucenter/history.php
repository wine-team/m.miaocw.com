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
			    <?php $img_arr = array_filter(explode('|', $r->goods_img));?>
				<img src="<?php echo $this->config->images_url.$img_arr[0]?>" class="gm">
				<h3 class="gt"><?php echo $r->goods_name;?></h3>
				<p class="lp"><em class="xj"><?php echo $r->shop_price;?></em><del><?php echo $r->market_price;?></del></p>
			</div>
		</a>
		<?php endforeach;?>
	</div>
</div>
<div class="hmnv mt10">
	<a href="<?php echo site_url('sex/home/man');?>" class="da">
		<img src="m/images/b1.png" class="dam"/>
		<p>男用</p>
	</a>
	<a href="<?php echo site_url('sex/home/woman');?>" class="da">
		<img src="m/images/b2.png" class="dam"/>
		<p>女用</p>
	</a>
	<a href="<?php echo site_url('sex/home/baojian');?>" class="da">
		<img src="m/images/b3.png" class="dam"/>
		<p>延时</p>
	</a>
	<a href="<?php echo site_url('sex/home/neiyi');?>" class="da">
		<img src="m/images/b4.png" class="dam"/>
		<p>情趣内衣</p>
	</a>
	<a href="<?php echo site_url('sex/home/goodlist');?>" class="da">
		<img src="m/images/b5.png" class="dam"/>
		<p>仿真阳具</p>
	</a>
	<a href="<?php echo site_url('sex/home/goodlist');?>" class="da xx">
		<img src="m/images/b6.png" class="dam"/>
		<p>飞机杯</p>
	</a>
	<a href="<?php echo site_url('sex/home/xingai');?>" class="da xx">
		<img src="m/images/b7.png" class="dam"/>
		<p>SM情趣</p>
	</a>
	<a href="javascript:;" class="da">
		<img src="m/images/b8.png" class="dam"/>
		<p>土豪玩具</p>
	</a>
	<a href="javascript:;" class="da">
		<img src="m/images/b9.png" class="dam"/>
		<p>APP下载</p>
	</a>
	<a href="<?php echo site_url('sex/home/category');?>" class="da">
		<img src="m/images/b10.png" class="dam"/>
		<p>全部分类</p>
	</a>
	<div class="clear"></div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
