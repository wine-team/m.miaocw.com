<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="" class="b_l">
			<em class="pl8">回首页</em>
		</a>
		<h2>订购提示</h2>
		<a href="chat.php" class="b_r">在线客服</a>
	</div>
</div>
<div class="pageauto">
	<div class="bgw alC" id="yzt">
		<p><img src="http://s.qw.cc/mobile/ui/dyes.png" class="dyes"></p>
		<p class="f16 c3"><b>订单提交成功，请您尽快支付！</b></p>
		<p class="c9 f10 lh20">安全急速支付，请您放心使用</p>
		<p class="lh16">&nbsp;</p>
		<form name="pay" id="pay" action="https://mapi.alipay.com/gateway.do?_input_charset=utf-8" method="post" target="_blank">
			<input type="hidden" name="_input_charset" value="utf-8"/>
			<input type="hidden" name="notify_url" value="http://m.qu.cn/notify/alipay.php"/>
			<input type="hidden" name="out_trade_no" value="3937838-2618833"/>
			<input type="hidden" name="partner" value="2088421731205933"/>
			<input type="hidden" name="payment_type" value="1"/>
			<input type="hidden" name="return_url" value="http://m.qu.cn/respond.php?code=alipay"/>
			<input type="hidden" name="seller_email" value="quwang@hongju.cc"/>
			<input type="hidden" name="service" value="create_direct_pay_by_user"/>
			<input type="hidden" name="subject" value="2016121412142293283"/>
			<input type="hidden" name="total_fee" value="3173.00"/>
			<input type="hidden" name="sign" value="43789bf4dc14649247d7b836feaeefc4"/>
			<input type="hidden" name="sign_type" value="MD5"/>
			<input type="submit" class="bigsee" value="立即使用支付宝支付">
		</form>
		<p class="lh16">&nbsp;</p>
	</div>
	<div class="bgw mt10 lh20">
		<h2 class="t"><em class="brl">订单信息</em></h2>
		<div class="lr10">
			<p>您的订单号：<span class="c3">2016121412142293283</span></p>
			<p>支付金额：<span class="red">¥3173.00</span>元</p>
			<p></p>
		</div>
		
		<h2 class="t"><em class="brl">购物清单</em></h2>
		<ul class="hli">
			<li>
				<a href="goods-8806.html">COC罗马大帝加长多频仿真阳具选择款型:加15元送抗菌喷剂[15]</a>
				<em class="c3">213.00</em>X1
			</li>
			<li>
				<a href="goods-5842.html">COC斯巴达之矛高端震动仿真阳具选择款型:加100送抗菌喷剂[100] </a>
				<em class="c3">1480.00</em>X2
			</li>
		</ul>
	</div>
	<p class="lh20">&nbsp;</p>
	<div class="alC pd10">
		<p class="c9">温馨提示：请勿关闭本页面，如遇支付问题，请点击右上角的在线客服，我们将竭诚为您服务，感谢您的惠顾！</p>
	</div>
</div>
<script>
var tmo;
var lm = 60;
var xm = 60;
var mb=$("#mobile_phone");
var cd=$('#code');
var dx=$("#dx");
var fa=0;
var qx=$("#cancelOrder");
var order="2016121412142293283";
var tag = 1;
function tm(){
    lm--;
    if(lm < 1) {
        dx.removeAttr("disabled").removeClass("dsbtn").val("重新发送验证码");
        clearTimeout(tmo);
        lm = xm;
        return;
    }
    dx.val(lm + "秒后可重发");
    tmo = setTimeout("tm()",1000);

}
dx.bind("click", function(){
	var il=$(this).prop("disabled");
	var mbv=mb.val();
	if(!Validator.isMobile(mbv)){
	 alert("请输入正确的手机号码");
	 return false;
	}
    if(!il){
        $(this).prop("disabled",true).addClass("dsbtn");
        $.getJSON('flow.php?step=sendNum&t=' + new Date().valueOf(), {
        	phone:mb.val(),order_sn:order,token:'ec51672bd3cafade7a0671011c462eca'
        },
        function(data) {
            if(data.code==2){
				alert("已超发送限制，若无法获取验证码，请拨打400-660-0606确认订单");
				dx.val("3次机会已用完").prop("disabled",true).addClass("dsbtn");
				}else{
			tm();		
			}
        });
    } else {
      alert("请等待倒计时结束后重新发送");
    }

});

function qxdd(obj){
	var a=$(obj);
	$.getJSON('flow.php?step=orderCancel&t=' + new Date().valueOf(),{
		order_sn:order
    },function(data){
    	if (data.code==0) {
           alert(data.msg);
           a.html('<b class="red">订单已取消</b>');
       	   a.removeAttr("onclick");
        }else{
           alert('取消失败，请联系客服');
        }
    });
}
 
function yz() {
    var c=$('#code').val();
	if(fa==1){
		return false;
		}
    if(c.length < 4){
		alert("请输入4位完整验证码");
        return false;
    }
	fa=1;
    $.getJSON('flow.php?step=orderConfirm&t=' + new Date().valueOf(),{
		captcha:c,order_sn:order
    },
    function(data) {
        if(data.code==0) {
            //alert(data.msg);
            $("#yzt").remove();
            $("#yzs").show();
        } else {
            alert("验证码错误！");
        }
		fa=0;
    });
}
function send(url){
	if(tag && url){
		tag = 0;
		window.location.href = url;
	} else {
		return false;
	}
}
var default_time = '12月16日(周五)';
getSfexpress('QZ9361','QZ9361-4','浙江省','杭州市','1');
</script>
<?php $this->load->view('layout/footer');?>
