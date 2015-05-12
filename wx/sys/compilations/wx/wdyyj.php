<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>具体内容</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/wdy/style/examine.css" />
</head>
<body>
<div class="wrapper">
	<img class="bg" src="/res/wdy/images/bg.jpg">
	<img class="bg-suggest" src="/res/wdy/images/suggest_bg.png">
	<div class="title2"><?php echo $wdy->name; ?></div>
	<div class="thanks">感谢您的参与！</div>
	<div class="desc-cont1" style="padding:0;">
		<textarea id="suggest" rows="9" cols="25" placeholder="有什么建议留给我们？"></textarea>
	</div>
	<div class="next-btn2 finish" onclick="comwdy()">完 成</div>
    <p class="page-url" style="position:static!important;">
		<a href="/" target="_blank" class="page-url-link"></a>
    </p>
</div>
<script type="text/javascript">
function comwdy(){
	var jy = $.trim($('#suggest').val());
	if(jy==''){
		tusi('请留下你宝贵的建议');
		return;
	}
	ajax('wdyyj-add.html',{ jy:jy,id:'<?php echo $yid; ?>'},function(m){
		location.href='wdyok-<?php echo $yid; ?>.html';
	});	
}
</script>
</body>
</html>