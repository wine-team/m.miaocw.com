<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>注册</h2>
		<a href="<?php echo site_url('passport/Login/index')?>" class="b_r">去登陆</a>
	</div>
</div>
<div class="pageauto login-reg">
	<form action="<?php echo site_url('passport/Login/check_reg')?>" method="post" class="regist" id="regist">
		<input type="text" name="username" class="linput" id="username" value="" placeholder="手机号码或者邮箱" />
		<input type="password" name="password" id="password" class="linput lpass" value=""  placeholder="登陆密码至少6位"/>
		<input type="password" name="confirm_password" id="confirm_password" class="linput lpass" value=""  placeholder="登陆密码至少6位"/>
		<input type="text" name="invite_code" id="invite_code" class="linput" value=""  placeholder="邀请码(非必填)"/>
		<p class="lh20">&nbsp;</p>
		<input type="submit" value="注 册" class="gbtn">
		<p class="alC"><a href="<?php echo site_url('passport/Login/index')?>" class="f14 h">已有帐号？点击登录</a></p>
		<p class="alC"><a href="<?php echo $this->config->m_base_url;?>">网站首页</a> | <a class="red" href="<?php echo $this->config->m_base_url.'ucenter/Ucenter/load_app';?>">APP下载</a></p>
	</form>
	<div class="lh30 pd10" style="display:none" id="ok">
		<img src="m/images/ok.png" width="23" height="23" class="left mt5 pr10"><h2 class="f18 left">恭喜，注册成功!</h2><div class="clear"></div>
		<p>已赠10元优惠劵（<a href="bonus.php" class="U">查看</a>），购满100元即可使用哟</p>
		<a href="hot.html" class="red">去看看热销宝贝 >></a>
		<p class="lh16">&nbsp;</p>
		<div class="lh25 f14 hid"><p>请牢记您的登录名和密码</p><p class="red">您的登录名：<b id="u_name"></b>,登录密码：<b id="u_pass"></b></p></div>
		<div style="background-color:#fff;border:1px solid #ddd;border-radius:4px;padding:10px 20px;"><p>关注微信：quwang520</p><p>购物更私密快捷</p><p>了解更多情趣资讯</p></div>
		<p class="lh16">&nbsp;</p><a href="javascript:goback();" class="red U pr10">返回继续购物</a><a href="user.php" class="U red pl10">进入会员中心</a>
	</div>
</div>
<script>
$("#regist").bind("submit",function(){
	var u=$("#username").val();
	var p=$("#password").val();
	var c_p=$("#confirm_password").val();
	var c= $("#invite_code").val();
	if(u.length<2){
		alert("用户名不少与2位");
	return false;
	}
	if(!Validator.isMobile(u)){
		if(!Validator.isEmail(u)){
		alert("请输入正确手机号或者邮箱");
		return false;
		}
	}
	if(p=='123456'){
		alert("密码过于简单！");
		return false;
	}
	if(p!=c_p){
		alert("两次输入不一致");
		return false;
	}	
	if(p.length<6){
	alert("密码不少于6位");
	return false;
	}

	$.ajax({    
        type:'post',        
        url:'<?php echo $this->config->m_base_url.'passport/Login/check_reg';?>',    
        data:{username:u,password:p,confirm_password:c_p,invite_code:c},    
        cache:false,    
        dataType:'json',    
        success:function(data){  
			if (data.status==false) {
				alert(data.messages);
			} else {
				$("#u_name").text(u);
				$("#u_pass").text(p.substring(0,4)+'***');
				$("#ok").show();
				$("#regist").hide();
			}
        }    
    });
	return false;	
});

$("#username").blur(function(){
	var u=$(this).val();
	if(u){
		$.post('reg.php?act=validate', {u:u}, function(result){
			if(result.code == 1){
				alert(result.msg);
				$("#username").val("");
			}
		},'json');
	}
})
</script>
<?php $this->load->view('sex/layout/footer');?>
