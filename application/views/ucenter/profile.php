<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>修改资料</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<div class="gtn" id="gtn">
	<ul class="gt_a">
		<li><a href="<?php echo site_url('sex/home/category')?>" class="gta">所有商品分类</a></li>
		<li><a href="<?php echo site_url('sex/cart/index')?>" class="gta">购物车</a></li>
		<li><a href="<?php echo site_url('ucenter/ucenter/get_history');?>" class="gta">浏览历史</a></li>
		<li><a href="<?php echo site_url('sex/home/index')?>" class="gta">回首页</a></li>
		<li><a href="tel:15988173721" class="gta">在线客服咨询</a></li>
	</ul>
</div>
<div class="pageauto ucenter-infor">
	<ul class="xul mt10">
		<li onClick="fmx(0)">
			<b class="mt10">头像</b>
			<img src="<?php echo $this->config->show_image_url('common/touxiang',$photo);?>" width="40" height="40"/>
		</li>
		<li onClick="fmx(1)"><b>用户名</b><i class="c9"><?php echo empty($alias_name) ? '点击填写用户名' : $alias_name;?></i></li>
		<li onClick="fmx(2)"><b>性别</b><i></i><?php echo empty($sex) ? '点击选择性别' : $sex;?></li>
		<li onClick="fmx(3)"><b>邮箱</b><i><?php echo empty($email) ? '点击填写邮箱' : $email;?></i></li>
		<li onClick="fmx(4)"><b>手机</b><i><?php echo empty($phone) ? '点击填写手机号' : $phone;?></i></li>
	</ul>
</div>

<div class="msk ucenter-infor-msk" id="msk">
	<div id="box" class="prbox">
		<div class="pd10" id="forms">
			<form action="<?php echo site_url('ucenter/Ucenter/update_user_info')?>" method="POST" onSubmit="return ckav()" enctype="multipart/form-data" class="hid">
				<h2 class="t">
					<b class="brl">
						<em class="f14">修改头像</em>
					</b>
				</h2>
				<input type="file" name="photo" id="avatar" class="avatar" />
				<a href="javascript:" onclick="xpx(0)" class="lbtn left">取消</a>
				<input type="submit" value="修改" class="rbtn right"/>
				<div class="clear"></div>
			</form>
		
			<form action="" method="POST" id="lt_form" class="hid">
				<h2 class="t"><b class="brl"><em class="f14">用户名</em></b></h2>
				<p>
					<input type="text" name="other_name" id="other_name" value=""  maxlength="60" class="pt" placeholder="用户名"/>
				</p>
				<a href="javascript:" onclick="xpx(0)" class="lbtn left">取消</a>
				<input type="button" value="修改" class="rbtn right" onClick="ckf1()"/>
				<div class="clear"></div>
			</form>
		
			<form action="" method="POST" id="sex_form" class="hid">
				<h2 class="t"><b class="brl"><em class="f14">修改性别</em></b></h2>
				<div class="mt10 mb10"><input type="radio" name="sex" value="0"  /> 保密 <input type="radio" name="sex" value="1" checked="true" /> 男 <input type="radio" name="sex" value="2" /> 女</div>
				<a href="javascript:" onclick="xpx(0)" class="lbtn left">取消</a>
				<input type="button" value="修改" class="rbtn right" onClick="ckf2()"/>
				<div class="clear"></div>
			</form>
		
			<form action="" method="POST" id="email_form" class="hid">
				<h2 class="t"><b class="brl"><em class="f14">修改邮箱</em></b></h2>
				<div><input type="text" name="email" id="email" value="" maxlength="60" class="pt" placeholder="邮箱地址" /></div>
				<div class="ov mt10"><a href="javascript:" onclick="xpx(0)" class="lbtn left">取消</a>
				<input type="button" value="修改" class="rbtn right" onClick="ckf3()"/>
				</div>
			</form>
		
		
			<form action="" method="POST" id="mobile_form">
				<h2 class="t"><b class="brl"><em class="f14">手机号码</em></b></h2>
				<input type="text" name="mobile_phone" id="mobile_phone" value="<?php echo $phone;?>" maxlength="11" class="pt" placeholder="请输入你的手机号码" />
				
				<div id="sms_box" class="sms_box">
					<p>验证码:
    					<input type="button" value="发送验证码" id="dx" class="dx" style="float: right;line-height: 3.3rem;width: 38%;margin: 0.5rem 0;"/>
    				    <input type="text" style="float: right;" name="code" id="code" value=""  onChange="yz()" maxlength="6" class="pt" placeholder="验证码"/>
    				</p>
				
				</div>
				<a href="javascript:" onclick="xpx(0)" class="lbtn left">取消</a>
				<input type="button" value="修改" onClick="yz()" class="rbtn right"/>
				<div class="clear"></div>
			</form>
		
		</div>
	</div>
