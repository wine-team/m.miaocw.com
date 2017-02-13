<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>我的订单</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div class="o_t">
		<table width="100%" border="0"><?php $delivery = json_decode($orderResult->delivery_address);?>
		  <tr>
		    <td>收货人：<?php echo $delivery->receiver_name;?><b class="hid">，<?php echo $delivery->tel;?></b></td>
		    <td rowspan="2" width="70"></td>
		  </tr>
		  <tr>
		    <td><?php echo $delivery->detailed;?></td>
		    </tr>
		</table>
	</div>
	<ul class="w_l">
	</ul>
	<ul class="od">
	    <?php foreach($orderProductResult as $p) :?>
		<li>
			<a href="<?php echo $p->goods_id;?>">
				<div class="lr10">
				    <?php $img_arr = array_filter(explode('|', $p->goods_img));?>
					<img src="<?php echo $this->config->show_image_url('mall',$img_arr[0])?>" width="60"  height="60" class="left"/> <?php echo $p->goods_name;?>
					<p><span class="red"><?php echo $p->pay_amount?></span> X <?php echo $p->number?></p>
				</div>
			</a>
		</li>
		<?php endforeach;?>
		<li>
			<p class="lr10">
				<b>订单号：</b>
				<em class="red"><?php echo $orderResult->pay_id?></em>
			</p>
		</li>
		<li>
			<p class="lr10"><b>状  态：</b>(<?php echo $status_arr[$orderResult->order_status]?>)
			</p>
		</li>
		<li>
			<p class="lr10">订单金额: <b class="red f16 mr5">¥<?php echo $orderResult->actual_price?></b>(邮费:<b class="red">¥<?php echo $orderResult->deliver_price;?></b>)</p>
		</li>
	</ul>
	
	<div class="lr10 mt10">
	    <?php if($orderResult->order_status==2):?>
		<form name="pay" id="pay" action="http://wappaygw.alipay.com/service/rest.htm?_input_charset=utf-8" method="get" target="_blank">
			<input type="hidden" name="_input_charset" value="utf-8"/>
			<input type="hidden" name="format" value="xml"/>
			<input type="hidden" name="partner" value="2088211707337241"/>
			<input type="hidden" name="req_data" value="" />
			<input type="hidden" name="req_id" value="1462579025"/>
			<input type="hidden" name="sec_id" value="MD5"/>
			<input type="hidden" name="service" value="alipay.wap.auth.authAndExecute"/>
			<input type="hidden" name="v" value="2.0"/>
			<input type="hidden" name="sign" value="e86d9c45d5e0d936f2fb01819aaa6996"/>
			<a class="bigsee" style="background-color: #959C87;font-weight: normal;float: left;margin-right: 10%;width: 45%;border-bottom:none;" onclick="layer.confirm('是否确认取消订单？',function(){window.location.href='<?php echo site_url('ucenter/Order/cancel/'.$orderResult->order_id);?>';})">取消订单</a>
			<input type="submit" class="bigsee" style="float: left;width: 45%;" value="支付宝支付">
		</form>
		<?php endif;?>
		<?php if($orderResult->order_status>2 && $orderResult->order_status<6):?>
    	<a class="bigsee" style="background-color: #959C87;font-weight: normal;float: left;width: 45%;margin-right:10%;border-bottom:none;" onclick="layer.confirm('是否确认申请退款？',function(){window.location.href='<?php echo site_url('ucenter/Order/refund/'.$orderResult->order_id);?>';})">申请退款</a>
    	<?php if($orderResult->order_status==5):?>
    	<a class="bigsee" style="background-color: #959C87;font-weight: normal;float: left;width: 45%;border-bottom:none;">去评价</a>
    	<?php endif;?>
    	<?php endif;?>
		
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
