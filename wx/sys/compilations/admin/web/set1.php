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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/official.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/inside.css" media="all" />
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
<link rel="shortcut icon" href="/favicon.ico" />
</head>
<body class="<?php echo Session::get('maintheme'); ?>" style="overflow: hidden;">
<div id="main">
        <div class="container-fluid">
            <div class="row-fluid">
                <div class="span12">
                    <div class="box">
                        <div class="box-title">
                            <div class="span12">
                                <h3><i class="icon-edit"></i>模板管理</h3>
                                <?php if (!$pagev){ ?>
								<a class="btn preview pull-right btn-success" href="javascript:;" onClick="setthisone();">使用选中模板</a>
								<a class="btn preview pull-right btn-blue" href="javascript:;" onClick="closethisone();">关闭</a>
								<script type="text/javascript">
									
								</script>
								<?php } ?>
                                                            </div>
                        </div>
                        <div class="box-content" style="overflow: auto;">
                            <ul class="nav nav-tabs" id="liclickli">
                                <li class="active"><a href="javascript:;" did="#relli0" data-toggle="tab">栏目首页模板风格</a></li>
								<li><a href="javascript:;" did="#relli1" data-toggle="tab">频道模板风格</a></li>
                                <li><a href="javascript:;" did="#relli2" data-toggle="tab">图文列表模板风格</a></li>
                                <li><a href="javascript:;" did="#relli3" data-toggle="tab">图文详细页模板</a></li>
								<li><a href="javascript:;" did="#relli4" data-toggle="tab">菜单导航模板</a></li>
                            </ul>
                            <div class="tab-content">
								<div class="tab-pane active in" id="relli0">
									<ul class="nav nav-tabs nav-tabs-google" style="border-bottom:none"></ul>
	                                    <ul class="cateradio unstyled">

										</ul>
                                </div>
								<div class="tab-pane" id="relli1">
									<ul class="nav nav-tabs nav-tabs-google" style="border-bottom:none"></ul>
									<ul class="cateradio unstyled">
									</ul>
								</div>
                                <div class="tab-pane" id="relli2">
                                    <ul class="nav nav-tabs nav-tabs-google" style="border-bottom:none"></ul>
									<ul class="cateradio unstyled">
									</ul>
                                </div>
                                <div class="tab-pane" id="relli3">
                                    <ul class="nav nav-tabs nav-tabs-google" style="border-bottom:none"></ul>
									<ul class="cateradio unstyled">
									</ul>
                                </div>
                                <div class="tab-pane" id="relli4">
                                    <ul class="nav nav-tabs nav-tabs-google" style="border-bottom:none"></ul>
									<ul class="cateradio unstyled">
                     <li   >
                        <label><img src="/res/menu/000.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"  value="0"    id="RadioGroup1_0" />
                          关闭底部导航</label>
                      </li>
                      <li >
                        <label><img src="/res/menu/001.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"  value="1"  id="RadioGroup1_1" />
                          1.左侧展开</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/002.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="2"  id="RadioGroup1_2" />
                          2.右侧展开</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/003.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"     value="3"  id="RadioGroup1_3" />
                          3.左侧滑入</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/004.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="4"  id="RadioGroup1_4" />
                          4.右侧滑入</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/005.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="5"  id="RadioGroup1_5" />
                          5.左侧底部滑入</label>
                      </li>
                      <li  > 
                        <label><img src="/res/menu/006.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="6"  id="RadioGroup1_6" />
                          6.右侧底部滑入</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/007.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="7"  id="RadioGroup1_7" />
                          7</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/008.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="8"  id="RadioGroup1_8" />
                          8</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/009.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="9"  id="RadioGroup1_9" />
                          9</label>
                      </li>
                      <li >
                        <label><img src="/res/menu/010.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="10"  id="RadioGroup1_10" />
                          10</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/011.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="11"  id="RadioGroup1_11" />
                          11</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/012.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="12"  id="RadioGroup1_12" />
                          12</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/013.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="13"  id="RadioGroup1_13" />
                          13</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/014.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"    value="14"  id="RadioGroup1_14" />
                          14</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/015.png"/>
                          <input class="radio" type="radio" name="RadioGroup1"   value="15"  id="RadioGroup1_15" />
                          15</label>
                      </li>
                      <li  >
                        <label><img src="/res/menu/016.png"/>
                          <input class="radio" type="radio" name="RadioGroup1" value="16"     id="RadioGroup1_16" />
                          16</label>
                      </li>
									</ul>
                                </div>
                                <!-- 
								<div class="tab-pane" id="relli0">
									
								</div>
								 -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script type="text/html" id="bookingoption">

</script>
<script type="text/javascript">
$(function(){
	$('.box-content').height($(window).height()-90);
	
	$('#liclickli').children('li').click(function(){
		var divid = $(this).find('a').attr('did');
		$('.tab-pane').hide();
		$(divid).fadeIn();
		$('#liclickli').children('li').removeClass('active');
		$(this).addClass('active');
	});
	
	$('#mainxztr').children('td').each(function(i){
		var picpath = '/res/mbpic/'+(i+1)+'.png';
		if($(this).attr('picpath')){
			picpath = $(this).attr('picpath');
		}
		var typ = $(this).attr('rel');
		var ul = $('#relli'+typ).children('ul').eq(1);
		var lilen = ul.children('li').size();
		ul.append('<li class="phoneareali"><label><img src="'+picpath+'"><input type="radio" name="home" value="'+i+'">模板'+(lilen+1)+'</label></li>');
		ul.children('li').eq(lilen).dblclick(function(){
			setthisone();	
		});
	});
	$('.phoneareali').click(function(){
		$('.phoneareali').removeClass('active');
		$(this).addClass('active');
	});
	
	
});
function setthisone(){
	var rad = $('input[type="radio"]:checked');
	if(rad.size<=0){
		return;
	}
	var tdind = rad.val();
	var commonhtm = $('#mainxztr').children('td').eq(parseInt(tdind)).find('.ppdiv').html();
	if(parent.endmbxz){
		parent.endmbxz(commonhtm);
	}	
}
function closethisone(){
	if(parent.endmbxz){
		parent.endmbxz('0');
	}	
}
</script>
<br/><br/><br/>


<table style="display: none;">
<tr id="mainxztr">

<!--第四十九种-->
<!-- value=75-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="mainmenu49">
        <ul class="list_ul49">
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div><p class="m_text">网站首页</p></div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div><p class="m_text">新闻中心</p></div>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!-- 15--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="page">
        <div id="news">
            <div class="news-title bgcolor add_qq_more">
                <i class="icon icon-5 m_pic"></i><a href="javascript:;" class="m_text">最新消息<div class="right-arrow"></div></a>
            </div>
            <div class="menulist">
                <a href="javascript:;" class="menu add_qq_more">
                    <div class="img"><img src="/res/wz/images/df5cd403-eac9-4512-8da8-c5f1328faf19.jpg" class="m_pic"></div>
                    <h2 class="fontcolor m_text">XXXX0927</h2>
                    <p class="summary m_desc">XXXX新版发布，应用商店火热上线</p>
                    <span class="time m_date">2013-09-28 19:44</span>
                </a>
            </div>
        </div>
        <div class="box-btn bgcolor add_qq_more">
            <a href="javascript:;"><i class="icon icon-phone m_pic"></i><div class="m_text">xxxxxxxxxxxxx</div></a>
        </div>
        <div id="mainmenu" class="fn-clear">
            <ul>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <p class="title m_text">关于xxxx</p>
                        <p class="summary m_desc">xxxxxxxxxxxxxxxxxxxxxxx</p>
                        <img src="/res/wz/images/cover1.jpg" class="m_pic">
                        <div class="right-arrow m_pic"></div>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>

<!--第四十二种--> 
<!-- value=68-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div class="war_42">
        <ul class="list_ul">
            <li class="add_qq_more">
                <a href="javascript:;">
                    <dl class="tbox">
                        <dd><span><img src="/res/wz/images/1.png" class="m_pic"></span></dd>
                        <dd class="m_text"><p>成功案例</p></dd>
                    </dl>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <dl class="tbox">
                        <dd><span><img src="/res/wz/images/1.png" class="m_pic"></span></dd>
                        <dd class="m_text"><p>升级公告</p></dd>
                    </dl>
                </a>
            </li>
        </ul>
    </div> 
</div>
</td>

<!--第二十二种-->
<!-- value=41--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="wz_20_wrapper">
        <div class="wz_20_content">
            <ul>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom m_text" type="button">XXXXX</button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom m_text" type="button">XXXXX</button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom m_text" type="button">XXXXX</button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom m_text" type="button">XXXXX</button>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
</td>

<!--第三十八种--> 
<!-- value=62-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="cate24">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj01.png" class="m_pic">
                        <p class="m_text">xxx</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj02.png" class="m_pic">
                        <p class="m_text">置家攻略</p>
                    </a>
                </li>
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj03.png" class="m_pic">
                        <p class="m_text">最新活动</p>
                    </a>
                </li>	
                <div class="clr"></div>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
</div>
</td>
<!--第三十八种多加的--> 
<!-- value=63-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="cate25">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj01.png" class="m_pic">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj02.png" class="m_pic">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj03.png" class="m_pic">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj02.png" class="m_pic">
                        <p class="m_text">联系我们</p>
                    </a>
                </li>
                <div class="clr"></div>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
</div>
</td>

<!--第二十种-->
<!-- value=39--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu20">
        <ul>
            <li class="menu-1 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">新闻动态</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-2 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                    <p class="title m_text">公司产品</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-3 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                    <p class="title m_text">客户服务</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-4 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/4.png" class="m_pic"></i>
                    <p class="title m_text">招贤纳士</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-5 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-5"><img src="/res/wz/images/05.png" class="m_pic"></i>
                    <p class="title m_text">联系我们</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-6 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">新闻动态</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-7 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                    <p class="title m_text">公司产品</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-8 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                    <p class="title m_text">客户服务</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-9 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/4.png" class="m_pic"></i>
                    <p class="title m_text">招贤纳士</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
            <li class="menu-10 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-5"><img src="/res/wz/images/05.png" class="m_pic"></i>
                    <p class="title m_text">联系我们</p>
                    <div class="right-arrow"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第十九种-->
<!-- value=38--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu19">
        <ul>
            <li class="menu-1 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">新闻</p>
                </a>
            </li>
            <li class="menu-2 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                    <p class="title m_text">产品</p>
                </a>
            </li>
            <li class="menu-3 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                    <p class="title m_text">服务</p>
                </a>
            </li>
            <li class="menu-4 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/4.png" class="m_pic"></i>
                    <p class="title m_text">期刊</p>
                </a>
            </li>
            <li class="menu-5 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-5"><img src="/res/wz/images/05.png" class="m_pic"></i>
                    <p class="title m_text">联系我们</p>
                </a>
            </li>
            <li class="menu-6 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">新闻</p>
                </a>
            </li>
            <li class="menu-7 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                    <p class="title m_text">产品</p>
                </a>
            </li>
            <li class="menu-8 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                    <p class="title m_text">服务</p>
                </a>
            </li>
            <li class="menu-9 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/4.png" class="m_pic"></i>
                    <p class="title m_text">期刊</p>
                </a>
            </li>
            <li class="menu-10 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-5"><img src="/res/wz/images/05.png" class="m_pic"></i>
                    <p class="title m_text">联系我们</p>
                </a>
            </li>
            <li class="menu-11 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">新闻</p>
                </a>
            </li>
            <li class="menu-12 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                    <p class="title m_text">产品</p>
                </a>
            </li>
            <li class="menu-13 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                    <p class="title m_text">服务</p>
                </a>
            </li>
            <li class="menu-14 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/4.png" class="m_pic"></i>
                    <p class="title m_text">期刊</p>
                </a>
            </li>
            <li class="menu-15 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-5"><img src="/res/wz/images/05.png" class="m_pic"></i>
                    <p class="title m_text">联系我们</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第十六种-->
