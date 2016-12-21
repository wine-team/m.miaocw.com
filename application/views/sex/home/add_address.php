<?php $this->load->view('sex/layout/header');?>
<div id="top">
	<div class="header">
		<a href="javascript:goback();" class="b_l"></a>
		<h2>新增收货地址</h2>
		<a href="<?php echo site_url('qingqu/home/index');?>"  class="b_r">首页</a>
	</div>
</div>
<div class="pageauto">
	<div class="lr10 bgw">
		<form onsubmit="return checkCon(this)" name="theForm" method="post" action="address.php?act=insert" id="con">
		    <table width="100%" border="0" class="ftable" id="car">
		      <tbody>
			        <tr>
			          <td width="22%"><b class="red pr5">*</b>收件人：</td>
			          <td><input type="text" value="" id="consignee" class="pt" name="consignee"/></td>
			        </tr>
			        <tr>
			          <td><b class="red pr5">*</b>手机：</td>
			          <td><input type="text" value="" id="mobile" class="pt" name="mobile"/></td>
			        </tr>
		        	<tr>
		          	  <td><b class="red pr5">*</b>省市区：</td>
		              <td>
		              	<select onchange="region.changed(this, 1, 'selProvinces_0')" id="selCountries_0" name="country" class="hid">
		              	   <option value="0">请选择国家</option>
		                   <option selected="" value="1">中国</option>
		                </select>
		                <select onchange="region.changed(this, 2, 'selCities_0')" id="selProvinces_0" name="province" class="left select">
                           <option value="0">请选择省</option>
                           <option value="2" >北京市</option>
                             <option value="6" >广东省</option>
                             <option value="16" >江苏省</option>
                             <option value="31" >浙江省</option>
                             <option value="22" >山东省</option>
                             <option value="11" >河南省</option>
                             <option value="10" >河北省</option>
                             <option value="26" >四川省</option>
                             <option value="13" >湖北省</option>
                             <option value="4" >福建省</option>
                             <option value="24" >陕西省</option>
                             <option value="3" >安徽省</option>
                             <option value="18" >辽宁省</option>
                             <option value="14" >湖南省</option>
                             <option value="30" >云南省</option>
                             <option value="23" >山西省</option>
                             <option value="32" >重庆市</option>
                             <option value="25" >上海市</option>
                             <option value="8" >贵州省</option>
                             <option value="7" >广西壮族自治区</option>
                             <option value="17" >江西省</option>
                             <option value="29" >新疆维吾尔自治区</option>
                             <option value="12" >黑龙江省</option>
                             <option value="19" >内蒙古自治区</option>
                             <option value="5" >甘肃省</option>
                             <option value="27" >天津市</option>
                             <option value="15" >吉林省</option>
                             <option value="9" >海南省</option>
                             <option value="20" >宁夏回族自治区</option>
                             <option value="21" >青海省</option>
                             <option value="28" >西藏自治区</option>
		                 </select>
		            	 <select onchange="region.changed(this, 3, 'selDistricts_0')" id="selCities_0" name="city" class="left select">
		              		<option value="0">请选择市</option>
		                 </select>
		            	<select id="selDistricts_0" name="district" class="left select">
		            		<option value="0">请选择区</option>
		                </select>
		             </td>
		        </tr>
		        <tr>
			          <td><b class="red pr5">*</b>街道地址：</td>
			          <td><input type="text" value="" id="address" class="pt" size="80" name="address"/></td>
		        </tr>
		        <tr>
		       		  <td></td>
		       		  <td><label class="f14 c3"><input name="default" type="checkbox" class="checkb" value="1" /> 设置为默认收货地址</label></td>
		        </tr>
		        <tr>
			          <td colspan="2">
			            <input type="hidden" name="address_id" value="" />
			            <input type="hidden" name="token" value="" />
			            <input type="submit" value="确认" class="gbtn"/>
			            <p class="lh30">&nbsp;</p>
			          </td>
		        </tr>
		      </tbody>
		    </table>
		  </form>
	</div>
</div>
<script>
var region = new Object();
var yum = "http://" + document.domain + "/region.php";
region.loadRegions = function (parent, type, target) {
    $.ajax({
        url: yum + '?type=' + type + "&target=" + target + "&parent=" + parent,
        type: 'GET',
        dataType: 'json',
        success: function (result) {
            region.response(result);
        }
    });
}
region.loadProvinces = function (country, selName) {
    var objName = (typeof selName == "undefined") ? "selProvinces" : selName;
    region.loadRegions(country, 1, objName);
}
region.loadCities = function (province, selName) {
    var objName = (typeof selName == "undefined") ? "selCities" : selName;
    region.loadRegions(province, 2, objName);
}
region.loadDistricts = function (city, selName) {
    var objName = (typeof selName == "undefined") ? "selDistricts" : selName;
    region.loadRegions(city, 3, objName);
}
region.changed = function (obj, type, selName) {
    var parent = obj.options[obj.selectedIndex].value;
    region.loadRegions(parent, type, selName);
    if (obj.value != "") {
        $("#sero").empty();
    }
}
region.response = function (result, text_result) {
    var sel = document.getElementById(result.target);
    sel.length = 1;
    sel.selectedIndex = 0;
    sel.style.display = (result.regions.length == 0 && !region.isAdmin && result.type + 0 == 3) ? "none" : '';
    if (document.all) {
        sel.fireEvent("onchange");
    } else {
        var evt = document.createEvent("HTMLEvents");
        evt.initEvent('change', true, true);
        sel.dispatchEvent(evt);
    }
    if (result.regions) {
        for (i = 0; i < result.regions.length; i++) {
            var opt = document.createElement("OPTION");
            opt.value = result.regions[i].region_id;
            opt.text = result.regions[i].region_name;
            sel.options.add(opt);
        }
    }
}

function checkCon(frm) {
    var n1 = $("#consignee").val();
    var n5 = $("#address").val();
    var n6 = $("#mobile").val();
    var n2 = $("#email").val();
    if (n1.length < 2) {
        alert("收货人姓名不得少于2个字");
        return false;
    }
    if (frm.elements['province'] && frm.elements['province'].value == 0 && frm.elements['province'].length > 1) {
        alert("请选择省份");
        return false;
    }
    if (frm.elements['city'] && frm.elements['city'].value == 0 && frm.elements['city'].length > 1) {
        alert("请选择城市");
        return false;
    }
    if (frm.elements['district'] && frm.elements['district'].length > 1) {
        if (frm.elements['district'].value == 0) {
            alert("请选择区域");
            return false;
        }
    }
    if (n5.length < 4 || n5.length > 60) {
        alert("请填写收货地址4-60个字");
        return false;
    }
    if (!Validator.isMobile(n6)) {
        alert("请填写正确的手机号码！");
        return false;
    }
    if (n2.length > 6) {
        if (!Validator.isEmail(n2)) {
            alert("请输入正确的邮箱地址");
            return false;
        }
    }
}
</script>
<?php $this->load->view('sex/layout/smallfooter');?>
<?php $this->load->view('sex/layout/footer');?>