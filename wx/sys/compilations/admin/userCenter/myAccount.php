<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Apple devices fullscreen -->
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
<base target="mainFrame" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/index.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/bootstrap_responsive_min.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/style.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/themes.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/todc_bootstrap.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>" data-theme="theme-blue">
	
    <div id="main">
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span10">
                                <h3><i class="icon-edit"></i>请如实填写您的个人信息</h3>
                            </div>
                            <div class="span2"><a class="btn" href="Javascript:window.history.go(-1)">返回</a></div>
                        </div>

                        <div class="box-content">


                            <form id="accountform" action="" method="post" class="form-horizontal form-validate" novalidate="novalidate">
                                 <?php echo $user->hidden('id'); ?>
                                <div class="control-group">
                                    <label for="name" class="control-label">用户名 :</label>
                                    <div class="controls">
                                        <?php echo $user->un; ?>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="mobile" class="control-label">手机号码：</label>
                                    <div class="controls">
                                    <?php echo $user->text('telephone','class="input-medium"'); ?>
                                    <span class="maroon">*</span><span class="help-inline"></span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="qq" class="control-label">常用QQ号码：</label>
                                    <div class="controls">
                                     <?php echo $user->text('qq',' noneed="1" class="input-medium"'); ?>
                                     <span class="maroon">*</span>
                                    </div>
                                </div>
								  <div class="control-group">
                                    <label for="email" class="control-label">常用email：</label>
                                    <div class="controls">
                                    <?php echo $user->email('email','class="input-medium"'); ?>
                                    <span class="maroon">*</span>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label for="email" class="control-label">开户时间 :</label>
                                    <div class="controls">
                                        <b class="text-warning"><?php echo $user->rtime; ?></b><p></p>
                                    </div>
                                </div>
								<!-- 
								<div class="control-group">
                                    <label for="email" class="control-label">会员级别 :</label>
                                    <div class="controls">
                                        <b class="text-warning"><?php echo translate_level($user->next_level_id); ?></b>
                                        <p>到期时间 :<?php if ($user->mendtime == 0){ ?>
	      [永久免费]
          <?php }else{ ?>
          <?php echo $user->mendtime; ?>
          <?php } ?></p>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label for="email" class="control-label">升级级别 :</label>
                                    <div class="controls">
                                        <b class="text-warning"><?php echo translate_level($user->level_id); ?></b>
                                        <p>到期时间 :<?php if ($user->next_mendtime == 0){ ?>
	                       [暂无]
	       <?php }else{ ?>
	       <?php echo $user->next_mendtime; ?>
	      <?php } ?></p>
                                    </div>
                                </div>
 -->
                                <div class="form-actions">
                                    <button type="submit" class="btn btn-primary">保存</button>
                                    <a class="btn" href="Javascript:window.history.go(-1)">取消</a>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<div id="fallr-overlay"></div>
<script type="text/javascript">
$(function(){
	$("#accountform").submit(function(){
		var cansv= true;
		$(this).find('input[type="text"]').each(function(){
			if($.trim($(this).val())=='' && $(this).attr('noneed')!='1'){
				cansv = false;
				$(this).css('backgroundColor','yellow');
				$(this).one('focus',function(){
					$(this).css('backgroundColor','transparent');
				});
			}
		});
		if(!cansv){
			tusi('请将信息填写完整');
			return false;
		}
	});
});
</script>

<br/><br/><br/></body>
</html>