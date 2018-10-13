<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>我要入驻-初始协议</title>
<link href="/Template/pc/soubao/Static/css/qt_style.css" rel="stylesheet" type="text/css" />
<link href="/Template/pc/soubao/Static/css/common.min.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Template/pc/soubao/Static/js/jquery-1.11.0.min.js"></script>
<link href="/Public/css/jquery.datetimepicker.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery.datetimepicker.js"></script>
</head>
<body>
<div class="m-top-bar editable" moduleid="1539923" style="position:relative;min-height:25px;">
  <div class="container">
    <ul class="fl">
      <?php if($user[user_id] > 0): ?><li class="fl J_login_status"><a href="<?php echo U('Home/user/index');?>" alt="" title="" target="_self"><?php echo ($user['nickname']); ?></a>
      	<a  href="<?php echo U('Home/user/logout');?>" style="margin:0 10px;" title="退出" target="_self">退出</a></li>
      </li>
      <?php else: ?>
      	<li class="fl J_login_status"><a class="menu-item fl J_do_login J_chgurl" href="<?php echo U('Home/user/login');?>">
        <span>Hi，请登录</span> </a><a class="menu-item fl ht" href="<?php echo U('Home/user/reg');?>">免费注册</a><?php endif; ?>
      <li class="fl sep"></li>
      <li class="fl select-city dropdown">
        <span class="menu-item">
        <span>送货至：</span>
        <a title="" alt="" href="" class="J_cur_place"></a><i class="dd"></i></span>
      </li>
    </ul>
    <ul class="fr bar-right">
      <li class="fl dropdown my-feiniu"><a class="menu-item" target="_blank" href="">
        <span>我的商城</span><i class="dd"></i></a>
        <ul class="sub-panel">
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/order_list');?>">我的订单</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/account');?>">我的积分</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/coupon');?>">我的优惠券</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/goods_collect');?>">我的收藏夹</a></li>
          <li><a class="J_chgurl" target="_blank" href="<?php echo U('/Home/User/comment');?>">我的评论</a></li>
        </ul>
      </li> 
      <li class="fl sep"></li>
      <li class="fl dropdown mobile-feiniu"><a class="menu-item" href=""><i class="fl ico"></i>
        <span class="fl">手机访问</span>
        <i class="dd"></i></a>
        <div class="sub-panel m-lst">
          <p>手机扫一扫</p>
          <dl>
            <dt class="fl mr10"><a target="_blank" href=""><img height="80" width="80" src="/Template/pc/soubao/Static/images/qrcode_vmall_app01.png"></a></dt>
          </dl>
        </div>
      </li>
      <li class="fl sep"></li>
      <li class="fl"><a class="menu-item" href="" target="_blank">
        <span>帮助中心</span>
        </a></li>
      <li class="fl sep"></li>
      <li class="fl about-us"><a class="txt fl" style="line-height:unset;" href="">关注我们：</a></li>
      <li class="fl dropdown weixin"><a href="" class="fl ico"></a>
        <div class="sub-panel wx-box">
          <span class="arrow-b">◆</span>
          <span class="arrow-a">◆</span>
          <p class="n"> 扫描二维码 <br>	关注官方微信 </p>
          <img src="/Template/pc/soubao/Static/images/qrcode_vmall_app01.png"></div>
      </li>
    </ul>
  </div>
