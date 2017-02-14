<?php $this->load->view('layout/header');?>
<div class="load page category">
	<div id="top">
		<div class="header">
			<a href="javascript:goback();" class="b_l"></a>
			<form action="<?php echo site_url('home/search');?>" class="t_se" onSubmit="return se(this)">
				<input type="search" value="" class="t_sl" id="t_sl" name="keyword" placeholder="按摩棒" />
				<input class="t_sr" type="submit" value="" />
			</form>
			<a href="javascript:gtns();" id="gdor" class="b_r">导航</a>
		</div>
	</div>
	<?php $this->load->view('layout/gtn');?>
	<div class="c_l left" id="c_l">
		<ul class="c_lul" id="c_lul">
		    <?php foreach ($category as $key=>$item):?>
			<li <?php if($key==0):?>class="on"<?php endif;?> data-id="<?php echo $key;?>">
				<?php echo $item->cat_name;?>
			</li>
			<?php endforeach;?>
		</ul>
	</div>
	<div id="c_r" class="c_r right">
		<div class="cbox" id="cbox">
		    <?php foreach ($category as $key=>$item):?>
			<div class="cal <?php if($key>0):?>hid<?php endif;?>">
			   	<div class="fen_a" >
			   		<a href="<?php echo site_url('sex/home/search?cateid='.$item->cat_id);?>">
			   			<img src="<?php echo $this->config->show_image_url('mall',$item->cat_img);?>" class="fen_img lazy" />
			   		</a>
			   	</div>
			   	<?php foreach ($item->child as $i=>$val):?>
				<a href="<?php echo site_url('sex/home/search?cateid='.$val->cat_id);?>" class="cla">
					<img src="<?php echo $this->config->show_image_url('mall',$val->cat_img);?>" width="70" height="70" class="c_img">
					<p><?php echo $val->cat_name;?></p>
				</a>
				<?php endforeach;?>
			</div>
			<?php endforeach;?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<?php js('m', 'index',20161205);?>
<?php $this->load->view('layout/footer');?>