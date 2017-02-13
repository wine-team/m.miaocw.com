<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>设置</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div style="min-height:400px;">
		<ul class="bul mb10">
			<li><a href="<?php echo site_url('ucenter/address/grid');?>">收货地址</a></li>
			<li><a href="<?php echo site_url('ucenter/ucenter/profile');?>">个人资料</a></li>
			<li><a href="<?php echo site_url('ucenter/ucenter/password');?>">修改密码</a></li>
		</ul>
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>