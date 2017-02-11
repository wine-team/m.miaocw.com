<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header">
		<a href="<?php echo site_url('sex/home/index');?>" class="b_l">
			<em class="pl8">回首页</em>
		</a>
		<h2>订购提示</h2>
		<a href="tel:15988173721" class="b_r">客服</a>
	</div>
</div>
<div class="pageauto">
	<div class="bgw alC" id="yzt">
		<p><img src="m/images/dyes.png" class="dyes"></p>
		<p class="f16 c3"><b>订单提交成功，请您尽快支付！</b></p>
		<p class="c9 f10 lh20">安全急速支付，请您放心使用</p>
		<p class="lh16">&nbsp;</p>
		<form name="pay" id="pay" action="<?php echo site_url('sex/cart/pay');?>" method="post">
			<input type="hidden" name="pay" value="<?php echo base64_encode($orderInfo->pay_id);?>"/>
			<input type="submit" class="bigsee" value="立即使用支付宝支付">
		</form>
		<p class="lh16">&nbsp;</p>
	</div>
	<div class="bgw mt10 lh20">
		<h2 class="t"><em class="brl">订单信息</em></h2>
		<div class="lr10">
			<p>您的订单号：<span class="c3"><?php echo $orderInfo->pay_id;?></span></p>
			<p>支付金额：<span class="red">¥<?php echo $orderInfo->actual_pay;?>(含运费¥<?php echo $orderInfo->transport_cost;?>)</span>元</p>
			<p></p>
		</div>
		
		<h2 class="t"><em class="brl">购物清单</em></h2>
		<ul class="hli">
			<?php foreach($goods as $val):?>
			<li>
				<a href="<?php echo site_url('sex/home/goods/'.$val->goods_id);?>"><?php echo $val->goods_name;?></a>
				<em class="c3"><?php echo $val->shop_price;?></em>X<?php echo $val->refund_num;?>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	<p class="lh20">&nbsp;</p>
	<div class="alC pd10">
		<p class="c9">温馨提示：请勿关闭本页面，如遇支付问题，请点击右上角的在线客服，我们将竭诚为您服务，感谢您的惠顾！</p>
	</div>
</div>
<?php $this->load->view('sex/layout/footer');?>
