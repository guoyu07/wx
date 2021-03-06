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
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/album.css" media="all" />
<link rel="stylesheet" type="text/css" href="<?php echo $CSS; ?>wm/uploadify_t.css" media="all" />
<script type="text/javascript" src="<?php echo $JS; ?>mwm/weixitie/jquery_mb_miniPlayer.js"></script>
<script type="text/javascript" src="<?php echo $JS; ?>mwm/weixitie/jquery_jplayer_min.js"></script>
<title><?php echo $_SERVER['WEB_NAME']; ?>—国内领先的微信公众服务平台</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
</head>
<body class="<?php echo Session::get('maintheme'); ?>">
<div id="main">
    <div class="container-fluid">
        <div class="row-fluid">
            <div class="span12">
                <div class="box">
                    <div class="box-title">
                        <div class="span10">
                            <h3><i class="icon-edit"></i>喜帖信息</h3>
                        </div>
                        <div class="span2">
                            <a class="btn" href="Javascript:window.history.go(-1)">返回</a> 
                        </div>
                    </div>
                    <div class="box-content">
                        <form id="transform" action="" method="post" class='form-horizontal form-validate'><?php echo tk();  echo $m->hidden('id'); ?>
                            
                            <div class="control-group">
                                <label for="title" class="control-label">喜帖标题：</label>
                                <div class="controls">
                                <?php echo $m->text('name','class="input-large" required="required"'); ?>
                                  <span class="maroon">*</span><span class="help-inline">喜帖标题限制在十个字以内</span>
                                    
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="keyword" class="control-label">触发关键词：</label>
                                <div class="controls">
                                    <?php echo $m->text('gjz','class="input-large" required="required"'); ?>
                                 <span class="maroon">*</span><span class="help-inline">如有多个关键字请用空格隔开</span>
                                </div>
                            </div>

                            <div class="control-group">
                                <label for="picurl" class="control-label">喜帖封面：</label>
                                <div class="controls">

                                    <img class="thumb_img" id="art_pic" src="<?php echo $m->art_pic; ?>" style="max-height: 100px;">
                                    <?php echo $m->hidden('art_pic','class="input-large" required="required"'); ?>
                                    <span class="help-inline">
                                        <button class="btn select_img" id="cover_click" type="button" onclick="setpic('art_pic','micro_xitie_setart_pic')">选择封面</button></span><span class="help-inline"><span class="maroon">*</span>封面默认大小720*400</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="openpic" class="control-label">开场动画：</label>
                                <div class="controls">
                                    <img class="thumb_img" id="donghua_pic" src="<?php echo $m->donghua_pic; ?>" style="max-height: 100px;">
                                    <?php echo $m->hidden('donghua_pic','class="input-large" required="required"'); ?>
                                    <span class="help-inline">
                                        <button class="btn select_img" id="openpic" type="button" onclick="setpic('donghua_pic','micro_xitie_setdonghua_pic')">选择封面</button></span><span class="help-inline"><span class="maroon">*</span>上传400*400左右的新郎新娘合影图,用于喜帖打开时的动画中,图片大小不超过300K</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="picurl" class="control-label">缩略图：</label>
                                <div class="controls">
                                   <img class="thumb_img" id="suolue_pic" src="<?php echo $m->suolue_pic; ?>" style="max-height: 40px;">
                                    <?php echo $m->hidden('suolue_pic','class="input-large" required="required"'); ?>
                                    <span class="help-inline">
                                        <button class="btn select_img" id="pic_click" type="button" onclick="setpic('suolue_pic','micro_xitie_setsuolue_pic')">选择图片</button></span><span class="help-inline"><span class="maroon">*</span>默认40x40,显示在喜帖主页</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="address" class="control-label">新郎名字：</label>
                                <div class="controls">
                                <?php echo $m->text('xl_name','class="input-large" required="required"'); ?>
                               <span class="maroon">*</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="tel" class="control-label">新娘名字：</label>
                                <div class="controls">
                                <?php echo $m->text('xn_name','class="input-large" required="required"'); ?>
                                   <span class="maroon">*</span>
                                </div> 
                            </div>
                            <div class="control-group">
                                <label for="typename" class="control-label"></label>
                                <div class="controls">
                                    
                                      <?php echo $m->radio($front,'is_front'); ?>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="tel" class="control-label">联系电话：</label>
                                <div class="controls">
                                <?php echo $m->text('tel'); ?>
                                    <span class="maroon">*</span><span class="help-inline">如021-88888888 </span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="tel" class="control-label">婚宴日期：</label>
                                <div class="controls"> 
                                    <div class="input-prepend">
                                    <?php echo $m->datetime('hy_time'); ?>
                                     <span class="maroon">*</span> 
                                </div></div>
                            </div>
                            <div class="control-group">
                                <label for="tel" class="control-label">宴席地址：</label>
                                <div class="controls"> 
                                 <?php echo $m->text('hy_addr'); ?>
                                    <div class="input-prepend">
                                    <span class="maroon">*</span> 
                                    </div>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="suggestId" class="control-label">地图标识：</label>
									<div class="controls">
										<div class="input-append">
										<?php echo $m->text('jw_addr','class="input-xlarge" required="required"'); ?>	
											<button class="btn" type="button" id="positioning">搜索</button>
										</div>
										<span class="maroon">注意：这个只是模糊定位，准确位置请地图上标注！</span>
										<div id="l-map">
											<i class="icon-spinner icon-spin icon-large"></i>地图加载中...
										</div>
										<div id="r-result">
										<?php echo $m->text('jd'); ?>
										<?php echo $m->text('wd'); ?>
										</div>
									</div>
                            </div>
                            <!--
                            <div class="control-group">
                                <label for="tel" class="control-label">喜帖视频：</label>
                                <div class="controls"> 
                                <?php echo $m->text('video','class="input-xxlarge"'); ?>
									<span class="help-inline">暂时只支持MP4、ogv、webm格式的视频,视频链接格式为http://您的域名/视频文件名.mp4(或ogv/webm)；您也可以联系<?php echo $_SERVER['WEB_NAME']; ?>客服替您上传视频</span>
                                    <textarea rows="3" name="video" id="video" class="input-xxlarge" data-rule-maxlength="500"></textarea><span class="help-inline">推荐使用腾讯视频</span>
                                </div>
                            </div>
                            -->
                            <div class="control-group">
                                <label class="control-label" for="mp3url">背景音乐</label>
                                <div class="controls">
                                    <div class="inline mp3">
                                       <!--   <a id="m1" class="audio { skin:'blue'}" href="http://static.hd3p.com/mp3/yougetme.mp3" >yougetme.mp3</a> --> 
                                     </div>
                                   
                                    <span class="help-inline">
                                        <?php echo $m->upload('music',array('text'=>'选择音乐','size'=>5120,'showdel'=>false,'type'=>'mp3','width'=>100),null,null,null); ?>

                                    <span class="help-inline">(保证浏览网页的加载速度,上传音乐最大为<span class="red">5MB</span>)</span>
                                </div>
                            </div>
                               <div class="control-group">
									<label class="control-label">婚纱图片：</label>
									<?php echo $m->hidden('hs_pic'); ?>
									<div class="controls">
										<div id="upimg_main">
											<div id="file_upload" class="uploadify"><button  id="file_upload-button" class="btn pl_add btn-primary" onclick="addmorepic();return false;"><i class="icon-plus-sign"></i>上传图片</button><span class="maroon">*</span><span class="help-inline">建议尺寸：宽720像素，高350像素</span></div><div id="file_upload-queue" class="uploadify-queue"></div>
											<ul class="ipost-list ui-sortable" id="fileList">
											</ul><div id="file_upload_queue" class="uploadifyQueue">
											</div>
										</div>
									<span for="imagestexts[40829][]" class="help-block error valid" style=""></span><span for="imagestexts[67544][]" class="help-block error valid" style=""></span><span for="imagestexts[99277][]" class="help-block error valid" style=""></span></div>
								</div>

                           
                             <div class="control-group">
                                <label for="tel" class="control-label">密码：</label>
                                <div class="controls">
                                <?php echo $m->text('pwd','class="input-large" required="required"'); ?>
                                    <span class="maroon">*</span><span class="help-inline">设置微信上查看来宾名单的验证密码</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="tel" class="control-label">想要说的话：</label>
                                <div class="controls">
                                  <?php echo $m->textarea('word','class="input-large" style="height:80px;width:380px;" placehold="亲爱的朋友，我要结婚了，希望能在我的婚礼上得到你的祝福，并祝愿你也幸福。"'); ?>	
                                    <span class="maroon">*</span><span class="help-inline">喜帖文字限制在200字以内</span>
                                </div>
                            </div>
                          <!--   <div class="control-group">
                                <label for="qr_code" class="control-label">二维码：</label>
                                <div class="controls">
                                        <img class="thumb_img" id="erweima_pic" src="<?php echo $m->erweima_pic; ?>" style="max-height: 100px;">
                                    <?php echo $m->hidden('erweima_pic','class="input-large" required="required"'); ?>
                                    <span class="help-inline">
                                        <button class="btn select_img" id="pic_click" type="button" onclick="setpic('erweima_pic','micro_xitie_seterweima_pic')">选择图片</button></span><span class="help-inline"><span class="maroon">*</span>默认40x40,显示在喜帖主页</span>
                                </div>
                            </div>
                            <div class="control-group">
                                <label for="copr" class="control-label">底部版权：</label>
                                <div class="controls">
                                 <?php echo $m->text('copyright','class="input-large" required="required"'); ?>
                                   <span class="maroon">*</span><span class="help-inline">底部版权限制在二十个字以内</span>
                                </div>
                            </div> -->
                           <?php if ($show){ ?>
                             <div class="control-group">
                                <label for="copr" class="control-label">链接地址：</label>
                                <div class="controls">
                                <input type="text" class="input-large" readonly="readonly"  value="<?php echo getUrl('wXiTie'); ?>"/>
                                </div>
                            </div>
                            <?php } ?>
                            <div class="form-actions">
                                <button id="bsubmit" type="submit" data-loading-text="提交中..." class="btn btn-primary">保存</button>
                                <button type="button" class="btn" onclick="window.history.go(-1)">取消</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    KindEditor.ready(function (K) {
        var editor = K.editor({
            themeType: "simple",
            allowFileManager: true

        });
        var _mp3_i = 0;
        K('button.select_img').click(function (e) {
            editor.loadPlugin('smimage', function () {
                editor.plugin.imageDialog({
                    imageUrl: $(e.target).parent().prevAll("input[type=text]").val(),
                    clickFn: function (url, title, width, height, border, align) {
                        var $input = $(e.target).parent().prevAll("input[type=text]"); 
                        $input.val(url)
                        $input.hide();
                        var t_img = $(e.target).parent().prevAll(".thumb_img:first");
                        if (t_img.length == 0) {
                            var tmp = '<img class="thumb_img" src="<?php echo 0; ?>" style="max-height: 100px;">';
                            $input.before(tmp.format(url))
                        } else {
                            t_img.attr("src", url);
                        }
                       
                        editor.hideDialog();
                    }
                });
            });
        });
        K('button.addmp3').click(function (e) {
            editor.loadPlugin('mp3', function () {
                editor.plugin.imageDialog({
                    mp3Url: $(e.target).parent().prevAll("input[type=text]").val(),
                    clickFn: function (url, title, width, height, border, align) {
                        _mp3_i++;
                        var $input = $(e.target).parent().prevAll("input[type=hidden]")
                        var $mp3 = $(e.target).parent().prevAll("div.mp3");
                        var $flag = $mp3.find("a.audio");
                        var $filename = url.match(/[^\/]*$/)[0];
                        if ($filename.lastIndexOf('.') > -1) {
                            $filename = $filename.substring(0, $filename.lastIndexOf('.'))
                        }
                        $input.val(url)
                        if ($flag.length > 0) {
                            $flag.mb_miniPlayer_changeFile({ mp3: url }, $filename);
                            $flag.mb_miniPlayer_play();
                        }
                        else {
                            while ($("#m" + _mp3_i).length > 0) {
                                _mp3_i++;
                            }
                            var _tmp = '<a id="m<?php echo 1; ?>" class="audio { skin:\'blue\'}" href="<?php echo 0; ?>"><?php echo 2; ?></a> ';
                            $mp3.html(_tmp.format(url, _mp3_i, $filename));
                            $mp3.find("a.audio").mb_miniPlayer();
                            var $id = $mp3.find("a.audio").attr("id");
                            setTimeout(function () {
                                $("#" + $id).mb_miniPlayer_play();
                            }, 1000);
                        }
                        editor.hideDialog();
                        $(e.target).text("重新选择");
                    }
                });
            });
        });

    });

