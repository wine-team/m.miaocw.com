<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>会员中心</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	
	<div class="g_tss alC" style="display:none;">
		<a href="javascript:;" class="pl10" title="点击这里认证">点击认证送积分</a>
	</div>

	<div class="bgw pd10 mt10">
		<a href="<?php echo site_url('ucenter/ucenter/setting');?>" class="av_a">
			<img src="<?php echo $this->config->show_image_url('common/touxiang',$user_info->photo);?>" class="uava left"/>
			<h3 class="f16 c3"><?php echo $user_info->alias_name;?><em class="vip">V1</em></h3>
			<p class="gray">享受全场优惠</p>
			<p class="gray f10"><?php echo $user_info->pay_points;?>积分</p>
		</a>
	</div>

	<ul class="bul mt10">
		<li>
			<a href="<?php echo site_url('ucenter/order/grid');?>">
				<img src="m/images/u1.png" class="uiu"/>全部订单(<?php echo $user_info->orderTotal;?>)
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('ucenter/coupon/index');?>">
				<img src="m/images/u2.png" class="uiu"/>优惠券
			</a>
		</li>
		<!--<li><a href="yao.php">摇一摇</a></li>-->
	</ul>
	<ul class="bul mt10">
		<li>
			<a href="<?php echo site_url('ucenter/enshrine/index')?>">
				<img src="m/images/u3.png" class="uiu"/>我的收藏(<?php echo $user_info->shireTotal;?>)
			</a>
		</li>
		<li>
			<a href="<?php echo site_url('ucenter/ucenter/get_history')?>">
				<img src="m/images/u4.png" class="uiu"/>浏览历史
			</a>
		</li>
	</ul>
	<ul class="bul mt10">
		<li>
			<a href="<?php echo site_url('sex/consult/help')?>">
				<img src="m/images/u5.png" class="uiu"/>购物帮助
			</a>
		</li>
		<li>
			<a href="tel:15988173721">
				<img src="m/images/u6.png" class="uiu"/>在线客服
			</a>
		</li>
		<!-- 
		<li>
			<a href="<?php echo site_url('ucenter/ucenter/load_app');?>">
				<img src="m/images/u7.png" class="uiu">APP下载(送好礼)
			</a>
		</li>
		 -->
		<li>
			<a href="<?php echo $this->config->passport_url.'m/login/logout';?>">
				<img src="m/images/u8.png" class="uiu"/>注销登录
			</a>
		</li>
	</ul>
	<div id="weix" class="wxfix mt10">
		<div class="page ov">
			<img src="m/images/quba96.jpg" class="wx_av"/>
			<p>查询物流、售后服务、学习新姿势请关注</p>
			<p>微信公众号：<em class="wx_txt">妙处网</em> ←长按可以复制</p>
		</div>
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