<!-- value=35--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu15">
        <ul>
            <li class="menu-1 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-2 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-3 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-4 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-5 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-6 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-2"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-7 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-8 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-9 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-3"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="menu-10 add_qq_more">
                <a href="javascript:;">
                    <i class="icon icon-4"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第十七种-->
<!-- value=36--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu15">
        <ul>
            <li class="menu-1 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-2 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-3 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-4 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-5 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-6 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-7 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-8 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-9 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="menu-10 add_qq_more">
                <a href="javascript:;">
                    <i class="icon17 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第三十四种--> 
<!-- value=56-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="mainmenu34">
        <ul>
            <div id="insert1"></div>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/C6YElOgU4e.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">关于我们</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/X7xkmumnSP.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">微商城</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/vI6GJpGNCB.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">会员注册</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/NJkDxrmFZa.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">会员卡</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/Wj0t62iv4P.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">新品投票</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/bitgmvJ4pi.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">活动中心</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/SzP7cD6ESg.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">爆款展示</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/pH2MPuvrMp.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">分店展示</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/gFs9Pzm1EN.png" class="m_pic"></div>
                        <div class="menutitle m_text">联系我们</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/esK3XDlTDM.jpg" class="m_pic"></div>
                        <div class="menutitle m_text">在线留言</div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第三十四种多加的--> 
<!-- value=57-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="mainmenu34">
        <ul>
            <div id="insert1"></div>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/C6YElOgU4e.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">关于我们</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/X7xkmumnSP.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">微商城</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/vI6GJpGNCB.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">会员注册</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/NJkDxrmFZa.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">会员卡</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/Wj0t62iv4P.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">新品投票</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/bitgmvJ4pi.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">活动中心</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/SzP7cD6ESg.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">爆款展示</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/pH2MPuvrMp.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">分店展示</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/gFs9Pzm1EN.png" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">联系我们</div>
                    </a>
                </div>
            </li>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menuimg"><img src="/res/wz/images/esK3XDlTDM.jpg" class="m_pic"></div>
                        <div class="menutitle1 m_text" style="color: #333;font-size: 13px;">在线留言</div>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第三十三种--> 
<!-- value=55-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <ul class="mainmenu33">
        <li class="add_qq_more" style="width:49.9%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/1En6JjItm2.png" class="m_pic"><p class="menutitle">分店微信</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li> 
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/NBQyKn3wIp.jpg" class="m_pic"><p class="menutitle">会员登记</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li>
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/efxX7jKYES.jpg" class="m_pic"><p class="menutitle">好哇商场</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li> 
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/W5nTiIJoK8.jpg" class="m_pic"><p class="menutitle">使用说明</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li>
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/qivaTAGjQl.jpg" class="m_pic"><p class="menutitle">健身公告</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li>
        <li class="add_qq_more" style="width:49.9%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/8kQq3jKyCV.jpg" class="m_pic"><p class="menutitle">我要办卡</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li> 
        <li class="add_qq_more" style="width:49.9%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/wRAxcnQKml.jpg" class="m_pic"><p class="menutitle">课表查询</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li>
        <li class="add_qq_more" style="width:49.9%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/i7dw15mnaW.jpg" class="m_pic"><p class="menutitle">人才招聘</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li> 
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/oahCFa2ftL.jpg" class="m_pic"><p class="menutitle">分店介绍</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li> 
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/ItwrsKiBjX.jpg" class="m_pic"><p class="menutitle">教练风采</p></div>
                </a>
                </div>
                <a href="javascript:;"></a>
        </li>
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/gNMkSXnO7q.jpg" class="m_pic"><p class="menutitle">互动留言</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>
        </li>
        <li class="add_qq_more" style="width:25%;">
            <div class="menubtn">
                <a href="javascript:;">
                    <div class="menuimg"><img src="/res/wz/images/pV6frhnMHB.jpg" class="m_pic"><p class="menutitle">照片秀秀</p></div>
                </a>
            </div>
            <a href="javascript:;"></a>  
        </li>
        <div class="clr"></div>
    </ul>
</div>
</td>

<!--第三十六种--> 
<!-- value=59-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="nav-scontent">
        <ul id="navshow">
            <li id="nav_1">
                <a href="javascript:;" class="add_qq_more">
                    <span>
                        <p class="m_text">餐厅信息</p><small><img src="/res/wz/images/jt.png" class="m_pic"></small>
                    </span>
                </a>
                <div class="add_qq_more">
                    <a href="javascript:;" class="pic-height"><img src="/res/wz/images/pic.png" class="m_pic"></a>
                    <h6 class="m_text"><span>餐饮环境</span></h6>
                </div>
            </li>
            <li id="nav_2">
                <a href="javascript:;" class="add_qq_more">
                    <span>
                        <p class="m_text">今日特价</p><small><img src="/res/wz/images/jt.png" class="m_pic"></small>
                    </span>
                </a>
                <div class="add_qq_more">
                    <a href="javascript:;" class="pic-height"><img src="/res/wz/images/jtt.png" class="m_pic"></a>
                    <h6 class="m_text"><span>每日特价</span></h6>
                </div>
            </li>
        </ul>
        <div id="navshow2">
            <a href="javascript:;" class=" bj1 add_qq_more"><span class="m_text">精美菜单</span></a>
            <a href="javascript:;" class=" bj2 add_qq_more"><span class="m_text">会员卡</span></a>
            <a href="javascript:;" class=" bj3 add_qq_more"><span class="m_text">预约订座</span></a>
        </div>
    </div>  
</div>
</td>
<!--第三十六种多加的--> 
<!-- value=60-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="nav-scontent">
        <ul id="navshow">
            <li id="nav_1">
                <a href="javascript:;" class="add_qq_more">
                    <span>
                        <p class="m_text">餐厅信息</p><small><img src="/res/wz/images/jt.png" class="m_pic"></small>
                    </span>
                </a>
                <div class="add_qq_more">
                    <a href="javascript:;" class="pic-height"><img src="/res/wz/images/pic.png" class="m_pic"></a>
                    <h6 class="m_text"><span>餐饮环境</span></h6>
                </div>
            </li>
            <li id="nav_2">
                <a href="javascript:;" class="add_qq_more">
                    <span>
                        <p class="m_text">今日特价</p><small><img src="/res/wz/images/jt.png" class="m_pic"></small>
                    </span>
                </a>
                <div class="add_qq_more">
                    <a href="javascript:;" class="pic-height"><img src="/res/wz/images/jtt.png" class="m_pic"></a>
                    <h6 class="m_text"><span>每日特价</span></h6>
                </div>
            </li>
            <li id="nav_3">
                <a href="javascript:;" class="add_qq_more">
                    <span style="background:#A5C406;">
                        <p class="m_text">周边配套</p><small><img src="/res/wz/images/jt.png" class="m_pic"></small>
                    </span>
                </a>
                <div class="add_qq_more">
                    <a href="javascript:;" class="pic-height"><img src="/res/wz/images/jtt.png" class="m_pic"></a>
                    <h6 class="m_text"><span>餐厅地址</span></h6>
                </div>
            </li>
        </ul>
        <div id="navshow2">
            <a href="javascript:;" class=" bj1 add_qq_more"><span class="m_text">精美菜单</span></a>
            <a href="javascript:;" class=" bj2 add_qq_more"><span class="m_text">会员卡</span></a>
            <a href="javascript:;" class=" bj3 add_qq_more"><span class="m_text">预约订座</span></a>
        </div>
    </div>  
</div>
</td>

<!--第二十三种-->
<!-- value=42--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="wz_20_wrapper1">
        <div class="wz_20_content1">
            <ul>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom1 m_text" type="button">XXXXX</button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom1 m_text" type="button">XXXXX</button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom1 m_text" type="button">XXXXX</button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_20_buttom1 m_text" type="button">XXXXX</button>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
</td>

<!--第二十四种-->
<!-- value=43--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="wz_24_wrapper1">
        <div class="wz_24_content1">
            <ul>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_24_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_24_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_24_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_24_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
</td>
<!--第二十五种-->
<!-- value=44-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="wz_25_wrapper1">
        <div class="wz_25_content1">
            <ul>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_25_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_25_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_25_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_25_buttom1" type="button"><img src="/res/wz/images/1.png" class="m_pic"><span class="m_text">XXXXX</span></button>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
</td>
<!--第二十六种-->
<!-- value=45-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="mainmenu26" style="position:absolute;top:20px;">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第二十六种多加的-->
<!-- value=46-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="mainmenu26" style="position:absolute;bottom:20px;">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_26_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第二十七种-->
<!-- value=47-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="mainmenu27" style="position:absolute;top:20px;">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第二十七种多加的-->
<!-- value=48-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="mainmenu27" style="position:absolute;bottom:20px;">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <button class="wz_27_buttom m_text" type="button">XXXXX</button>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第三十二种--> 
<!-- value=53-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div class="wz_32_wrapper">
        <div class="wz_32_content">
            <ul>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_32_buttom m_text" type="button">XXXXX</button> 
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_32_buttom m_text" type="button">XXXXX简介内容</button> 
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_32_buttom m_text" type="button">XXXXX业务代理价格</button> 
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_32_buttom m_text" type="button">XXXXX总公司代理机构分支结构</button> 
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
</td>
<!--第三十二种多加的--> 
<!-- value=54-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="wz_322_wrapper">
        <div class="wz_322_content">
            <ul>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_322_buttom m_text" type="button">XXXXX</button> 
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_322_buttom m_text" type="button">XXXXX简介内容</button> 
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_322_buttom m_text" type="button">XXXXX业务代理价格</button> 
                    </li>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <li>
                        <button class="wz_322_buttom m_text" type="button">XXXXX总公司代理机构分支结构</button> 
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>
</td>

<!--第三十五种--> 
<!-- value=58-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="car_content">
        <ul class="nav_links">
            <li class="add_qq_more"><a href="javascript:;" class="m_text">关于我们</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="m_text">XXX欣赏</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="m_text">360度全景看车</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="m_text">实用小工具</a></li>
        </ul>
        <ul class="ofh ul_list">
            <li class="car_list add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/car-list.png" class="m_pic">
                    <label class="m_text">XXX车型</label>
                </a>
            </li>
            <li class="car_list add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/car-list.png" class="m_pic">
                    <label class="m_text">最新资讯</label>
                </a>
            </li>
            <li class="car_list add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/car-list.png" class="m_pic">
                    <label class="m_text">预约试驾</label>
                </a>
            </li>
            <li class="car_list add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/car-list.png" class="m_pic">
                    <label class="m_text">优惠活动</label>
                </a>
            </li>
            <li class="car_list add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/car-list.png" class="m_pic">
                    <label class="m_text">车主关怀</label>
                </a>
            </li>
            <li class="car_list add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/car-list.png" class="m_pic">
                    <label class="m_text">联系销售</label>
                </a>
            </li> 
        </ul>
        <div class="car-b add_qq_more"><a href="javascript:;"><img src="/res/wz/images/car-b.jpg" class="m_pic"></a></div>
    </div>   
