<?php $this->load->view('layout/header');?>
<div id="top goods-header">
	<div class="header hfix">
		<a href="javascript:;" onClick="goback()" class="b_l"></a>
		<div class="tnav" id="sbar">
			<p class="ta on" data-id="0">商品</p>
			<p class="ta"  data-id="1">看图文</p>
			<p class="ta" data-id="2">评论</p>
		</div>
		<a href="car.php" class="b_r dcar"></a>
		<a href="javascript:;" onClick="gtns()" id="gdor" class="b_r dor"></a>
	</div>
</div>
<div class="gtn" id="gtn">
	<ul class="gt_a">
		<li><a href="chat.php" class="gta">在线客服咨询</a></li>
		<li><a href="tel:4006600606" class="gta">订购热线：400-660-0606</a></li>
		<li><a href="sms:13883873375" class="gta">点击短信订购</a></li>
		<li><a href="javascript:;" onClick="alert('请先登录')" class="gta" id="fav"><em id="scx">收藏商品</em></a></li>
		<li><a href="history.php" class="gta">浏览历史</a></li>
		<li><a href="fenlei.html" class="gta">所有商品分类</a></li>
		<li><a href="index.php" class="gta">返回首页</a></li>
	</ul>
</div>

<div class="pageauto home-goods" id="pagebox">
	<div class="content" id="goods">
		<div id="gslider" class="alC">
			<ul class="gfs load">
				<li><img src="http://s.qw.cc/t/640x640/images/201602/source_img/5503_P_1456297109268.jpg" height="320" height="320" class="jdt"/></li>
				<li><img src="http://s.qw.cc/mobile/css/blank.png" lazy="http://s.qw.cc/t/640x640/images/201509/source_img/5503_P_1443492105665.jpg" height="320" height="320" class="jdt"/></li>
				<li><img src="http://s.qw.cc/mobile/css/blank.png" lazy="http://s.qw.cc/t/640x640/images/201411/source_img/5503_P_1417074438241.jpg" height="320" height="320" class="jdt"/></li>
				<li><img src="http://s.qw.cc/mobile/css/blank.png" lazy="http://s.qw.cc/t/640x640/images/201411/source_img/5503_P_1417074439266.jpg" height="320" height="320" class="jdt"/></li>
				<li><img src="http://s.qw.cc/mobile/css/blank.png" lazy="http://s.qw.cc/t/640x640/images/201411/source_img/5503_P_1417074439132.jpg" height="320" height="320" class="jdt"/></li>
				<li><img src="http://s.qw.cc/mobile/css/blank.png" lazy="http://s.qw.cc/t/640x640/images/201411/source_img/5503_P_1417074439711.jpg" height="320" height="320" class="jdt"/></li>
				<li><img src="http://s.qw.cc/mobile/css/blank.png" lazy="http://s.qw.cc/t/640x640/images/201508/source_img/5503_P_1441012281745.jpg" height="320" height="320" class="jdt"/></li>
			</ul>
			<div id="btn" class="btn"></div>
		</div>
		<div class="bgw bkw">
			<h1 class="gh1">琦莎HAPPY两用口阴互换舌震免提飞机杯</h1>
			<b class="f14 c3 pl5">[货号:<i id="sku">QZ0008</i>]</b>
			<em class="i_hot">热销</em>
			<em class="i_video">视频</em>
			<b class="i_new">包邮</b>
			<div class="ov lh30">
				<em class="red">¥</em><b id="gprice" class="mj">199</b> <del>¥259.00</del>
				<em class="right c9">月销14572</em>
			</div>
		</div>
		<ul class="iul">
			<li>
				<a href="kuaidi.php?v=1" class="ah_r">
					<p class="i_wl c9">在线支付满99元,顺丰包邮;选择货到付款满198包邮</p>
				</a>
			</li>
			<li>
				<a href="article.php?act=detail&a_id=567" class="z_p">正品保证</a>
				<a href="article.php?act=detail&a_id=568" class="z_p zp2">私密送达</a>
				<a href="article.php?act=detail&a_id=1027" class="z_p zp3">支持货到付款</a>
			</li>
			<li class="hid">
				<a class="c3" href="combo.php?id=5503">
					<span class="c8">促销：</span>
		        	<em class="zk mr5">礼包</em>
		                                    优惠套餐</a>
		    </li>
			<li class="hid">
				<a href="javascript:" onClick="pes()" class="ah_r c9">
					<span class="i_hot mr5">配送</span>
					<em id="pes_id">温州市</em>,<em class="pl5">预计<b id="yuji">5月11日(周三)</b>送达</em>
				</a>
		    </li>
		</ul>
		<div class="se_p hid" id="se_p">
			<select name="province" id="selP" onChange="cpg(this,2,1)" datatype="select" class="left select">
				<option value="" selected="selected">城市</option>
				<option value="2">北京市</option>
				<option value="6">广东省</option>
				<option value="16">江苏省</option>
				<option value="31">浙江省</option>
				<option value="22">山东省</option>
				<option value="11">河南省</option>
				<option value="10">河北省</option>
				<option value="26">四川省</option>
				<option value="13">湖北省</option>
				<option value="4">福建省</option>
				<option value="24">陕西省</option>
				<option value="3">安徽省</option>
				<option value="18">辽宁省</option>
				<option value="14">湖南省</option>
				<option value="30">云南省</option>
				<option value="23">山西省</option>
				<option value="32">重庆市</option>
				<option value="25">上海市</option>
				<option value="8">贵州省</option>
				<option value="7">广西壮族自治区</option>
				<option value="17">江西省</option>
				<option value="29">新疆维吾尔自治区</option>
				<option value="12">黑龙江省</option>
				<option value="19">内蒙古自治区</option>
				<option value="5">甘肃省</option>
				<option value="27">天津市</option>
				<option value="15">吉林省</option>
				<option value="9">海南省</option>
				<option value="20">宁夏回族自治区</option>
				<option value="21">青海省</option>
				<option value="28">西藏自治区</option>
			</select>
			<select name="city" id="selC" onChange="cpg(this,3,2)" class="left select">
				<option value="" selected="selected">地区</option>
				<option value="383" >杭州市</option>
				<option value="392" >舟山市</option>
				<option value="391" >温州市</option>
				<option value="390" >台州市</option>
				<option value="389" >绍兴市</option>
				<option value="388" >宁波市</option>
				<option value="387" >丽水市</option>
				<option value="386" >金华市</option>
				<option value="385" >嘉兴市</option>
				<option value="384" >湖州市</option>
				<option value="393" >衢州市</option>
			</select>
			<select name="district" id="selD" onChange="cpg(this,4,3)"  class="left select hid">
				<option value="">区县</option>
				<option value="3305" >鹿城区</option>
				<option value="3315" >泰顺县</option>
				<option value="3314" >文成县</option>
				<option value="3313" >苍南县</option>
				<option value="3312" >平阳县</option>
				<option value="3311" >永嘉县</option>
				<option value="3310" >洞头县</option>
				<option value="3309" >乐清市</option>
				<option value="3308" >瑞安市</option>
				<option value="3307" >瓯海区</option>
				<option value="3306" >龙湾区</option>
				<option value="3665" >茶山高教园区</option>
			</select>
		</div>
		<form action="car.php" id="buy" method="POST">
			<div class="pd10 lh30 gbgw">
				<input type="hidden" name="goods_id" id="goods_id" value="5503">
				<input type="hidden" name="act" value="add">
				<div id="sx" class="sx">
					<dl class="sxdl">
						<dt class="c3">款型:</dt>
						<dd>
							<label data-h="QZ0008-1" data-p="199"><input type="radio" autocomplete="off" name="spec_21" value="93146"/>飞机杯<i class="c9 f10">￥199</i></label>
							<label data-h="QZ0008-2" data-p="209"><input type="radio" autocomplete="off" name="spec_21" value="93171"/>加10元送润滑液<i class="c9 f10">￥209</i></label>
							<label data-h="QZ0008-3" data-p="229"><input type="radio" autocomplete="off" name="spec_21" value="97561"/>加30元送水晶套<i class="c9 f10">￥229</i></label>
							<label data-h="QZ0008-4" data-p="209"><input type="radio" autocomplete="off" name="spec_21" value="93176"/>加10元送加温棒<i class="c9 f10">￥209</i></label>
							<label data-h="QZ0008-5" data-p="249"><input type="radio" autocomplete="off" name="spec_21" value="97566"/>加50元送润滑液、加温棒、水晶套<i class="c9 f10">￥249</i></label>
						</dd>
					</dl>
				</div>
				<div class="ov">
					<p class="c3 left mr5">数量: </p>
					<p class="zja" onclick="jia(0)">-</p>
					<input type="number" value="1" class="num" id="num" autocomplete="off" min="1" max="50" name="goods_number" >
					<p class="zja" onclick="jia(1)"><em class="f20">+</em></p>
				</div>
			</div>
			<div id="cok" class="lh30 alC bgw hid">
			    <h3 class="f18 c3">加入购物车成功！</h3>
			    <p>购物车现有<b id="rnum" class="red">0</b>件商品,共计<b id="rsum" class="red"></b></p>
			    <a href="javascript:gclose()" class="lbtn left">继续购物</a><a href="buy1.php" class="rbtn right">去结算</a>
			    <div class="clear"></div>
			</div>
		
			<div id="nok" class="lr10">
				<a href="<?php echo site_url('home/cart')?>" class="lbtn left">加入购物车</a>
				<a href="<?php echo site_url('home/buy')?>" class="rbtn right" id="buyn">立即购买</a>
				<div class="clear"></div>
			</div>
		</form>
		<div class="gbgw mt10">
			<ul class="gul" id="gul">
				<li class="no"><a href="detail-5503.html" class="red" data-id="1"><b>点击查看图文介绍</b></a></li>
				<li><a href="comment-5503.html" class="c3" data-id="2">点击看评论(304)</a></li>
			</ul>
			<ul class="gul hid">
				<li><a href="ask-5503.html" class="c3">产品咨询(9)</a></li>
			</ul>
			<ul class="gul">
				<li><a href="kuaidi.php?v=2" class="c3">快递、支付方式说明</a></li>
			</ul>
		</div>
		<div id="glazy">
			<div class="gbgw">
				<h2 class="t">
					<a href="fenlei.html" class="brl">
						<em class="f14">看了又看</em>
					</a>
				</h2>
				<div class="vl ov" id="gbg">
					<a href="goods-5484.html" class="gba"><div class="de"><img src="http://s.qw.cc/images/201511/thumb_img/5484_thumb_P220_1446535105755.jpg" width="100%" class="mb5"/><p>香港雷霆Leten活塞X-9第三代全自动飞机杯</p><p><b class="c3">¥299.00</b></p></div></a>
					<a href="goods-5529.html" class="gba"><div class="de"><img src="http://s.qw.cc/images/201508/thumb_img/5529_thumb_P220_1441011641647.jpg" width="100%" class="mb5"/><p>香港简爱炫动旋转抽插电动飞机杯</p><p><b class="c3">¥788.00</b></p></div></a>
					<a href="goods-9038.html" class="gba"><div class="de"><img src="http://s.qw.cc/images/201601/thumb_img/9038_thumb_P220_1453109333349.jpg" width="100%" class="mb5"/><p>恰然国际SECWELL 二代可儿7种语音互动式智能触感飞机杯</p><p><b class="c3">¥299.00</b></p></div></a>
					<a href="goods-5315.html" class="gba"><div class="de"><img src="http://s.qw.cc/images/201512/thumb_img/5315_thumb_P220_1450668595973.jpg" width="100%" class="mb5"/><p>香港VNA清纯女神莎拉宝贝臀部倒模</p><p><b class="c3">¥299.00</b></p></div></a>
					<a href="goods-725.html" class="gba"><div class="de"><img src="http://s.qw.cc/images/201504/thumb_img/725_thumb_P220_1429607595248.jpg" width="100%" class="mb5"/><p>爱侣 真人性感发声双穴美臀倒模</p><p><b class="c3">¥528.00</b></p></div></a>
					<a href="goods-7577.html" class="gba"><div class="de"><img src="http://s.qw.cc/images/201601/thumb_img/7577_thumb_P220_1453100833465.jpg" width="100%" class="mb5"/><p>UNIMAT 电动夹吸飞机杯式阴茎增大器</p><p><b class="c3">¥459.00</b></p></div></a>
				</div>
			</div>
			<div class="hmg" style="background-color:#0c0d0f">
				<a href="topic.php?topic_id=687">
					<img src="http://s.qw.cc/data/afficheimg/1453372411995976870.jpg">
				</a>
			</div>
		</div>
	</div>
	<div class="content hid" id="pic">
		<div id="loadf" class="alC f16"><p class="lh55">&nbsp;<p>正在加载中，请骚候....</p></div>
		<div id="bfload" class="hid">
			<div id="cas" class="bgw pd10 lh25">
				<p><em class="gray">品牌：</em>琦莎</p>
				<p><em class="gray">产地：</em>浙江</p>
				<p><em class="gray">颜色：</em>白色</p>
				<p><em class="gray">尺寸：</em>全长175mm，有效长度150mm，倒模直径6cm</p>
				<a id="gbar" href="javascript:;" onClick="casm()" style="width:100%;display:block;" class="f14 red">点击查看更多参数▼</a>
			    <p class="hid"><em class="gray">材质：</em>虚拟肤质</p>
				<p class="hid"><em class="gray">功能：</em>带震动</p>
				<p class="hid"><em class="gray">控制方式：</em>震动</p>
				<p class="hid"><em class="gray">类型：</em>===自慰杯飞机杯===</p>
				<p class="hid"><em class="gray">重量：</em>500g</p>
				<p class="hid"><em class="gray">适用人群：</em>男性</p>
				<p class="hid"><em class="gray">特色：</em>防水免提、口阴互换、180度多广角</p>
				<p class="hid"><em class="gray">电池：</em>跳蛋使用LR44纽扣电池</p>
				<p class="hid"><em class="gray">包装清单：</em>飞机杯*1说明书*1跳蛋*1润滑油*1</p>
			</div>
			<div class="bgw mt5 alC">
				<div class="lr10">
					<ul id="ppic" class="clearfix">
						<li  onClick="inm(0)" >默认看小图(省流量)</li>
						<li class="on" onClick="inm(1)">默认看高清图(WIFI)</li>
					</ul>
					<p>您的专属情趣专家，关注微信号：quwangvip520</p>
					<div class="mt10 hid" style="background-color:#000;" id="videos">
						<div id="video" ></div>
						<p class="white">点击播放视频</p>
					</div>
				</div>
				<div class="alC"></div>
				<div class="des" id="pic_b" ></div>
				<div class="des" id="pic_s" style="display:none;"></div>
				<p class="gray lh30">温馨提示：智能机2个手指展开手势可放大图片</p>
			</div>
			<div class="lh30 bgw pd10">
				<h3>妙处网所售商品实行保密配送</h3>
				<h3>全国上千城市货到付款，重点城市1日送达，货到付款满198包邮，在线支付满99顺丰包邮</h3>
				<h3>合作快递：顺丰、邮政EMS、申通、中通、韵达</h3>
				<h3>全国市区城市的配送时间为：1-3天，县镇乡地区2-5天</h3>
				<h3>妙处网所售商品均为原装进口</h3>
				<h3>任何质量问题无条件免费退换</h3>
				<h3>360°购物保障，放心购买，安心使用</h3>
			</div>
			<div class="mt10 ov"><a href="javascript:;" onClick="loadp(0)" class="wbt">返回购买</a></div>
		</div>
	</div>
	<div class="content hid" id="comment">
		<div class="bgw">
			<ul class="comment" id="comments">
				<li>
					<p class="ov"><img src="http://s.qw.cc/images/avatar/admin/avatar.png" class="omg"><em>1***9</em><em class="vip"></em><i class="right"></i></p>
					<p class="f14">实在是太好了，赞一个</p>
				</li>
				<li>
					<p class="ov"><img src="http://s.qw.cc/images/avatar/admin/pic_023.jpg" class="omg"><em>1***4</em><em class="vip">v2</em><i class="right">湖北省-咸宁市</i></p>
					<p class="f14">喜欢这种小巧的形状 插进去很贴合 以前买过大的没有这种紧实感觉 推荐</p>
				    <div class="s_d">
						<img src="http://s.qw.cc/images/comment/5503/1461841370249786578.jpg" data-b="http://s.qw.cc/images/comment/5503/1461841370249786578.jpg" width="60" height="60" onclick="zom(this)">
						<img src="http://s.qw.cc/images/comment/5503/1461841370445814107.jpg" data-b="http://s.qw.cc/images/comment/5503/1461841370445814107.jpg" width="60" height="60" onclick="zom(this)">
						<img src="http://s.qw.cc/images/comment/5503/1461841370274100774.jpg" data-b="http://s.qw.cc/images/comment/5503/1461841370274100774.jpg" width="60" height="60" onclick="zom(this)">
					</div>
					<div class="s_db"></div>
				</li>
			</ul>
		</div>
		<div class="lr10">
			<a href="javascript:void(0);" id="ajax" class="ajc b4 mt10">点击加载更多<strong>294</strong>条评论</a>
			<p class="lh20">&nbsp;</p>
		</div>
	</div>
