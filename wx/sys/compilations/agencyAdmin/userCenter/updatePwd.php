<!DOCTYPE html>
<html><head>
<meta http-equiv="content-type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>密码修改</title><script type="text/javascript">var yyuc_jspath = "/@system/";</script><script type="text/javascript" src="/@system/js/jquery.js"></script><script type="text/javascript" src="/@system/js/yyucadapter.js"></script>
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/bootstrap.min.css">
<link rel="stylesheet" href="<?php echo $CSS; ?>admin/admin.css">
<style>
.username{
	padding-top: 4px;
	display: inline-block;
	font-weight: bold;
}
</style>
</head>

<body>
<!--=================bind end  =============-->
<h3>密码修改</h3>
	
	<form id="pwdform" action="#" class="form-horizontal">
	 <input type="hidden" id="id" name="id" value="<?php echo $user->id; ?>"/>
	  <div class="control-group">
	    <label class="control-label">用户名</label>
	    <div class="controls">
	      <span class="username"><?php echo $user->un; ?></span>
	    </div>
	  </div>
	  
	  <div class="control-group">
	    <label class="control-label" for="newpwd">新密码</label>
	    <div class="controls">
	      <input name="newpwd" id="newpwd" type="password">
	      <span class="maroon">*</span><span class="help-inline"></span>
	    </div>
	  </div>
	  <div class="control-group">
	    <label class="control-label" for="renewpwd">确认</label>
	    <div class="controls">
	      <input name="renewpwd" id="renewpwd" type="password">
	      <span class="maroon">*</span>
	    </div>
	  </div>
	  <div class="control-group">
	    <div class="controls">
	      <button id="submit-btn" type="button" class="btn btn-primary">保存</button>
	      <button id="return-btn" type="button" class="btn">返回</button>
	    </div>
	  </div>
	</form>

</body></html>
<script type="text/javascript">
$(function(){
	 
  $("#submit-btn").click(function(){
	  var pwd   = $("#newpwd").val();
	  var pwd1 = $("#renewpwd").val();
	  var id       = $("#id").val();
	  if(pwd == '' || pwd1 == ''){
		  tusi('请填写完整。');
		  return false;
	  }
	  if(pwd!= pwd1){
		  tusi('两次密码不一致!');
		  return false;
	  }
	  ajax('updatePwd-'+id+'.html',{ pwd:pwd,pwd1:pwd1},function(data){
		  if(data == 0){
			  tusi('两次密码不一致!');
			  return false;
		  }else if(data == 2){
			  tusi('不能为空');
			  return false;
		  }else{
			  tusi('操作成功');
			  window.location.reload();
			  
		  }
		  
	  });
  });
});


</script>