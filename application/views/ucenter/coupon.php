<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" onClick="" class="b_l"></a>
		<h2>我的优惠卷</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div class="lh25 gbgw">
		<div class="lr10 y_hj">
			<table width="100%" border="0">
			  <?php foreach ($res as $r) :?>
			  <tr>
			    <td width="100">
			    	<p class="hbo">¥<?php echo $r->amount;?>元</p>
			    </td>
			    <td>
			    	<p><?php echo $r->coupon_name;?></p><p>有效期：<?php echo $r->start_time;?> 至 <?php echo $r->end_time;?></p>
			    	<p>
			        	<a href="<?php echo site_url('sex/home/goods');?>" class="bun">立即使用</a>
			    	</p>
			    </td>
			  </tr>
			  <?php endforeach;?>
			</table>
		</div>
	</div>
	<p class="lh20">&nbsp;</p>
	<div class="pd10 gbgw">
		<div class="lh25">
			<p>优惠劵是妙处网为回馈老客户推出的优惠，可抵等额现金使用。</p>
			<p>优惠劵有什么用？</p>
			<p>1. 订单满一定金额，可使用一定额度的优惠劵。如“满100元可使用8元优惠券”</p>
			<p>2. 活动中使用，按照活动的具体说明使用。</p>
			<p>如何获得优惠劵？</p>
			<p>1. 网站注册新用户可送8元优惠劵</p>
			<p>2.满赠优惠劵，确认收货交易完成后生效。如“订单满100元，可送8元优惠劵”</p>
		</div>
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
