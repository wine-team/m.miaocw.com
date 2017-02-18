<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header hfix" id="listpage">
		<a href="javascript:goback();" class="b_l"></a>
		<form action="<?php echo site_url('sex/home/search');?>" class="t_se home-search">
			<input type="search" value="<?php echo $this->input->get('keyword');?>" class="t_sl" id="t_sl" name="keyword" placeholder="自慰飞机杯" />
			<input class="t_sr" type="submit" value="" />
		</form>
		<?php if(empty($ct)):?>
		<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
		<?php else:?>
		<a href="javascript:sha();" id="sha" class="b_r">筛选</a>
		<?php endif;?>
	</div>
</div>
<?php $this->load->view('layout/gtn');?>

<?php if(!empty($ct)):?>
<div id="c_v" class="hid">
	<div class="bgw">
		<p class="lr10">当前位置：
			<a href="<?php echo site_url('sex/home/index');?>">首页</a>
			<code class="lr3">></code>
			<a href="javascript:;">
				<?php echo $ct->self->cat_name;?>
			</a>
		</p>
		<p class="line"></p>
		<div class="c_vs">
			<a href="javascript:;" class="ca ka">
				<b>分类:</b>
			</a>
			<?php $arr = $this->input->get(); if(isset($arr['cateid'])) unset($arr['cateid']);?>
			<?php foreach ($ct->child as $val):?>
			<a href="<?php echo site_url('sex/home/search').'?'.http_build_query($arr).'&cateid='.$val->cat_id;?>" class="ca <?php if($val->cat_id==$this->input->get('cateid')):?>caon<?php endif;?>">
				<?php echo $val->cat_name;?>
			</a>
			<?php endforeach;?>
		</div>
	</div>
</div>
<?php endif;?>
<div class="pageauto load home-list" id="lazy">
	<?php $arrO = $this->input->get();$order=isset($arrO['order'])?$arrO['order']:''; if(isset($arrO['order'])) unset($arrO['order']);?>
	<div class="sxba ov">
		<a href="<?php echo site_url('sex/home/search').'?'.http_build_query($arrO).'&order='.(($order==1) ? 2 :1);?>" class="sxa <?php if(in_array($order,array(1,2))):?>sxon<?php endif;?>" >
			<em class="jg <?php if($order==1):?>pup<?php endif;?>">综合</em><i class="rxl"></i>
		</a>
		<a href="<?php echo site_url('sex/home/search').'?'.http_build_query($arrO).'&order='.(($order==3) ? 4 :3);?>" class="sxa <?php if(in_array($order,array(3,4))):?>sxon<?php endif;?>">
			<em class="jg <?php if($order==3):?>pup<?php endif;?>">按销量</em>
			<i class="rxl"></i>
		</a>
		<a href="<?php echo site_url('sex/home/search').'?'.http_build_query($arrO).'&order='.(($order==5) ? 6 :5);?>" class="sxa <?php if(in_array($order,array(5,6))):?>sxon<?php endif;?>">
			<em class="jg <?php if($order==6):?>pup<?php endif;?>">按价格</em>
			<i class="rxl"></i>
		</a>
		
		<a href="javascript:mod();" class="sxa vbig" id="mode"></a>
	</div>
	<div class="gd load" id="glist">
		<?php $this->load->view('sex/goods/ajaxList')?>
	</div>
	<div id="lod" class="bgw alC hid pd10">
		<b>下一页正在加载中,请骚后...</b>
	</div>
	<div class="bfx pg-infor" url-param="<?php echo $_SERVER['QUERY_STRING'];?>">
		<em class="yem" id="yem" >
			<span class="pg-now"><?php echo $infor->pg;?></span>/<span class="pg-total" ><?php echo $infor->pgSum;?></span>
		</em>
		<a href="javascript:gotop();" class="ftop"></a>
	</div>
	<?php if(!empty($ct)):?>
	<div class="pd10 bgw mt10">
		当前位置：<a href="<?php echo site_url('sex/home/index');?>">首页</a>
		<code class="lr3">></code>
		<a href="javascript:;"><?php echo $ct->self->cat_name;?></a>
	</div>
	<div class="ltag ov">
	    <?php foreach ($ct->child as $val):?>
		<a href="javascript:;" class="tag <?php if($val->cat_id==$this->input->get('cateid')):?>lmon<?php endif;?>">
			<?php echo $val->cat_name;?>
		</a>
		<?php endforeach;?>
	</div>
	<?php endif;?>
</div>
<?php js('m', 'list',20161205);?>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
