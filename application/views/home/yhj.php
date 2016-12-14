<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>我的优惠卷</h2>
	</div>
</div>
<div class="pageauto">
	<div class="lh25 gbgw">
		<div class="lr10 y_hj">
			<table width="100%" border="0">
			  <tr>
			    <td width="100">
			    	<p class="hbo">¥10.00元</p>
			    </td>
			    <td>
			    	<p>新注册送10元优惠券</p><p>有效期：2015-05-26 至 2027-07-09 </p>
			    	<p>
			        	<a href="index.php" class="bun">立即使用</a>
			    	</p>
			    </td>
			  </tr>
			</table>
		</div>
	</div>
	<div class="lh25 gbgw">
		<div class="lr10">
			<h2 class="t"><em class="brl">添加优惠券</em></h2>
			<p class="line"></p>
			<p class="lh18">&nbsp;</p>
			<form onSubmit="return addBonus()" method="post" action="" name="addBouns">
				<table width="100%" border="0">
				  <tr>
				    <td width="90">优惠券序列号:</td></tr>
				    <tr>
				    <td><input type="text" class="pt" size="30" name="bonus_sn"/></td>
				  </tr>
				</table>
				<p class="lh18">&nbsp;</p>
				<input type="hidden" class="inputTx" value="act_add_bonus" name="act"/>
				<input type="submit" value="添加优惠券" class="bbt"/>
				<p class="lh18">&nbsp;</p>
			</form>
		</div>
	</div>
	<p class="lh20">&nbsp;</p>
	<div class="pd10 gbgw">
		<div class="lh25">
			<p>优惠劵是趣网为回馈老客户推出的优惠，可抵等额现金使用。</p>
			<p>优惠劵有什么用？</p>
			<p>1. 订单满一定金额，可使用一定额度的优惠劵。如“满100元可使用10元优惠券”</p>
			<p>2. 活动中使用，按照活动的具体说明使用。</p>
			<p>如何获得优惠劵？</p>
			<p>1. 网站注册新用户可送10元优惠劵</p>
			<p>2.满赠优惠劵，确认收货交易完成后生效。如“订单满100元，可送10元优惠劵”</p>
		</div>
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
function addBonus(){
  var frm= document.forms['addBouns'];
  var bonus_sn =frm.elements['bonus_sn'].value;
  if(bonus_sn.length == 0){
    alert('请输入的你的优惠券序列号！');
    return false;
  }
  else{
    var reg = /^[0-9]{10}$/;
    if ( ! reg.test(bonus_sn)){
      alert('你输入的优惠券格式不正确！');
      return false;
    }
  }
  return true;
}
</script>
<?php $this->load->view('layout/footer');?>
