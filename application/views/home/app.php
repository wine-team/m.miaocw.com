<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>妙处网APP下载</h2>
		<a href="index.php" class="b_r">首页</a>
	</div>
</div>
<div class="pageauto app">
	<div class="lr10">
		<p class="alC">
			<img src="http://s.qw.cc/mobile/m/t_apptop2.jpg" width="265" height="340">
		</p>
		<a href="https://itunes.apple.com/cn/app/qu-wang-qing-qu-shang-cheng/id934737326?l=zh&mt=8" class="dp_btn">
			<img src="http://s.qw.cc/mobile/m/t_appi.png" width="27" height="27">iPhone版下载
		</a>
		<a href="http://s.qw.cc/app/sem-ad-lxq.apk?v=1217" class="dp_rbtn">
			<img src="http://s.qw.cc/mobile/m/t_appa.png" width="27" height="27">Android版下载
		</a>
		<a href="https://itunes.apple.com/cn/app/qu-wang-cheng-ren-yong-pin/id761913911?l=zh&mt=8" class="ipd_btn">
			<img src="http://s.qw.cc/mobile/m/t_ipad.png" width="27" height="27">iPad版下载
		</a>
	</div>
</div>
<div class="bgw lr10 mt10">
	<form action="search.php" class="search ov" onsubmit="return se(this)">
		<input type="search" value="" class="sl left" name="keyword" id="word" placeholder="关键词..." />
		<input class="sr left" type="submit" value="" />
	</form>
</div>
<div class="fot">
	<ul class="nav">
		<li>
			<a href="index.php" class="na">首页</a>
			<a href="fenlei.html" class="na">分类</a>
			<a href="car.php" class="na">购物车</a>
			<a href="hot.html"  class="na">热销</a>
		</li>
		<li>
			<a href="javascript:;" onClick="goback()" class="na">上一页</a>
			<a href="user.php" class="na">会员中心</a><a href="order.php"  class="na">订单</a><a href="javascript:;" onClick="gotop()" class="na">回顶部</a>
		</li>
		<li>
			<a href="tel:4006600606" class="fbtn">400-660-0606<p class="f12">点击电话订购</p></a>
			<a href="sms:13883873375" class="fbtn">点击短信订购<p class="f12">姓名+货号+数量+地址</p></a>
		</li>
	</ul>
	<div class="lh25 mt10">
		<!--<a href="http://www.qu.cn?shouji=1">电脑版</a> | --><a href="app.php" class="red">APP下载</a> | <a href="chat.php">在线客服</a> | <a href="article.php?act=detail&a_id=617">帮助</a> | <a href="faq.php">反馈</a> | <a href="about.php">关于我们</a>
		<p class="gray f12"></p>
		<p class="gray f12">渝ICP备14000671号-3</p>
	</div>
</div>
<?php $this->load->view('layout/footer');?>
