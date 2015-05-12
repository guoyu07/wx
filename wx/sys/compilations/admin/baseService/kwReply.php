<!DOCTYPE html>
<html><head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css" />
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css" />
<style type="text/css">
	.table td {
		min-width:50px;
		overflow:hidden;text-overflow:ellipsis;
	}
	.table td.answer_content {
		max-width:400px;
		overflow:visible;
	}
</style>


<title>知识库管理</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<body>
<div id="questionsContainer">
		<h4>自定义回复 </h4>
		<table class="table table-bordered">
			<thead>
				<tr>
				<!-- 	<th style="width:10px;"><input type="checkbox" value="22964"/></th> -->
					<th>关键字</th>
					<th>回复</th>
					<th>类型</th>
					<th>操作</th>
				</tr>
			</thead>
			<tbody>
			    <tr>
					<th><?php echo $kw->keyWord; ?></th>
					<th><?php echo $kw->replyContent; ?></th>
					<th><?php if ($kw->replyType == 1){ ?>文字 <?php }else{ ?>图文<?php } ?></th>
					<th>
					<span><a href="javascript:void(0);" class="xgdaa"> [修改]</a></span>
					
					<a href="javascript:void(0);" onclick="if(confirm('确定要删除吗？')){ goto('kwReply-<?php echo del; ?>-<?php echo $kw->id; ?>.html');}">[删除]</a>
					</th>
				</tr>
			</tbody>
		</table>
		<div class="tb-toolbar">
			<button class="btn btn-small btn-primary" id="add">新增</button>
		<!-- 	<button class="btn btn-small" id="del">删除</button> -->
			<button class="btn btn-small" id="back">返回问题列表</button>
		</div>
	</div>
	
	<form class="form-horizontal" style="display:none"  id="anform" method="post">
		<input value="-1" style="display:none;" id="anid" type="text">
        <fieldset>
          <legend>回复添加</legend>
          <div class="control-group">
            <label class="control-label" for="input01">关键词</label>
            <div class="controls">
            <?php echo $kw->text('keyWord',array("class"=>'input-xlarge','disabled'=>"disabled")); ?>
              <!-- <input class="input-xlarge" id="input01" name="keyword"  value="hello" type="text"> -->
            </div>
          </div>
          <div class="control-group">
		    <label class="control-label" for="replyType">回复类型:</label>
		    <div class="controls">
		     <?php echo $kw->hidden('id'); ?>
             <?php echo $kw->select(array('1'=>'文字','2'=>'图文'),'replyType'); ?>				

		    </div>
		  </div>
          <div class="control-group" id="textContainer">
            <label class="control-label" for="textarea">回复</label>
            <div class="controls">
	           
	           


<link rel="stylesheet" href="<?php echo $CSS; ?>admin/emotion.css">
<script type="text/javascript" src="<?php echo $JS; ?>emotion.js"></script>

<script type="text/javascript" src="<?php echo $JS; ?>html_helper.js"></script>
<div class="txtArea">
	<div class="functionBar">
		<div class="opt">
			<a class="icon18C iconEmotion block" href="javascript:;">表情</a>
		</div>
		<div class="tip"></div>
		<div class="emotions">
			<table cellpadding="0" cellspacing="0">
