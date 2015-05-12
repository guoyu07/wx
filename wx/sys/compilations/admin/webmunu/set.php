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
<body class="<?php echo Session::get('maintheme'); ?>">
	<div id="main">
        <div class="container-fluid">

            <div class="row-fluid">
                <div class="span12">

                    <div class="box">
                        <div class="box-title">
                            <div class="span8">
                                <h3><i class="icon-table"></i>网页自定义菜单管理 </h3>
                            </div>
                        </div>

                        <div class="box-content">

                            <div class="row-fluid">
                                <div class="span12 control-group">
                                    <div class="span4">
                                        <a class="btn" href="new.html"><i class="icon-plus"></i>新增一级菜单</a>
                                        <a class="btn" href="javascript:location.reload()"><i class="icon-refresh"></i>刷新</a>
                                    </div>
                                </div>

                            </div>

                            <div class="row-fluid dataTables_wrapper">
                                <form action="" method="post" class="form-horizontal">
                                    <table id="listTable" class="table table-bordered table-hover  dataTable">
                                        <thead>
                                            <tr>
                                                <th>菜单名称</th>
                                                <th>菜单图标</th>
                                                <th>菜单地址</th>
                                                <th>显示顺序</th> 
                                                <th>操作</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                        <?php $__i=0; foreach ((array)$res as $r) { $__i++; ?>
                                        	<tr>                                               
                                                <td><?php echo $r->tit; ?></td>
                                                <td><?php echo $r->gjz; ?></td>
                                                <td><?php echo $r->tel; ?></td>
                                                <td><?php echo $r->ctime; ?></td> 
                                               <td> 
                                                    <a class="btn" href="new-<?php echo $r->id; ?>.html" title="编辑"><i class="icon-edit"></i>编辑</a> 
                                                    <a class="btn" href="javascript:void(0);" onclick="del_hotel(<?php echo $r->id; ?>,this);" title="删除"><i class="icon-remove"></i>删除</a>
											   </td>
                                            </tr>
										<?php } ?>									                                        </tbody>
                                    </table>
                                </form>
                                <div class="dataTables_paginate paging_full_numbers"><span>       </span></div>                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
	<script type="text/javascript">
function del_hotel(id,o){
	if(confirm('确定要删除此条信息吗？')){
		ajax('set-del.html',{ id:id},function(m){
			tusi('删除成功');
			$(o).parent().parent().remove();
		});
	}
}
</script>
<br/><br/><br/></body>
</html>