<?php $this->load->view('qingqu/layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>浏览历史</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<div class="gtn" id="gtn">
	<ul class="gt_a">
		<li><a href="javascript:;" class="gta">所有商品分类</a></li>
		<li><a href="javascript:;" class="gta">购物车</a></li>
		<li><a href="javascript:;" class="gta">浏览历史</a></li>
		<li><a href="javascript:;" class="gta">回首页</a></li>
		<li><a href="javascript:;" class="gta">在线客服咨询</a></li>
	</ul>
</div>
<div class="pageauto">
	<div class="gd load" id="lazy">
		<a href="<?php echo site_url('qingqu/home/goods');?>" class="ga">
			<div class="pm">
				<img src="http://s.qw.cc/images/201510/thumb_img/5842_thumb_P220_1445821592809.jpg" class="gm">
				<h3 class="gt">COC斯巴达之矛高端震动仿真阳具</h3>
				<p class="lp"><em class="xj">1380.00</em><del>2799.00</del></p>
			</div>
		</a>
		<a href="<?php echo site_url('qingqu/home/goods');?>" class="ga">
			<div class="pm">
				<img src="http://s.qw.cc/images/201611/thumb_img/8806_thumb_P220_1478659582447.jpg" class="gm">
				<h3 class="gt">COC罗马大帝加长多频仿真阳具</h3>
				<p class="lp"><em class="xj">198.00</em><del>257.40</del></p>
			</div>
		</a>
	</div>
</div>
<div class="hmnv mt10">
	<a href="<?php echo site_url('qingqu/home/man');?>" class="da">
		<img src="m/images/b1.png" class="dam"/>
		<p>男用</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/woman');?>" class="da">
		<img src="m/images/b2.png" class="dam"/>
		<p>女用</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/baojian');?>" class="da">
		<img src="m/images/b3.png" class="dam"/>
		<p>延时</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/neiyi');?>" class="da">
		<img src="m/images/b4.png" class="dam"/>
		<p>情趣内衣</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/goodlist');?>" class="da">
		<img src="m/images/b5.png" class="dam"/>
		<p>仿真阳具</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/goodlist');?>" class="da xx">
		<img src="m/images/b6.png" class="dam"/>
		<p>飞机杯</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/xingai');?>" class="da xx">
		<img src="m/images/b7.png" class="dam"/>
		<p>SM情趣</p>
	</a>
	<a href="javascript:;" class="da">
		<img src="m/images/b8.png" class="dam"/>
		<p>土豪玩具</p>
	</a>
	<a href="javascript:;" class="da">
		<img src="m/images/b9.png" class="dam"/>
		<p>APP下载</p>
	</a>
	<a href="<?php echo site_url('qingqu/home/category');?>" class="da">
		<img src="m/images/b10.png" class="dam"/>
		<p>全部分类</p>
	</a>
	<div class="clear"></div>
</div>
<script>
function gtns(){
	$("#gtn").toggle();
}
$("#gtn").bind("click",function(){
	$(this).hide();
});
</script>
<?php $this->load->view('qingqu/layout/smallfooter');?>
<?php $this->load->view('qingqu/layout/footer');?>