<tbody>
					<tr>
						<td><div class="eItem" style="background-position: 0px 0;" data-title="微笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/0.gif"></div></td>
						<td><div class="eItem" style="background-position: -24px 0;" data-title="撇嘴" data-gifurl="<?php echo $IMG; ?>/admin/emotion/1.gif"></div></td>
						<td><div class="eItem" style="background-position: -48px 0;" data-title="色" data-gifurl="<?php echo $IMG; ?>/admin/emotion/2.gif"></div></td>
						<td><div class="eItem" style="background-position: -72px 0;" data-title="发呆" data-gifurl="<?php echo $IMG; ?>/admin/emotion/3.gif"></div></td>
						<td><div class="eItem" style="background-position: -96px 0;" data-title="得意" data-gifurl="<?php echo $IMG; ?>/admin/emotion/4.gif"></div></td>
						<td><div class="eItem" style="background-position: -120px 0;" data-title="流泪" data-gifurl="<?php echo $IMG; ?>/admin/emotion/5.gif"></div></td>
						<td><div class="eItem" style="background-position: -144px 0;" data-title="害羞" data-gifurl="<?php echo $IMG; ?>/admin/emotion/6.gif"></div></td>
						<td><div class="eItem" style="background-position: -168px 0;" data-title="闭嘴" data-gifurl="<?php echo $IMG; ?>/admin/emotion/7.gif"></div></td>
						<td><div class="eItem" style="background-position: -192px 0;" data-title="睡" data-gifurl="<?php echo $IMG; ?>/admin/emotion/8.gif"></div></td>
						<td><div class="eItem" style="background-position: -216px 0;" data-title="大哭" data-gifurl="<?php echo $IMG; ?>/admin/emotion/9.gif"></div></td>
						<td><div class="eItem" style="background-position: -240px 0;" data-title="尴尬" data-gifurl="<?php echo $IMG; ?>/admin/emotion/10.gif"></div></td>
						<td><div class="eItem" style="background-position: -264px 0;" data-title="发怒" data-gifurl="<?php echo $IMG; ?>/admin/emotion/11.gif"></div></td>
						<td><div class="eItem" style="background-position: -288px 0;" data-title="调皮" data-gifurl="<?php echo $IMG; ?>/admin/emotion/12.gif"></div></td>
						<td><div class="eItem" style="background-position: -312px 0;" data-title="呲牙" data-gifurl="<?php echo $IMG; ?>/admin/emotion/13.gif"></div></td>
						<td><div class="eItem" style="background-position: -336px 0;" data-title="惊讶" data-gifurl="<?php echo $IMG; ?>/admin/emotion/14.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -360px 0;" data-title="难过" data-gifurl="<?php echo $IMG; ?>/admin/emotion/15.gif"></div></td>
						<td><div class="eItem" style="background-position: -384px 0;" data-title="酷" data-gifurl="<?php echo $IMG; ?>/admin/emotion/16.gif"></div></td>
						<td><div class="eItem" style="background-position: -408px 0;" data-title="冷汗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/17.gif"></div></td>
						<td><div class="eItem" style="background-position: -432px 0;" data-title="抓狂" data-gifurl="<?php echo $IMG; ?>/admin/emotion/18.gif"></div></td>
						<td><div class="eItem" style="background-position: -456px 0;" data-title="吐" data-gifurl="<?php echo $IMG; ?>/admin/emotion/19.gif"></div></td>
						<td><div class="eItem" style="background-position: -480px 0;" data-title="偷笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/20.gif"></div></td>
						<td><div class="eItem" style="background-position: -504px 0;" data-title="可爱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/21.gif"></div></td>
						<td><div class="eItem" style="background-position: -528px 0;" data-title="白眼" data-gifurl="<?php echo $IMG; ?>/admin/emotion/22.gif"></div></td>
						<td><div class="eItem" style="background-position: -552px 0;" data-title="傲慢" data-gifurl="<?php echo $IMG; ?>/admin/emotion/23.gif"></div></td>
						<td><div class="eItem" style="background-position: -576px 0;" data-title="饥饿" data-gifurl="<?php echo $IMG; ?>/admin/emotion/24.gif"></div></td>
						<td><div class="eItem" style="background-position: -600px 0;" data-title="困" data-gifurl="<?php echo $IMG; ?>/admin/emotion/25.gif"></div></td>
						<td><div class="eItem" style="background-position: -624px 0;" data-title="惊恐" data-gifurl="<?php echo $IMG; ?>/admin/emotion/26.gif"></div></td>
						<td><div class="eItem" style="background-position: -648px 0;" data-title="流汗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/27.gif"></div></td>
						<td><div class="eItem" style="background-position: -672px 0;" data-title="憨笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/28.gif"></div></td>
						<td><div class="eItem" style="background-position: -696px 0;" data-title="大兵" data-gifurl="<?php echo $IMG; ?>/admin/emotion/29.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -720px 0;" data-title="奋斗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/30.gif"></div></td>
						<td><div class="eItem" style="background-position: -744px 0;" data-title="咒骂" data-gifurl="<?php echo $IMG; ?>/admin/emotion/31.gif"></div></td>
						<td><div class="eItem" style="background-position: -768px 0;" data-title="疑问" data-gifurl="<?php echo $IMG; ?>/admin/emotion/32.gif"></div></td>
						<td><div class="eItem" style="background-position: -792px 0;" data-title="嘘" data-gifurl="<?php echo $IMG; ?>/admin/emotion/33.gif"></div></td>
						<td><div class="eItem" style="background-position: -816px 0;" data-title="晕" data-gifurl="<?php echo $IMG; ?>/admin/emotion/34.gif"></div></td>
						<td><div class="eItem" style="background-position: -840px 0;" data-title="折磨" data-gifurl="<?php echo $IMG; ?>/admin/emotion/35.gif"></div></td>
						<td><div class="eItem" style="background-position: -864px 0;" data-title="衰" data-gifurl="<?php echo $IMG; ?>/admin/emotion/36.gif"></div></td>
						<td><div class="eItem" style="background-position: -888px 0;" data-title="骷髅" data-gifurl="<?php echo $IMG; ?>/admin/emotion/37.gif"></div></td>
						<td><div class="eItem" style="background-position: -912px 0;" data-title="敲打" data-gifurl="<?php echo $IMG; ?>/admin/emotion/38.gif"></div></td>
						<td><div class="eItem" style="background-position: -936px 0;" data-title="再见" data-gifurl="<?php echo $IMG; ?>/admin/emotion/39.gif"></div></td>
						<td><div class="eItem" style="background-position: -960px 0;" data-title="擦汗" data-gifurl="<?php echo $IMG; ?>/admin/emotion/40.gif"></div></td>
						<td><div class="eItem" style="background-position: -984px 0;" data-title="抠鼻" data-gifurl="<?php echo $IMG; ?>/admin/emotion/41.gif"></div></td>
						<td><div class="eItem" style="background-position: -1008px 0;" data-title="鼓掌" data-gifurl="<?php echo $IMG; ?>/admin/emotion/42.gif"></div></td>
						<td><div class="eItem" style="background-position: -1032px 0;" data-title="糗大了" data-gifurl="<?php echo $IMG; ?>/admin/emotion/43.gif"></div></td>
						<td><div class="eItem" style="background-position: -1056px 0;" data-title="坏笑" data-gifurl="<?php echo $IMG; ?>/admin/emotion/44.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -1080px 0;" data-title="左哼哼" data-gifurl="<?php echo $IMG; ?>/admin/emotion/45.gif"></div></td>
						<td><div class="eItem" style="background-position: -1104px 0;" data-title="右哼哼" data-gifurl="<?php echo $IMG; ?>/admin/emotion/46.gif"></div></td>
						<td><div class="eItem" style="background-position: -1128px 0;" data-title="哈欠" data-gifurl="<?php echo $IMG; ?>/admin/emotion/47.gif"></div></td>
						<td><div class="eItem" style="background-position: -1152px 0;" data-title="鄙视" data-gifurl="<?php echo $IMG; ?>/admin/emotion/48.gif"></div></td>
						<td><div class="eItem" style="background-position: -1176px 0;" data-title="委屈" data-gifurl="<?php echo $IMG; ?>/admin/emotion/49.gif"></div></td>
						<td><div class="eItem" style="background-position: -1200px 0;" data-title="快哭了" data-gifurl="<?php echo $IMG; ?>/admin/emotion/50.gif"></div></td>
						<td><div class="eItem" style="background-position: -1224px 0;" data-title="阴险" data-gifurl="<?php echo $IMG; ?>/admin/emotion/51.gif"></div></td>
						<td><div class="eItem" style="background-position: -1248px 0;" data-title="亲亲" data-gifurl="<?php echo $IMG; ?>/admin/emotion/52.gif"></div></td>
						<td><div class="eItem" style="background-position: -1272px 0;" data-title="吓" data-gifurl="<?php echo $IMG; ?>/admin/emotion/53.gif"></div></td>
						<td><div class="eItem" style="background-position: -1296px 0;" data-title="可怜" data-gifurl="<?php echo $IMG; ?>/admin/emotion/54.gif"></div></td>
						<td><div class="eItem" style="background-position: -1320px 0;" data-title="菜刀" data-gifurl="<?php echo $IMG; ?>/admin/emotion/55.gif"></div></td>
						<td><div class="eItem" style="background-position: -1344px 0;" data-title="西瓜" data-gifurl="<?php echo $IMG; ?>/admin/emotion/56.gif"></div></td>
						<td><div class="eItem" style="background-position: -1368px 0;" data-title="啤酒" data-gifurl="<?php echo $IMG; ?>/admin/emotion/57.gif"></div></td>
						<td><div class="eItem" style="background-position: -1392px 0;" data-title="篮球" data-gifurl="<?php echo $IMG; ?>/admin/emotion/58.gif"></div></td>
						<td><div class="eItem" style="background-position: -1416px 0;" data-title="乒乓" data-gifurl="<?php echo $IMG; ?>/admin/emotion/59.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -1440px 0;" data-title="咖啡" data-gifurl="<?php echo $IMG; ?>/admin/emotion/60.gif"></div></td>
						<td><div class="eItem" style="background-position: -1464px 0;" data-title="饭" data-gifurl="<?php echo $IMG; ?>/admin/emotion/61.gif"></div></td>
						<td><div class="eItem" style="background-position: -1488px 0;" data-title="猪头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/62.gif"></div></td>
						<td><div class="eItem" style="background-position: -1512px 0;" data-title="玫瑰" data-gifurl="<?php echo $IMG; ?>/admin/emotion/63.gif"></div></td>
						<td><div class="eItem" style="background-position: -1536px 0;" data-title="凋谢" data-gifurl="<?php echo $IMG; ?>/admin/emotion/64.gif"></div></td>
						<td><div class="eItem" style="background-position: -1560px 0;" data-title="示爱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/65.gif"></div></td>
						<td><div class="eItem" style="background-position: -1584px 0;" data-title="爱心" data-gifurl="<?php echo $IMG; ?>/admin/emotion/66.gif"></div></td>
						<td><div class="eItem" style="background-position: -1608px 0;" data-title="心碎" data-gifurl="<?php echo $IMG; ?>/admin/emotion/67.gif"></div></td>
						<td><div class="eItem" style="background-position: -1632px 0;" data-title="蛋糕" data-gifurl="<?php echo $IMG; ?>/admin/emotion/68.gif"></div></td>
						<td><div class="eItem" style="background-position: -1656px 0;" data-title="闪电" data-gifurl="<?php echo $IMG; ?>/admin/emotion/69.gif"></div></td>
						<td><div class="eItem" style="background-position: -1680px 0;" data-title="炸弹" data-gifurl="<?php echo $IMG; ?>/admin/emotion/70.gif"></div></td>
						<td><div class="eItem" style="background-position: -1704px 0;" data-title="刀" data-gifurl="<?php echo $IMG; ?>/admin/emotion/71.gif"></div></td>
						<td><div class="eItem" style="background-position: -1728px 0;" data-title="足球" data-gifurl="<?php echo $IMG; ?>/admin/emotion/72.gif"></div></td>
						<td><div class="eItem" style="background-position: -1752px 0;" data-title="瓢虫" data-gifurl="<?php echo $IMG; ?>/admin/emotion/73.gif"></div></td>
						<td><div class="eItem" style="background-position: -1776px 0;" data-title="便便" data-gifurl="<?php echo $IMG; ?>/admin/emotion/74.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -1800px 0;" data-title="月亮" data-gifurl="<?php echo $IMG; ?>/admin/emotion/75.gif"></div></td>
						<td><div class="eItem" style="background-position: -1824px 0;" data-title="太阳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/76.gif"></div></td>
						<td><div class="eItem" style="background-position: -1848px 0;" data-title="礼物" data-gifurl="<?php echo $IMG; ?>/admin/emotion/77.gif"></div></td>
						<td><div class="eItem" style="background-position: -1872px 0;" data-title="拥抱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/78.gif"></div></td>
						<td><div class="eItem" style="background-position: -1896px 0;" data-title="强" data-gifurl="<?php echo $IMG; ?>/admin/emotion/79.gif"></div></td>
						<td><div class="eItem" style="background-position: -1920px 0;" data-title="弱" data-gifurl="<?php echo $IMG; ?>/admin/emotion/80.gif"></div></td>
						<td><div class="eItem" style="background-position: -1944px 0;" data-title="握手" data-gifurl="<?php echo $IMG; ?>/admin/emotion/81.gif"></div></td>
						<td><div class="eItem" style="background-position: -1968px 0;" data-title="胜利" data-gifurl="<?php echo $IMG; ?>/admin/emotion/82.gif"></div></td>
						<td><div class="eItem" style="background-position: -1992px 0;" data-title="抱拳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/83.gif"></div></td>
						<td><div class="eItem" style="background-position: -2016px 0;" data-title="勾引" data-gifurl="<?php echo $IMG; ?>/admin/emotion/84.gif"></div></td>
						<td><div class="eItem" style="background-position: -2040px 0;" data-title="拳头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/85.gif"></div></td>
						<td><div class="eItem" style="background-position: -2064px 0;" data-title="差劲" data-gifurl="<?php echo $IMG; ?>/admin/emotion/86.gif"></div></td>
						<td><div class="eItem" style="background-position: -2088px 0;" data-title="爱你" data-gifurl="<?php echo $IMG; ?>/admin/emotion/87.gif"></div></td>
						<td><div class="eItem" style="background-position: -2112px 0;" data-title="NO" data-gifurl="<?php echo $IMG; ?>/admin/emotion/88.gif"></div></td>
						<td><div class="eItem" style="background-position: -2136px 0;" data-title="OK" data-gifurl="<?php echo $IMG; ?>admin/emotion/89.gif"></div></td>
					</tr>
					<tr>
						<td><div class="eItem" style="background-position: -2160px 0;" data-title="爱情" data-gifurl="<?php echo $IMG; ?>/admin/emotion/90.gif"></div></td>
						<td><div class="eItem" style="background-position: -2184px 0;" data-title="飞吻" data-gifurl="<?php echo $IMG; ?>/admin/emotion/91.gif"></div></td>
						<td><div class="eItem" style="background-position: -2208px 0;" data-title="跳跳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/92.gif"></div></td>
						<td><div class="eItem" style="background-position: -2232px 0;" data-title="发抖" data-gifurl="<?php echo $IMG; ?>/admin/emotion/93.gif"></div></td>
						<td><div class="eItem" style="background-position: -2256px 0;" data-title="怄火" data-gifurl="<?php echo $IMG; ?>/admin/emotion/94.gif"></div></td>
						<td><div class="eItem" style="background-position: -2280px 0;" data-title="转圈" data-gifurl="<?php echo $IMG; ?>/admin/emotion/95.gif"></div></td>
						<td><div class="eItem" style="background-position: -2304px 0;" data-title="磕头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/96.gif"></div></td>
						<td><div class="eItem" style="background-position: -2328px 0;" data-title="回头" data-gifurl="<?php echo $IMG; ?>/admin/emotion/97.gif"></div></td>
						<td><div class="eItem" style="background-position: -2352px 0;" data-title="跳绳" data-gifurl="<?php echo $IMG; ?>/admin/emotion/98.gif"></div></td>
						<td><div class="eItem" style="background-position: -2376px 0;" data-title="挥手" data-gifurl="<?php echo $IMG; ?>/admin/emotion/99.gif"></div></td>
						<td><div class="eItem" style="background-position: -2400px 0;" data-title="激动" data-gifurl="<?php echo $IMG; ?>/admin/emotion/100.gif"></div></td>
						<td><div class="eItem" style="background-position: -2424px 0;" data-title="街舞" data-gifurl="<?php echo $IMG; ?>/admin/emotion/101.gif"></div></td>
						<td><div class="eItem" style="background-position: -2448px 0;" data-title="献吻" data-gifurl="<?php echo $IMG; ?>/admin/emotion/102.gif"></div></td>
						<td><div class="eItem" style="background-position: -2472px 0;" data-title="左太极" data-gifurl="<?php echo $IMG; ?>/admin/emotion/103.gif"></div></td>
						<td><div class="eItem" style="background-position: -2496px 0;" data-title="右太极" data-gifurl="<?php echo $IMG; ?>/admin/emotion/104.gif"></div></td>
					</tr>
				</tbody>
		
			</table>
			<div class="emotionsGif"></div>
		</div>
		<div class="clr"></div>
	</div>
	<div class="editArea">
	    <?php echo $kw->textarea('replyContent','style=display:none'); ?>
		<textarea id="replyContent" name="replyContent" style="display: none;"></textarea>
		<div style="overflow-y: auto; overflow-x: hidden;" contenteditable="true"></div>
	</div>
