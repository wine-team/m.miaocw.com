<?php $this->load->view('layout/header');?>
<div id="top" class="home-top tophome">
	<div class="headers homehd" id="hometop">
		<div class="homez">
			<a href="<?php echo site_url('sex/home/category')?>" class="h_t h_fl"></a>
			<form action="<?php echo site_url('sex/home/search');?>" class="t_se home-search">
				<input type="search" class="t_sl" id="t_sl" name="keyword" placeholder="搜索商品" />
				<input class="t_sr" type="submit" value=""/>
			</form>
			<a href="<?php echo site_url('sex/home/wl');?>" class="h_t h_wl">物流</a>
		</div>
		<div class="sebg hid" id="sebg">
			<div class="lr10 ov">
				<em class="left">热门搜索</em>
				<a href="javascript:;" class="right">关闭</a>
			</div>
			<a href="<?php echo site_url('sex/home/search').'?keyword=仿真阳具';?>" class="hw">
				<em class="red">仿真阳具</em>
			</a>
			<a href="<?php echo site_url('sex/home/search').'?keyword=延时';?>" class="hw">男用延时</a>
			<a href="<?php echo site_url('sex/home/search').'?keyword=飞机杯';?>" class="hw">飞机杯</a>
			<a href="<?php echo site_url('sex/home/search').'?keyword=双点刺激';?>" class="hw">双点刺激</a>
			<a href="<?php echo site_url('sex/home/search').'?keyword=跳蛋';?>" class="hw">跳蛋</a>
			<a href="<?php echo site_url('sex/home/search').'?keyword=倒模';?>" class="hw">真人倒模</a>
			<a href="<?php echo site_url('sex/home/search').'?keyword=增大';?>" class="hw">增大器</a>
		</div>
	</div>
</div>
<div class="page load home-category">
	<div class="hslider" id="slider">
	   	<?php if(!empty($advert)):?>
		<ul class="sul">
		    <?php foreach ($advert as $item):?>
			<li>
				<a href="<?php echo $item->url;?>">
					<img src="<?php echo $this->config->show_image_url('advert',$item->picture);?>" width="100%"/>
				</a>
			</li>
			<?php endforeach;?>
		</ul>
		<div class="btn alC" id="btn"></div>
		<?php endif;?>
	</div>
	<div class="hmnv">
		<a href="<?php echo site_url('sex/home/man');?>" class="da">
			<img src="m/images/b1.png" class="dam"/>
			<p>男用</p>
		</a>
		<a href="<?php echo site_url('sex/home/woman');?>" class="da">
			<img src="m/images/b2.png" class="dam"/>
			<p>女用</p>
		</a>
		<a href="<?php echo site_url('sex/home/baojian');?>" class="da">
			<img src="m/images/b3.png" class="dam"/>
			<p>延时</p>
		</a>
		<a href="<?php echo site_url('sex/home/neiyi');?>" class="da">
			<img src="m/images/b4.png" class="dam"/>
			<p>情趣内衣</p>
		</a>
		<a href="<?php echo site_url('sex/home/goodlist');?>" class="da">
			<img src="m/images/b5.png" class="dam"/>
			<p>仿真阳具</p>
		</a>
		<a href="<?php echo site_url('sex/home/goodlist');?>" class="da xx">
			<img src="m/images/b6.png" class="dam"/>
			<p>飞机杯</p>
		</a>
		<a href="<?php echo site_url('sex/home/xingai');?>" class="da xx">
			<img src="m/images/b7.png" class="dam"/>
			<p>SM情趣</p>
		</a>
		<a href="javascript:;" class="da">
			<img src="m/images/b8.png" class="dam"/>
			<p>土豪玩具</p>
		</a>
		<a href="<?php echo site_url('sex/home/cart')?>" class="da">
			<img src="m/images/b9.png" class="dam"/>
			<p>购物车</p>
		</a>
		<a href="<?php echo site_url('sex/home/category');?>" class="da">
			<img src="m/images/b10.png" class="dam"/>
			<p>全部分类</p>
		</a>
		<div class="clear"></div>
	</div>
	<div class="hrd">
		<img src="m/images/hbbz.png" width="100%"/>
	</div>
	<div class="bgw mt10">
		<a href=<?php echo site_url('sex/home/today');?> class="left lotm">
			<div class="hoot">
				<p class="alL">玩爆潮品喵星人天使之杖av按摩棒</p>
				<img src="m/images/amb.jpg" class="limg" />
			    <p>
			    	<b class="xj">¥149.00</b>
			    	<del class="pl10">¥249.00</del>
			    </p>
			 </div>
			 <img src="m/images/thr1.png" width="100%" />
	    </a>
		<div class="dhr left">
			<a href="<?php echo site_url('sex/home/hot');?>" class="lotm2 left">
				<img src="m/images/thr2.png" width="100%" />
			</a>
			<a href="<?php echo site_url('sex/home/newgood');?>" class="lotm3 left">
				<img src="m/images/thr31.png" width="100%" />
			</a>
			<a href="<?php echo site_url('sex/consult/need');?>" class="lotm3 left">
				<img src="m/images/thr5.png" width="100%" />
			</a>
		</div>
	</div>
	<div id="lazy">
	    <?php if(!empty($category)):?>
	    <?php foreach ($category as $jtem):?>
	    <?php $image = json_decode($jtem->image)[0];?>
		<div class="bgw mt10">
			<h2 class="t">
				<a href="<?php echo $image->url;?>" class="brl"><?php echo $jtem->sales_name;?></a>
				<a href="<?php echo $image->url;?>" class="more right"></a>
			</h2>
			<div class="hpre ov">
				<a href="<?php echo $image->url;?>" class="w100 left">
					<img src="<?php echo $this->config->show_image_url('mall',$image->image);?>" width="100%"/>
				</a>
			</div>
		</div>
		<div class="m_z ov">
		    <?php foreach ($jtem->category as $key=>$i):?>
			<a href="<?php echo $i->link_url;?>" <?php if($key%2==0):?>class="red fB"<?php endif;?>><?php echo $i->title;?></a>
			<?php endforeach;?>
			<a href="<?php echo $image->url;?>">更多></a>
		</div>
		<?php endforeach;?>
		<?php endif;?>

		<div class="hmg" style="background-color:#0c0d0f;">
			<a href="javascript:;">
				<img src="m/images/sales.jpg" />
			</a>
		</div>
		<?php if(!empty($hot)):?>
		<div class="bgw">
			<h2 class="t">
				<a href="<?php echo site_url('sex/home/hot');?>" class="brl">精品推荐</a>
				<a href="<?php echo site_url('sex/home/hot');?>" class="more right"></a>
			</h2>
			<div class="gd bigm">
			    <?php foreach ($hot as $item):?>
				<a href="<?php echo site_url('sex/home/goods/'.$item->goods_id)?>" class="ga lazy">
					<div class="pm">
						<img src="m/images/load.jpg" data-original="<?php echo (strpos($item->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($item->goods_img, '|',true)) : strstr($item->goods_img, '|',true);?>" class="gm lazy" />
						<h3 class="gt"><?php echo $item->goods_name;?></h3>
						<p class="lp">
							<em class="xj">¥<?php echo $item->shop_price;?></em>
							<em class="s_s">销量:<?php echo $item->sale_count;?></em>
						</p>
					</div>
				</a>
				<?php endforeach;?>
			</div>
		</div>
		<?php endif;?>
		<?php $this->load->view('layout/category');?>
	</div>
</div>
<?php js('m', 'index',20161205);?>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>