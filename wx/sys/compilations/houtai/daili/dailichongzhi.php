<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<LINK rel=stylesheet type=text/css href="<?php echo $CSS; ?>ht/member.css"/>
<title></title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
</head>
<style type="text/css">
BODY 
{
    background:none;
    overflow: hidden;
}
</style>
<body style="margin:20px;padding:0px;">
<form name="clientForm" method="post" action="recharge.aspx" id="clientForm">
<div>
</div>
<table cellSpacing="0" cellPadding="0" width="100%" border="0">
   <tr>
        <td colspan="2" align="right" height="15">账面余额：</td>
        <td colspan="2" align="left" height="15">￥<span id="wdyespan" style="color: red;"><?php echo $ma->yue; ?></span>
        <?php if (!$mu->isyg && $mu->isdirect){ ?>
		&nbsp;&nbsp;折合：￥<span style="color: red;"><?php echo $zsjiagebiao; ?></span>
		<?php } ?>
        </td>
    </tr>
    <tr>
		<td height="35" width="68" align="right">代理类型：</td>
        <td valign="middle">
        <?php if ($ua->isyg){ ?>
        	公司员工
        <?php }else{ ?>
        	<?php echo translate_agency_level($ua->level); ?>
        <?php } ?>
        </td>
       	<td height="35" width="68" align="right">代理折扣：</td>
        <td valign="middle">
        <?php if ($prc_arr[$ua->level]=='100' || !$mu->isyg){ ?>
        <span id="dlzkspan" style="display: none;">100</span>无折扣
        <?php }else{ ?>
        <span id="dlzkspan" style="color:red;"><?php echo $zszk; ?></span>折
        <?php } ?>
        </td>
    </tr>
    <tr>
    	<td height="35" width="68" align="right">实际花费：</td>
        <td valign="middle"><input type="text" id="sjhfje" style="width:60px"/>元</td>
		<td height="35" width="68" align="right">充值金额：</td>
        <td valign="middle"><input type="text" id="czje" style="width:60px" readonly="readonly"/>元</td>       	
    </tr>
	<tr>
        <td height="35" width="68" align="right">
            备注：        </td>
        <td colspan="3" valign="middle">
            <input id="bz" style="width:220px" maxlength="200" type="text"/>
        </td>
    </tr>
</table>
<div id="jd_dialog_m_t"><span>
<input id="jd_submit" class="button" value="&nbsp;提 交 &nbsp;" type="button" onclick="tocz();"/>
</span>
</div>
</form>
<script language="javascript" type="text/javascript">
$(function(){
	$('#sjhfje').on('click change keyup mouseup blur',function(){
		var zk = parseInt($('#dlzkspan').text()*10);
		var je = parseInt($(this).val());
		var sjje = parseInt(100/zk*je);
		$('#czje').val(sjje);
	});
	$('#sjhfje').on('blur',function(){
		var zk = parseInt($('#dlzkspan').text()*10);
		var je = parseInt($(this).val());
		var sjje = parseInt(100/zk*je);
		$('#czje').val(sjje);
		$(this).val(je);
	});
});
function tocz(){
	var czje = parseInt($('#sjhfje').val());
	var syje = parseInt($('#wdyespan').text());
	if(czje>syje){
		alert('你的账户余额不足，请填写少于此数值的金额或者联系充值');
		return;
	}
	ajax(location.href,{ je:$('#sjhfje').val(),bz:$('#bz').val()},function(m){
		if(m=='ok'){
			tusi('充值成功');
		}
		setTimeout(function(){
			parent.location.href = parent.location.href;
		},1500);		
	});
}
</script>
</body>
</html>