</div>
<script type="text/javascript">
var $textarea = $(".editArea textarea");
var $contentDiv = $(".editArea div");
$(".functionBar .iconEmotion").click(function(){
	//Emotion.saveRange();
	$(".emotions").show();
});
$(".emotions").hover(function(){
	
},function(){
	$(".emotions").fadeOut();
});
$(".emotions .eItem").mouseenter(function(){
	$(".emotionsGif").html('<img src="'+$(this).attr("data-gifurl")+'">');
}).click(function(){
	Emotion.insertHTML('<img src="' + $(this).attr("data-gifurl") + '"' + 'alt="mo-' + $(this).attr("data-title") + '"' + "/>");
	$(".emotions").fadeOut();
	$textarea.trigger("contentValueChange");
});
$contentDiv.bind("keyup",function(){
	$textarea.trigger("contentValueChange");
	Emotion.saveRange();
}).bind("keydown",function(e){
    switch (e.keyCode) {
    case 8:
        var t = Emotion.getSelection();
        t.type && t.type.toLowerCase() === "control" && (e.preventDefault(), t.clear());
        break;
    case 13:
        e.preventDefault(),
        Emotion.insertHTML("<br/>");
        Emotion.saveRange();
    }
}).bind("mouseup",function(e){
    Emotion.saveRange();
    if ($.browser.msie && />$/.test($contentDiv.html())) {
        var n = Emotion.getSelection();
        n.extend && (n.extend(cursorNode, cursorNode.length), n.collapseToEnd()),
        Emotion.saveRange();
        Emotion.insertHTML(" ");
    }
});
$textarea.bind("contentValueChange",function(){
	$(this).val(Emotion.replaceInput($contentDiv.html()));
});
$contentDiv.html(Emotion.replaceEmoji($contentDiv.html()));
</script>
              <p class="help-block">
			  	<span class="maroon">*</span> 重要，智能引擎会从您的回复中（如有多条）随机发送一条给用户
	      	  </p>
            </div>
          </div>
          <div style="display: none;" class="control-group" id="picContainer">
		    <label class="control-label" for="picandtext">图文资源:</label>
		    <div class="controls">
		       <?php echo $kw->select($rs_title,'resId',array('class'=>'span4'));; ?>
				
				<button class="btn" type="button" onclick="window.location.href = '/admin/baseService/contresource.html';return false;">管理图文素材</button>
				<p class="help-block">
			  		<span class="maroon">*</span> 必填，请选择一条图文素材
	      	  	</p>
		    </div>
		  </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary" id="submitbtn">保存</button>
            <button class="btn">取消</button>
          </div>
        </fieldset>
      </form>
