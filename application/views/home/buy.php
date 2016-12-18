<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>订单结算</h2>
		<a href="<?php echo site_url('home/index');?>" class="b_r">继续购物</a>
	</div>
</div>
<div class="pageauto">
	<input type="hidden" id="ci" value="2" />
    <p id="sck" class="sck ov sckt" onclick="scks()">点击<span id="sall">隐藏</span>显示购物车商品(1)<em></em></p>
    <div class="" id="hcar">
		<dl class="car">
			<dt>
				<a href="goods-5503.html">
					<img src="http://s.qw.cc/images/201602/thumb_img/5503_thumb_P220_1456297109122.jpg" width="80" height="80"/>
				</a>
			</dt>
			<dd>
				<h3>
					<a href="goods-5503.html">琦莎HAPPY两用口阴互换舌震免提飞机杯
						<em class="red">-选择款型:加10元送润滑液[10]</em>
					</a>
				</h3>
				<p class="left">
					<span class="c3">¥209.00</span>
					<em class="f10">X</em>
					<input type="number" id="5503" class="gnum" min="1" max="1" value="1"/>
				</p>
				<a href="javascript:delGoods(22805738);" class="right gray">删除</a>
			</dd>
		</dl>
	</div>
    <form action="<?php echo site_url('home/buyok');?>" method="POST" id="car" class="se_p" onSubmit="return carb()">
		<div class="bgw pd10">
			<table width="100%" border="0" class="ftable">
				  <tr>
				    <td width="20%"><b>收&nbsp; 货&nbsp; 人</b></td>
				    <td> <input type="text" name="consignee" id="consignee"  maxlength="10" placeholder="收货人姓名" class="pt" value="" required/></td>
				  </tr>
				  <tr>
				    <td><b>手机号码</b></td>
				    <td><input type="number" name="mobile" id="mobile" value=""  placeholder="手机号码" maxlength="15" class="pt"  required="true"/></td>
				  </tr>
				  <tr>
				 	 <td><b>配送区域</b></td>
				  <td>
					 <input type="hidden" name="country" value="1"/>
					 <select name="province" id="selProvinces" onChange="region.changed(this, 2, 'selCities')" datatype="select" class="left select">
						 <option value="2" >北京市</option>
						 <option value="6" >广东省</option>
						 <option value="16" >江苏省</option>
						 <option value="31" selected>浙江省</option>
						 <option value="22" >山东省</option>
						 <option value="11" >河南省</option>
						 <option value="10" >河北省</option>
						 <option value="26" >四川省</option>
						 <option value="13" >湖北省</option>
						 <option value="4" >福建省</option>
						<option value="24" >陕西省</option>
						<option value="3" >安徽省</option>
						<option value="18" >辽宁省</option>
						<option value="14" >湖南省</option>
						<option value="30" >云南省</option>
						<option value="23" >山西省</option>
						<option value="32" >重庆市</option>
						<option value="25" >上海市</option>
						<option value="8" >贵州省</option>
						<option value="7" >广西壮族自治区</option>
						<option value="17" >江西省</option>
						<option value="29" >新疆维吾尔自治区</option>
						<option value="12" >黑龙江省</option>
						<option value="19" >内蒙古自治区</option>
						<option value="5" >甘肃省</option>
						<option value="27" >天津市</option>
						<option value="15" >吉林省</option>
						<option value="9" >海南省</option>
						<option value="20" >宁夏回族自治区</option>
						<option value="21" >青海省</option>
						<option value="28" >西藏自治区</option>
					</select>
					<select name="city" id="selCities" onChange="region.changed(this, 3, 'selDistricts')" class="left select">
						<option value="" selected="selected">地区</option>
						<option value="383" >杭州市</option>
						<option value="392" >舟山市</option>
						<option value="391" selected>温州市</option>
						<option value="390" >台州市</option>
						<option value="389" >绍兴市</option>
						<option value="388" >宁波市</option>
						<option value="387" >丽水市</option>
						<option value="386" >金华市</option>
						<option value="385" >嘉兴市</option>
						<option value="384" >湖州市</option>
						<option value="393" >衢州市</option>
					</select>
					<select name="district" id="selDistricts" class="left select">
						<option value="">区县</option>
						<option value="3305" >鹿城区</option>
						<option value="3315" >泰顺县</option>
						<option value="3314" >文成县</option>
						<option value="3313" >苍南县</option>
						<option value="3312" >平阳县</option>
						<option value="3311" >永嘉县</option>
						<option value="3310" >洞头县</option>
						<option value="3309" >乐清市</option>
						<option value="3308" >瑞安市</option>
						<option value="3307" >瓯海区</option>
						<option value="3306" >龙湾区</option>
						<option value="3665" >茶山高教园区</option>
					</select>
			      </td>
				</tr>
				<tr>
				    <td><b>街道地址</b></td>
				    <td><input type="text" name="address" id="address" value="" placeholder="镇、街道、小区名、门牌号" maxlength="50" class="pt"  required="true" /></td>
				</tr>
			 </tbody>
			</table>
		</div>
		
		<ul id="fukuan">
			<li class="pmz" onclick="fee(4)">
				<p><img src="m/images/i_zfb.png"><b>支付宝</b><i>满99包邮,免客服确认</i></p>
			</li>
		</ul>
		<input name="payment" id="payment" class="hid" checked type="radio" value="3"/>
		<div id="favourable">
	    </div>
		<div class="bgw pd10 mt10">
			<table width="100%" border="0" class="ftable lh25">
			  <tr>
			    <td width="20%"><em class="gray">商品总价</em></td>
			    <td class="alR"><em id="goods_price">¥209.00</em> 元</td>
			  </tr>
			  <tr>
			    <td><em class="gray">运费</em></td>
			    <td class="alR">+<em id="shipping_fee">¥0.00</em>元</td>
			  </tr>
			  <tr id="cps_tr" class="hid">
			    <td><em class="gray">优惠码</em></td>
			    <td class="alR">-<em id="cps_ma">0</em>元</td>
			  </tr>
			    
			  <tr id="computer" class="hid">
			    <td><em class="gray">满减</em></td>
			    <td class="alR">-<em id="discount">¥0.00</em>元</td>
			  </tr>
			
			  <tr>
			    <td><em class="gray">最终支付</em></td>
			    <td class="alR"><b id="amount" class="red f18">¥209.00</b>元</td>
			  </tr>
			</table>
		</div>
		<input type="hidden" name="shipping" id="shipping" value="13"/>
		<div class="mt10 ">
			<input type="submit" value="提交订单" id="tijiao" class="bbt vbt">
		</div>
	</form>
</div>
<p class="lh55">&nbsp;</p>
<p class="lh25 alC">
	<a href="javascript:;">首页</a> | 
	<a class="red" href="javascript:;">APP下载</a> | 
	<a href="javascript:;">在线客服</a> | 
	<a href="javascript:;">帮助</a> | 
	<a href="javascript:;">反馈</a>
</p>
<p>&nbsp;</p>
<?php $this->load->view('layout/footer');?>
