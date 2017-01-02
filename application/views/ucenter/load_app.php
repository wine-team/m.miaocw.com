<?php $this->load->view('layout/header');?>

<div id="top"><div class="header"><a href="javascript:;" onClick="goback()" class="b_l"></a><h2>妙处网APP下载</h2><a href="index.php" class="b_r">首页</a></div></div>
<div class="pageauto">
<div class="lr10">
<p class="alC"><img src="http://s.qw.cc/mobile/m/t_apptop2.jpg" width="265" height="340"></p>
<a href="https://itunes.apple.com/cn/app/qu-wang-qing-qu-shang-cheng/id934737326?l=zh&mt=8" class="dp_btn"><img src="http://s.qw.cc/mobile/m/t_appi.png" width="27" height="27">iPhone版下载</a>
<a href="http://s.qw.cc/app/sem-ad-lxq.apk?v=1217" class="dp_rbtn"><img src="http://s.qw.cc/mobile/m/t_appa.png" width="27" height="27">Android版下载</a>
<a href="https://itunes.apple.com/cn/app/qu-wang-cheng-ren-yong-pin/id761913911?l=zh&mt=8" class="ipd_btn"><img src="http://s.qw.cc/mobile/m/t_ipad.png" width="27" height="27">iPad版下载</a>
</div>
</div>



<div class="bgw mt10 pd10">
<form action="search.php" class="search ov" onsubmit="return se(this)">
<input type="search" value="" class="sl left" name="keyword" id="word" placeholder="关键词..." />
<input class="sr left" type="submit" value="" />
</form></div>

<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