</script>
<script type="text/javascript" src="<?php echo $JS; ?>comm.js"></script>
<script src="http://api.map.baidu.com/api?v=1.5&ak=1b0ace7dde0245f796844a06fb112734"></script>
<script type="text/javascript">
//是否从未保存过定位信息，如果从未保存过，并且有填地址信息，那么进入页面后自动定位
var located = true;
//定位坐标
var destPoint = new BMap.Point($('#micro_xitie_setjd').val(),$('#micro_xitie_setwd').val());
$(function(){		
	/**开始处理百度地图**/
	var map = new BMap.Map("l-map");
	map.centerAndZoom(new BMap.Point(destPoint.lng, destPoint.lat), 12);//初始化地图
	map.enableScrollWheelZoom();
	map.addControl(new BMap.NavigationControl());
	var marker = new BMap.Marker(destPoint);
	map.addOverlay(marker);//添加标注
	
	map.addEventListener("click", function(e){
		if(confirm("确认选择这个位置？")){
			destPoint = e.point;
			$('#micro_xitie_setjd').val(destPoint.lng);
			$('#micro_xitie_setwd').val(destPoint.lat);
			map.clearOverlays();
			var marker1 = new BMap.Marker(destPoint);  // 创建标注
			map.addOverlay(marker1); 
		}
	});
	
	
	
	var myValue;

	var local;
	function setPlace(){
	    map.clearOverlays();    //清除地图上所有覆盖物
	    local = new BMap.LocalSearch(map, { //智能搜索
	      renderOptions:{ map: map}
	    });
	    located = true;
	    local.setMarkersSetCallback(callback);
	    local.search(myValue);
	}
	
	function addEventListener(marker){
		marker.addEventListener("click", function(data){
			destPoint = data.target.getPosition(0);
		});
	}
	function callback(posi){
		$("#micro_xitie_setjw_addr").removeAttr("disabled");
		for(var i=0;i<posi.length;i++){
			if(i==0){
				destPoint = posi[0].point;
			}
			posi[i].marker.addEventListener("click", function(data){
				destPoint = data.target.getPosition(0);
			});  
		}
	}
	
	
	$("#positioning").click(function(){
		if($("#micro_xitie_setjw_addr").val() == ""){
			alert("请输地址！");
			return ;
		}
		$("#locate-btn").prop("disabled",true);
		local = new BMap.LocalSearch(map, { //智能搜索
			renderOptions:{ map: map}
		});
		located = true;
		local.setMarkersSetCallback(callback);
		local.search($("#micro_xitie_setjw_addr").val());
		return false;
	});
	
	 $("#transform").submit(function(){
		var cansv= true;
		$(this).find('input[type="text"],select,textarea').filter('[required="required"]').each(function(){
			if($.trim($(this).val())==''){
				cansv = false;
				$(this).css('backgroundColor','yellow');
				$(this).one('focus',function(){
					$(this).css('backgroundColor','transparent');
				});
			}
		});
		if(!cansv){
			tusi('请将信息填写完整');
		}
    	return cansv;
    });
});
</script>
<script type="text/template" id="picdemo">
<li class="imgbox" style="list-type:none">
<a class="item_close" href="javascript:void(0)" onclick="$(this).parent().remove();" title="删除">
</a>
<span class="item_box">
    <img src="" style="max-height:100%;">
