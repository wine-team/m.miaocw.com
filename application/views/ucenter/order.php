<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>我的订单</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<div class="gtn" id="gtn">
	<ul class="gt_a">
		<li><a href="fenlei.html" class="gta">所有商品分类</a></li>
		<li><a href="car.php" class="gta">购物车</a></li>
		<li><a href="history.php" class="gta">浏览历史</a></li>
		<li><a href="" class="gta">回首页</a></li>
		<li><a href="chat.php" class="gta">在线客服咨询</a></li>
	</ul>
</div>
<div class="pageauto">
	<ul class="uorder mt10">
	    <?php foreach ($res as $r) :?>
		<li>
			<a href="<?php echo site_url('ucenter/Order/detail/'.$r->order_id);?>"  class="arr">
				<?php $img_arr = array_filter(explode('|', $r->goods_img));?>
				<img src="<?php echo $this->config->show_image_url('mall',$img_arr[0])?>" class="omg"/>
				<p><em class="gray">订单号: </em><em class="red"><?php echo $r->pay_id;?></em></p>
				<p>价格:<em class="red">¥<?php echo $r->actual_price?></em></p>
				<p><em class="gray">下单时间:</em> 2016-05-06 07:20:06</p>
				<p><em class="gray">订单状态:</em><?php echo $status_arr[$r->order_status];?></p>
			</a>
			<p class="btline">
				<a href="<?php echo site_url('ucenter/Order/detail/'.$r->order_id);?>" class="bun">详情</a>
			</p>
		</li>
		<?php endforeach;?>
	</ul>
	<div class="bgw ye pd10 alC"><p><?php echo count($res);?>条记录</p></div>
</div>
<script>
function gtns(){
	$("#gtn").toggle();
}
$("#gtn").bind("click",function(){
	$(this).hide();
});
</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
