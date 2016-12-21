<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<form action="search.php" class="t_se" onSubmit="return se(this)">
			<input type="search" value="" class="t_sl" id="t_sl" name="keyword" placeholder="订单" />
			<input class="t_sr" type="submit" value="" />
		</form>
		<a href="javascript:cans();"  id="qxs">取消</a>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
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
	<div class="mt5 lr10">
		<p class="red lh55 alC f16">对不起，没找到您要搜索的商品</p>
		<ul class="gul">
			<li><a href="javascript:;"><b>1</b>延时喷剂</a></li>
			<li><a href="javascript:;"><b>2</b>飞机杯</a></li>
			<li><a href="javascript:;"><b>3</b>真人阴部</a></li>
			<li><a href="javascript:;"><b>4</b>性感美臀</a></li>
			<li><a href="javascript:;"><b>5</b>男根增大</a></li>
			<li><a href="javascript:;"><b>6</b>G点棒</a></li>
			<li><a href="javascript:;"><b>7</b>双点刺激</a></li>
			<li><a href="javascript:;"><b>8</b>逼真男根</a></li>
			<li><a href="javascript:;"><b>9</b>跳蛋</a></li>
			<li><a href="javascript:;"><b>10</b>情趣内衣</a></li>
			<li><a href="javascript:;"><b>11</b>润滑液</a></li>
			<li><a href="javascript:;"><b>12</b>安全套</a></li>
		</ul>
	</div>
</div>
<?php js('m', 'list',20161205);?>
<?php $this->load->view('sex/layout/smallfooter');?>
<?php $this->load->view('sex/layout/footer');?>
