<?php $this->load->view('layout/header');?>
<div class="page home-hot" id="lazy">
	<div id="top">
		<div class="header">
			<a href="javascript:goback();"  class="b_l"></a>
			<h2>热门排行</h2>
			<a href="javascript:gtns();"  id="gdor" class="b_r">导航</a>
		</div>
	</div>
	<?php $this->load->view('layout/gtn');?>
	<div class="slider" id="slider">
		<ul class="lsul">
		    <?php $img = json_decode($sales->image);?>
			<?php foreach ($img as $val):?>
			<li>
				<a href="<?php echo $val->url;?>">
					<img src="<?php echo $this->config->show_image_url('mall',$val->image);?>" />
				</a>
			</li>
			<?php endforeach;?>
		</ul>
		<div class="btn alC" id="btn"></div>
	</div>
	<div class="choose-pannel">
		<div id="nav-scr" class="choose-nav-ht" >
		  <div id="fixed-nav" class="choose-nav">
		    <ul id="nav-wrap" class="choose-nav-wrap" style="-webkit-transform:translateX(0px);transform:translateX(0px);">
		      <?php $i=0; foreach ($cate as $key=>$val):?>
	    	  <?php foreach ($val as $l=>$c):?>
		      <li class="hnli <?php if($i==0):?>active<?php endif;?>"><?php echo $c->title?></li>
		      <?php endforeach;?>
			  <?php $i++; endforeach;?>
		      <li class="nv-bg" id="nvbg"></li>
		    </ul>
		  </div>
		</div>
	</div>
	<div class="each_categroy" id="boxx">
		<?php $i=0; foreach($goods as $d=>$g):?>
		<div class="load  <?php if($i>0):?>hid<?php endif;?>">
			<?php foreach ($g as $b):?>
			<a href="<?php echo site_url('sex/home/goods/'.$b->goods_id)?>" class="gah">
				<img class="hgm" src="<?php echo (strpos($b->goods_img, 'http://') === FALSE) ? $this->config->show_image_thumb_url('mall',strstr($b->goods_img, '|',true)) : strstr($b->goods_img, '|',true);?>">
				<div class="sn_ra">
					<h3 class="h_gt"><?php echo $b->goods_name;?></h3>
					<p class="snote"><?php echo $b->goods_brief;?></p>
					<div class="sftt">
						<p class="redu">9.7<em>热度</em></p>
						<p class="left"><em class="xj">¥<?php echo $b->shop_price;?></em><em class="h_gb">已售:<?php echo $b->sale_count;?></em></p>
						<p class="hmore">更多</p>
					</div>
				</div>
			</a>
			<?php endforeach;?>
		</div>
		<?php $i++; endforeach;?>
	</div>

</div>
<?php js('m', 'HSlide',20161205);?>
<script type="text/javascript">

var isf = 0;
var $bx = $("#boxx").children();
var hbar = $("#nav-scr");
var dian = [0,1,1,1,1,1];
var vtop = hbar.offset().top;
var hslider= SlideVganChou();

$("#slider").vganswiper({bi:0.39});

hslider.init({
        startIndex:0,
        autoScroll:false,
        swipendfn:null,
        callback:function(f){
			cgnav(f.index);
        }
});

function cgnav(id){
	
	var im=$bx.eq(id);
	im.show().siblings().hide();
	if(dian[id]==1){
		lazynav(id);
		window.scrollTo(0,vtop);
		dian[id]=0;
	}
}

function lazynav(id){
	var imgs=$bx.eq(id).find("img");
	imgs.each(function(){
		var a=$(this).attr("src3");
		$(this).attr("src",a).removeAttr("src3");	
	});
}
window.onscroll=function(){
	
	var sTop=document.documentElement.scrollTop+document.body.scrollTop;
	if(sTop>=vtop){
		if (isf==0) {
			hbar.addClass("fix");
			isf=1;
		}
	}else{
		if(isf==1){
			hbar.removeClass("fix");	
			isf=0;
		}
	}
}
</script>
<?php $this->load->view('layout/smallfooter');?>
<?php $this->load->view('layout/footer');?>
