<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix">
		<a href="javascript:goback();" class="b_l"></a>
		<h2 class="qg_icon">今日抢购</h2>
		<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto load home-today" id="lazy">
	<ul class="tw_tab" id="hbar">
	    <?php foreach ($cate as $key=>$val):?>
	    <?php foreach ($val as $l=>$c):?>
		<li <?php if($l==0):?>class="on"<?php endif;?> cate-id="<?php echo $c->category_id;?>"><?php echo $c->title?><p class="l_sbn"><?php echo $c->note;?></p></li>
		<?php endforeach;?>
		<?php endforeach;?>
	</ul>
	<div class="mt10" id="goods_content">
	    <?php $i=0; foreach($goods as $d=>$g):?>
		<div class="lgoods ov <?php if($i==1):?>hid<?php endif;?>">
		    <?php foreach ($g as $b):?>
			<a href="<?php echo site_url('sex/home/goods/'.$b->goods_id)?>" class="loota">
				<div class="pm">
					<img src="<?php echo (strpos($b->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($b->goods_img, '|',true)) : strstr($b->goods_img, '|',true);?>" class="loimg">
					<h3 class="f14 c3"><?php echo $b->goods_name;?></h3>
					<p><del>原价:¥<?php echo $b->shop_price;?></del> | <em class="red"><?php echo bcmul(bcdiv($b->shop_price,$b->market_price,2),10,1);?>折</em></p>
					<p class="l_bq"></p>
					<p class="ov"><b class="xj">¥<?php echo $b->market_price;?></b><b class="masq"></b></p>
				</div>
			</a>
			<?php endforeach;?>		   
		</div>
		<?php $i++; endforeach;?>
	</div>
</div>
<script type="text/javascript">

var cot = $("#goods_content").children();

$("#hbar").delegate("li", "click", function () {
	
	$(this).addClass("on").siblings().removeClass("on");
	var index = $(this).index();
	var im = cot.eq(index);
	im.show().siblings().hide();
});

</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