</div>
</td>

<!--第四十三种--> 
<!-- value=69-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div class="cate_list">
        <div class="cate_lo add_qq_more">
            <a href="javascript:;">
                <p class="m_text">促销活动</p>
                <p class="m_desc" style="font-size:12px;">实惠抢先看，好礼不断</p>
                <p style="text-align:right;"><img src="/res/wz/images/9_2.png" class="m_pic"></p>
            </a>
        </div>	
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">
                <p style="text-align:center;"><img src="/res/wz/images/7_2.png" class="m_pic"></p>
                <p class="m_text">关于我们</p>
            </a>
        </div>
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">
                <p style="text-align:center;"><img src="/res/wz/images/8_3.png" class="m_pic"></p>
                <p class="m_text">购物导视</p>
            </a>
        </div>
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">
                <p style="text-align:center;"><img src="/res/wz/images/7_7.png" class="m_pic"></p>
                <p class="m_text">新闻动态</p>
            </a>
        </div>	
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">
                <p style="text-align:center;"><img src="/res/wz/images/10_7.png" class="m_pic"></p>
                <p class="m_text">新闻动态</p>
            </a>
        </div>
        <div class="cate_lol add_qq_more">
            <a href="javascript:;">
                <p style="text-align:right;"><img src="/res/wz/images//001.png" class="m_pic"></p>
            </a>
        </div>
        <div class="cate_lor add_qq_more">
            <a href="javascript:;">
                <p style="text-align:right;"><img src="/res/wz/images//002.png" class="m_pic"></p>
            </a>
        </div>
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">								
                <p style="text-align:center;"><img src="/res/wz/images//2_2.png" class="m_pic"></p>
                <p class="m_text">新闻动态</p>
            </a>
        </div>	
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">								
                <p style="text-align:center;"><img src="/res/wz/images//9_7.png" class="m_pic"></p>
                <p class="m_text">新闻动态</p>
            </a>
        </div>	
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">								
                <p style="text-align:center;"><img src="/res/wz/images//2_5.png" class="m_pic"></p>
                <p class="m_text">新闻动态</p>
            </a>
        </div>	
        <div class="cate_lp add_qq_more">
            <a href="javascript:;">								
                <p style="text-align:center;"><img src="/res/wz/images//10_1.png" class="m_pic"></p>
                <p class="m_text">新闻动态</p>
            </a>
        </div>		
    </div>
</div>
</td>

<!--第三十九种--> 
<!-- value=64-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div class="listcon_39">
        <div class="navboxL39me add_qq_more">
            <div style="width:50%;float:left;">
                <a href="javascript:;" class="lest-01"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">最新资讯</span></a>
            </div>
            <div style="width:40%;float:right;text-align: right;margin-right:8px">
                <a href="javascript:;"><span style="float:left;width:100%;height:24px;text-align: right;"><font color="red" size="1">更多&gt;&gt;</font></span></a>
            </div>
        </div>
        <ul class="navboxL39">
            <li class="add_qq_more">
                <a href="javascript:;">
                        <img class="item-image1 m_pic" src="/res/wz/images/moren75.jpg">
                        <h5 class="tpl-cate-title1 m_text">最新互动活动</h5>
                        <p class="tpl-cate-summary1 m_desc">最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                        <h5 class="tpl-cate-title1 m_text" style="width: 96%;overflow: hidden;">最新互动活动</h5>
                        <p class="tpl-cate-summary1 m_desc" style="width: 96%;">最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动</p>
                </a>
            </li>
        </ul>
        <div id="mainmenu39">
            <ul>
                <li class="menu-1 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-2 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-2"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-3 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-3"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-4 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-4"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-5 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-6 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-2"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-7 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-3"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-8 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-4"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-9 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-3"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
                <li class="menu-10 add_qq_more">
                    <a href="javascript:;">
                        <i class="icon icon-4"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">xxxxxxxx</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>


<!--第四十种--> 
<!-- value=65-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div id="pagewarp">
            <div class="banner40 slide40">
                <ul>
                    <li class="add_qq_more"><a href="javascript:;"><img src="/res/wz/images/slide.jpg" style="width:100%;" class="m_pic"></a></li>
                </ul>
                <div class="logo40 add_qq_more"><a href="javascript:;"><img src="/res/wz/images/logo.jpg" class="m_pic"></a></div>
                <div class="prolife add_qq_more"><a href="javascript:;"><h3 class="wenzi40 m_text">公司简介</h3></a></div>
        	</div>
            <div class="tema">
                <dl>
                    <dt>
                    <ul>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">最新业绩</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">新闻媒体</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">会议活动</a></li>
                    </ul>
                    </dt>
                    <dd class="add_qq_more" style="float:left;"><a href="javascript:;"><img src="/res/wz/images/tame.png" style="width:100%;" class="m_pic"></a></dd>
                </dl>
            </div>
            <div class="meeting" style="margin-bottom:55px;">
                <dl>
                  <dd  class="add_qq_more" style="float:left;"><a href="javascript:;"><img src="/res/wz/images/meeting.png" style="width:100%;" class="m_pic"></a></dd>
                    <dt>
                    <ul>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">研究课题</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">法律咨询</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">公司荣誉</a></li>
                    </ul>
                    </dt>
                </dl>
            </div>
    </div>
    <div class="nav40" fixed="fixed">
        <ul class="box40">
            <li class="home40 add_qq_more" style="width:45px;"><a href="javascript:;" class="home40-img"><img src="/res/wz/images/home.png" class="m_pic" width="45" height="47"></a></li>
            <li class="add_qq_more"><a href="javascript:;" class="help40"><img src="/res/wz/images/tel.png" class="m_pic"></a><a class="m_text" href="javascript:;">电话</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="help40"><img src="/res/wz/images/add.png" class="m_pic"></a><a class="m_text" href="javascript:;">地址</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="help40"><img src="/res/wz/images/help.png" class="m_pic"></a><a class="m_text" href="javascript:;">帮助</a></li>
        </ul>
    </div>   
</div>
</td>
<!--第四十种多加的--> 
<!-- value=66-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div id="pagewarp">
            <div class="banner40 slide40" style="min-height:0px;z-index:666666;">
                <div class="logo40 add_qq_more"><a href="javascript:;"><img src="/res/wz/images/logo.jpg" class="m_pic"></a></div>
                <div class="prolife add_qq_more"><a href="javascript:;"><h3 class="wenzi40 m_text">公司简介</h3></a></div>
        	</div>
            <div class="tema">
                <dl>
                    <dt>
                    <ul>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">最新业绩</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">新闻媒体</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">会议活动</a></li>
                    </ul>
                    </dt>
                    <dd class="add_qq_more" style="float:left;"><a href="javascript:;"><img src="/res/wz/images/tame.png" style="width:100%;" class="m_pic"></a></dd>
                </dl>
            </div>
            <div class="meeting" style="margin-bottom:55px;">
                <dl>
                  <dd  class="add_qq_more" style="float:left;"><a href="javascript:;"><img src="/res/wz/images/meeting.png" style="width:100%;" class="m_pic"></a></dd>
                    <dt>
                    <ul>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">研究课题</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">法律咨询</a></li>
                        <li class="add_qq_more"><a href="javascript:;" class="m_text">公司荣誉</a></li>
                    </ul>
                    </dt>
                </dl>
            </div>
    </div>
    <div class="nav40" fixed="fixed">
        <ul class="box40">
            <li class="home40 add_qq_more" style="width:45px;"><a href="javascript:;" class="home40-img"><img src="/res/wz/images/home.png" class="m_pic" width="45" height="47"></a></li>
            <li class="add_qq_more"><a href="javascript:;" class="help40"><img src="/res/wz/images/tel.png" class="m_pic"></a><a class="m_text" href="javascript:;">电话</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="help40"><img src="/res/wz/images/add.png" class="m_pic"></a><a class="m_text" href="javascript:;">地址</a></li>
            <li class="add_qq_more"><a href="javascript:;" class="help40"><img src="/res/wz/images/help.png" class="m_pic"></a><a class="m_text" href="javascript:;">帮助</a></li>
        </ul>
    </div>   
</div>
</td>

<!-- value=0--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">

<div class="weimob-page" style="display:block;">
    <div class="weimob-content">  	
        <div class="weimob-list">
            <a class="weimob-list-item add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bg">
                    <div><img  src="/res/wz/images/01.jpg" style="width:100%;" class="m_pic"></div>
                    <div class="weimob-list-item-box">
                        <div class="weimob-list-item-line">
                            <div class="weimob-list-item-title m_text">热门场景</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-item add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bg">
                    <div><img src="/res/wz/images/02.jpg" style="width:100%;" class="m_pic"></div>
                    <div class="weimob-list-item-box">
                        <div class="weimob-list-item-line">
                            <div class="weimob-list-item-title m_text">刮刮卡</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-item add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bg">
                    <div><img src="/res/wz/images/03.jpg" style="width:100%;" class="m_pic"></div>
                    <div class="weimob-list-item-box">
                        <div class="weimob-list-item-line">
                            <div class="weimob-list-item-title m_text">联系方式</div>
                        </div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-item add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bg">
                    <div><img src="/res/wz/images/04.jpg" style="width:100%;" class="m_pic"></div>
                    <div class="weimob-list-item-box">
                        <div class="weimob-list-item-line">
                            <div class="weimob-list-item-title m_text">团购套餐</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

</div>
</td>

<!-- 6--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">

<div class="weiba-page" style="display: block;">  
    <div class="weiba-content">
        <div class="mainconbox tpl-catelist">
            <div class="navbox tpl-catelist-item add_qq_more">
                <a href="javascript:;" class=" nav0">
                    <div>
                        <img class="item-image m_pic" src="/res/wz/images/list01.png">
                        <h5 class="tpl-cate-title m_text">优惠活动</h5>
                        <p class="tpl-cate-summary m_desc">互动活动 回馈客户</p>
                    </div>
                </a>
            </div><div class="navbox tpl-catelist-item add_qq_more">
                <a href="javascript:;" class=" nav1">
                    <div>
                        <img class="item-image m_pic" src="/res/wz/images/list02.png">
                        <h5 class="tpl-cate-title m_text">公司简介</h5>
                        <p class="tpl-cate-summary m_desc">万达国际公司主要简介</p>
                    </div>
                </a>
            </div><div class="navbox tpl-catelist-item add_qq_more">
                <a href="javascript:;" class=" nav0">
                    <div>
                        <img class="item-image m_pic" src="/res/wz/images/list03.png">
                        <h5 class="tpl-cate-title m_text">每日提示</h5>
                        <p class="tpl-cate-summary m_desc">每日具体提示</p>
                    </div>
                </a>
            </div><div class="navbox tpl-catelist-item add_qq_more">
                <a href="javascript:;" class=" nav1">
                    <div>
                        <img class="item-image m_pic" src="/res/wz/images/list04.png">
                        <h5 class="tpl-cate-title m_text">正在推广</h5>
                        <p class="tpl-cate-summary m_desc">万达推广产品介绍</p>
                    </div>
                </a>
            </div><div class="navbox tpl-catelist-item add_qq_more">
                <a href="javascript:;" class=" nav0">
                    <div>
                        <img class="item-image m_pic" src="/res/wz/images/list05.png">
                        <h5 class="tpl-cate-title m_text">即将推出</h5>
                        <p class="tpl-cate-summary m_desc">万达即将推出产品介绍</p>
                    </div>
                </a>
            </div><div class="navbox tpl-catelist-item add_qq_more">
                <a href="javascript:;" class=" nav1">
                    <div>
                        <img class="item-image m_pic" src="/res/wz/images/list06.png">
                        <h5 class="tpl-cate-title m_text">近期优惠</h5>
                        <p class="tpl-cate-summary m_desc">公司近期优惠活动</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>

