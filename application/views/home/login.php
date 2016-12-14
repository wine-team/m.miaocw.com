<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>登录</h2>
		<a href="<?php echo site_url('home/reg')?>" class="b_r">去注册</a>
	</div>
</div>
<div class="pageauto" id="lbefore">
	<form action="login.php" method="post" class="login" id="login" onSubmit="return login();">
		<input type="checkbox" class="hid" name="remember" value="1" checked="checked"/>
		<input type="text" name="username" class="linput" id="username" value="" placeholder="用户名/邮箱/手机" />
		<input type="password" name="password" id="password" class="linput lpass" value=""  placeholder="登陆密码"/>
		<a href="reg.php" class="h left">免费注册（送10元优惠券）</a>
		<a href="getpass.php" style="color:#09F" class="right">忘记密码?</a>
		<div class="clear"></div>
		<input type="submit" value="登 录" class="gbtn">
		<p>&nbsp;</p>
		<p class="alC lh30">
			<a href="/connect/login.php?platform=qq" class="lgqq hid">QQ登录</a>
			<a href="/connect/login.php?platform=weibo" class="lgweibo hid">微博登录</a>
		</p>
		<p class="alC"><a href="">网站首页</a> | 
			<a class="red" href="app.php">APP下载</a>
		</p>
	</form>
</div>
<div class="pageauto hid" id="loginscuess">
	<div class="lgxx">
		<img src="http://s.qw.cc/mobile/css/bigyes.png" width="50" height="50">
		<h2 class="f16" style="color:#0ba816;margin-top:1rem;">恭喜，登录成功！</h2>
		<p>
			<b id="tims">5</b>秒后自动返回到上一页
		</p>
		<p>&nbsp;</p>
		<div class="ov">
			<a href="javascript:window.location.href=document.referrer;" class="lbtn left">返回上一页</a>
			<a href="user.php" class="rbtn right">进入会员中心</a>
		</div>
	</div>
</div>
<script>
var dao=5,intervalid;
function login(){
	var u=$("#username").val();
	var p=$("#password").val();
	if(u.length<2||p.length<5){
	alert("用户名不少与2位，密码不少于5位！");
	return false;
	}
$.post('login.php',{act:'login',username:u,password:p,token:'116e359ca38e73ec9f9347d160b2e20d'},function(data){
  if(data.error==1){
	 alert(data.msg);
	}else{
	$("#lbefore").hide();
	$("#loginscuess").show();
	intervalid=setInterval("loginsf()",1000); 
	}
},'json');
return false;	
}


function loginsf(){ 
if(dao <= 0){
window.location.href=document.referrer
clearInterval(intervalid); 
}
document.getElementById("tims").innerHTML = dao; 
dao--;
} 
</script>
<?php $this->load->view('layout/footer');?>
