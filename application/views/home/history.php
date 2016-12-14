<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>浏览历史</h2>
		<a href="javascript:;" onclick="gtns()" id="gdor" class="b_r">导航</a>
	</div>
</div>
<div class="gtn" id="gtn">
	<ul class="gt_a">
		<li><a href="fenlei.html" class="gta">所有商品分类</a></li>
		<li><a href="car.php" class="gta">购物车</a></li>
		<li><a href="history.php" class="gta">浏览历史</a></li>
		<li><a href="" class="gta">回首页</a></li>
		<li><a href="chat.php" class="gta">在线客服咨询</a></li>
	</ul>
</div>
<div class="pageauto">
	<div class="gd load" id="lazy">
		<a href="goods-5842.html" class="ga">
			<div class="pm">
				<img src2="http://s.qw.cc/images/201510/thumb_img/5842_thumb_P220_1445821592809.jpg" class="gm">
				<h3 class="gt">COC斯巴达之矛高端震动仿真阳具</h3>
				<p class="lp"><em class="xj">1380.00</em><del>2799.00</del></p>
			</div>
		</a>
		<a href="goods-8806.html" class="ga">
			<div class="pm">
				<img src2="http://s.qw.cc/images/201611/thumb_img/8806_thumb_P220_1478659582447.jpg" class="gm">
				<h3 class="gt">COC罗马大帝加长多频仿真阳具</h3>
				<p class="lp"><em class="xj">198.00</em><del>257.40</del></p>
			</div>
		</a>
	</div>
</div>
<div class="hmnv mt10">
	<a href="man/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s1.png" class="dam"><p>男用</p>
	</a>
	<a href="woman/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s2.png" class="dam"><p>女用</p>
	</a>
	<a href="baojian/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s3.png" class="dam"><p>延时</p>
	</a>
	<a href="neiyi/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s4.png" class="dam"><p>情趣内衣</p>
	</a>
	<a href="woman/bizhen/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s5.png" class="dam"><p>仿真阳具</p>
	</a>
	<a href="man/feijibei/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s6.png" class="dam"><p>飞机杯</p>
	</a>
	<a href="xingai/" class="da">
		<img src="http://s.qw.cc/mobile/ui/s7.png" class="dam"><p>SM情趣</p>
	</a>
	<a href="topic.php?topic_id=687" class="da">
		<img src="http://s.qw.cc/mobile/ui/s8.png" class="dam"><p>土豪玩具</p>
	</a>
	<a href="car.php" class="da">
		<img src="http://s.qw.cc/mobile/ui/s11.png" class="dam"><p>购物车</p>
	</a>
	<a href="fenlei.html" class="da">
		<img src="http://s.qw.cc/mobile/ui/s10.png" class="dam"><p>全部分类</p>
	</a>
	<div class="clear"></div>
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
			<a href="login.php" class="na">登录/注册</a>
			<a href="chaxun.php"  class="na">查订单</a>
			<a href="javascript:;" onClick="gotop()" class="na">回顶部</a>
		</li>
		<li>
			<a href="tel:4006600606" class="fbtn">400-660-0606<p class="f12">点击电话订购</p></a>
			<a href="sms:13883873375" class="fbtn">点击短信订购<p class="f12">姓名+货号+数量+地址</p></a>
		</li>
	</ul>
	<div class="lh25 mt10">
		<a href="app.php" class="red">APP下载</a> | <a href="chat.php">在线客服</a> | <a href="article.php?act=detail&a_id=617">帮助</a> | <a href="faq.php">反馈</a> | <a href="about.php">关于我们</a>
	</div>
</div>
<script>
function gtns(){
	$("#gtn").toggle();
}
$("#gtn").bind("click",function(){
	$(this).hide();
});
</script>
<?php $this->load->view('layout/footer');?>