</div>
</td>

<!-- 7--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">

<div class="weiba-page1" style="display: block;">  
    <div class="weiba-content1">
        <div class="mainconbox1 tpl-catelist1">
            <div class="navbox1 tpl-catelist-item1 add_qq_more">
                <a href="javascript:;" class=" nav01">
                    <div>
                        <img class="item-image1 m_pic" src="/res/wz/images/list01.png">
                        <h5 class="tpl-cate-title1 m_text">优惠活动</h5>
                        <p class="tpl-cate-summary1 m_desc">互动活动 回馈客户</p>
                    </div>
                </a>
            </div><div class="navbox1 tpl-catelist-item1 add_qq_more">
                <a href="javascript:;" class=" nav01">
                    <div>
                        <img class="item-image1 m_pic" src="/res/wz/images/list02.png">
                        <h5 class="tpl-cate-title1 m_text">公司简介</h5>
                        <p class="tpl-cate-summary1 m_desc">万达国际公司主要简介</p>
                    </div>
                </a>
            </div><div class="navbox1 tpl-catelist-item1 add_qq_more">
                <a href="javascript:;" class=" nav01">
                    <div>
                        <img class="item-image1 m_pic" src="/res/wz/images/list03.png">
                        <h5 class="tpl-cate-title1 m_text">每日提示</h5>
                        <p class="tpl-cate-summary1 m_desc">每日具体提示</p>
                    </div>
                </a>
            </div><div class="navbox1 tpl-catelist-item1 add_qq_more">
                <a href="javascript:;" class=" nav01">
                    <div>
                        <img class="item-image1 m_pic" src="/res/wz/images/list04.png">
                        <h5 class="tpl-cate-title1 m_text">正在推广</h5>
                        <p class="tpl-cate-summary1 m_desc">万达推广产品介绍</p>
                    </div>
                </a>
            </div><div class="navbox1 tpl-catelist-item1 add_qq_more">
                <a href="javascript:;" class=" nav01">
                    <div>
                        <img class="item-image1 m_pic" src="/res/wz/images/list05.png">
                        <h5 class="tpl-cate-title1 m_text">即将推出</h5>
                        <p class="tpl-cate-summary1 m_desc">万达即将推出产品介绍</p>
                    </div>
                </a>
            </div><div class="navbox1 tpl-catelist-item1 add_qq_more">
                <a href="javascript:;" class=" nav01">
                    <div>
                        <img class="item-image1 m_pic" src="/res/wz/images/list06.png">
                        <h5 class="tpl-cate-title1 m_text">近期优惠</h5>
                        <p class="tpl-cate-summary1 m_desc">公司近期优惠活动</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="clear"></div>
    </div>
</div>


</div>
</td>

<!--第二十一种-->
<!-- value=40--> 
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu21">
        <div class="menu21N">
            <div class="firstmenu">
                <a href="javascript:;" class="add_qq_more">
                    <div class="nr21main">
                        <i class="icon21 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">新闻动态</p>
                    </div>
                </a>
                <a href="javascript:;" class="zjline add_qq_more">
                    <div class="nr21main">
                        <i class="icon21 icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                        <p class="title m_text">公司产品</p>
                    </div>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <div class="nr21main">
                        <i class="icon21 icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                        <p class="title m_text">客户服务</p>
                    </div>
                </a>
            </div>
            <ul class="firstmenu add_qq_more">
                <a href="javascript:;" style="width:100%;"><i class="icon icon-phone m_pic"></i><div class="m_text" style="height:30px;line-height:30px;">xxxxxxxxxxxx</div></a>
            </ul>
            <ul class="secondmenu">
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                        <p class="title m_text">招贤纳士</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                        <p class="title m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>


<!--第二十八种--> 
<!-- value=49-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div id="mainmenu28">
        <ul class="firstmenu add_qq_more">
            <a href="javascript:;" style="width:100%;"><i class="icon icon-phone m_pic"></i><div class="m_text" style="height:30px;line-height:30px;">xxxxxxxxxxx</div></a>
        </ul>
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="text-cont">
                        <p class="title m_text">新闻</p>
                        <p class="summary m_desc">新闻</p>
                        <div class="right-arrow"></div>
                    </div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="text-cont">
                        <p class="title m_text">产品</p>
                        <p class="summary m_desc">产品</p>
                        <div class="right-arrow"></div>
                    </div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="text-cont">
                        <p class="title m_text">服务</p>
                        <p class="summary m_desc">服务</p>
                        <div class="right-arrow"></div>
                    </div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="text-cont">
                        <p class="title m_text">期刊</p>
                        <p class="summary m_desc">期刊</p>
                        <div class="right-arrow"></div>
                    </div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="text-cont">
                        <p class="title m_text">联系我们</p>
                        <p class="summary m_desc">联系我们</p>
                        <div class="right-arrow"></div>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第二十九种--> 
<!-- value=50-->
<td align="center" valign="top" rel="0">
<div style="width:320px;" class="ppdiv">
    <div id="mainmenu29">
        <ul class="firstmenu add_qq_more">
            <a href="javascript:;" style="width:100%;"><i class="icon icon-phone m_pic"></i><div class="m_text" style="height:30px;line-height:30px;">xxxxxxxxxxx</div></a>
        </ul>
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="text-cont">
                        <p class="title m_text">新闻</p>
                        <p class="summary m_desc">新闻</p>
                        <i class="icon icon-green-1"><img src="/res/wz/images/list_1.png"></i>
                    </div>
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="line"></div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="text-cont">
                        <p class="title m_text">产品</p>
                        <p class="summary m_desc">产品</p>
                        <i class="icon icon-gray-2"><img src="/res/wz/images/list_2.png"></i>
                    </div>
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="line"></div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="text-cont">
                        <p class="title m_text">服务</p>
                        <p class="summary m_desc">服务</p>
                        <i class="icon icon-green-3"><img src="/res/wz/images/list_3.png"></i>
                    </div>
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="line"></div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="text-cont">
                        <p class="title m_text">期刊</p>
                        <p class="summary m_desc">期刊</p>
                        <i class="icon icon-gray-4"><img src="/res/wz/images/list_4.png"></i>
                    </div>
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="line"></div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <div class="text-cont">
                        <p class="title m_text">联系我们</p>
                        <p class="summary m_desc">联系我们</p>
                        <i class="icon icon-green-5"><img src="/res/wz/images/list_5.png"></i>
                    </div>
                    <div class="img-cont">
                        <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    </div>
                    <div class="line"></div>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>


<!--第四十七种-->
<!-- value=73-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="mainmenu47">
        <div class="header47 add_qq_more">
            <a href="javascript:;" class="tel47"><span class="m_text">电话:xxxxxxxxxx</span><span style="float:right;height:20px;"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span></a>
        </div>
        <ul class="list_ul47">
            <li class="add_qq_more">
                <a href="javascript:;" class="box47">
                    <div><img src="/res/wz/images/picde.jpg" class="m_pic"></div>
                    <div><p class="m_text">首页</p></div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;" class="box47">
                    <div><img src="/res/wz/images/picde.jpg" class="m_pic"></div>
                    <div><p class="m_text">企业动态</p></div>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第四十六种-->
<!-- value=72-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="mainmenu46">
        <a class="list-item _C0 _L0 add_qq_more" href="javascript:;" style="width:33%;float:left;">
            <div class="item-title" style="width:100%;"><div class="title-text m_text">最新资讯</div></div>
        </a>
        <a class="list-item _C0 _L0 add_qq_more" href="javascript:;" style="width:66.4%;float:right;">
            <div class="item-image" style="width:100%;">
                <div class="cenimg"><img src="/res/wz/images/cover10.jpg" class="m_pic"></div>
                <div class="item_title2 m_text">最新资讯</div>
            </div>
        </a>
        <a class="list-item  _C1 add_qq_more" href="javascript:;">
            <div class="item-title"><div class="title-text m_text">最新资讯</div></div>
            <div class="item-image"></div>
        </a>
        <a class="list-item  _C2 add_qq_more" href="javascript:;">
            <div class="item-title"><div class="title-text m_text">最新资讯</div></div>
            <div class="item-image"></div>
        </a>
        <a class="list-item  _C3 add_qq_more" href="javascript:;">
            <div class="item-title"><div class="title-text m_text">优惠资讯</div></div>
            <div class="item-image"></div>
         </a>
         <a class="list-item _C0 _L1 add_qq_more" href="javascript:;" style="width:33%;float:right;">
             <div class="item-title" style="width:100%;"><div class="title-text m_text">精彩视频</div></div>
         </a>
         <a class="list-item _C0 _L1 add_qq_more" href="javascript:;" style="width:66.4%;float:left;">
             <div class="item-image" style="width:100%;">
                 <div class="cenimg"><img src="/res/wz/images/cover10.jpg" class="m_pic"></div>
                 <div class="item_title2 m_text">精彩视频</div>
             </div>
         </a>
         <a class="list-item  _C1 add_qq_more" href="javascript:;">
             <div class="item-title"><div class="title-text m_text">精彩视频</div></div>
             <div class="item-image"></div>
         </a>
         <a class="list-item  _C2 add_qq_more" href="javascript:;">
             <div class="item-title"><div class="title-text m_text">精彩视频</div></div>
             <div class="item-image"></div>
         </a>
         <a class="list-item  _C3 add_qq_more" href="javascript:;">
             <div class="item-title"><div class="title-text m_text">精彩视频</div></div>
             <div class="item-image"></div>
         </a>
    </div>
</div>
</td>

<!--第四十八种-->
<!-- value=74-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="mainmenu48">
        <ul class="list_ul48">
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">应用导航</span></a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">精品微信</span></a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">会员互动</span></a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">移动商城</span></a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">关于平台</span></a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">发型欣赏</span></a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;"><span class="ul48pic"><img src="/res/wz/images/icon-phone1.png" class="m_pic"></span><span class="ul48zi m_text">精品再读</span></a>
            </li>   
        </ul>
    </div>
</div>
</td>


