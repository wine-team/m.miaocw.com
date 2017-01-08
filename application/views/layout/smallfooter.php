<div class="fot">
	<ul class="nav">
		<li>
			<a href="<?php echo site_url('qingqu/home/index');?>" class="na">首页</a>
			<a href="<?php echo site_url('qingqu/home/category');?>" class="na">分类</a>
			<a href="<?php echo site_url('qingqu/home/car')?>" class="na">购物车</a>
			<a href="<?php echo site_url('qingqu/home/hot');?>"  class="na">热销</a>
		</li>
		<li>
			<a href="<?php echo site_url('ucenter/Ucenter/index');?>"  class="na">个人中心</a>
			<?php if($this->uid):?>
			<a href="<?php echo site_url('passport/Login/logout')?>" class="na">退出</a>
			<?php else :?>
			<a href="<?php echo site_url('passport/Login/index')?>" class="na">登录/注册</a>
			<?php endif;?>
			<a href="<?php echo site_url('ucenter/Order/grid');?>"  class="na">查订单</a>
			<a href="javascript:gotop();" class="na">回顶部</a>
		</li>
		<li>
			<a href="tel:4006600606" class="fbtn">400-660-0606<p class="f12">点击电话订购</p></a>
			<a href="sms:13883873375" class="fbtn">点击短信订购<p class="f12">姓名+货号+数量+地址</p></a>
		</li>
	</ul>
	<div class="lh25 mt10">
		<a href="<?php echo site_url('qingqu/home/help')?>">帮助</a> |
		<a href="<?php echo site_url('qingqu/home/message');?>">反馈</a> |
		<a href="<?php echo site_url('qingqu/home/about');?>">关于我们</a>
	</div>
</div>
