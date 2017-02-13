<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>意见反馈</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div class="g_tss">
		<p class="lh16" style="padding:10px;">
			如您对我们的产品和服务有任何建议或者意见，请在此给我们留言
		</p>
	</div>
	<div class="lr10 bgw mt10">
		<form method="post"  >
			<table width="100%" border="0" cellspacing="0" cellpadding="0" class="ftable">
				  <tr>
				    <td width="20%" valign="top">您的意见</td>
				    <td valign="top">
				    	<textarea maxlength="100" name="content" placeholder="您的意见对我们很重要" style="height:100px;" class="pt" ></textarea>
				    </td>
				  </tr>
				  <tr>
				    <td>电话号码</td>
				    <td>
				    	<input type="text" name="tel" id="mobile" value=""  placeholder="手机号码" maxlength="15" class="pt" />
				    </td>
				  </tr>
				  <tr class="message">
				    <td>验证码</td>
				    <td>
				    	<input name="captcha" id="captcha" type="text" maxlength="4" size="5" class="pt" style="width:60px;"/>  
				        <a href="javascript:;" class="ajaxJsonCaptcha" ><?php echo $captcha['image']; ?></a>
				    </td>
				  </tr>
				  <tr>
				  	<td colspan="2">
				  		<p class="lh18">&nbsp;</p>
					  	<input type="submit" value="提交" class="bbt" />
				    </td>
				  </tr>
			</table>
		</form>
	</div>
</div>
<script type="text/javascript">
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

		
    $('form').submit(function(event){

        
    	var msg = $('textarea[name="content"]').val();
		var tel = $('input[name="tel"]').val();
		var captcha = $('input[name="captcha"]').val();
		if (msg.length<6 || msg.length>100) {
			layer.msg("亲，留言内容6-100之间哟");
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
</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
