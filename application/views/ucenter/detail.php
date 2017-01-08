<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
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
	<div class="o_t">
		<table width="100%" border="0"><?php $delivery = json_decode($res->delivery_address);?>
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
		<li>
			<a href="<?php echo $res->goods_id;?>">
				<div class="lr10">
				    <?php $img_arr = array_filter(explode('|', $r->goods_img));?>
					<img src="<?php echo $this->config->images_url.$img_arr[0]?>" width="60"  height="60" class="left"/> <?php echo $res->goods_name;?>
					<p><span class="red"><?php echo $res->pay_amount?></span> X <?php echo $res->number?></p>
				</div>
			</a>
		</li>
		<li>
			<p class="lr10">
				<b>订单号：</b>
				<em class="red"><?php echo $res->pay_id?></em>
			</p>
		</li>
		<li>
			<p class="lr10"><b>状  态：</b>(<?php echo $status_arr[$res->order_status]?>)
			</p>
		</li>
		<li>
			<p class="lr10">订单金额: <b class="red f16 mr5">¥<?php echo $res->actual_price?></b>(邮费:<b class="red">¥<?php echo $res->deliver_price;?></b>)</p>
		</li>
	</ul>
	<div class="lr10 mt10">
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
			<input type="submit" class="bigsee" value="立即使用支付宝支付">
		</form>
	</div>
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
