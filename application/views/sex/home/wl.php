<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>物流指南</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<div class="gtn" id="gtn">
	<ul class="gt_a">
		<li><a href="<?php echo site_url('sex/home/category')?>" class="gta">所有商品分类</a></li>
		<li><a href="<?php echo site_url('sex/cart/index')?>" class="gta">购物车</a></li>
		<li><a href="<?php echo site_url('ucenter/ucenter/get_history');?>" class="gta">浏览历史</a></li>
		<li><a href="<?php echo site_url('sex/home/index')?>" class="gta">回首页</a></li>
		<li><a href="tel:15988173721" class="gta">在线客服咨询</a></li>
	</ul>
</div>
<div class="page wuliu"  id="lazy">
	<div class="video_wx" id="bofang">
		<div class="wuliu_t">
			<b>请关注微信公众号查询物流</b>
			<p class="wuliu_tt">微信号：妙处网</p>
		</div>
		<img src="m/images/wuliu_bg.jpg" width="100%"/>
	</div>
	<div class="bgw">
		<div class="fstp_s">
			<p class="fs_step">
				<img src="m/images/wx_icon.png" class="wl_icon"/>
				<br>关注微信<em class="red">妙处网</em>
			</p>
			<p class="fs_step">
				<img src="m/images/ph_icon.png" class="wl_icon"/>
				<br>发送 #加手机号<em>例: #13800138000</em>
			</p>
			<p class="fs_step">
				<img src="m/images/car_icon.png" class="wl_icon"/>
				<br>接收物流信息<em>查看物流信息</em>
			</p>
		</div>
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>