</div>
<script>
var m_url = "<?php echo $this->config->m_base_url;?>";
var forms = $("#forms").children();
var o_sex = "<?php echo $sex;?>";
var o_email = "<?php echo $email;?>";
var o_mobile = "<?php echo $phone;?>";
var va = "0";

function ckav() {
    var a = $("#avatar").val();
    if (a.length < 1) {
        layer.msg("请选择上传的图片后在提交，谢谢！");
        return false;
    }
}

function xpx(id) {
    forms.eq(id).show().siblings().hide();
    $("#msk").hide();
}

function fmx(i) {
    $("#msk").show();
    forms.eq(i).show().siblings().hide();
}

//昵称
function ckf1() {
    var alias_name = $("#other_name").val();
    if (alias_name.length < 2) {
        layer.msg("昵称不能少于2个字");
        return false;
    }
    $.ajax({
        type: "POST",
        url: m_url+"ucenter/Ucenter/update_user_info",
        data: {
        	alias_name: alias_name
        },
        dataType: "json",
        success: function (data) {
            if (data.status) {
                layer.msg("更新成功");
                location.reload();
            } else {
                layer.msg("更新失败");
            }
        }
    });
}

//性别
function ckf2() {
        var sex = $("input[name='sex']:checked").val();
        if (sex == o_sex) {
            return false;
        }
        $.ajax({
            type: "POST",
            url: m_url+"ucenter/Ucenter/update_user_info",
            data: {
                sex: sex
            },
            dataType: "json",
            success: function (data) {
                if (data.status) {
                    layer.msg("更新成功");
                    location.reload();
                } else {
                    layer.msg("更新失败");
                }
            }
        });
    }
    //邮箱

function ckf3() {
    var email = $("#email").val();
    if (email == o_email) {
        return;
    }
    if (!Validator.isEmail(email)) {
        layer.msg("邮箱格式错误");
        return false;
    }
    $.ajax({
        type: "POST",
        url: m_url+"ucenter/Ucenter/update_user_info",
        data: {
            email: email,
        },
        dataType: "json",
        success: function (data) {
            if (data.status) {
                layer.msg("更新成功");
                location.reload();
            } else {
                layer.msg("更新失败");
            }
        }
    });
}

//手机
function ckf4() {
    var phone = $("#mobile_phone").val();
    if (phone == o_mobile) {
        return false;
    }
    if (!Validator.isMobile(phone)) {
        layer.msg("手机格式错误");
        return false;
    }
    $.ajax({
        type: "POST",
        url: m_url+"ucenter/Ucenter/update_user_info",
        data: {phone: phone,},
        dataType: "json",
        success: function (data) {
            if (data.status) {
                layer.msg("更新成功");
                location.reload();
            } else {
                layer.msg("更新失败");
            }
        }
    });
}


var tmo;
var lm = 180;
var xm = 180;
var fa = 0;
var dx = $("#dx");

function tm() {
    lm--;
    if (lm < 1) {
        dx.removeAttr("disabled");
        dx.val("重发");
        clearTimeout(tmo);
        lm = xm;
        return;
    }
    dx.val(lm + "秒后可重发");
    tmo = setTimeout("tm()", 1000);
}

dx.bind("click", function () {
    var il = $(this).prop("disabled");
    var mbv = $('#mobile_phone').val();
    if (!Validator.isMobile(mbv)) {
        layer.msg("请输入正确的手机号码");
        return false;
    }
    var phone = $("#mobile_phone").val();
    if (phone == o_mobile) {
    	layer.msg("请输入新手机号码");
        return false;
    }
    if (!il) {
        $(this).prop("disabled", "true");
        $("#sms_box").removeClass("hid");
        $.getJSON(m_url+"ucenter/Ucenter/sendYzm", {
            mobile: mbv
        }, function (data) {
            if (data.status == false) {
                layer.msg("发送失败");
            } else {
            	tm();
            }
        });
    } else {
        layer.msg("请等待倒计时结束后重新发送");
    }
});

function yz() {
    var c = $('#code').val();
    if (c.length < 4) {
        layer.msg("请填写验证码");
        return false;
    }
    if (fa == 1) {
        return false;
    }
    fa = 1;
    $.ajax({
        type: "POST",
        url: m_url+"ucenter/Ucenter/update_user_info",
        data: {code: c,phone:$("#mobile_phone").val()},
        dataType: "JSON",
        success: function (data) { 
        	if (data.status == false) {
                layer.msg(data.messages);
            } else {
                $('#mobile_phone').attr('readonly', true).css('background-color', '#ccc');
                $("#sms_box").addClass("hid");
                $('#dj').remove();
            }
        }
    });
}
</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>