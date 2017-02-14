<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<h2 class="qg_icon">今日抢购</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto load home-today" id="lazy">
	<ul class="tw_tab" id="hbar">
		<li class="on">本周抢购<p class="l_sbn">抢购中</p></li>
		<li>惊喜专区<p class="l_sbn">每日不同</p></li>
	</ul>
	<div class="mt10" id="goods_content">
		<div class="lgoods ov">
			<a href="javascript:;" class="loota">
				<div class="pm">
					<img src="http://s.qw.cc/t/300x300/images/201511/goods_img/5772_P_1446630318786.jpg" class="loimg">
					<h3 class="f14 c3">香港简爱大海之恋恒温震动棒</h3>
					<p><del>原价:¥388.70</del> | <em class="red">6.9折</em></p>
					<p class="l_bq"><em class="tg_key">香港简爱</em><em class="tg_key">香港</em></p>
					<p class="ov"><b class="xj">¥269.00</b><b class="masq"></b></p>
				</div>
			</a>
		    <a href="javascript:;" class="loota">
				<div class="pm">
					<img src="http://s.qw.cc/t/300x300/images/201511/goods_img/5772_P_1446630318786.jpg" class="loimg">
					<h3 class="f14 c3">香港简爱大海之恋恒温震动棒</h3>
					<p><del>原价:¥388.70</del> | <em class="red">6.9折</em></p>
					<p class="l_bq"><em class="tg_key">香港简爱</em><em class="tg_key">香港</em></p>
					<p class="ov"><b class="xj">¥269.00</b><b class="masq"></b></p>
				</div>
			</a>
			<a href="javascript:;" class="loota">
				<div class="pm">
					<img src="http://s.qw.cc/t/300x300/images/201511/goods_img/5772_P_1446630318786.jpg" class="loimg">
					<h3 class="f14 c3">香港简爱大海之恋恒温震动棒</h3>
					<p><del>原价:¥388.70</del> | <em class="red">6.9折</em></p>
					<p class="l_bq"><em class="tg_key">香港简爱</em><em class="tg_key">香港</em></p>
					<p class="ov"><b class="xj">¥269.00</b><b class="masq"></b></p>
				</div>
			</a>
		</div>
		<div class="lgoods ov hid">
			<div class="gd bigm">
				<a href="javascript:;" class="ga">
					<div class="pm">
						<img src="http://s.qw.cc/t/300x300/images/201608/goods_img/9321_P_1471485016113.jpg" class="gm">
						<h3 class="gt">NO17 植物抑菌延时喷剂 持久不麻木 15ml</h3>
						<p class="lp">
							<em class="xj">¥399.00</em>
							<em class="s_s">月销: 9674</em>
						</p>
					</div>
				</a>
				<a href="javascript:;" class="ga">
					<div class="pm">
						<img src="http://s.qw.cc/t/300x300/images/201608/goods_img/9321_P_1471485016113.jpg" class="gm">
						<h3 class="gt">NO17 植物抑菌延时喷剂 持久不麻木 15ml</h3>
						<p class="lp">
							<em class="xj">¥399.00</em>
							<em class="s_s">月销: 9674</em>
						</p>
					</div>
				</a>
				<a href="javascript:;" class="ga">
					<div class="pm">
						<img src="http://s.qw.cc/t/300x300/images/201608/goods_img/9321_P_1471485016113.jpg" class="gm">
						<h3 class="gt">NO17 植物抑菌延时喷剂 持久不麻木 15ml</h3>
						<p class="lp">
							<em class="xj">¥399.00</em>
							<em class="s_s">月销: 9674</em>
						</p>
					</div>
				</a>
				<a href="javascript:;" class="ga">
					<div class="pm">
						<img src="http://s.qw.cc/t/300x300/images/201608/goods_img/9321_P_1471485016113.jpg" class="gm">
						<h3 class="gt">NO17 植物抑菌延时喷剂 持久不麻木 15ml</h3>
						<p class="lp">
							<em class="xj">¥399.00</em>
							<em class="s_s">月销: 9674</em>
						</p>
					</div>
				</a>
				<a href="javascript:;" class="ga">
					<div class="pm">
						<img src="http://s.qw.cc/t/300x300/images/201608/goods_img/9321_P_1471485016113.jpg" class="gm">
						<h3 class="gt">NO17 植物抑菌延时喷剂 持久不麻木 15ml</h3>
						<p class="lp">
							<em class="xj">¥399.00</em>
							<em class="s_s">月销: 9674</em>
						</p>
					</div>
				</a>
				<a href="javascript:;" class="ga">
					<div class="pm">
						<img src="http://s.qw.cc/t/300x300/images/201608/goods_img/9321_P_1471485016113.jpg" class="gm">
						<h3 class="gt">NO17 植物抑菌延时喷剂 持久不麻木 15ml</h3>
						<p class="lp">
							<em class="xj">¥399.00</em>
							<em class="s_s">月销: 9674</em>
						</p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">

var cot = $("#goods_content").children();

$("#hbar").delegate("li", "click", function () {
	
	$(this).addClass("on").siblings().removeClass("on");
	var index = $(this).index();
	var im = cot.eq(index);
	im.show().siblings().hide();
	var mg = im.find("img[src3]");
	var ml = mg.length;
	if (ml > 0) {
	    mg.each(function (index, element) {
	        var lv = $(this).attr("src3");
	        $(this).attr("src", lv).removeAttr("src3");
	    });
	}
});

</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