</div> 
<div class="gome-wrap bg">
	<div style="position: relative;top: -40px;left: 190px;">
    	<a href="/" target="_blank" class="item fl"><img height="60" width="160" src="<?php echo ($tpshop_config['shop_info_store_logo']); ?>"></a>
    </div>
	<div class="gome-layout-area">
        <ul class="gome-nav">
            <li><a href="<?php echo U('Newjoin/index');?>" target="_blank">招商首页</a></li>
        	<?php
 $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id=2"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__article_cat` where parent_id=2"); S("sql_".$md5_key,$sql_result_v,1); } foreach($sql_result_v as $k=>$v): ?><li><a href="<?php echo U('Newjoin/question',array('cat_id'=>$v[cat_id]));?>" target="_blank"><?php echo ($v["cat_name"]); ?></a></li><?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="gome-layout-area pb50">
    	<ul class="steps clearfix">
        	<li class="first prev ok"><b>1</b><span class="going"></span><em class="f">入驻须知</em></li>
        	<li class="cur ok"><b>2</b><span class="going"></span><em class="f">填写公司信息</em></li>
        	<li><b>3</b><span></span><em class="f">填写店铺信息</em></li>
        	<li><b>4</b><span></span><em class="f">资质上传</em></li>
        	<li class="last"><b>5</b><em class="f">等待审核</em></li>
        </ul>
        <div class="settled-agreement-table pb50">
        	<div class="agreement-title"><span>填写公司信息</span></div>
        	<form action="" id="queryForm" method="post">
            <div class="table-part clearfix">
            	<div class="table-part-title">公司信息</div>
                <table cellpadding="0" cellspacing="0" border="0" class="information-table1">
                    <tbody>
                    <tr>
                        <th><em class="em-red">*</em>公司名称：</th>
                        <td><input type="text" maxlength="35" id="corpName" name="supplier[company_name]" value="<?php echo ($apply["company_name"]); ?>" class="input260" err_msg="0" onchange="checkCompany(this)"><span id="corpNameSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                     <th><em class="em-red">*</em>公司性质：</th>
                        <td>
                        	<select id="corpType" name="supplier[company_type]" class="input145">
                        		<?php if(is_array($company_type)): foreach($company_type as $k=>$v): ?><option value="<?php echo ($k); ?>" <?php if($apply[company_type] == $k): ?>selected<?php endif; ?>><?php echo ($v); ?></option><?php endforeach; endif; ?>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                        <th>公司官网地址：</th>
                        <td><input type="text" maxlength="30" name="supplier[company_website]" value="<?php echo ($apply["company_website"]); ?>" class="input260"></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司所在地：</th>
                        <td>
                        	<select id="provinces" name="supplier[company_province]" onchange="get_city(this)" class="input145 mr10">
								<option value="">请选择</option>		
								<?php if(is_array($province)): $i = 0; $__LIST__ = $province;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id] == $apply[company_province]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>

							<select onchange="get_area(this)" id="city" name="supplier[company_city]" class="input145 mr10">
								<option value="">请选择</option>
	                        	<?php if(is_array($city)): $i = 0; $__LIST__ = $city;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id] == $apply[company_city]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
							<select id="district" name="supplier[company_district]" class="input145 mr10">
								<option value="">请选择</option>
                                <?php if(is_array($district)): $i = 0; $__LIST__ = $district;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><option value="<?php echo ($vo["id"]); ?>" <?php if($vo[id] == $apply[company_district]): ?>selected<?php endif; ?>><?php echo ($vo["name"]); ?></option><?php endforeach; endif; else: echo "" ;endif; ?>
							</select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>公司详细地址：</th>
                        <td><input type="text" maxlength="35" id="corpAddress" name="supplier[company_address]" class="input453" value="<?php echo ($apply["company_address"]); ?>" onblur="checkEmpty(this.value,'corpAddress','公司详细地址','');"><span id="corpAddressSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>固定电话：</th>
                        <td><input type="text" maxlength="32" id="contacterPhoneNumber" name="supplier[company_telephone]" class="input260" value="<?php echo ($apply["company_telephone"]); ?>" onblur="checkEmpty(this.value,'contacterPhoneNumber','固定电话','phone');"><span id="contacterPhoneNumberSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>电子邮箱：</th>
						<td><input type="text" maxlength="32" id="email" name="supplier[company_email]" class="input260" value="<?php echo ($apply["company_email"]); ?>" onblur="checkEmpty(this.value,'email','电子邮箱','email');"><span id="emailSpan" style="display:none" class=""></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>传真：</th>
                        <td><input type="text" maxlength="16" id="fax" name="supplier[company_fax]" class="input260" value="<?php echo ($apply["company_fax"]); ?>" onblur="checkEmpty(this.value,'fax','传真','phone');"><span id="faxSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>邮政编码：</th>
                        <td><input type="text" maxlength="10" id="zipCode" name="supplier[company_zipcode]" class="input260" value="<?php echo ($apply["company_zipcode"]); ?>" onblur="checkEmpty(this.value,'zipCode','邮政编码','zip');"><span id="zipCodeSpan" style="display:none"></span></td>
                    </tr>
                </tbody></table>
			</div>
            <div class="table-part clearfix">
            	<div class="table-part-title bt pt30 j-tabclick"><span>营业执照信息<b class="micon-down"></b></span></div>
                <table cellpadding="0" cellspacing="0" border="0" class="information-table1 j-information-table">
                	<tbody>
                	<tr>
                        <th><em class="em-red">*</em>一证一码商家：</th>
                        <td>
                        	<input style="width: 16px; height: 14px;" type="radio" onclick="tabchange(1)" <?php if($apply[threeinone] == 1): ?>checked<?php endif; ?> name="supplier[threeinone]" value="1">是
                        	<input style="width: 16px; height: 14px;" type="radio" onclick="tabchange(0)" <?php if($apply[threeinone] == 0): ?>checked<?php endif; ?> name="supplier[threeinone]" value="0">否
                        </td>
                    </tr>
                	<tr>
                        <th><em class="em-red">*</em>注册资金：</th>
                        <td><input type="text" maxlength="13" id="regCapital" name="supplier[reg_capital]" class="input260" value="<?php echo ($apply["reg_capital"]); ?>" onblur="checkEmpty(this.value,'regCapital','注册资本','money1');">
                        <span style="line-height:24px;padding-left:5px;">万元(人民币)</span>
                        <span id="regCapitalSpan" style="display:none"></span></td>
                    </tr>
                   <tr>
                        <th><em class="em-red">*</em>
                        	<span id="threeinone"><?php if($apply[threeinone] == 0): ?>营业执照注册号:<?php else: ?>统一社会信用代码：<?php endif; ?></span>
                        </th>
                        <td><input type="text" maxlength="32" id="corpLicenceNumber" name="supplier[business_licence_number]" class="input260" value="<?php echo ($apply["business_licence_number"]); ?>" onblur="checkEmpty(this.value,'corpLicenceNumber','营业执照注册号','corpLicence');"><span id="corpLicenceNumberSpan" style="display:none"></span>
                        <span id="licence_number_note" style="line-height:24px;padding-left:5px;">请输入18位数字或字母组成的统一社会信用代码</span>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>法定代表人姓名：</th>
                        <td><input type="text" maxlength="20" id="legal_person" name="supplier[legal_person]" class="input260" value="<?php echo ($apply["legal_person"]); ?>" onblur="checkEmpty(this.value,'legal_person','法定代表人姓名','');"><span id="legal_personSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>营业执照有效期：</th>
                        <td>
                        	<input type="text" id="business_date_start" name="supplier[business_date_start]" value="<?php echo ($apply["business_date_start"]); ?>" class="input-time145 fl">
                        	<label class="fl label_line ml10 mr10">-</label>
                        	<input type="text" id="business_date_end" name="supplier[business_date_end]" value="<?php echo ($apply["business_date_end"]); ?>"  class="input-time145 fl">
                    		<span id="business_date_startSpan" style="display:none" class=""></span>
                    		<span id="business_date_endSpan" style="display:none" class=""></span>
                    		<label class="fl label_line ml10 mr10" for="3"><input type="checkbox" hidefocus="ture" name="supplier[business_permanent]" value="" class="inputcheck" id="3" onclick="changeBusinessDate();">长期</label>
                        </td>
                    </tr>
                    <tr>
                        <th class="ver-t"><em class="em-red">*</em>营业执照经营范围：</th>
                        <td><textarea maxlength="100" id="business_scope" name="supplier[business_scope]" autocomplete="off" class="input370" onblur="checkEmpty(this.value,'business_scope','营业执照经营范围','');"><?php echo ($apply["business_scope"]); ?></textarea><span id="business_scopeSpan" style="display:none"></span></td>
                    </tr>
                    <tr class="threeinone" <?php if($apply[threeinone] == 1): ?>style="display:none"<?php endif; ?>>
                        <th><em class="em-red">*</em>组织机构代码：</th>
                        <td><input type="text" maxlength="32" id="orgnizationCode" name="supplier[orgnization_code]" class="input260" value="<?php echo ($apply["orgnization_code"]); ?>" onblur="checkEmpty(this.value,'orgnizationCode','组织机构代码','');"><span id="orgnizationCodeSpan" style="display:none"></span></td>
                    </tr>
                    <tr class="threeinone" <?php if($apply[threeinone] == 1): ?>style="display:none"<?php endif; ?>>
                        <th><em class="em-red">*</em>税务登记号码：</th>
                        <td><input maxlength="18" type="text" id="attachedTaxNumber" name="supplier[attached_tax_number]" value="<?php echo ($apply["attached_tax_number"]); ?>" class="input260" onblur="checkEmpty(this.value,'attachedTaxNumber','纳税人识别号','');"><span id="attachedTaxNumberSpan" style="display:none"></span></td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>纳税人类型：</th>
                        <td>
                        	<select id="taxpayer" name="supplier[taxpayer]" class="input145 mr10">
                        		<option value="">请选择</option>
                        		<option value="1" selected>一般纳税人</option>
                        		<option value="2">小规模纳税人</option>
                        		<option value="3">非增值税纳税人</option>
                        	</select>
                        </td>
                    </tr>
                    <tr>
                        <th><em class="em-red">*</em>纳税类型税码：</th>
                        <td>
                        	<select id="tax_rate" name="supplier[tax_rate]" class="input145 mr10">
                        		<option value="">请选择</option>
                        		<?php if(is_array($rate_list)): foreach($rate_list as $k=>$vo): ?><option value="<?php echo ($k); ?>" <?php if($apply[tax_rate] == $k): ?>selected<?php endif; ?>><?php echo ($vo); ?>%</option><?php endforeach; endif; ?>
                        	</select>
                        </td>
                    </tr>
                </tbody></table>
            </div>
           
            </form>
            <div class="gome-btn pt30">
                <a href="javascript:preStep();" class="gome-btn-gray">上一步</a>
                <a href="javascript:nextStep();" class="gome-btn-red">下一步,店铺信息</a>
            </div>
        </div>
    </div>
