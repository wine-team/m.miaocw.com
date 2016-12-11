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