</div>

<div id="nos" class="hid">
	<a href="chat.php" class="noa">
		<img src="http://s.qw.cc/mobile/css/kefu.png" width="22" height="22">
		<p>客服</p>
	</a>
	<a href="car.php" class="noa">
		<img src="http://s.qw.cc/mobile/css/g_car.png" width="22" height="22">
		<p>购物车</p>
	</a>
	<a href="javascript:;" onClick="addCar(5503,1)" class="nol nor" id="adcar">
		加入购物车
	</a>
	<a href="javascript:;" onClick="sbs()" class="nol">立即订购</a>
	<div class="nosf hid" id="nosf">
		<div class="pd10">
			<h3 class="f18 c3">加入购物车成功！</h3>
			<a href="javascript:nclose()" class="lbtn left">继续购物</a>
			<a href="buy1.php" class="rbtn right">去结算</a>
			<div class="clear"></div>
		</div>
	</div>
</div>

<div id="shxs">
	<div class="fx_x">
		<h2 class="t">
			<em class="brl f14">请选择商品属性后在购买</em>
		</h2>
		<div id="shx" class="sx"></div>
		<p onClick="tclose()" class="lbtn left">关闭</p>
		<p onClick="okcar()" class="rbtn right">确定</p>
	</div>
</div>

<div class="pd10 bgw mt10">
	<p>当前位置：
		<a href=".">首页</a>
		<code class="lr3">></code>
		<a href="man/">男性用品</a>
		<code class="lr3">></code>
		<a href="man/feijibei/">自慰飞机杯</a>
	</p>
	<div class="mt10">
		<form action="search.php" class="search ov" onsubmit="return se(this)">
			<input type="search" value="" class="sl left" name="keyword" id="word" placeholder="关键词..." />
			<input class="sr left" type="submit" value="" />
		</form>
	</div>
