<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>趣网商城</h2>
		<a href="index.php" class="b_r">首页</a>
	</div>
</div>
<div class="pageauto">
	<div class="g_tss lh30">
		<h1 class="f14 alC">购物帮助</h1>
	</div>
	<div class="bgw">
		<div class="des ov">
			<p>
				<strong>400电话订购：</strong> 
			</p>
			<p>
				1.拨打400电话 400-660-0606。
			</p>
			<p>
				2.直拨分机/按“0”人工服务。
			</p>
			<p>
				3.根据提示，告诉客服您所需要的商品编号。
			</p>
			<p>
				4.与客服核对您的收货地址，姓名，电话等相关信息。
			</p>
			<p>
				5.选择相应的支付方式，具体支付流程请参考（网上支付）。
			</p>
			<p>
				6.下单成功等待收货。
			</p>
			<p>
				7.若选择“货到付款”请仔细检查包裹的包装，核对无误后再付款。
			</p>
			<p>
				8.收到货物后如有问题，请及时与我们客服联系。
			</p>
			<p>
				<br />
			</p>
			<p>
				<strong>短信订购电话：</strong> 
			</p>
			<p>
				点击页面底部的【短信订购】
			</p>
			<p>
				发送格式：商品货号+数量+收货人姓名+收货人地址+手机号码
			</p>
			<p>
				例如我们要买“<span style="color:#333333;font-family:'Microsoft Yahei';font-size:18px;font-weight:bold;line-height:28px;background-color:#FFFFFF;">COC斯巴达之矛高端震动仿真阳具</span>”&nbsp;这个产品
			</p>
			<p>
				我们可以用手机编辑短信内容：Q8654 数量1个 张三 北京朝阳区XX路XX号 13xxxxxxxxx
			</p>
			<p>
				<br />
			</p>
			<p>
				<br />
			</p>
			<p>
				<a href="http://chat6.livechatvalue.com/chat/chatClient/chatbox.jsp?companyID=158845&jid=7500716055&configID=41399&lan=zh&chatType=1&accept=1&enterurl=http://m.qw.cc/&pagereferrer=&pagetitle=&pagelocation=http://m.qw.cc/">点击联系在线客服</a> 
			</p>
		</div>
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