</span>
<span class="item_input">
    <textarea class="bewrite" cols="3" rows="4" style="resize: none" placeholder="图片描述..." onfocus="$(this).parent().addClass('on');" onblur="$(this).parent().removeClass('on');">
    </textarea>
    <i class="shadow hc">
    </i>
</span>
</li>
</script>
<script>		
		//上传图片
		function addmorepic(){
			window.piccbk = function(m,n){
				addoneing(m,n);
				window.piccbk = null;
			}
			window.curpic = null;
			openpicset();	
		}
		function addoneing(m,n){
			n = n.split(',');
			n = n[0];
			$('#fileList').append($('#picdemo').html());
			var li = $('#fileList').children('li:last');
			li.find('img').attr('src',m);
			li.find('textarea').val(n);
		}
		$(function(){
			$('#transform').submit(function(){
				var pics = [];
				$('#fileList').find('li').each(function(){
					var msg = {};
					var img = $(this).find('img');
					msg.src = img.attr('src');
					msg.txt = $.trim($(this).find('textarea').val());
					var w = img.width();
					var h = img.height();
					w = parseInt(450*w/h);
					msg.w = w;
					msg.h = 450;
					pics[pics.length] = msg;
				});
				$('#micro_xitie_seths_pic').val($.toJSON(pics));
			});
			var val = $('#micro_xitie_seths_pic').val();
			if($.trim(val)==''){
				val = '[]';
			}
			var data = $.evalJSON(val);
			for(var i=0;i<data.length;i++){
				var msg = data[i];
				addoneing(msg.src,msg.txt);
			}
		});
	</script>


</body>
</html>
