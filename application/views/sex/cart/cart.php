<?php $this->load->view('layout/header');?>
<?php js('m', 'car',20161205);?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();"  class="b_l"></a>
		<h2>购物车</h2>
		<a href="<?php echo site_url('sex/cart/buy');?>" class="b_r">去结算</a>
	</div>
</div>
<div class="pageauto">
	<div class="g_tss alC" style="line-height:2.5rem;">在线支付满99元包邮</div>
	<div class="ov" id="gm">
	    <?php $sum=0;?>
		<?php foreach ($cart as $val):?>
		<dl class="car">
			<dt>
				<a href="<?php echo site_url('sex/home/goods/'.$val->goods_id);?>">
					<img src="<?php echo (strpos($val->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($val->goods_img,'|',true),'60') : strstr($val->goods_img,'|',true);?>" title="<?php echo $val->goods_name;?>" width="80" height="80" />
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
				<?php $sum +=$total_price; ?>
				<p class="left">
					<span class="c3">¥<?php echo $total_price;?></span>
					<em class="f10">X</em>
					<input type="number" id="<?php echo $val->goods_id;?>" class="gnum" min="1" max="1" value="<?php echo $val->goods_num;?>"/>
				</p>
				<a href="javascript:delGoods(<?php echo $val->goods_id;?>);"  class="right gray">删除</a>
			</dd>
		</dl>
		<?php endforeach;?>
	</div>
	<div class="bgw pd10 mt10">
		<p class="mb10">共计：
			<b class="red f16" id="count">¥<?php echo $sum;?></b>
			<?php if(bcsub($sum,99)>0):?><em class="gray">(包邮)</em><?php endif;?>
		</p>
		<p class="bline"></p>
		<a href="<?php echo site_url('sex/home/index');?>" class="lbtn left">继续购物</a>
		<a href="<?php echo site_url('sex/cart/buy');?>" class="rbtn right">
			<p class="nxl">去结算</p>
		</a>
		<div class="clear"></div>
	</div>
</div>
<?php $this->load->view('layout/footer');?>
