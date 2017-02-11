<div class="fot">
	<ul class="nav">
		<li>
			<a href="<?php echo site_url('sex/home/index');?>" class="na">首页</a>
			<a href="<?php echo site_url('sex/home/category');?>" class="na">分类</a>
			<a href="<?php echo site_url('sex/cart/index')?>" class="na">购物车</a>
			<a href="<?php echo site_url('sex/home/hot');?>" class="na">热销</a>
		</li>
		<li>
			<a href="javascript:history.back();"  class="na">上一页</a>
			<?php if($this->uid):?>
			<a href="<?php echo $this->config->passport_url.'m/login/index.html';?>" class="na">登录/注册</a>
			<?php else:?>
			<a href="<?php echo $this->config->m_base_url.'ucenter/ucenter';?>" class="na">个人中心</a>
			<?php endif;?>
			<a href="<?php echo site_url('sex/home/query');?>"  class="na">查订单</a>
			<a href="javascript:gotop();" class="na">回顶部</a>
		</li>
		<li>
			<a href="tel:15988173721" class="fbtn">15988173721<p class="f12">点击电话订购</p></a>
			<a href="sms:15988173721" class="fbtn">点击短信订购<p class="f12">姓名+货号+数量+地址</p></a>
		</li>
	</ul>
	<div class="lh25 mt10">
		<a href="<?php echo site_url('sex/home/help')?>">帮助</a> |
		<a href="<?php echo site_url('sex/home/message');?>">反馈</a> |
		<a href="<?php echo site_url('sex/home/about');?>">关于我们</a>
	</div>
</div>
