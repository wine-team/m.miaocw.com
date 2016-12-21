<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>妙处网APP下载</h2>
		<a href="<?php echo site_url('qingqu/home/index')?>" class="b_r">首页</a>
	</div>
</div>
<div class="pageauto app">
	<div class="lr10">
		<p class="alC">
			<img src="m/images/t_apptop2.jpg" width="265" height="340">
		</p>
		<a href="javascript:;" class="dp_btn">
			<img src="m/images/t_appi.png" width="27" height="27">iPhone版下载
		</a>
		<a href="javascript:;" class="dp_rbtn">
			<img src="m/images/t_appa.png" width="27" height="27">Android版下载
		</a>
		<a href="javascript:;" class="ipd_btn">
			<img src="m/images/t_ipad.png" width="27" height="27">iPad版下载
		</a>
	</div>
</div>
<div class="bgw lr10 mt10">
	<form action="search.php" class="search ov" onsubmit="return se(this)">
		<input type="search" value="" class="sl left" name="keyword" id="word" placeholder="关键词..." />
		<input class="sr left" type="submit" value="" />
	</form>
</div>
<?php $this->load->view('sex/layout/smallfooter');?>
<?php $this->load->view('sex/layout/footer');?>
