<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="index.php" class="b_l left">
			<i class="pl10">首页</i>
		</a>
		<h2>意见反馈</h2>
	</div>
</div>
<div class="pageauto">
	<div class="g_tss">
		<p class="lh16" style="padding:10px;">
			如您对我们的产品和服务有任何建议或者意见，请在此给我们留言
		</p>
	</div>
	<div class="lr10 bgw mt10">
		<form action="faq.php" method="post" onSubmit="return faq(this)" id="car">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="ftable">
				  <tr>
				    <td width="20%" valign="top">您的意见</td>
				    <td valign="top"><textarea maxlength="800" name="msg" placeholder="您的意见对我们很重要" style="height:100px;" class="pt" ></textarea></td>
				  </tr>
				  <tr>
				    <td>电话号码</td>
				    <td><input type="text" name="mobile" id="mobile" value=""  placeholder="手机/座机" maxlength="15" class="pt" /></td>
				  </tr>
				  <tr>
				    <td>验证码</td>
				    <td><input name="captcha" id="captcha" type="text" maxlength="4" size="5" class="pt" style="width:60px;" onclick="this.value='';"/>  <img src="captcha.php?get_password=1" alt="captcha" style="vertical-align: middle;cursor: pointer;" onClick="this.src='captcha.php?get_password=1&'+Math.random()" />看不清点我</td>
				  </tr>
				  <tr>
				  	<td colspan="2"><p class="lh18">&nbsp;</p><input type="hidden" name="act" value="msg"/><input type="submit" value="提交" class="bbt" /></td>
				  </tr>
			</table>
		</form>
	</div>
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
<script>
function faq(obj){
	var msg=obj.msg.value;
	var mob=obj.mobile.value;
	if(msg.length<10||msg.length>800){
		alert("亲，留言内容10-800之间哟~");
		return false;
	}
	if(!Validator.isMobile(mob)){
		alert("请填写正确的手机号码");
		return false;
	}
}
</script>
<?php $this->load->view('layout/footer');?>
