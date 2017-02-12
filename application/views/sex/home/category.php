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
	<div class="gtn" id="gtn">
		<ul class="gt_a">
			<li><a href="javascript:;" class="gta">热销排行</a></li>
			<li><a href="javascript:;" class="gta">购物车</a></li>
			<li><a href="javascript:;" class="gta">浏览历史</a></li>
			<li><a href="javascript:;" class="gta">回首页</a></li>
			<li><a href="javascript:;" class="gta">在线客服咨询</a></li>
		</ul>
	</div>
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
			<div class="cal">
			   	<div class="fen_a" >
			   		<a href="javascript:;">
			   			<img src="<?php echo $this->config->show_image_url('mall',$item->cat_img);?>" class="fen_img">
			   		</a>
			   	</div>
			   	<?php foreach ($item->child as $i=>$val):?>
				<a href="javascript:;" class="cla">
					<img src="<?php echo $this->config->show_image_url('mall',$val->cat_img);?>" width="70" height="70" class="c_img">
					<p><?php echo $val->cat_name;?></p>
				</a>
				<?php endforeach;?>
				<a class="nbtn" href="javascript:;">查看全部</a>
			</div>
			<?php endforeach;?>
		</div>
	</div>
	<div class="clear"></div>
</div>
<script type="text/javascript">
	var chongzhi = false;
	var c_l = $("#c_l");
	var c_r = $("#c_r");
	var cbox = $("#cbox");
	var cr = cbox.children();
	var clp = $("#c_lul").children();
	
	function inits() {
	    var wh = $(window).height();
	    var th = $("#top").height();
	    c_l.css("height", wh - th);
	    c_r.css("height", wh - th);
	    $(".category").css("height", wh)
	}
	function gtns(){
		$("#gtn").toggle();
	}
	clp.click(function (e) {
	    var i = $(this).attr("data-id");
	    $(this).addClass("on").siblings().removeClass("on");
	    var m = cr.eq(i);
	    var mg = m.find("img[src]");
	    if (mg.length > 0) {
	        mg.each(function (index, element) {
	            var u = $(this).attr("src");
	            $(this).attr("src", u).removeAttr("src2");
	        });
	    }
	    chongzhi = true;
	    m.show().siblings().hide();
	    cbox[0].style.MozTransform = cbox[0].style.webkitTransform = "translate3d(0,0,0)";
	    cbox[0].style.msTransform = cbox[0].style.OTransform = "translateY(0)";
	    e.preventDefault();
	    e.stopPropagation();
	});
	$(window).resize(function () {
	    inits();
	});
	inits();
	c_l.vganvswiper();
	c_r.vganvswiper({
	    "cool": 1
	});
</script>
<?php $this->load->view('layout/footer');?>