<input type="hidden" id="mobileRegex" value="^(13[0-9]{9})|(14[57][0-9]{8})|(15[012356789][0-9]{8})|(170[0-9]{8})|(18[0-9]{9})$"/>
<!-- footer start [[-->
<div class="foot">
          <div class="foot-box container fn-clear fixed">
    <dl class="foot-item foot-phone">
              <dt><?php echo ($tpshop_config['shop_info_phone']); ?></dt>
              <dd>客服邮箱：540616918@qq.com</dd>
            </dl>
	    <?php
 $md5_key = md5("select * from `__PREFIX__article_cat` where parent_id = 2"); $result_name = $sql_result_v = S("sql_".$md5_key); if(empty($sql_result_v)) { $Model = new \Think\Model(); $result_name = $sql_result_v = $Model->query("select * from `__PREFIX__article_cat` where parent_id = 2"); S("sql_".$md5_key,$sql_result_v,1); } foreach($sql_result_v as $k=>$v): ?><dl class="foot-item foot-list">
              <dt class=""><?php echo ($v[cat_name]); ?></dt>
              <?php
 $md5_key = md5("select * from `__PREFIX__article` where cat_id = $v[cat_id]"); $result_name = $sql_result_v2 = S("sql_".$md5_key); if(empty($sql_result_v2)) { $Model = new \Think\Model(); $result_name = $sql_result_v2 = $Model->query("select * from `__PREFIX__article` where cat_id = $v[cat_id]"); S("sql_".$md5_key,$sql_result_v2,1); } foreach($sql_result_v2 as $k2=>$v2): ?><dd><a target="_blank" href="<?php echo U('Home/Article/detail',array('article_id'=>$v2[article_id]));?>"><?php echo ($v2[title]); ?></a></dd><?php endforeach; ?>
	        </dl><?php endforeach; ?>  
    <dl class="foot-item foot-attention">
              <dd>
        <div class="att-weixin"> <img src="/Template/pc/soubao/Static/images/weixin.png" width="85" height="85"> </div>
        <p>公众号</p>
      </dd>
              <dd>
        <div class="att-client"> <img src="/Template/pc/soubao/Static/images/qrcode_vmall_app01.png" width="85" height="85"> </div>
        <p>小程序</p>
      </dd>
            </dl>
  </div>
  <div class="foot-info container">
    <p>Copyright <em>©</em> 2015-2020 <?php echo ($tpshop_config['shop_info_store_name']); ?>  版权所有  备案号:<?php echo ($tpshop_config['shop_info_record_no']); ?></p>
    <ul class="foot-chop">
              <!--			<li class="icbc">
							<a href="" target="_blank"></a>
						</li>
						<li class="alipay">
							<a href="" target="_blank"></a>
						</li>
						<li class="unionpay">
							<a href="" target="_blank"></a>
						</li>
						<li class="tenpay">
							<a href="" target="_blank"></a>
						</li>-->
              <li class="gongshang"> <a href="" target="_blank"></a> </li>
              <li class="sh-letter"> <a href="" target="_blank"></a> </li>
              <li class="honesty"> <a href="" target="_blank"></a> </li>
              <li> <a href="" target="_blank"> <img src="/Template/pc/soubao/Static/images/time_cnnic.jpg"> </a> </li>
              <li> <a href="" target="_blank"> <img src="/Template/pc/soubao/Static/images/aqlm.jpg"> </a> </li>
            </ul>
  </div>
</div>
<script type="text/javascript" src="/Template/pc/soubao/Static/js/jquery.lazyload.js"></script>
<script src="/Public/js/global.js"></script>
<script type="text/javascript" src="/Template/pc/soubao/Static/js/common.js"></script>
<!-- footer end ]]--> 
<script>
function get_province(){
    var url = '/index.php?m=Home&c=Api&a=getRegion&level=1&parent_id=0';
    $.ajax({
        type : "GET",
        url  : url,
        error: function(request) {
            alert("服务器繁忙, 请联系管理员!");
            return;
        },
        success: function(v) {
            v = '<option value="0">选择省份</option>'+ v;          
            $('#province').empty().html(v);
        }
    });
}

