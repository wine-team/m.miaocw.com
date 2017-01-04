<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" onClick="" class="b_l"></a>
		<h2>登录</h2>
		<a href="<?php echo site_url('passport/Login/reg')?>" class="b_r">去注册</a>
	</div>
</div>
<div class="pageauto login-reg" id="lbefore">
	<form action="<?php echo site_url('passport/Login/check_login')?>" method="post" class="login" id="login" onSubmit="return login();">
		<input type="text" name="username" class="linput" id="username" value="" placeholder="手机" />
		<input type="password" name="password" id="password" class="linput lpass" value=""  placeholder="登陆密码"/>
		<a href="<?php echo site_url('passport/Login/reg')?>" class="h left">免费注册（送10元优惠券）</a>
		<a href="<?php echo site_url('passport/Login/forget')?>" style="color:#09F" class="right">忘记密码?</a>
		<div class="clear"></div>
		<input type="submit" value="登 录" class="gbtn">
		<p>&nbsp;</p>
		<!--  <p class="alC lh30">
			<a href="/connect/login.php?platform=qq" class="lgqq hid">QQ登录</a>
			<a href="/connect/login.php?platform=weibo" class="lgweibo hid">微博登录</a>
		</p>-->
		<p class="alC">
		    <a href="<?php echo $this->config->m_base_url;?>">网站首页</a> |  <a class="red" href="<?php echo $this->config->m_base_url.'ucenter/Ucenter/load_app';?>">APP下载</a>
		</p>
	</form>
</div>
<div class="pageauto hid loginscuess" id="loginscuess">
	<div class="lgxx">
		<img src="m/images/bigyes.png" width="50" height="50">
		<h2 class="f16" style="color:#0ba816;margin-top:1rem;">恭喜，登录成功！</h2>
		<p>
			<b id="tims">5</b>秒后自动返回到上一页
		</p>
		<p>&nbsp;</p>
		<div class="ov">
			<a href="javascript:window.location.href=document.referrer;" class="lbtn left">返回上一页</a>
			<a href="<?php echo site_url($this->config->m_base_url.'ucenter/Ucenter/index')?>" class="rbtn right">进入会员中心</a>
		</div>
	</div>
</div>
<script>
var dao=5,intervalid;
function login(){
	var u=$("#username").val();
	var p=$("#password").val();
	if(u.length<2||p.length<6){
	alert("用户名不少与2位，密码不少于5位！");
		return false;
	}
    $.post('<?php echo $this->config->m_base_url.'passport/Login/check_login';?>',{username:u,password:p},function(data){
      if(data.status==false){
    	 	alert(data.messages);
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
<?php $this->load->view('sex/layout/footer');?>
