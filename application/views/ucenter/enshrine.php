<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>我的收藏</h2>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>
<div class="pageauto">
	<div class="load bgw mt10">
		<ul class="col">
		    <?php foreach ($res as $r) :?>
			<li>
				<a href="<?php echo $r->goods_id;?>">
					<img src="<?php echo $this->config->show_image_url('mall',strstr($r->goods_img,'|',true));?>"  width="80" height="80"/>
					<h3><?php echo $r->goods_name;?></h3>
					<p><span class="xj">¥<?php echo $r->shop_price;?></span></p>
				</a>
				<p onClick="layer.confirm('是否确认删除？',function(){location.href='<?php echo site_url('ucenter/enshrine/delete/'.$r->enshrine_id);?>';})" class="c_del">删除</p>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	<div class="pages ov mt10">
		<!--  <a href="javascript:" class="left">上一页</a>-->
		<div id="bpage" class="alC left" style="line-height:38px;width: 100%;">
			<b>共<?php echo count($res);?>条</b>
		</div>
		<!--<a href="javascript:" class="right">下一页></a>-->
	</div>
</div>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
