<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>系统首页</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo $CSS; ?>ht/invalid.css" type="text/css" media="screen" />	
</head>
<BODY>
<div class="content-box role">
	<div class="content-box-header">
		<h3>OEM设置</h3>
		<div class="clear"></div>
	</div>
	<div class="content-box-content">
		<div class="tab-content default-tab" id="form">
			<form method="post" action="" name="clientForm" id="clientForm" onsubmit="return checksub();"><?php echo tk();  echo $u->hidden('id'); ?>
			<table cellSpacing="0" cellPadding="0" width="100%" border="0">
				<tr>
				<td height="25" width="30%" class="left" align="right">
					网站名称
				：</td>
				<td height="25" width="*" align="left">
				<?php echo $u->text('webname','style="width:185px"'); ?>
				<font color="red">*</font>
				</td></tr>
                
				<tr>
				<td height="25" width="30%" class="left" align="right">
					网站域名
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $u->text('domain','style="width:225px", placeholder="xx.xx.com"'); ?><font color="red">*</font>
				    (仅限已在阿里云备案的域名地址,无需填写"http://")
				</td>
				</tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					微网站域名
				：</td>
				<td height="25" width="*" align="left">
					<?php echo $u->text('weiurl','style="width:225px", placeholder="xx.xx.com"'); ?><font color="red"></font>
				    (微信页面下方的版权连接地址,无需填写"http://")
				</td>
				</tr>			
                <tr>
                <td height="25" width="30%" class="left" align="right">
					客服QQ
				：</td>
				<td height="25" width="*" align="left">
                   <?php echo $u->text('kfcode','style="width:225px;"'); ?>
				</td></tr>
				<tr>
				<td height="25" width="30%" class="left" align="right">
					网站LOGO
				：</td>
				<td height="25" width="*" align="left">
				<?php echo $u->upload('logo',array('text'=>'上传图片','showdel'=>false,'type'=>'png,jpeg,jpg,gif,bmp','width'=>100,'height'=>30),null,null,'picsethere'); ?>
				</td></tr>
                <tr>
				<td colspan="2">
					<p class="img-area cover-bd" id="picsethere" style="text-align: center;">
				</td>				
                </tr>
				<!-- 
				<tr>
				<td height="25" width="30%" class="left" align="right">
				首页代码:
				：</td>
				<td height="25" width="*" align="left">
				{ $u->upload('html',array('text'=>'上传','showdel'=>true,'type'=>'zip','width'=>100))}
				请上传首页代码的zip包 页面的名称必须为:index.html
				</td></tr>
				 -->
				<tr>				
				<td height="25" width="30%" align="right">
				</td>
				<td height="25"><div align="left"><input type="hidden" name="action" value="add" />
					<input name="btnAdd" ID="btnAdd" type="submit" class="button" value=" 提 交 " />
					<input name="reset" ID="Submit1" type="reset" class="button" value=" 重 置 " />
					<input name="back" ID="back" type="button" onclick="history.back();" class="button" value=" 返 回 " />
				</div></td></tr>
				<tr>
				<td colspan="2" height="100" width="30%" align="right">
				 </td>
				 </tr>
			</table>
			</form>
		</div>
	</div>
</div>
<br />
<br />
<br />
</BODY>
</html>