<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/reset.css?2013-12-18-1" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>mwm/common2.css?2013-12-18-1" media="all" />
<title>车系</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
        <meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
		<meta content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport">
        <meta name="Keywords" content="" />
        <meta name="Description" content="" />
        <!-- Mobile Devices Support @begin -->
            <meta content="application/xhtml+xml;charset=UTF-8" http-equiv="Content-Type">
            <meta content="no-cache,must-revalidate" http-equiv="Cache-Control">
            <meta content="no-cache" http-equiv="pragma">
            <meta content="0" http-equiv="expires">
            <meta content="telephone=no, address=no" name="format-detection">
            <meta content="width=device-width, initial-scale=1.0" name="viewport">
            <meta name="apple-mobile-web-app-capable" content="yes" /> <!-- apple devices fullscreen -->
            <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
        <!-- Mobile Devices Support @end -->
        <style>
            img{ width:100%!important;}
        </style>
    </head>
    
<body class="portrait">
	<div class="header">
		<div class="logo">
			<img src="<?php echo $pp->pic; ?>" width="213" height="29" alt="" style="width:auto!important;max-width:213px;"/>
		</div>
		<!-- <div style="clear: both;"></div>-->
	</div>
	<span class="gradient_h_wbw"></span>
	<div class="top">
		<div id="roundabout_container" class="relative">
			<a id="scrollLeft__7f8fc196" class="scrollLeft__7f8fc196 btn_ra_prev"></a>
			<a id="scrollRight__7f8fc196" class="scrollRight__7f8fc196 btn_ra_next"></a>
			<div id='roundabout__7f8fc196' class="ofh">
				<ul class="list_ul_top">
				<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
					<li data-start="start" >
						<a href="chexing-<?php echo $r->id; ?>.html#mp.weixin.qq.com"><span><?php echo $r->name; ?></span></a>
					</li>
				<?php } ?>
				</ul>
			</div>
		</div>
		<span class="gradient_h_wbw"></span>
		
		
			</div>
<!-------------------- 车系列表 begin ----------------------->
		<div class="main" style="padding-top: 10px;">
			<ul class="list_ul_common">
			<?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
			<li>
					<a href="chexing-<?php echo $r->id; ?>.html#mp.weixin.qq.com">
						<div>
							<p><?php echo $pp->name;  echo $r->name; ?></p>
						</div>
					</a>
				</li>
			<?php } ?>
			</ul>
		</div>
<!-------------------- 车型列表 begin ----------------------->

<!-------------------- 车型详情 begin ----------------------->

<!-------------------- end ----------------------->
		<div class="mfooter" id="wxgjfooter" style="text-align: center;width: 100%;height: 20px;line-height: 20px;margin-top:10px;">
<span class="sp2"><a href="http://<?php echo $_SERVER['WEI_URL']; ?>" style="color: #5e5e5e;font-size: 12px;">@<?php echo $_SERVER['WEB_NAME']; ?>提供技术支持</a></span>
</div>
<!--
<div style="width: 0px;height: 0px;overflow: hidden;">
<script src="http://s22.cnzz.com/z_stat.php?id=1000151448&web_id=1000151448" language="JavaScript"></script>
</div>
 -->
<script>
/**
$(function(){
	if($('body').height()<$(window).height()){
		$('body').height($(window).height());
		$('#wxgjfooter').css('position','fixed').css('bottom','0px');
	}
});
**/
</script>

		<footer class="nav_footer">
				<ul class="box">
					<li><a href="javascript:history.go(-1);" >返回</a></li>
					<li><a href="javascript:history.go(1);" >前进</a></li>
					<li><a href="/weiweb/<?php echo $wid; ?>/" >首页</a></li>
					<li><a href="javascript:location.reload();" >刷新</a></li>
				</ul>
		</footer>
	</body>
</html>
