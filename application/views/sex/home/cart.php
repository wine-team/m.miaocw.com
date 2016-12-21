<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>购物车</h2>
		<a href="<?php echo site_url('qingqu/home/buy');?>" class="b_r">去结算</a>
	</div>
</div>
<div class="pageauto">
	<div class="g_tss alC" style="line-height:2.5rem;">在线支付满99元包邮，货到付款满198元包邮</div>
	<div class="ov" id="gm">     
		<dl class="car">
			<dt>
				<a href="<?php echo site_url('qingqu/home/goods');?>">
					<img src="http://s.qw.cc/images/201602/thumb_img/5503_thumb_P220_1456297109122.jpg" width="80" height="80"/>
				</a>
			</dt>
			<dd>
				<h3>
					<a href="<?php echo site_url('qingqu/home/goods');?>">琦莎HAPPY两用口阴互换舌震免提飞机杯
						<em class="red">-选择款型:加10元送润滑液[10]</em>
				    </a>
				</h3>
				<p class="left">
					<span class="c3">¥205.02</span>
					<em class="f10">X</em>
					<input type="number" id="5503" class="gnum" min="1" max="1" value="1"/>
				</p>
				<a href="javascript:delGoods(22785316);"  class="right gray">删除</a>
			</dd>
		</dl>
		<dl class="car">
			<dt>
				<a href="<?php echo site_url('qingqu/home/goods');?>">
					<img src="http://s.qw.cc/images/201511/thumb_img/5484_thumb_P220_1446535105755.jpg" width="80" height="80"/>
				</a>
			</dt>
			<dd>
				<h3><a href="<?php echo site_url('qingqu/home/goods');?>">香港雷霆Leten活塞X-9第三代全自动飞机杯</a></h3>
				<p class="left">
					<span class="c3">¥293.02</span>
					<em class="f10">X</em>
					<input type="number" id="5484" class="gnum" min="1" max="1" value="1"/>
				</p>
				<a href="javascript:delGoods(22785326);"  class="right gray">删除</a>
			</dd>
		</dl>
	</div>
	<div class="bgw pd10 mt10">
		<p class="mb10">共计：
			<b class="red f16" id="count">¥498.04</b>
			<em class="gray">(包邮)</em>
		</p>
		<p class="bline"></p>
		<a href="<?php echo site_url('qingqu/home/index');?>" class="lbtn left">继续购物</a>
		<a href="<?php echo site_url('qingqu/home/buy');?>" class="rbtn right">
			<p class="nxl">去结算</p>
		</a>
		<div class="clear"></div>
	</div>
</div>
<?php $this->load->view('sex/layout/footer');?>
