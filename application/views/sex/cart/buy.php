<?php $this->load->view('layout/header');?>
<?php js('m', 'car',20161205);?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>订单结算</h2>
		<a href="<?php echo site_url('sex/home/index');?>" class="b_r">继续购物</a>
	</div>
</div>
<div class="pageauto">
	<form method="post" class="order-form">
    	<p id="sck" class="sck ov sckt" onclick="scks();">点击<span id="sall">隐藏</span>显示购物车商品(<?php echo count($goods);?>)<em></em></p>
	    <div id="hcar">
	        <?php foreach ($goods->cart as $key=>$item):?>
	        <?php foreach ($item->goods as $val):?>
			<dl class="car">
				<dt>
					<a href="<?php echo site_url('sex/home/goods/'.$val->goods_id);?>">
						<img src="<?php echo (strpos($val->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($val->goods_img,'|',true),'60') : strstr($val->goods_img,'|',true);?>" width="80" height="80"/>
					</a>
				</dt>
				<dd>
					<h3>
						<a href="<?php echo site_url('sex/home/goods/'.$val->goods_id);?>"><?php echo $val->goods_name;?>
							<?php if(!empty($val->attribute_value)):?>
							<em class="red">-选择款型:<?php echo $val->attribute_value;?></em>
							<?php endif;?>
						</a>
					</h3>
					<?php if( !empty($val->promote_price) && !empty($val->promote_start_date) && !empty($val->promote_end_date) && ($val->promote_start_date<=time()) && ($val->promote_end_date>=time())):?>
						 <?php $total_price = $val->promote_price;?>
					<?php else:?>
						 <?php $total_price = $val->shop_price;?>
					<?php endif;?>
					<p class="left">
						<span class="c3">¥<?php echo $total_price;?></span>
						<em class="f10">X</em>
						<input type="number" id="<?php echo $val->goods_id;?>" name="goods[<?php echo $val->goods_id;?>]" class="gnum" min="1" max="1" value="<?php echo $val->goods_num;?>"/>
					</p>
					<a href="javascript:delGoods(<?php echo $val->goods_id;?>);" class="right gray">删除</a>
				</dd>
			</dl>
			<?php endforeach;?>
			<?php endforeach;?>
		</div>
		<div class="bgw pd10">
		    <input type="hidden" name="addressId" value="<?php echo empty($address->address_id) ? '' : $address->address_id;?>" />
			<table width="100%" border="0" class="ftable">
				  <tr>
				    <td width="20%"><b>收&nbsp; 货&nbsp; 人</b></td>
				    <td><input type="text" name="receiver_name" id="consignee"  maxlength="10" placeholder="收货人姓名" class="pt" value="<?php echo empty($address->receiver_name) ? '' : $address->receiver_name;?>" required="true"/></td>
				  </tr>
				  <tr>
				    <td><b>手机号码</b></td>
				    <td><input type="number" name="tel" id="mobile" value="<?php echo empty($address->tel) ? '' : $address->tel;?>"  placeholder="手机号码" maxlength="15" class="pt"  required="true"/></td>
				  </tr>
				  <tr>
				 	 <td><b>配送区域</b></td>
					 <td>
						<?php $this->load->view('layout/districtSelect');?>
				     </td>
				  </tr>
				  <tr>
					 <td><b>街道地址</b></td>
					 <td><input type="text" name="detailed" id="address" value="<?php echo empty($address->detailed) ? '' : $address->detailed;?>" placeholder="镇、街道、小区名、门牌号" maxlength="50" class="pt"  required="true" /></td>
				  </tr>
			 </tbody>
			</table>
		</div>
		<ul id="fukuan">
			<li class="pmz" onclick="fee(4)">
				<p><img src="m/images/i_zfb.png"><b>支付宝</b><i>满99元包邮</i></p>
			</li>
		</ul>
		<input name="pay_bank" id="pay_bank" class="hid" checked type="radio" value="1"/>
		<?php if(!empty($coupn)):?>
		<div id="favourable">
			<div class="bgw mt10 lr10">
			    <select name="bonus" onchange="changeBonus(this.value)" id="bonus_sn" class="select">
					<option value="0">请选择优惠券</option>
					<option value="0">取消使用</option>
					<?php foreach ($coupn as $item):?>
			        <option value="<?php echo $item->coupon_get_id?>"><?php echo $item->coupon_name;?>(¥<?php echo $item->amount;?>,满¥<?php echo $item->condition;?>可用)</option>
			        <?php endforeach;?>
			    </select>
			</div>
	    </div>
	    <?php endif;?>
		<div class="bgw pd10 mt10">
			<table width="100%" border="0" class="ftable lh25">
			  <tr>
			    <td width="20%"><em class="gray">商品总价</em></td>
			    <td class="alR"><em id="goods_price">¥<?php echo bcadd($goods->total,0,2);?></em> 元</td>
			  </tr>
			  <tr>
			    <td><em class="gray">运费</em></td>
			    <td class="alR">+<em id="shipping_fee">¥<?php echo $goods->transport_cost;?></em>元</td>
			  </tr>
			  <tr>
			    <td><em class="gray">最终支付</em></td>
			    <td class="alR"><b id="amount" class="red f18">¥<?php echo $goods->actual_price;?></b>元</td>
			  </tr>
			</table>
		</div>
		<div class="mt10">
			<input type="submit" value="提交订单" id="tijiao" class="bbt vbt" />
		</div>
	</form>
</div>
<?php $this->load->view('layout/footer');?>