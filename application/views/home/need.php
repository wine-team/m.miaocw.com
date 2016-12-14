<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>性爱需求</h2>
		<a href="fenlei.html"  class="b_r">分类</a>
	</div>
</div>
<div class="pageauto load home-need" id="lazy">

	<div class="sbar ov" id="sbar">
		<a href="need.php?catid=2"  class="on">男性</a>
		<a href="need.php?catid=7" >女性</a>
		<a href="need.php?catid=12" >夫妻</a>
		<a href="need.php?catid=17" >同性</a>
	</div>

	<div id="needlist">
		<div class="need">
			<a href="need_detail.php?id=2">小弟弟增大助勃</a>
			<a href="need_detail.php?id=147">女士催情用品</a>
			<a href="need_detail.php?id=87">老婆下面很干，怎么破？</a>
			<a href="need_detail.php?id=82">不到三分钟就早泄了</a>
			<a href="need_detail.php?id=42">我想玩SM</a>
			<a href="need_detail.php?id=72">前列腺高潮</a>
			<a href="need_detail.php?id=22">打飞机</a>
			<a href="need_detail.php?id=97">带“刺”的套子</a>
			<a href="need_detail.php?id=107">AV岛国女优阴部幻想</a>
			<a href="need_detail.php?id=137">只对大屁股情有独钟</a>
		</div>
		<div class="need hid">
			<a href="need_detail.php?id=187">怎么寻找G点高潮</a>
			<a href="need_detail.php?id=7">老公爱搭不理</a>
			<a href="need_detail.php?id=182">老公不在家</a>
			<a href="need_detail.php?id=177">AV同款</a>
			<a href="need_detail.php?id=172">无前戏不完美</a>
			<a href="need_detail.php?id=167">便于携带</a>
			<a href="need_detail.php?id=157">我想要男奴</a>
			<a href="need_detail.php?id=122">阴道太松弛</a>
			<a href="need_detail.php?id=117">性欲望太强，总得不到满足</a>
			<a href="need_detail.php?id=52">潮吹神器</a>
			<a href="need_detail.php?id=192">坐着享受</a>
		</div>
		<div class="need hid">
			<a href="need_detail.php?id=32">不一样的高潮</a>
			<a href="need_detail.php?id=217">一起燃烧吧</a>
			<a href="need_detail.php?id=212">床下游戏</a>
			<a href="need_detail.php?id=207">一起玩游戏</a>
			<a href="need_detail.php?id=202">看不见的神秘</a>
			<a href="need_detail.php?id=197">满足控制欲</a>
			<a href="need_detail.php?id=67">老婆嫌弃我不行</a>
			<a href="need_detail.php?id=62">前戏必备</a>
			<a href="need_detail.php?id=57">车震套装</a>
			<a href="need_detail.php?id=222">让他记忆深刻</a>
		</div>
		<div class="need hid">
			<a href="need_detail.php?id=92">我要和她一起玩</a>
			<a href="need_detail.php?id=227">男同怎么玩</a>
			<a href="need_detail.php?id=232">女同怎么玩</a>
		</div>
	</div>

	<a href="javascript:;" id="xqbutn" onClick="xuq()" class="ajc mt10"><em class="f16">我要提交需求</em></a>

	<div class="bgw ov hid" id="xqbox">
		<div class="lr10 lh35">
			<p class="alC f14">输入您的需求，我们将持续为您更新</p>
			<form action="need.php" method="post" onSubmit="return faq(this)">
				<table width="100%" border="0">
				  <tr>
				    <td><textarea maxlength="800" name="msg" placeholder="填写您的需求" class="area" ></textarea></td>
				  </tr>
				    <td><input type="text" name="mobile" id="mobile" value="" placeholder="手机" maxlength="15" class="pt" /></td>
				  </tr>
				  <tr>
				    <td><input name="captcha" id="captcha" type="text" class="mt10 mr5 pt" style="width:60px;" maxlength="4" size="5" placeholder="验证码" onclick="this.value=''"/><img src="captcha.php?get_password=1" onClick="this.src='captcha.php?get_password=1&'+Math.random()" />看不清点我</td>
				    </tr>
				  <tr><td><p class="lh18">&nbsp;</p><input type="hidden" name="act" value="msg"/><input type="submit" value="提交" class="bbt" /><p class="lh18">&nbsp;</p></td></tr>
				</table>
			</form>
		</div>
	</div>
</div>
<script>
var bx=$("#needlist").children();
function faq(obj){
var msg=obj.msg.value;
var mob=obj.mobile.value;
if(msg.length<5||msg.length>100){
alert("亲，留言内容5-100之间哟~");
return false;
}
if(!Validator.isMobile(mob)){
alert("请填写正确的手机号码");
return false;
}
}
function xuq(){
$("#xqbutn").hide();
$("#xqbox").show();	
}

$("#sbar").delegate("a","click",function(event){
var hs=$(this).hasClass("on");
if(!hs){
var i=$(this).index();
$(this).addClass("on").siblings().removeClass("on");
bx.eq(i).show().siblings().hide();
}
event.preventDefault();
event.stopPropagation();
	});
lazyload({defObj:"#lazy"});
</script>
<?php $this->load->view('layout/footer');?>
