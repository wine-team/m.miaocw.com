<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>修改密码</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div class="pd10">
		<form action="<?php echo site_url('ucenter/ucenter/reset_pwd');?>" method="POST" id="car" onSubmit="return chp()">
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="ftable">
				<tbody>
					  <tr>
					      <td width="20%">原始密码:</td>
					      <td><input type="password" name="oldPw" id="original" value="" maxlength="20" class="pt" /></td>
					  </tr>
					  <tr>
					      <td>新密码:</td>
					      <td><input type="password" name="newPw" id="password" value="" maxlength="20" class="pt" /></td>
					  </tr>
					  <tr>
						  <td>确认密码:</td>
						  <td><input type="password" name="newConfirmPw" id="retype" value="" maxlength="20" class="pt" /></td>
					  </tr>
				</tbody>
			</table>
			<input type="submit" value="提交修改" class="bbt"/>
			<p class="lh16">&nbsp;</p>
		</form>
	</div>	
</div>
<script>
function chp(){
	var v1=$("#original").val();
	var v2=$("#password").val();
	var v3=$("#retype").val();	
	if(v1==''){
		layer.msg("原始密码不能为空!");
	    $("#original").focus();
	    return false;
	}
	if(v2=='' || v2.length<6){
		layer.msg("您的新密码过于简单（长度至少为6位）");
	    $("#password").focus();
	    return false;
	}
	if(v3=='' || v3.length<6){
		layer.msg("确认密码不能为空!");
	    $("#retype").focus();
	    return false;
	}
	if(v2!=v3){
		layer.msg("您输入的两次新密码不一致，请重新输入!");
	    return false;	
	}
}
</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>