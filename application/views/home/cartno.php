<?php $this->load->view('layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<h2>购物车</h2>
		<a href="javascript:;" class="b_r">继续购物</a>
	</div>
</div>
<div class="pageauto">
	<div class="g_tss alC" style="line-height:2.5rem">
		在线支付满99元包邮，货到付款满198元包邮
	</div>
	<div class="lh35 ept alC">
		<p><img src="http://s.qw.cc/mobile/ui/carnull.png" class="nucar"></p>
		<p class="f14 c9">购物里好寂寞，快去选购吧</p>
		<p class="lh25">&nbsp;</p>
		<a href="index.php" class="gbtn" style="width:70%;">去选购</a>
	</div>
	<div class="pd10">
		<h2 class="alC hx_line"><b>热销推荐</b><p class="hx_fline"></p></h2>
		<div class="heng">
		<a href="goods-5503.html" class="henga"><img src="http://s.qw.cc/t/300x300/images/201611/goods_img/5503_P_1479440451889.jpg" width="130" height="130"><p>琦莎 口阴互换舌震免提HAPPY飞机杯</p><p><b class="red">¥199.00</b></p></a>
		<a href="goods-8806.html" class="henga"><img src="http://s.qw.cc/t/300x300/images/201611/goods_img/8806_P_1478659582837.jpg" width="130" height="130"><p>COC罗马大帝加长多频仿真阳具</p><p><b class="red">¥198.00</b></p></a>
		<a href="goods-6017.html" class="henga"><img src="http://s.qw.cc/t/300x300/images/201610/goods_img/6017_P_1476257746123.jpg" width="130" height="130"><p>香港简爱月亮之上自动抽插多频快感智能加温震动棒</p><p><b class="red">¥368.00</b></p></a>
		<a href="goods-7577.html" class="henga"><img src="http://s.qw.cc/t/300x300/images/201601/goods_img/7577_P_1453100833956.jpg" width="130" height="130"><p>UNIMAT 电动夹吸飞机杯式阴茎增大器</p><p><b class="red">¥459.00</b></p></a>
		<a href="goods-7207.html" class="henga"><img src="http://s.qw.cc/t/300x300/images/201608/goods_img/7207_P_1471487304674.jpg" width="130" height="130"><p>Angel&amp;coco 情欲提升强效凝露 原装进口 30ml</p><p><b class="red">¥499.00</b></p></a>
		</div>
	</div>
	<div class="pd10 ov">
		<a href="index.php" class="da"><img src="http://s.qw.cc/mobile/ui/g1.png" class="dam"><p>首页</p></a>
		<a href="loot.php" class="da"><img src="http://s.qw.cc/mobile/ui/g2.png" class="dam"><p>抢购</p></a>
		<a href="hot.html" class="da"><img src="http://s.qw.cc/mobile/ui/g3.png" class="dam"><p>热销</p></a>
		<a href="new.html" class="da"><img src="http://s.qw.cc/mobile/ui/g4.png" class="dam"><p>新品</p></a>
		<a href="fenlei.html" class="da"><img src="http://s.qw.cc/mobile/ui/g5.png" class="dam"><p>商品分类</p></a>
	</div>
	<p class="lh35"> </p>
	<p class="lh35"> </p>
</div>
<script type="text/javascript">
var $gnum = $("#gm").find(".gnum");
$gnum.change(function(){
    var obj = $(this);
    var val = obj.val();
    if(Validator.isNumber(val) && val > 0) {
        if(val > 50) {
            obj.val(50);
        }
    }else{
        obj.val(1);
    }
    $.getJSON('car.php?act=price&goods_id='+obj.attr('id')+'&number='+obj.val(),function(a){
        if(a.code){
            alert(a.msg);
            obj.val(5);
        }
        else{
            $('#count').text(a.data.goods_price_formated);
        }        
    });
});
function delGoods(id){
  if(confirm("您确实要把该商品移出购物车吗？")){
  	location.href='car.php?goods_id='+id+'&act=del';
  }
}
</script>
<?php $this->load->view('layout/footer');?>
