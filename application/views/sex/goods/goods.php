<?php $this->load->view('layout/header');?>
<div id="top goods-header">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<div class="tnav" id="sbar">
			<p class="ta on" data-id="0">商品</p>
			<p class="ta"  data-id="1">看图文</p>
			<p class="ta" data-id="2">评论</p>
		</div>
		<a  
			<?php if($this->uid):?>
			href="<?php echo site_url('sex/cart/index');?>" 
			<?php else:?>
			href="<?php echo $this->config->passport_url.'m/login/index.html'?>" 
			<?php endif;?>
			class="b_r dcar">
		</a>
		<a href="javascript:gtns();" id="gdor" class="b_r dor"></a>
	</div>
</div>
<div class="gtn goods-gtn" id="gtn">
	<ul class="gt_a">
		<li>
			<a href="tel:15988173721" class="gta">订购热线：15988173721</a>
		</li>
		<li>
			<a href="sms:15988173721" class="gta">点击短信订购</a>
		</li>
		<li>
			<a 
			    <?php if($this->uid):?>
				href="javascript:;" 
				<?php else:?>
				href="<?php echo $this->config->passport_url.'m/login/index.html'?>" 
				<?php endif;?>
			class="gta" id="fav">
				<em id="scx">收藏商品</em>
			</a>
		</li>
		<li><a href="<?php echo site_url('ucenter/ucenter/get_history')?>" class="gta">浏览历史</a></li>
		<li><a href="<?php echo site_url('sex/home/category');?>" class="gta">所有商品分类</a></li>
		<li><a href="<?php echo site_url('sex/home/index');?>" class="gta">返回首页</a></li>
	</ul>