<!--第三十七种--> 
<!-- value=61    pic39-->
<td align="center" valign="top" rel="0">
<div style="width:320px;position:relative;height:737px;" class="ppdiv">
    <div id="cate23">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj01.png" class="m_pic">
                        <p class="m_text">xxx</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj02.png" class="m_pic">
                        <p class="m_text">置家攻略</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj03.png" class="m_pic">
                        <p class="m_text">最新活动</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/jj04.png" class="m_pic">
                        <p class="m_text">更多惊喜</p>
                    </a>
                </li>		
                <div class="clr"></div>
            </ul>
        </div>
        <div class="catemenu">
            <a href="javascript:;" class="add_qq_more">
                <div class="cname"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">xxx旗舰店|名店推荐</span></div>
            </a>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text"><font color="red">更多...</font></span></a>
                </li>
            </ul>
        </div>
        <div class="catemenu">
            <a href="javascript:;" class="add_qq_more">
                <div class="cname"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">xxx旗舰店|名店推荐</span></div>
            </a>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text"><font color="red">更多...</font></span></a>
                </li>
            </ul>
        </div>
        <div class="catemenu">
            <a href="javascript:;" class="add_qq_more">
                <div class="cname"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">xxx旗舰店|名店推荐</span></div>
            </a>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text"><font color="red">更多...</font></span></a>
                </li>
            </ul>
        </div>
        <div class="catemenu">
            <a href="javascript:;" class="add_qq_more">
                <div class="cname"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">xxx旗舰店|名店推荐</span></div>
            </a>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text"><font color="red">更多...</font></span></a>
                </li>
            </ul>
        </div>
        <div class="catemenu">
            <a href="javascript:;" class="add_qq_more">
                <div class="cname"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">xxx旗舰店|名店推荐</span></div>
            </a>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text"><font color="red">更多...</font></span></a>
                </li>
            </ul>
        </div>
        <div class="catemenu">
            <a href="javascript:;" class="add_qq_more">
                <div class="cname"><img src="/res/wz/images/jj05.png" class="m_pic"><span class="m_text">xxx旗舰店|名店推荐</span></div>
            </a>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">功匠工房实木</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">乔蒂亚印尼街</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">新悦板木家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">玛润奇家具</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
            </ul>
            <ul>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">杜莎美式家具</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">愉悦玫瑰</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text">艺家百年韩式</span></a>
                </li>
                <li>
                    <a href="javascript:;" class="add_qq_more"><span class="m_text"><font color="red">更多...</font></span></a>
                </li>
            </ul>
        </div>
        <div class="clr"></div>
    </div>
</div>
</td>


<!--第四十四种-->
<!-- value=70-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu44">
        <div class="menu44N">
            <div class="firstmenu">
                <a href="javascript:;" class="add_qq_more">
                    <div class="nr44main">
                        <i class="icon44 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">新闻动态</p>
                    </div>
                </a>
                <a href="javascript:;" class="zjline add_qq_more">
                    <div class="nr44main">
                        <i class="icon44 icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                        <p class="title m_text">公司产品</p>
                    </div>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <div class="nr44main">
                        <i class="icon44 icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                        <p class="title m_text">客户服务</p>
                    </div>
                </a>
            </div>
            <ul class="firstmenu add_qq_more">
                <a href="javascript:;" style="width:100%;"><i class="icon icon-phone m_pic"></i><div class="m_text" style="height:30px;line-height:30px;">xxxxxxxxxxxx</div></a>
            </ul>
            <ul class="secondmenu">
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover11.jpg" class="m_pic">
                        <p class="title m_text">招贤纳士</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover11.jpg" class="m_pic">
                        <p class="title m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>
<!--第四十五种-->
<!-- value=71-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu45">
        <div class="menu45N">
            <div class="firstmenu">
                <a href="javascript:;" class="add_qq_more">
                    <div class="nr45main">
                        <i class="icon45 icon-1"><img src="/res/wz/images/1.png" class="m_pic"></i>
                        <p class="title m_text">新闻动态</p>
                    </div>
                </a>
                <a href="javascript:;" class="zjline add_qq_more">
                    <div class="nr45main">
                        <i class="icon45 icon-2"><img src="/res/wz/images/2.png" class="m_pic"></i>
                        <p class="title m_text">公司产品</p>
                    </div>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <div class="nr45main">
                        <i class="icon45 icon-3"><img src="/res/wz/images/3.png" class="m_pic"></i>
                        <p class="title m_text">客户服务</p>
                    </div>
                </a>
            </div>
            <ul class="firstmenu add_qq_more">
                <a href="javascript:;" style="width:100%;"><i class="icon icon-phone m_pic"></i><div class="m_text" style="height:30px;line-height:30px;">xxxxxxxxxxxx</div></a>
            </ul>
            <ul class="secondmenu">
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover11.jpg" class="m_pic">
                        <p class="title m_text">招贤纳士</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover11.jpg" class="m_pic">
                        <p class="title m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>

<!--第五十种-->
<!-- value=76-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu50">
        <div class="menu50N">
            <ul class="secondmenu">
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover11.jpg" class="m_pic">
                        <p class="title m_text">招贤纳士</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/cover11.jpg" class="m_pic">
                        <p class="title m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <div id="cate50" fixed="fixed">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>




<!-- rel 1 -->

<!-- value=16   pic:43--> 
<!--第一种-->
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="cate5" class="wrap">
        <ul class="mainmenu">
            <li class="add_qq_more"><a href="javascript:;">
                    <div class="menubtn">
                        <div class="menumesg">
                            <div class="menuimg">
                                <div class="menuimg2">
                                    <img src="/res/wz/images/moren.jpg" class="m_pic">
                                </div>
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                            <div class="menutext m_desc">XXXXX往期内容,查看更多信息。</div>
                        </div>
                    </div>
                </a>
            </li> 
            <li class="add_qq_more"><a href="javascript:;">
                    <div class="menubtn">
                        <div class="menumesg">
                            <div class="menuimg">
                                <div class="menuimg2">
                                    <img src="/res/wz/images/moren.jpg" class="m_pic">
                                </div>
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                            <div class="menutext m_desc">XXXXX往期内容,查看更多信息。</div>
                        </div>
                    </div>
                </a>
            </li> 
            <div class="clr"></div>
        </ul>
    </div>
</div>
</td>

<!--第二种-->
<!-- value=17 --> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="main2">
        <ul>
            <li id="m1" class="add_qq_more">
                <div>
                    <a href="javascript:;">
                        <span class="icon2"><img src="/res/wz/images/moren134.jpg" class="m_pic"></span>
                        <span class="title m_text">XXXXX</span>
                    </a>
                </div>
            </li>
            <li id="m1" class="add_qq_more">
                <div>
                    <a href="javascript:;">
                        <span class="icon2"><img src="/res/wz/images/moren134.jpg" class="m_pic"></span>
                        <span class="title m_text">XXXXX</span>
                    </a>
                </div>
            </li>
            <li id="m1" class="add_qq_more">
                <div>
                    <a href="javascript:;">
                        <span class="icon2"><img src="/res/wz/images/moren134.jpg" class="m_pic"></span>
                        <span class="title m_text">XXXXX</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>

</div>
</td>

<!--第六种-->
<!-- value=22--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="content4">
        <ul>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
            <div class="clr"></div>
        </ul>
    </div>
</div>
</td>
<!--第六种多加的-->
<!-- value=23--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="content44">
        <ul>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
            <div class="clr"></div>
        </ul>
    </div>
</div>
</td>
<!--第七种-->
<!-- value=24--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="wz_17_wrapper">
        <div class="wz_17_line add_qq_more">
             <a href="javascript:;">
                 <div class="wz_17_text wz_17_color_01 wz_17_flat_left m_text">XXXXX</div>
                 <div class="wz_17_img "><img src="/res/wz/images/moren210.jpg" class="m_pic"></div>
             </a>
             <div class="clfl"></div>
        </div>
        <div class="wz_17_line add_qq_more">
            <a href="javascript:;">
                 <div class="wz_17_text wz_17_color_02 wz_17_flat_right m_text">XXXXX</div>
                 <div class="wz_17_img "><img src="/res/wz/images/moren210.jpg" class="m_pic"></div>
             </a>
         </div>
         <div class="wz_17_line add_qq_more">
             <a href="javascript:;">
                 <div class="wz_17_text wz_17_color_03 wz_17_flat_left m_text">XXXXX</div>
                 <div class="wz_17_img "><img src="/res/wz/images/moren210.jpg" class="m_pic"></div>
             </a>
             <div class="clfl"></div>
        </div>
        <div class="wz_17_line add_qq_more">
            <a href="javascript:;">
                 <div class="wz_17_text wz_17_color_04 wz_17_flat_right m_text">XXXXX</div>
                 <div class="wz_17_img "><img src="/res/wz/images/moren210.jpg" class="m_pic"></div>
             </a>
         </div>
    </div>
</div>
</td>

<!--第八种-->
<!-- value=26--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="todayList">
        <ul class="todayList" style="margin-left:0px;">
            <li class="only4 add_qq_more">
                <a href="javascript:;">
                    <div class="img">
                        <img src="/res/wz/images/moren.jpg" class="m_pic">
                    </div>
                    <h2 class="m_text">XXXXX</h2>
                    <p class="onlyheight m_desc">XXXXX往期内容,查看更多信息。</p><span class="icon">&nbsp;</span>
                </a>
            </li>
        </ul>
	</div>
</div>
</td>

<!--第十种-->
<!-- value=27--> 
<td align="center" valign="top" rel="1">
<div style="width:320px;" class="ppdiv">
    <div class="wz13_content">
        <a href="javascript:;" class="add_qq_more">
            <div class="content_big_out">
                <div>
                    <div>
                        <div class="content_smm_one1">
                            <img src="/res/wz/images/moren.jpg" class="m_pic">
                        </div>
                        <div class="content_smm_two">
                            <span class="m_text" style="font-size: 12px;font-weight:bold;">XXXXX</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="javascript:;" class="add_qq_more">
            <div class="content_big_out">
                <div>
                    <div>
                        <div class="content_smm_one1">
                            <img src="/res/wz/images/moren.jpg" class="m_pic">
                        </div>
                        <div class="content_smm_two">
                            <span class="m_text" style="font-size: 12px;font-weight:bold;">XXXXX</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a href="javascript:;" class="add_qq_more">
            <div class="content_big_out">
                <div>
                    <div>
                        <div class="content_smm_one1">
                            <img src="/res/wz/images/moren.jpg" class="m_pic">
                        </div>
                        <div class="content_smm_two">
                            <span class="m_text" style="font-size: 12px;font-weight:bold;">XXXXX</span>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
</div>
</td>
<!--第十一种-->
<!-- value=28--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="main11">
        <ul>
            <li id="m1" class="add_qq_more">
                <div>
                    <a href="javascript:;">
                        <span class="icon11"><img src="/res/wz/images/moren88.jpg" class="m_pic"></span>
                        <span class="title m_text">精彩推荐</span>
                    </a>
                </div>
            </li>
            <li id="m1" class="add_qq_more">
                <div>
                    <a href="javascript:;">
                        <span class="icon11"><img src="/res/wz/images/moren88.jpg" class="m_pic"></span>
                        <span class="title m_text">精彩推荐</span>
                    </a>
                </div>
            </li>
            <li id="m1" class="add_qq_more">
                <div>
                    <a href="javascript:;">
                        <span class="icon11"><img src="/res/wz/images/moren88.jpg" class="m_pic"></span>
                        <span class="title m_text">精彩推荐</span>
                    </a>
                </div>
            </li>
        </ul>
    </div>
