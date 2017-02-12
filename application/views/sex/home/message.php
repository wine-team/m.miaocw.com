<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>意见反馈</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
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
				    <td valign="top">
				    	<textarea maxlength="800" name="msg" placeholder="您的意见对我们很重要" style="height:100px;" class="pt" ></textarea>
				    </td>
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
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