function preStep(){
	window.location.href = "<?php echo U('Newjoin/contact');?>";
}
//$.datetimepicker.setLocale('ch');//语言选择中文

$('#business_date_start,#business_date_end').datetimepicker({         
    format:"Y-m-d",      //格式化日期
	timepicker:false,
});

$(function(){
	if ($("#city").val() == null || $("#city").val() == ""){
		get_province();
	}

	var v = document.getElementById("3");
	if (v.value=="Y") {
		v.checked==true;
   		document.getElementById("business_date_start").value="";
   		document.getElementById("business_date_start").realvalue="";
   		document.getElementById("business_date_start").disabled = true;
   		document.getElementById("business_date_end").value="";
   		document.getElementById("business_date_end").realvalue="";
   		document.getElementById("business_date_end").disabled = true;
   	} else {
   		v.checked==false;
   		document.getElementById("business_date_start").disabled = false;
   		document.getElementById("business_date_end").disabled = false;
   	}
});

function tabchange(v){
	if(v==1){
		$('.threeinone').hide();
		$('#threeinone').html(' 统一社会信用代码：');
		$('#licence_number_note').html('请输入18位数字或字母组成的统一社会信用代码');
	}else{
		$('.threeinone').show();
		$('#threeinone').html('营业执照注册号：');
		$('#licence_number_note').html('请输入数字组成的营业执照号，长度为不超过20个字符');
	}
}
/**
* 检测非空
*/
var ret = 0;
function checkEmpty(value, id, msg, type) {
	var _email = /^([a-zA-Z0-9]+[_|\_|\-|\.]?)*[a-zA-Z0-9]+@([a-zA-Z0-9]+[_|\_|\-|\.]?)*[a-zA-Z0-9]+\.[a-zA-Z]{2,3}$/;
	var _phone= /^((\+?[0-9]{2,4}\-[0-9]{3,4}\-)|([0-9]{3,4}\-))?([0-9]{7,8})(\-[0-9]+)?$/;
	var _zip= /^[0-9][0-9]{5}$/;
	var _mobile = new RegExp(document.getElementById("mobileRegex").value);
	var _positiveInteger = /^[0-9]*[1-9][0-9]*$/;
	var _money = /^[1-9]{1}\d*(\.\d{1,2})?$/;
	var _money1 = /^(?!0)\d{1,6}$|^(?!0)\d{1,6}[.]\d{1,6}$|^0[.]\d{1,6}$/;
	if(value == "" ||  ($.trim(value)).length == 0){
		var v = document.getElementById(id+"Span");
		v.innerHTML = "请填写" + msg;
		v.className="warning-text1";
		v.style.display="block";
		//输入框样式添加warning
		$("#"+id).addClass("warning");
	}  else {
		if ((type == "email" && !(_email.test(value))) || (type == "phone" && !(_phone.test(value))) || (type == "mobile" && !(_mobile.test(value))) || (type == "zip" && !(_zip.test(value))) || (type == "positiveInteger" && !(_positiveInteger.test(value))) || (type == "money" && !(_money.test(value)))  || (type == "money1" && (!(value > 0) || !(_money1.test(value))))) {
			var v = document.getElementById(id+"Span");
			if (type == "positiveInteger") {
				msg = msg + "(正整数)";
			} else if (type == "money") {
				msg = msg + "(金额)";
			} else if (type == "money1") {
				msg = msg + "(6位整数6位小数的金额)";
			}
			v.innerHTML = "格式错误，请正确填写" + msg;
			v.className="warning-text2";
			v.style.display="block";
			$("#"+id).addClass("warning");
		} else {
			document.getElementById(id+"Span").className="";
			document.getElementById(id+"Span").innerHTML="";
			document.getElementById(id+"Span").style.display="none";
			$("#"+id).removeClass("warning");
			ret = 1;
		}
	}
	return ret;
}