</div>
</td>



<!--第十四种-->
<!-- value=31--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu16">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第十八种-->
<!-- value=37--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu18">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>


<!--第十四种多加的只有图-->
<!-- value=32--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu16">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第十五种-->
<!-- value=33--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu1">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                    <p class="summary m_desc">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第十五种多加的-->
<!-- value=34--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu155">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <div class="text-cont bgcolor">
                        <p class="title m_text">XXXXX</p>
                        <p class="summary m_desc">XXXXX</p>
                    </div>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <div class="text-cont bgcolor">
                        <p class="title m_text">XXXXX</p>
                        <p class="summary m_desc">XXXXX</p>
                    </div>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!-- 5--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">


<div class="weimob-page" style="display:block;">
    <div class="weimob-content">
        <div class="weimob-list">
            <a class="weimob-list-itemC add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bgC">
                    <img  src="/res/wz/images/01.jpg"  class="m_pic">
                </div>
                <div class="weimob-list-item-boxC">
                    <div class="weimob-list-item-lineC">
                        <div class="weimob-list-item-titleC m_text">热门场景</div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-itemC add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bgC">
                    <img  src="/res/wz/images/01.jpg"  class="m_pic">
                </div>
                <div class="weimob-list-item-boxC">
                    <div class="weimob-list-item-lineC">
                        <div class="weimob-list-item-titleC m_text">热门场景</div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-itemC add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bgC">
                    <img  src="/res/wz/images/01.jpg"  class="m_pic">
                </div>
                <div class="weimob-list-item-boxC">
                    <div class="weimob-list-item-lineC">
                        <div class="weimob-list-item-titleC m_text">热门场景</div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-itemC add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bgC">
                    <img  src="/res/wz/images/01.jpg"  class="m_pic">
                </div>
                <div class="weimob-list-item-boxC">
                    <div class="weimob-list-item-lineC">
                        <div class="weimob-list-item-titleC m_text">热门场景</div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-itemC add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bgC">
                    <img  src="/res/wz/images/01.jpg"  class="m_pic">
                </div>
                <div class="weimob-list-item-boxC">
                    <div class="weimob-list-item-lineC">
                        <div class="weimob-list-item-titleC m_text">热门场景</div>
                    </div>
                </div>
            </a>
            <a class="weimob-list-itemC add_qq_more" href="javascript:;">
                <div class="weimob-list-item-bgC">
                    <img  src="/res/wz/images/01.jpg"  class="m_pic">
                </div>
                <div class="weimob-list-item-boxC">
                    <div class="weimob-list-item-lineC">
                        <div class="weimob-list-item-titleC m_text">热门场景</div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>

</div>
</td>


<!--第七种少点的-->
<!-- value=25--> 
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="wz_17_wrapper">
        <div class="wz_17_line add_qq_more">
             <a href="javascript:;">
                 <div class="wz_17_text wz_17_color_01 wz_17_flat_left m_text">XXXXX</div>
                 <div class="wz_17_img "><img src="/res/wz/images/moren210.jpg" class="m_pic"></div>
             </a>
             <div class="clfl"></div>
        </div>
    </div>
</div>
</td>




<!--第三十种--> 
<!-- value=51-->
<td align="center" valign="top" rel="1">
<div style="width:320px;" class="ppdiv">
    <div class="main30">
        <ul>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" width="115" height="65" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" width="115" height="65" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" width="115" height="65" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" width="115" height="65" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
        </ul>
    </div>
</div>
</td>
<!--第三十一种--> 
<!-- value=52-->
<td align="center" valign="top" rel="1">
<div style="width:320px;" class="ppdiv">
    <div class="main31">
        <ul>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
            <li id="m1" class="add_qq_more">
                <a href="javascript:;"><span class="icon"><em><img src="/res/wz/images/moren.jpg" class="m_pic"></em></span><span class="title m_text">XXXXX</span></a>
            </li>
        </ul>
    </div>
</div>
</td>


<!--第五十一种-->
<!-- value=77-->
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div class="content51">
        <ul>
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
            <li class="add_qq_more">
                <div class="menubtn">
                    <a href="javascript:;">
                        <div class="menumesg">
                            <div class="menuimg">
                                <img src="/res/wz/images/moren.jpg" class="m_pic">
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </a>
                </div>
            </li> 
        </ul>
    </div>
    <div id="cate51" fixed="fixed">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>




<!-- rel2 -->
<!-- 1--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">

<div class="msg_page">
    		
    <div class="msg_list">
        <div class="msg_list_bd">
            <div class="msg_inner_wrapper default_box news_box">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb"><img src="/res/wz/images/weizi01.jpg"  class="m_pic" width="70px" ></span><h4 class="msg_title m_text">此处为内容展示标题</h4></a>
                    </div>
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb"><img src="/res/wz/images/weizi01.jpg"  class="m_pic" width="70px" ></span><h4 class="msg_title m_text">此处为内容展示标题</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

</div>
</td>

<!-- 2--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
<div class="msg_page">
    <div class="msg_list">
        <div class="msg_list_bd">
            <div class="msg_inner_wrapper default_box news_box">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb" style="float:left;"><img src="/res/wz/images/weizi01.jpg" width="70px" class="m_pic"></span><h4 class="msg_title m_text" style="margin-left:82px; margin-right:0px;">此处为内容展示标题</h4></a>
                    </div>
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb" style="float:left;"><img src="/res/wz/images/weizi01.jpg" width="70px" class="m_pic"></span><h4 class="msg_title m_text" style="margin-left:82px; margin-right:0px;">此处为内容展示标题</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

</div>
</td>

<!-- 3--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
<div class="msg_page">
    <div class="msg_list">
        <div class="msg_list_bd">
            <div class="msg_inner_wrapper default_box news_box">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb-img" style="float:left;"><img src="/res/wz/images/weizi01.jpg" width="70px" class="m_pic"></span><h4 class="msg_title m_text" style="margin-left:82px; margin-right:0px;">此处为内容展示标题</h4><h5 class="msg_title-list m_desc">此处为内容展示标题此处为内容展示标题瑜伽调息术三例展示如何调</h5></a>
                    </div>
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb-img" style="float:left;"><img src="/res/wz/images/weizi01.jpg" width="70px" class="m_pic"></span><h4 class="msg_title m_text" style="margin-left:82px; margin-right:0px;">此处为内容展示标题</h4><h5 class="msg_title-list m_desc">此处为内容展示标题此处为内容展示标题瑜伽调息术三例展示如何调</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
</td>

<!-- 4--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
<div class="msg_page">
    <div class="msg_list">
        <div class="msg_list_bd">
            <div class="msg_inner_wrapper default_box news_box">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list  add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb-img"><img src="/res/wz/images/weizi01.jpg" width="70px" class="m_pic"></span><h4 class="msg_title m_text" style="margin-right:76px;">此处为内容展示标题</h4><h5 class="msg_title-list1 m_desc">此处为内容展示标题此处为内容展示标题瑜伽调息术三例展示如何调</h5></a>
                    </div>
                    <div class="sub_msg_list  add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><span class="thumb-img"><img src="/res/wz/images/weizi01.jpg" width="70px" class="m_pic"></span><h4 class="msg_title m_text" style="margin-right:76px;">此处为内容展示标题</h4><h5 class="msg_title-list1 m_desc">此处为内容展示标题此处为内容展示标题瑜伽调息术三例展示如何调</h5></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>

</div>
</td>

<!-- 12--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">

<div class="msg_page">        
    <div class="msg_list">
        <div class="msg_list_bd"> 
            <div class="msg_inner_wrapper default_box news_box add_qq_more">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list">
                        <a class="sub_msg_item" href="javascript:;">
                            <span class="thumb" style="float:left;"><img src="/res/wz/images/weizi01.jpg" class="m_pic" width="70px" alt=""></span>
                            <span class="wenzi_cen">
                                <h4 class="msg_title2 m_text">瑜伽调息术三例展示如何调息</h4>
                            </span>
                            <span class="add_on_icon1 arrow1" style="margin-top:13px;"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</td>
<!-- 13--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">

<div class="msg_page">        
    <div class="msg_list">
        <div class="msg_list_bd"> 
            <div class="msg_inner_wrapper default_box news_box add_qq_more">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list">
                        <a class="sub_msg_item1" href="javascript:;">
                            <span class="thumb-img1"><img src="/res/wz/images/weizi01.jpg" class="m_pic" width="70px" alt=""></span>
                            <span class="wenzi_cen">
                                <h4 class="msg_title2 m_text">瑜伽调息术三例展示如何调息</h4>
                                <h5 class="msg_title-list2 m_desc">瑜伽调息术三例展示如何调息瑜伽调息术三例展示如何调息瑜伽调息术三例展示如何调</h5>
                            </span>
                            <span class="add_on_icon1 arrow1"></span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</td>


<!--第三种-->
<!-- value=18--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div class="content">
        <a href="javascript:;" class="add_qq_more">
            <div class="ul01">
                 <div class="ul01_left">
                     <img src="/res/wz/images/wz_05_13.png" width="11" height="95">
                 </div>
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div> 
                 </div>
                 <div class="ul01_right">
                    <img src="/res/wz/images/wz_05_16.png" width="11" height="95">
                 </div>
                 <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	
                 <div class="clr"></div>
            </div>
        </a>
    </div>
</div>
</td>
<!--第四种-->
<!-- value=19--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div style="border-bottom:1px solid #cecfcf;">
        <a href="javascript:;" class="content add_qq_more" style="height:95px; display:block;">
            <div class="ul01">
                 <div class="ul01_left">
                     <img src="/res/wz/images/wz_05_13.png" width="11" height="95">
                 </div>
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div>
                 </div>
                 <div class="ul01_right">
                    <img src="/res/wz/images/wz_05_16.png" width="11" height="95">
                 </div>
                 <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	
                 <div class="clr"></div>
            </div>
        </a>
        <a href="javascript:;" class="content add_qq_more" style="height:95px; display:block;">
            <div class="ul01">
                 <div class="ul01_left">
                     <img src="/res/wz/images/wz_05_013.png" width="11" height="95">
                 </div>
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div>
                 </div>
                 <div class="ul01_right">
                    <img src="/res/wz/images/wz_05_016.png" width="11" height="95">
                 </div>
                 <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	
                 <div class="clr"></div>
            </div>
        </a>
    </div>
</div>
</td>
<!--第四种多加的-->
<!-- value=20--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
	<div class="box-btn bgcolor add_qq_more" style="width: 100%;margin:0px auto;border-radius:0px;background: -webkit-gradient(linear,left top,left bottom,from(#1777ba), to(#38adff));">
        <a href="javascript:;"><i class="icon icon-phone m_pic"></i><div class="m_text">xxxxxxxxxxxxx</div></a>
    </div>
    <div style="border-bottom:1px solid #cecfcf;">
        <a href="javascript:;" class="content add_qq_more" style="height:95px; display:block;">
            <div class="ul01">
                 <div class="ul01_left">
                     <img src="/res/wz/images/wz_05_13.png" width="11" height="95">
                 </div>
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div>
                 </div>
                 <div class="ul01_right">
                    <img src="/res/wz/images/wz_05_16.png" width="11" height="95">
                 </div>
                 <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	  
                 <div class="clr"></div>
            </div>
        </a>
        <a href="javascript:;" class="content add_qq_more" style="height:95px; display:block;">
            <div class="ul01">
                 <div class="ul01_left">
                     <img src="/res/wz/images/wz_05_013.png" width="11" height="95">
                 </div>
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div>   
                 </div>
                 <div class="ul01_right">
                    <img src="/res/wz/images/wz_05_016.png" width="11" height="95">
                 </div>
                 <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	  
                 <div class="clr"></div>
            </div>
        </a>
    </div>