</div>
<div class="pageauto home-goods" id="pagebox">
	<div class="content" id="goods">
		<div id="gslider" class="alC">
		    <?php $img = explode('|',rtrim($goods->goods_img,'|'));?>
			<ul class="gfs" id="gfs">
				<?php foreach ($img as $val):?>
				<li>
					<img src="<?php echo (strpos($val, 'http://') === FALSE) ?  $this->config->show_image_thumb_url('mall', $val, 400) : $val;?>" height="320" width="100%" class="jdt"/>
				</li>
				<?php endforeach;?>
			</ul>
			<div id="btn" class="btn"></div>
		</div>
		<div class="bgw bkw">
			<h1 class="gh1"><?php echo $goods->goods_name;?></h1>
			<b class="f14 c3 pl5">[货号:<i id="sku"><?php echo $goods->goods_sku;?></i>]</b>
			<em class="i_hot">热销</em>
			<b class="i_new">包邮</b>
			<div class="ov lh30">
				<em class="red">¥</em>
				<b id="gprice" class="mj"><?php echo $goods->shop_price;?></b> 
				<del>¥<?php echo $goods->market_price?></del>
				<em class="right c9">已销<?php echo $goods->sale_count;?></em>
			</div>
		</div>
		<ul class="iul">
			<li>
				<a href="javascript:;" class="ah_r">
					<p class="i_wl c9">在线支付满99元,包邮</p>
				</a>
			</li>
			<li>
				<a href="javascript:;" class="z_p">正品保证</a>
				<a href="javascript:;" class="z_p zp2">私密送达</a>
				<a href="javascript:;" class="z_p zp3">支持货到付款</a>
			</li>
		</ul>
		<form action="<?php echo site_url('sex/cart/index');?>" id="buy" method="POST">
			<div class="pd10 lh30 gbgw">
				<input type="hidden" name="goods_id" id="goods_id" value="<?php echo $goods->goods_id;?>" />
				<input type="hidden" name="act" value="add" />
				<?php $spec = json_decode($goods->attr_spec, true);?>
				<?php if (!empty($spec)):?>
				<div id="sx" class="sx">
					<?php foreach ($spec as $attr_value_id=>$val):?>
					<?php if (!empty($val['spec_value'])):?>
					<dl class="sxdl">
						<dt class="c3"><?php echo $val['spec_name'];?>:</dt>
						<?php $i=0;foreach ($val['spec_value'] as $key=>$item):?>
						<dd>
							<label <?php if($i==0):?>class="on"<?php endif;?> >
								<input type="radio" autocomplete="off" name="spec_<?php echo $attr_value_id;?>" value="<?php echo $item;?>"/>
								<?php echo $item;?>
								<!--<i class="c9 f10">￥199</i>-->
							</label>
						</dd>
						<?php $i++; endforeach;?>
					</dl>
					<?php endif;?>
					<?php endforeach;?>
				</div>
				<?php endif;?>
				<div class="ov">
					<p class="c3 left mr5">数量: </p>
					<p class="zja" onclick="jia(0)">-</p>
					<input type="number" value="1" class="num" id="num" limit-num="<?php echo $goods->limit_num;?>" in-stock="<?php echo $goods->in_stock;?>" autocomplete="off" min="1" max="50" name="goods_number" onkeyup="this.value=this.value.replace(/\D/g,'')" onblur="this.value=1" />
					<p class="zja" onclick="jia(1)"><em class="f20">+</em></p>
				</div>
			</div>
			<div id="cok" class="lh30 alC bgw hid cok">
			    <h3 class="f18 c3">加入购物车成功！</h3>
			    <p>购物车现有<b id="rnum" class="red">0</b>件商品,共计<b id="rsum" class="red"></b></p>
			    <a href="javascript:gclose();" class="lbtn left">继续购物</a>
			    <a href="<?php echo site_url('sex/cart/buy');?>" class="rbtn right">去结算</a>
			    <div class="clear"></div>
			</div>
			<div id="nok" class="lr10">
			    <?php if($this->uid):?>
				<a href="javascript:;" class="lbtn left add-cart" onclick="addCar(<?php echo $goods->goods_id;?>)">加入购物车</a>
				<a href="javascript:;" class="rbtn right" id="buyn" onclick="sbs(<?php echo $goods->goods_id;?>)">立即购买</a>
				<?php else:?>
				<a href="<?php echo $this->config->passport_url.'m/login/index.html';?>" class="lbtn left">加入购物车</a>
				<a href="<?php echo $this->config->passport_url.'m/login/index.html';?>" class="rbtn right" id="buyn">立即购买</a>
				<?php endif;?>
				<div class="clear"></div>
			</div>
		</form>
		<div class="gbgw mt10"></div>
		<?php if (!empty($more)):?>
		<div id="glazy">
			<div class="gbgw">
				<h2 class="t">
					<a href="javascript:;" class="brl">
						<em class="f14">极品热卖</em>
					</a>
				</h2>
				<div class="vl ov" id="gbg">
				    <?php foreach ($more as $val):?>
					<a href="<?php echo site_url('sex/home/goods/'.$val->goods_id);?>" class="gba">
						<div class="de">
							<img src="<?php echo (strpos($val->goods_img, 'http://') === FALSE) ?  $this->config->show_image_thumb_url('mall', strstr($val->goods_img,'|',true), 60) : strstr($val->goods_img,'|',true);?>" width="100%" class="mb5"/>
							<p><?php echo $val->goods_name;?></p>
							<?php if (!empty($val->promote_price) && ($val->promote_start_date<=time()) && ($val->promote_end_date>=time())) : ?>
								<?php $total_price = $val->promote_price;?>
							<?php else:?>
								<?php $total_price = $val->shop_price;?>
							<?php endif;?>
							<p>
								<b class="c3">¥<?php echo $total_price;?></b>
							</p>
						</div>
					</a>
					<?php endforeach;?>
				</div>
			</div>
		</div>
		<?php endif;?>
	</div>
	<div class="content hid" id="pic">
		<div id="bfload" class="">
			<?php $attrValue = json_decode($goods->attr_value, true);?>
			<?php if(!empty($attrValue)):?>
			<div id="cas" class="bgw pd10 lh25">
			  <?php foreach ($attrValue as $v):?>
			    <?php foreach ($v['group_value'] as $item):?>
				<p><em class="gray"><?php echo $item['attr_name']; ?>：</em><?php echo $item['attr_value']; ?></p>
			    <?php endforeach;?>
			  <?php endforeach;?>
			</div>
			<?php endif;?>
			<div class="bgw mt5 alC">
				<div class="des" id="pic_b">
				   <?php echo empty($goods->wap_goods_desc) ? $goods->goods_desc:$goods->wap_goods_desc;?>
				</div>
			</div>
			<div class="lh30 bgw pd10">
				<h3>妙处网所售商品实行保密配送</h3>
				<h3>在线支付满99包邮</h3>
				<h3>合作快递：顺丰、邮政EMS、申通、中通、韵达</h3>
				<h3>全国市区城市的配送时间为：1-3天，县镇乡地区2-5天</h3>
				<h3>质量问题无条件免费退换</h3>
				<h3>360°购物保障，放心购买，安心使用</h3>
			</div>
			<div class="mt10 ov">
				<a href="javascript:;" onClick="loadp(0)" class="wbt">返回购买</a>
			</div>
		</div>
	</div>
	<div class="content hid" id="comment">
		<?php $this->load->view('sex/goods/review');?>	
	</div>
</div>
<div id="shxs">
	<div class="fx_x">
		<h2 class="t">
			<em class="brl f14">请选择商品属性后在购买</em>
		</h2>
		<div id="shx" class="sx"></div>
		<p onClick="javascript:tclose()" class="lbtn left">关闭</p>
		<p onClick="javascript:okcar()" class="rbtn right">确定</p>
	</div>
</div>
<?php js('m', 'goods',20161205);?>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