<textarea rows="" cols="" style="display: none;" id="znhfnr">
<?php echo $kw->keyWord; ?>
</textarea>
<br/><br/><br/></body></html>
<script type="text/javascript">
	

	//var questionId = <?php echo $kw->id; ?>;
	$(document).ready(function(){
		window.answersData = { "id":"<?php echo $kw->id; ?>","content":$('#znhfnr').val(),"keyword":"<?php echo $kw->keyWord; ?>","type":"<?php echo $kw->replyType; ?>","resId":"<?php echo $kw->resId; ?>"};
		if(answersData.content == ''){
			$("div#questionsContainer tbody tr").hide();
		}else{
			$("div#questionsContainer .tb-toolbar").hide();
		}
		// 处理select的事件 选择文字：文字框 ,图文：图文框
		$("form").delegate("#key_wordreplyType", "change", function() {
			var type = $("#key_wordreplyType").val(); 
			if (type == 1) {
				$("div#textContainer").show();
				$("div#picContainer").hide();
			} else {
				$("div#textContainer").hide();
				$("div#picContainer").show();
			}
			
		});
		
		// 添加切换界面		
		 $("#add").click(function() { 
 			$("div#questionsContainer").hide();
			$("form.form-horizontal").show()
				.end().find("legend").text("回复添加")
				.end().find("#anid").val(-1)
				.end().find("textarea[name='description']").val("")
				.end().find("#picContainer").hide()
				.end().find("select[name='answertype']").val(0);
			});
			$contentDiv.html(Emotion.replaceEmoji($textarea.val()));
		 
		// 点击修改切换界面
		 $("a.xgdaa").click(function() {
			// var actionData = answersData[$(this).closest("tr").index("tr") - 1];
			 var type = $("#key_wordreplyType").val(); 
			 $("div#questionsContainer").hide();
			 $("form.form-horizontal").show()
			 	.find("legend").text("回复修改");
			 //	.end().find("#anid").val(actionData.answerId);
			 
			 if (type == 1) {
				 $("div#textContainer").show();
				 $("div#picContainer").hide();
				 $("select[name='answertype']").val(1);
			 	 $("select[name='picandtext']").val(actionData.resourceid);
			 } else { 
				 $("div#textContainer").hide();
				 $("div#picContainer").show();
				 $("textarea[name='description']").val(actionData.content);
				 $contentDiv.html(Emotion.replaceEmoji($textarea.val()));
				// $("select[name='answertype']").val(0);
			 }
		 });
		 
		// 点击取消则恢复
		 $(".form-actions button:last").click(function() {
			 $("form.form-horizontal").hide();
			 $("div#questionsContainer").show();
			 return false;
		 });
		
		 $("#back").click(function() {
			 location.href = "keyWordReply.html";
			 return false;
		 });
		 
		 // 处理 checkbox 的互动
		 $("table th input").click(function() {
			 $(this).closest("table").find("tbody input[type='checkbox']").attr("checked", !!$(this).attr("checked"));
		 });
		 $("tbody input[type='checkbox']").click(function(){
			 if (!$(this).attr("checked")) {
				 $("table th input").removeAttr("checked");
			 }
		 });
	
	});
</script>