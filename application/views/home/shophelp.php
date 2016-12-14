<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>文章详情</h2>
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
	<div class="de_pds">
		<h1 class="at_h1">购物帮助</h1>
		<p class="sub_tt">微信搜索关注:<em class="h">趣网VIP</em></p>
		<div class="desa ov">
			<p><strong>400电话订购：</strong></p><p>&nbsp; &nbsp;
			1.拨打400电话 400-660-0606。</p><p>&nbsp; &nbsp;
			2.直拨分机/按“0”人工服务。</p><p>&nbsp; &nbsp;
			3.根据提示，告诉客服您所需要的商品编号。</p><p>&nbsp; &nbsp;
			4.与客服核对您的收货地址，姓名，电话等相关信息。</p><p>&nbsp; &nbsp;
			5.选择相应的支付方式，具体支付流程请参考（网上支付）。</p><p>&nbsp; &nbsp;
			6.下单成功等待收货。</p><p>&nbsp; &nbsp;
			7.若选择“货到付款”请仔细检查包裹的包装，核对无误后再付款。</p><p>&nbsp; &nbsp;
			8.收到货物后如有问题，请及时与我们客服联系。</p><p><br/></p><p><strong>短信订购电话：</strong></p><p>&nbsp; &nbsp;
			点击页面底部的【短信订购】</p><p>&nbsp; &nbsp;
			发送格式：商品货号+数量+收货人姓名+收货人地址+手机号码</p><p>&nbsp; &nbsp;
			例如我们要买“<span style="color:#333333;font-family:&#39;Microsoft Yahei&#39;;font-size:18px;font-weight:bold;line-height:28px;background-color:#FFFFFF;">COC斯巴达之矛高端震动仿真阳具</span>”&nbsp;这个产品</p><p>&nbsp; &nbsp;
			我们可以用手机编辑短信内容：Q8654 数量1个 张三 北京朝阳区XX路XX号 13xxxxxxxxx</p><p><br/></p><p><br/></p>
		</div>
	</div>
	<div id="weix" class="wxfix mt10">
		<div class="page ov">
			<img src="http://s.qw.cc/mobile/m/quba96.jpg" class="wx_av">
			<p>查询物流、售后服务、学习新姿势请关注</p>
			<p>微信公众号：<em class="wx_txt">妙处网</em> ←长按可以复制</p>
		</div>
	</div>
</div>
<div class="bgw pd10 mt10">
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
