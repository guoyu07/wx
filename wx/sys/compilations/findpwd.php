<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="keywords" content="微管家、微信营销、微信代运营、微信托管、微网站、微商城、微营销、微信定制开发">
<meta name="description" content="<?php echo $_SERVER['WEB_NAME']; ?>,国内领先的微信公众智能服务平台,管家十大微体系:微菜单、微官网、微会员、微活动、微商城、微推送、微服务、微统计、微支付、微客服,企业微营销必备。">
        <!-- Mobile Devices Support @begin -->
            <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
<!--         <link rel="stylesheet" type="text/css" href="http://stc.dxcx.com/css/bootstrap.css?2013-10-21-2" media="all" /> -->
  <!-- <link rel="stylesheet" type="text/css" href="http://stc.dxcx.com/css/reg.css?2013-10-21-2" media="all" /> -->
<link rel="stylesheet" href="<?php echo $CSS; ?>reg_1.css"> 
<link rel="stylesheet" href="<?php echo $CSS; ?>reg_2.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>reg.css"> 
<title>登录-<?php echo $_SERVER['WEB_NAME']; ?>中心</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <!--[if IE 7]>
            <link href="http://stc.dxcx.com/css/font_awesome_ie7.css" rel="stylesheet" />
        <![endif]-->
        <!--[if lte IE 8]>
            <script src="http://stc.dxcx.com/js/excanvas_min.js"></script>
        <![endif]-->
        <!--[if lte IE 9]>
            <script src="http://stc.dxcx.com/js/watermark.js"></script>
        <![endif]-->
        <script type="text/javascript">
        $(function(){
        	$('body').height($(window).height());
        });
        </script>
    </head>
 <body> 
	<div id="doc">
    <div id="hd" class="clearfix" style="padding-top: 72px; ">
        <div class="logo"><a href="/" hidefocus="true" onfocus="this.blur();">
         <img src="<?php echo $_SERVER['LOGO_PIC']; ?>" width="228" height="61">
        </a></div>
    </div>
    <div class="info" style="margin-top: 99px; ">
        <span><a href="/" target="_blank" title="<?php echo $_SERVER['WEB_NAME']; ?>首页" hidefocus="true" onfocus="this.blur();">首页</a></span>
        <span class="split">|</span>
        <span><a href="/reg.html" class="registerNew" title="注册" hidefocus="true" onfocus="this.blur();">注册新帐号</a></span>
    
         
    </div>
    <form action="" method="post" id="fpwdfm">
    <div id="bd" class="quc-clearfix reg-wrapper-quick">
        <div class="content">
            <div id="loginWrap">
                <div id="modLoginWrap" class="mod-qiuser-pop">
                    <dl class="login-wrap">
                        <dt>
                            <span id="loginTitle"></span>
                        </dt>
                        <h1>
                            	请输入微信公众平台账户密码找回<?php echo $_SERVER['WEB_NAME']; ?>账户密码
                            </h1>
                        <div class="ipbox">
                            <b class="r1"></b>
                            <b class="r2"></b>
                            <b class="r5"></b>
                            
                            <div class="con">
                            
                                <dd class="botborder" style="z-index:10;">
                                    <div class="quc-clearfix login-item">
                                        <label for="username" style="width: 70px">平台帐号：</label>
                                        <?php echo $u->text('un','tabindex="1" class="ipt tipinput1" placeholder="用户名" autocomplete="off" maxlength="100" suggestwidth="374px"'); ?>
                                        
                                    </div>
                                </dd>
                                <dd class="password">
                                    <div class="quc-clearfix login-item">
                                        <label for="password" style="width: 70px">平台密码：</label>
                                        <?php echo $u->password('pwd','tabindex="2" class="ipt tipinput1" placeholder="请输入您的密码" maxlength="20" autocomplete="off"'); ?>
                                        
                                    </div>
                                </dd>
                            </div>
                            <b class="r5"></b>
                            <b class="r3"></b>
                            <b class="r4"></b>
                        </div>
                       
                        <div style="margin:0 0 10px; color:#c35d00;" id="error_box">
                            <span id="error_tips"></span>
                        </div>
                        <dd class="submit">
                            <span><input type="image" src="/res/sqzh.png" tabindex="4" id="btn-login" onclick="tofindpwd();"></span>
                        </dd>
                    </dl>
                </div>
            </div>
        </div>
    </div>
    </form>
    <div id="ft">Copyright©2012-2013 dxcx.com All Rights Reserved <?php echo $_SERVER['WEB_NAME']; ?></div>
</div>
<script type="text/javascript">
function tofindpwd(){
	if($.trim($('#fun').val())=='' || $.trim($('#fpwd').val())==''){
		tusi('请填写完整');
		return;
	}
	
	$('#fpwdfm').submit();
}
</script>
</body>
</html>