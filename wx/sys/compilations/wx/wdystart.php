<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">
<meta name="format-detection" content="telephone=no">
<title>填写资料</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link type="text/css" rel="stylesheet" href="/res/wdy/style/examine.css" />

</head>
<body>
<div class="wrapper1">
	<img class="bg" src="/res/wdy/images/bg.jpg">
	<div class="inner-cont">
		<div class="qtitle">请先填写您的资料：</div>
		<div class="field-contain">
			<label for="username" class="input-label">请输入您的名称:</label>
			<input type="text" name="username" id="un" class="input-text" value="<?php echo $op->un; ?>">
		</div>
		<div class="field-contain">
			<label for="phone" class="input-label">请输入您的手机号码:</label>
			<input type="tel" name="phone" id="tel" class="input-text" value="<?php echo $op->tel; ?>">
			<span class="tip">*请务必填写正确，此手机号将作为您以后领奖的依据</span>
		</div>
		<div class="btn-wrapper">
			<button id="save-btn" onclick="lingqu()" class="next-btn1">开始</button>
		</div>
	</div>
 	<p class="page-url">
		<a href="/" target="_blank" class="page-url-link"></a>
	</p>
</div>
<script type="text/javascript">
function lingqu(){
	var un = $.trim($('#un').val());
	var tel = $.trim($('#tel').val());
	if(un=='' || tel==''){
		tusi('请完善用户信息');
		return;
	}
	ajax('wdystart-add.html',{ tel:tel,un:un,id:'<?php echo $yid; ?>'},function(m){
		location.href='wdyans-<?php echo $yid; ?>.html';
	});	
}

</script>
</body>
</html>