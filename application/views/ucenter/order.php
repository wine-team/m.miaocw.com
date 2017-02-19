<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>我的订单</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<ul class="uorder mt10">
	    <?php foreach ($res as $r) :?>
		<li>
			<a href="<?php echo site_url('ucenter/order/detail/'.$r->order_id);?>"  class="arr">
				<img src="<?php echo $this->config->show_image_url('mall',strstr($r->goods_img,'|',true));?>" class="omg"/>
				<p><em class="gray">订单号: </em><em class="red"><?php echo $r->pay_id;?></em></p>
				<p>价格:<em class="red">¥<?php echo $r->actual_price?></em></p>
				<p><em class="gray">下单时间:</em> <?php echo $r->created_at;?></p>
				<p><em class="gray">订单状态:</em><?php echo $status_arr[$r->order_status];?></p>
			</a>
			<p class="btline">
				<a href="<?php echo site_url('ucenter/order/detail/'.$r->order_id);?>" class="bun">详情</a>
			</p>
		</li>
		<?php endforeach;?>
	</ul>
	<div class="bgw ye pd10 alC"><p><?php echo count($res);?>条记录</p></div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