</div>

<div class="fot">
	<ul class="nav">
		<li>
			<a href="index.php" class="na">首页</a>
			<a href="fenlei.html" class="na">分类</a>
			<a href="car.php" class="na">购物车</a>
			<a href="hot.html"  class="na">热销</a>
		</li>
		<li>
			<a href="javascript:;" onClick="goback()" class="na">上一页</a>
			<a href="login.php" class="na">登录/注册</a><a href="chaxun.php"  class="na">查订单</a><a href="javascript:;" onClick="gotop()" class="na">回顶部</a>
		</li>
		<li>
			<a href="tel:4006600606" class="fbtn">400-660-0606<p class="f12">点击电话订购</p></a>
			<a href="sms:13883873375" class="fbtn">点击短信订购<p class="f12">姓名+货号+数量+地址</p></a>
		</li>
	</ul>
	<div class="lh25 mt10">
		<!--<a href="http://www.qu.cn?shouji=1">电脑版</a> | --><a href="app.php" class="red">APP下载</a> | <a href="chat.php">在线客服</a> | <a href="article.php?act=detail&a_id=617">帮助</a> | <a href="faq.php">反馈</a> | <a href="about.php">关于我们</a>
		<p class="gray f12"></p>
		<p class="gray f12">渝ICP备14000671号-3</p>
	</div>
</div>
<?php js('m', 'vganswip',20161205);?>
<script>
var goods_id="5503";
var wifi='1';
var vtotal="304";
var rmin="2";
var time="";
var gis_pro = "0";
</script>
<?php js('m', 'goods',20161205);?>
<?php $this->load->view('layout/footer');?>