function changeBusinessDate(){
	var v = document.getElementById("3");
	if (v.checked==true) {
		document.getElementById("3").value="Y";
		document.getElementById("business_date_start").value="";
		document.getElementById("business_date_start").realvalue="";
		document.getElementById("business_date_start").disabled = true;
		document.getElementById("business_date_end").value="";
		document.getElementById("business_date_end").realvalue="";
		document.getElementById("business_date_end").disabled = true;
	} else {
		document.getElementById("3").value="N";
		document.getElementById("business_date_start").disabled = false;
		document.getElementById("business_date_end").disabled = false;
	}
}

/**
* 下一步
*/
function nextStep() {
	// 判断所有的checkSpan都是隐藏的

	if ($("#corpName").attr('err_msg') == 1) {
		alert("公司名称，填写有误");
		$("#corpName").focus();
		return;
	}
	if (checkEmpty($("#corpAddress").val(),'corpAddress','公司详细地址','') != 1) {
		//alert("公司详细地址，填写有误");
		$("#corpAddress").focus();
		return;
	}
	if (checkEmpty($("#contacterPhoneNumber").val(),'contacterPhoneNumber','固定电话','phone') != 1) {
		//alert("固定电话，填写有误");
		$("#contacterPhoneNumber").focus();
		return;
	}
	if (checkEmpty($("#email").val(),'email','电子邮箱','email') != 1) {
		//alert("电子邮箱，填写有误");
		$("#email").focus();
		return;
	}
	if (checkEmpty($("#fax").val(),'fax','传真','phone') != 1) {
		//alert("传真，填写有误");
		$("#fax").focus();
		return;
	}
	if (checkEmpty($("#zipCode").val(),'zipCode','邮政编码','zip') != 1) {
		//alert("邮政编码，填写有误");
		$("#zipCode").focus();
		return;
	}
	
	if($("input[type='radio']:checked").val()==0){
		if (checkEmpty($("#orgnizationCode").val(),'orgnizationCode','组织机构代码','') != 1) {
			//alert("组织机构代码，填写有误");
			$("#orgnizationCode").focus();
			return;
		}
		if (checkEmpty($("#attachedTaxNumber").val(),'attachedTaxNumber','纳税人识别号','') != 1) {
			//alert("纳税人识别号，填写有误");
			$("#attachedTaxNumber").focus();
			return;
		}
	}

	if (checkEmpty($("#regCapital").val(),'regCapital','注册资本','money1') != 1) {
		//alert("注册资本，填写有误");
		$("#regCapital").focus();
		return;
	}
	if (checkEmpty($("#corpLicenceNumber").val(),'corpLicenceNumber','营业执照注册号','corpLicence') != 1) {
		//alert("营业执照注册号，填写有误");
		$("#corpLicenceNumber").focus();
		return;
	}
	if (checkEmpty($("#legal_person").val(),'legal_person','法定代表人姓名','') != 1) {
		//alert("法定代表人姓名，填写有误");
		$("#legal_person").focus();
		return;
	}
	if (checkEmpty($("#business_scope").val(),'business_scope','营业执照经营范围','') != 1) {
		//alert("营业执照经营范围，填写有误");
		$("#busine_scope").focus();
		return;
	}

	// 判断营业执照有效期
	var v = document.getElementById("3");
	if (v.checked == true) {
		document.getElementById("3").value="Y";
	}
	if (v.checked == false) {
		document.getElementById("3").value="N";
		var business_date_start = document.getElementById("business_date_start");
		if ((business_date_start.value == undefined || business_date_start.value == "") && business_date_start.realvalue != undefined && business_date_start.realvalue != "") {
			business_date_start.value = business_date_start.realvalue;
		}
		var business_date_end = document.getElementById("business_date_end");
		if ((business_date_end.value == undefined || business_date_end.value == "") && business_date_end.realvalue != undefined && business_date_end.realvalue != "") {
			business_date_end.value = business_date_end.realvalue;
		}
		if(business_date_start.value == undefined || business_date_start.value == "" || business_date_end.value == undefined || business_date_end.value == ""){
			alert("营业执照有效期，填写有误");
			return;
		} else if (business_date_start.value > business_date_end.value) {
			alert("营业执照有效期开始日期不能晚于结束日期，填写有误");
			return;
		}
	}
	// 检查下拉框
	if ($("#corpType").val()=="") {
		alert("请选择 公司性质");
		$("#corpType").focus();
		return;
	}

	if ($("#tax_rate").val()=="") {
		alert("请选择 纳税类型税码");
		$("#tax_rate").focus();
		return;
	}
	if ($("#provinces").val()=="") {
		alert("请选择 公司所在地省份");
		$("#provinces").focus();
		return;
	}
	if ($("#city").val()=="") {
		alert("请选择 公司所在地城市");
		$("#city").focus();
		return;
	}
	document.getElementById('queryForm').submit();
}

/**
 * 获取城市
 * @param t  省份select对象
 */
function get_city(t){
    var parent_id = $(t).val();
    if(!parent_id > 0){
        return;
    }
    $('#twon').empty().css('display','none');
    var url = '/index.php?m=Home&c=Api&a=getRegion&level=2&parent_id='+ parent_id;
    $.ajax({
        type : "GET",
        url  : url,
        error: function(request) {
            alert("服务器繁忙, 请联系管理员!");
            return;
        },
        success: function(v) {
            v = '<option value="0">选择城市</option>'+ v;          
            $('#city').empty().html(v);
        }
    });
}

function checkCompany(obj){
    var url = "<?php echo U('Newjoin/check_company');?>";
    $.ajax({
        type : "POST",
        url  : url,
        data :{'company_name':$(obj).val()},
        error: function(request) {
            alert("服务器繁忙, 请联系管理员!");
            return false;
        },
        success: function(res) {
			if(res == 'success'){
				$(obj).attr('err_msg',0);
			}else{
				$(obj).attr('err_msg',1);
			}
        }
    });
}
</script>
</body>
</html>