</div>
</td>
<!--第五种-->
<!-- value=21--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div class="content">
        <a href="javascript:;" class="add_qq_more">
            <div class="ul01" style="border: 1px solid #d1d2d2;">
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div>
                     <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	  
                 </div>
                 <div class="clr"></div>
            </div>
        </a>
    </div>
</div>
</td>

<!--第十二种-->
<!-- value=29--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu12">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title m_text">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第十三种-->
<!-- value=30--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div id="mainmenu2">
        <ul>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title2 m_text">XXXXX</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                    <img src="/res/wz/images/cover10.jpg" class="m_pic">
                    <p class="title2 m_text">XXXXX</p>
                </a>
            </li>
        </ul>
    </div>
</div>
</td>

<!--第四十一种--> 
<!-- value=67-->
<td align="center" valign="top" rel="2">
<div style="width:320px;" class="ppdiv">
    <ul class="navboxL41">
            <li class="add_qq_more">
                <a href="javascript:;">
                        <img class="item-image1 m_pic" src="/res/wz/images/moren75.jpg">
                        <h5 class="tpl-cate-title1 m_text">最新互动活动</h5>
                        <p class="tpl-cate-summary1 m_desc">最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动</p>
                        <p class="deat_41 m_date" style="height:20px;font-family:Arial, Helvetica, sans-serif;">2014-01-01</p>
                </a>
            </li>
            <li class="add_qq_more">
                <a href="javascript:;">
                        <h5 class="tpl-cate-title1 m_text" style="width: 96%;overflow: hidden;">最新互动活动</h5>
                        <p class="tpl-cate-summary1 m_desc" style="width: 96%;">最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动最新互动活动</p>
                        <p class="deat_41 m_date" style="height:20px;font-family:Arial, Helvetica, sans-serif;">2014-01-01</p>
                </a>
            </li>
        </ul> 
</div>
</td>

<!--第五十二种-->
<!-- value=78-->
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div class="content52">
        <a href="javascript:;" class="add_qq_more">
            <div class="ul52" style="border: 1px solid #d1d2d2;">
                 <div class="ulmain52">
                     <div class="ul52_cont">
                          <div class="circle52">
                               <div class="imgchange52"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul52_cont_nr">
                              <h4 class="m_text">XXXXX</h4>
                              <p class="m_desc">介绍XXXXX信息</p>
                          </div>
                     </div>
                     <div class="arrow_right52"><img src="/res/wz/images/right_01n.png"></div>	  
                 </div>
                 <div class="clr"></div>
            </div>
        </a>
    </div>
    <div id="cate51" fixed="fixed">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>


<!-- rel3 -->
<!-- 8--> 
<td align="center" valign="top" rel="3">
<div style="width: 320px;" class="ppdiv">

<div class="weimob-page">
    <div class="weimob-list">
            <a class="weimob-list-item1 add_qq_more" href="javascript:;">
                <div class="weimob-list-item-line1">
                    <div class="weimob-list-item-title m_text">XXXXX</div>
                    <div class="weimob-list-item-fulltitle m_date">2013-09-03</div>
                    <div class="weimob-list-item-img"><img src="/res/wz/images/wenzhang.jpg" class="m_pic"></div>
                    <div class="weimob-list-item-summary m_txt">巨资打造全新梦幻《童话》系列---我们美丽公主，住在华丽的城堡，等待着白马王子，您的童话梦想实现了吗？选择韩国艺匠将您变成美丽的公主！</div>
                </div>
            </a>
    </div>
</div>


</div>
</td>
<!-- 9--> 
<td align="center" valign="top" rel="3">
<div style="width: 320px;" class="ppdiv">

<div class="msg_page">        
    <div class="msg_list">
        <div class="msg_list_bd"> 
            <div id="WXAPPMSG13229" class="msg_wrapper add_qq_more" msgid="13229">
                <div class="msg_inner_wrapper default_box news_box">
                    <a class="msg_item news" href="javascript:;">
                        <div class="msg_item_hd"><h4 class="msg_title m_text">一百句激励自己的经典名言，让自己走上成功!&nbsp;一定要收藏！</h4></div>
                        <div class="msg_item_bd">
                            <div class="msg_cover"><img src="/res/wz/images/weizi01.jpg" class="m_pic"></div>
                            <div class="msg_desc m_txt">1、猫在练习长跑，乌龟讽刺道：再练，也不能跑出个长跑冠军！猫答：我成不了豹子，却能做最棒的猫！是的，努力做好</div>
                        </div>
                        <!-- <div class="msg_item_ft">阅读原文<span class="add_on_icon arrow"></span></div> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</td>
<!-- 10--> 
<td align="center" valign="top" rel="3">
<div style="width: 320px;" class="ppdiv">

<div class="msg_page">        
    <div class="msg_list">
        <div class="msg_list_bd"> 
            <div id="WXAPPMSG13229" class="msg_wrapper add_qq_more" msgid="13229">
                <div class="msg_inner_wrapper default_box news_box">
                    <a class="msg_item news" href="javascript:;">
                        <div class="msg_item_hd"><h4 class="msg_title m_text">一百句激励自己的经典名言，让自己走上成功!&nbsp;一定要收藏！</h4></div>
                        <div class="msg_item_bd"> 
                            <div class="msg_desc m_txt">1、猫在练习长跑，乌龟讽刺道：再练，也不能跑出个长跑冠军！猫答：我成不了豹子，却能做最棒的猫！是的，努力做好</div>
                        </div>
                        <!-- <div class="msg_item_ft">阅读原文<span class="add_on_icon arrow"></span></div> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</td>
<!-- 11--> 
<td align="center" valign="top" rel="3">
<div style="width: 320px;" class="ppdiv">

<div class="msg_page">        
    <div class="msg_list">
        <div class="msg_list_bd"> 
            <div id="WXAPPMSG13229" class="msg_wrapper add_qq_more" msgid="13229">
                <div class="msg_inner_wrapper default_box news_box">
                    <a class="msg_item news" href="javascript:;">
                        <div class="msg_item_hd"><h4 class="msg_title m_text">一百句激励自己的经典名言，让自己走上成功!&nbsp;一定要收藏！</h4></div>
                        <div class="msg_item_bd">
                            <div class="msg_cover"><img src="/res/wz/images/weizi02.jpg" class="m_pic"></div>
                            <div class="msg_desc m_txt">1、猫在练习长跑，乌龟讽刺道：再练，也不能跑出个长跑冠军！猫答：我成不了豹子，却能做最棒的猫！是的，努力做好</div>
                        </div>
                        <!-- <div class="msg_item_ft">阅读原文<span class="add_on_icon arrow"></span></div> -->
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</td>

<!-- 14--> 
<td align="center" valign="top" rel="3">
<div style="width: 320px;" class="ppdiv">

    <div class="msg_page">
        <div class="list-box" style="margin: 15px 10px;border-radius: 5px;background-color: #fff;-webkit-box-shadow: 0 2px 1px rgba(0,0,0,0.1);border: 1px solid #cacbcb;box-shadow: 0 1px 2px #ddd;">      
            <div class="box add_qq_more">    
                <h3 class="m_text" style="margin-top:1px;">项目简介</h3>    
                <div class="box_info">
                <div class="box_info_inner m_txt">
                    <p>&nbsp; &nbsp; &nbsp; &nbsp; 华润石梅湾九里旅游度假区，位于海南省万宁市东南海滨，总开发面积约70万平米，由两个形如新月的海湾组成，长达六公里的碧海银滩，沿海湾绵延数十公里的茂密青皮林带，是从清朝就立碑保护的目前世界上发现的第二个也是面积最大的海滩青皮林，至少已有4000年历史，现列为省级自然保护区，区内拥有国内惟一的开发商具有私属产权的岛屿，加井岛，岛周边海底分布茂密的珊瑚群及品种繁多的水生物与色彩斑斓的热带鱼，自然资源得天独厚。&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;华润石梅湾九里毗邻贯通南北的环岛高速公路东线，距海口约160公里，距离三亚100公里，距兴隆约12公里，与南燕湾高尔夫球场相临，由海口机场、三亚机场开车经高速公路在1.5小时内即可到达。<br>&nbsp; &nbsp; &nbsp; &nbsp; 华润石梅湾作为海南省重点投资项目之一，区内规划有多家五星级酒店，并配备游艇码头、直升机停机坪、大型综合购物中心、高尔夫球场、健康检查中心、文化村等多项高端旅游度假设施，未来将建成世界级的生态型热带滨海旅游度假区。<br>&nbsp; &nbsp; &nbsp; &nbsp;&nbsp;华润石梅湾九里度假区内地产开发总占地1800亩，暂定于2010年11月动工，2011年10月份开盘，产品类型涉及公寓、别墅等。<br>&nbsp; &nbsp; &nbsp; &nbsp; 海南省和万宁市政府于2003年4月批准海南华润石梅湾旅游开发有限公司为石梅湾的主开发商，该公司是香港华润集团在海南成立的全资项目公司。度假区实施统一规划、统一开发、统一招商、统一管理。
                    </p>
                </div>
                </div>    
                <a href="javascript:;" onClick="$(this).parent().find('.box_info').height($(this).parent().find('.box_info_inner').height());$(this).hide();$(this).parent().find('.shouqiId').show();" class="f-b-d73c90 moreId"><span>更多</span></a>   
                <a href="javascript:" onClick="$(this).parent().find('.box_info').height(72);$(this).hide();$(this).parent().find('.moreId').show();" class="f-b-d73c91 shouqiId" id="" style="display:none"><span>收起</span></a> 
            </div>
        </div>
    </div>
</div>
</td>

<!--第五十三种-->
<!-- value=79-->
<td align="center" valign="top" rel="3">
<div style="width: 320px;" class="ppdiv">
    <div class="weimob-page53">
        <div class="weimob-list53">
            <a class="list-item53 add_qq_more" href="javascript:;">
                <div class="item-line53">
                    <div class="item-title53 m_text">XXXXX</div>
                    <div class="item-fulltitle53 m_date">2013-09-03</div>
                    <div class="item-img53"><img src="/res/wz/images/wenzhang.jpg" class="m_pic"></div>
                    <div class="item-summary53 m_txt">巨资打造全新梦幻《童话》系列---我们美丽公主，住在华丽的城堡，等待着白马王子，您的童话梦想实现了吗？选择韩国艺匠将您变成美丽的公主！</div>
                </div>
            </a>
        </div>
    </div>
    <div id="cate51" fixed="fixed">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
                <li class="add_qq_more" style="border-right:none;">
                    <a href="javascript:;">
                        <img src="/res/wz/images/1.png" class="m_pic">
                        <p class="m_text">联系我们</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
