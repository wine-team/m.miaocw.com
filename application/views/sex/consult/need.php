<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" onClick="" class="b_l"></a>
		<h2>性爱需求</h2>
		<a href="<?php echo site_url('sex/home/category');?>"  class="b_r">分类</a>
	</div>
</div>
<div class="pageauto load home-need" id="lazy">

	<div class="sbar ov" id="sbar">
		<a href="javascript;"  class="on">男性</a>
		<a href="javascript;" >女性</a>
		<a href="javascript;" >夫妻</a>
		<a href="javascript;" >同性</a>
	</div>

	<div id="needlist">
		<div class="need">
			<a href="javascript;">小弟弟增大助勃</a>
			<a href="javascript;">女士催情用品</a>
			<a href="javascript;">老婆下面很干，怎么破？</a>
			<a href="javascript;">不到三分钟就早泄了</a>
			<a href="javascript;">我想玩SM</a>
			<a href="javascript;">前列腺高潮</a>
			<a href="javascript;">打飞机</a>
			<a href="javascript;">带“刺”的套子</a>
			<a href="javascript;">AV岛国女优阴部幻想</a>
			<a href="javascript;">只对大屁股情有独钟</a>
		</div>
		<div class="need hid">
			<a href="javascript;">怎么寻找G点高潮</a>
			<a href="javascript;">老公爱搭不理</a>
			<a href="javascript;">老公不在家</a>
			<a href="javascript;">AV同款</a>
			<a href="javascript;">无前戏不完美</a>
			<a href="javascript;">便于携带</a>
			<a href="javascript;">我想要男奴</a>
			<a href="javascript;">阴道太松弛</a>
			<a href="javascript;">性欲望太强，总得不到满足</a>
			<a href="javascript;">潮吹神器</a>
			<a href="javascript;">坐着享受</a>
		</div>
		<div class="need hid">
			<a href="javascript;">不一样的高潮</a>
			<a href="javascript;">一起燃烧吧</a>
			<a href="javascript;">床下游戏</a>
			<a href="javascript;">一起玩游戏</a>
			<a href="javascript;">看不见的神秘</a>
			<a href="javascript;">满足控制欲</a>
			<a href="javascript;">老婆嫌弃我不行</a>
			<a href="javascript;">前戏必备</a>
			<a href="javascript;">车震套装</a>
			<a href="javascript;">让他记忆深刻</a>
		</div>
		<div class="need hid">
			<a href="javascript;">我要和她一起玩</a>
			<a href="javascript;">男同怎么玩</a>
			<a href="javascript;">女同怎么玩</a>
		</div>
	</div>

	<a href="javascript:xuq();" id="xqbutn" class="ajc mt10"><em class="f16">我要提交需求</em></a>

	<div class="bgw ov hid" id="xqbox">
		<div class="lr10 lh35">
			<p class="alC f14">输入您的需求，我们将持续为您更新</p>
			<form >
				<table width="100%" border="0">
				  <tr>
				    	<td><textarea maxlength="800" name="content" placeholder="填写您的需求" class="area" ></textarea></td>
				  </tr>
				  <tr>
				    	<td><input type="text" name="tel" id="mobile" value="" placeholder="手机" maxlength="15" class="pt" /></td>
				  </tr>
				  <tr>
					    <td class="message">
					    	<input name="captcha" id="captcha" type="text" maxlength="4" size="5" class="pt" style="width:60px;"/>  
					        <a href="javascript:;" class="ajaxJsonCaptcha" ><?php echo $captcha['image']; ?></a>
					    </td>
				  </tr>
				  <tr>
					  	<td>
					  		<p class="lh18">&nbsp;</p>
					  		<input type="submit" value="提交" class="bbt" />
					  		<p class="lh18">&nbsp;</p>
					  	</td>
				  </tr>
				</table>
			</form>
		</div>
	</div>
</div>
<script>
var bx = $("#needlist").children();

$('form').submit(function(event){

    
	var msg = $('textarea[name="content"]').val();
	var tel = $('input[name="tel"]').val();
	var captcha = $('input[name="captcha"]').val();
	if (msg.length<6 || msg.length>100) {
		layer.msg("亲，需求内容6-100之间哟");
		return false;
	}
	if (!Validator.isMobile(tel)) {
		layer.msg("请填写正确的手机号码");
		return false;
	}
	if (captcha.length !=4) {
		layer.msg("请填写验证码");
		return false;
	}
	$.ajax({
        type:'post',
        data:$('form').serialize(),
        dataType:'json',
        async: false,
        url:hostUrl()+'/sex/consult/feedback',
        beforeSend:function() {
           $('input[type="submit"]').val('提交中').attr('disabled',true);
        },
        success:function(data) {
			if(data.status) {
				layer.msg('提交成功');
				msg.val('');
				tel.val('');
				captcha.val('');
				$('input[type="submit"]').val('提交成功');
			} else {
				layer.msg(data.messages);
				$('input[type="submit"]').val('提交').attr('disabled',false);
			}
        }
	})
	event.preventDefault();
})

function xuq() {
    $("#xqbutn").hide();
    $("#xqbox").show();
}

$("#sbar").delegate("a", "click", function (event) {
    var hs = $(this).hasClass("on");
    if (!hs) {
        var i = $(this).index();
        $(this).addClass("on").siblings().removeClass("on");
        bx.eq(i).show().siblings().hide();
    }
    event.preventDefault();
    event.stopPropagation();
});

$('.message').on('click', '.ajaxJsonCaptcha', function(event){
    $.ajax({
        type: 'get',
        async: false,
        dataType : 'json',
        url: location.origin+'/sex/consult/ajaxJsonCaptcha',
        success: function(json) {
            $('.ajaxJsonCaptcha').html(json.image);
        }
    });
    event.preventDefault();
});
</script>
<?php $this->load->view('layout/footer');?>