</td>
<!--第一种多加的-->
<td align="center" valign="top" rel="1">
<div style="width: 320px;" class="ppdiv">
    <div id="cate5" class="wrap">
        <ul class="mainmenu">
            <li class="add_qq_more"><a href="javascript:;">
                    <div class="menubtn">
                        <div class="menumesg">
                            <div class="menuimg">
                                <div class="menuimg2">
                                    <img src="/res/wz/images/moren.jpg" class="m_pic">
                                </div>
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </div>
                </a>
            </li> 
            <li class="add_qq_more"><a href="javascript:;">
                    <div class="menubtn">
                        <div class="menumesg">
                            <div class="menuimg">
                                <div class="menuimg2">
                                    <img src="/res/wz/images/moren.jpg" class="m_pic">
                                </div>
                            </div>
                            <div class="menutitle m_text">XXXXX</div>
                        </div>
                    </div>
                </a>
            </li> 
            <div class="clr"></div>
        </ul>
    </div>
</div>
</td>
<!--第五种多加的-->
<!-- value=21--> 
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
    <div class="content">
        <a href="javascript:;" class="add_qq_more">
            <div class="ul01" style="border: 1px solid #d1d2d2;">
                 <div class="ulmain">
                     <div class="ul01_cont">
                          <div class="circle">
                               <div class="imgchange"><img src="/res/wz/images/moren75.jpg" class="m_pic"></div>
                          </div><!-- end of circle 圆内容-->
                          <div class="ul01_cont_nr">
                              <h4 class="m_text" style="margin-top:36px;">XXXXX</h4>
                          </div>
                     </div>
                     <div class="arrow_right"><img src="/res/wz/images/right_01n.png"></div>	  
                 </div>
                 <div class="clr"></div>
            </div>
        </a>
    </div>
</div>
</td>
<td align="center" valign="top" rel="2">
<div style="width: 320px;" class="ppdiv">
<div class="msg_page">
    <div class="msg_list">
        <div class="msg_list_bd">
            <div class="msg_inner_wrapper default_box news_box">
                <div class="msg_item multi_news">
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><h4 class="msg_title m_text" style="margin-left:8px; margin-right:0px;">此处为内容展示标题</h4></a>
                    </div>
                    <div class="sub_msg_list add_qq_more">
                        <a class="sub_msg_item" href="javascript:;"><h4 class="msg_title m_text" style="margin-left:8px; margin-right:0px;">此处为内容展示标题</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  
</div>
</div>
</td>
<!--第五十四种-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
<div class="box54">
    <div class="hd">
        <a href="javascript:;" class="add_qq_more"><h2 class="ellipsis m_text">关于我们</h2></a>
        <a href="javascript:;" class="add_qq_more"><span class="ico54 fr54 m_text">查看更多</span></a>
    </div>
    <div class="bd box-circle slider" style="height:auto;" id="slider02">
        <div class="slider-cont" style="height: auto; list-style: none;">
            <div class="slider-li" style="height:auto;">
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业简介</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业文化</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业口号</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业地址</i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="box54">
    <div class="hd">
        <a href="javascript:;" class="add_qq_more"><h2 class="ellipsis m_text">关于我们</h2></a>
        <a href="javascript:;" class="add_qq_more"><span class="ico54 fr54 m_text">查看更多</span></a>
    </div>
    <div class="bd box-circle slider" style="height:auto;" id="slider02">
        <div class="slider-cont" style="height: auto; list-style: none;">
            <div class="slider-li" style="height:auto;">
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业简介</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业文化</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业口号</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业地址</i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="box54">
    <div class="hd">
        <a href="javascript:;" class="add_qq_more"><h2 class="ellipsis m_text">关于我们</h2></a>
        <a href="javascript:;" class="add_qq_more"><span class="ico54 fr54 m_text">查看更多</span></a>
    </div>
    <div class="bd box-circle slider" style="height:auto;" id="slider02">
        <div class="slider-cont" style="height: auto; list-style: none;">
            <div class="slider-li" style="height:auto;">
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业简介</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业文化</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业口号</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业地址</i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="box54">
    <div class="hd">
        <a href="javascript:;" class="add_qq_more"><h2 class="ellipsis m_text">关于我们</h2></a>
        <a href="javascript:;" class="add_qq_more"><span class="ico54 fr54 m_text">查看更多</span></a>
    </div>
    <div class="bd box-circle slider" style="height:auto;" id="slider02">
        <div class="slider-cont" style="height: auto; list-style: none;">
            <div class="slider-li" style="height:auto;">
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业简介</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业文化</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业口号</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业地址</i>
                </a>
            </div>
        </div>
    </div>
</div>
<div class="box54">
    <div class="hd">
        <a href="javascript:;" class="add_qq_more"><h2 class="ellipsis m_text">关于我们</h2></a>
        <a href="javascript:;" class="add_qq_more"><span class="ico54 fr54 m_text">查看更多</span></a>
    </div>
    <div class="bd box-circle slider" style="height:auto;" id="slider02">
        <div class="slider-cont" style="height: auto; list-style: none;">
            <div class="slider-li" style="height:auto;">
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业简介</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业文化</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业口号</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业地址</i>
                </a>
            </div>
        </div>
    </div>
</div>
</div>
</td>
<!--第五十五种-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="firstmenu55 add_qq_more">
        <a href="javascript:;" style="width:100%;"><i class="icon icon-phone m_pic"></i><div class="m_text" style="height:30px;line-height:30px;">xxxxxxxxxxxx</div></a>
    </div>
    <div class="bd box-circle slider" style="height:auto;" id="slider02">
        <div class="slider-cont" style="height: auto; list-style: none;">
            <div class="slider-li" style="height:auto;">
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业简介</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业文化</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业口号</i>
                </a>
                <a href="javascript:;" class="add_qq_more">
                    <img src="/res/wz/images/picimages.jpg" class="m_pic"/>
                    <i class="m_text">企业地址</i>
                </a>
            </div>
        </div>
    </div>
</div>
</td>
<!--第五十六种-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
<div id="container56">
    <div id="news">
        <div class="news-title color21 add_qq_more">
            <a href="javascript:;" class="clearfix more56 color21">
                <span class="left5 m_text" style="margin-left:10px;">优惠活动</span>
                <span class="right5"><img src="/res/wz/images/right2.png" class="m_pic"></span>
            </a>
        </div>
        <ul class="liebiao">
            <li class="add_qq_more"> 
                <a href="javascript:;">
                    <img src="/res/wz/images/tupian55.jpg" class="m_pic"/>
                    <span class="m_text" style="font-weight:700;overflow:hidden;font-size:14px;">最新活动</span>
                    <div><span class="left56 m_desc">公司举办最新活动通知员工准时到场</span></div>
                </a>
            </li>
            <li class="add_qq_more"> 
                <a href="javascript:;">
                    <img src="/res/wz/images/tupian55.jpg" class="m_pic"/>
                    <span class="m_text" style="font-weight:700;overflow:hidden;font-size:14px;">最新活动</span>
                    <div><span class="left56 m_desc">公司举办最新活动通知员工准时到场</span></div>
                </a>
            </li>
            <li class="add_qq_more"> 
                <a href="javascript:;">
                    <img src="/res/wz/images/tupian55.jpg" class="m_pic"/>
                    <span class="m_text" style="font-weight:700;overflow:hidden;font-size:14px;"> 最新活动</span>
                    <div><span class="left56 m_desc">公司举办最新活动通知员工准时到场</span></div>
                </a>
            </li>
        </ul>
    </div>
    <ul id="part" class="part4">
        <li class="add_qq_more">
            <a href="javascript:;" class="color19" data-page-type="11">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color19" data-page-type="11">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
         </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color16" data-page-type="11">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
         </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color16" data-page-type="11">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
         </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color13" data-page-type="10">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
         </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color13" data-page-type="13" target="_self">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
         </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color9" data-page-type="13" target="_self">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
         </li>
         <li class="add_qq_more">
             <a href="javascript:;" class="color9" data-page-type="3">
                 <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                 <span class="sec-name m_text">最新活动</span>
             </a>
	    </li>
        <li class="add_qq_more">
            <a href="javascript:;" class="color8" data-page-type="13" target="_self">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
        <li class="add_qq_more">
            <a href="javascript:;" class="color8" data-page-type="13" target="_self">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
        <li class="add_qq_more">
            <a href="javascript:;" class="color10" data-page-type="13" target="_self">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
        <li class="add_qq_more">
            <a href="javascript:;" class="color10" data-page-type="11">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
        <li class="add_qq_more">
            <a href="javascript:;" class="color12" data-page-type="2">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
        <li class="add_qq_more">
            <a href="javascript:;" class="color12" data-page-type="3">
                <span class="icon56"><img src="/res/wz/images/05.png" class="m_pic"/></span>
                <span class="sec-name m_text">最新活动</span>
            </a>
        </li>
    </ul>
</div> 
<div id="cate56" fixed="fixed">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="background:none;">
                    <a href="javascript:;">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
            </ul>
        </div>
    </div>   
</div>
</td>
<!--第五十七种-->
<td align="center" valign="top" rel="0">
<div style="width: 320px;" class="ppdiv">
    <div class="content57 add_qq_more">
        <a href="javascript:;" style="display:block;" class="m_text">公司具体地址在某某广场</a>
    </div>
    <div class="firstmenu57 add_qq_more">
        <a href="javascript:;" style="width:100%;"><i class="icon57 icon-phone57 m_pic"></i><div class="m_text" style="height:38px;line-height:36px;">电话：XXXXXXXXXX</div></a>
    </div>
	<ul class="liebiao">
        <li class="add_qq_more"> 
            <a href="javascript:;">
                <img src="/res/wz/images/tupian55.jpg" class="m_pic"/>
                <span class="m_text" style="font-weight:700;overflow:hidden;font-size:14px;">最新活动</span>
                <div><span class="left56 m_desc">公司举办最新活动通知员工准时到场</span></div>
            </a>
        </li>
        <li class="add_qq_more"> 
            <a href="javascript:;">
                <img src="/res/wz/images/tupian55.jpg" class="m_pic"/>
                <span class="m_text" style="font-weight:700;overflow:hidden;font-size:14px;">最新活动</span>
                <div><span class="left56 m_desc">公司举办最新活动通知员工准时到场</span></div>
            </a>
        </li>
        <li class="add_qq_more"> 
            <a href="javascript:;">
                <img src="/res/wz/images/tupian55.jpg" class="m_pic"/>
                <span class="m_text" style="font-weight:700;overflow:hidden;font-size:14px;"> 最新活动</span>
                <div><span class="left56 m_desc">公司举办最新活动通知员工准时到场</span></div>
            </a>
        </li>
    </ul>
    <div id="cate56" fixed="fixed">
        <div class="imgmenu">
            <ul> 
                <li class="add_qq_more" style="border-left:none;">
                    <a href="javascript:;">
                        <p class="m_text">公司简介</p>
                    </a>
                </li>
                <li class="add_qq_more">
                    <a href="javascript:;">
                        <p class="m_text">新闻动态</p>
                    </a>
                </li>
                <li class="add_qq_more" style="background:none;">
                    <a href="javascript:;">
                        <p class="m_text">优惠活动</p>
                    </a>
                </li>	
            </ul>
        </div>
    </div>
</div>
</td>
</tr>
</table>
</body>
</html>