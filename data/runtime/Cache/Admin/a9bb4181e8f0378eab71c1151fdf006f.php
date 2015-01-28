<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- HTML5 shim for IE8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->

	<link href="/statics/simpleboot/themes/<?php echo C('SP_ADMIN_STYLE');?>/theme.min.css" rel="stylesheet">
    <link href="/statics/simpleboot/css/simplebootadmin.css" rel="stylesheet">
    <link href="/statics/js/artDialog/skins/default.css" rel="stylesheet" />
    <link href="/statics/simpleboot/font-awesome/4.2.0/css/font-awesome.min.css"  rel="stylesheet" type="text/css">
    <style>
		.length_3{width: 180px;}
	</style>
	<!--[if IE 7]>
	<link rel="stylesheet" href="/statics/simpleboot/font-awesome/4.2.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<script type="text/javascript">
//全局变量
var GV = {
    DIMAUB: "/",
    JS_ROOT: "statics/js/",
    TOKEN: ""
};
</script>
<!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/statics/js/jquery.js"></script>
    <script src="/statics/js/wind.js"></script>
    <script src="/statics/simpleboot/bootstrap/js/bootstrap.min.js"></script>
<?php if(APP_DEBUG): ?><style>
		#think_page_trace_open{
			z-index:9999;
		}
	</style><?php endif; ?>
<body class="J_scroll_fixed">
<div class="wrap J_check_wrap">
  <ul class="nav nav-tabs">
     <li class="active"><a href="<?php echo U('navcat/index');?>">菜单分类</a></li>
     <li><a href="<?php echo U('navcat/add');?>">添加分类</a></li>
  </ul>
  <form class="form-horizontal J_ajaxForm" action="" method="post">
    <div class="table_list">
      <table width="100%" class="table table-hover">
        <thead>
	          <tr>
	            <th width="100">ID</th>
	            <th>名称</th>
	            <th>描述</th>
	            <th width="120">主菜单</th>
	            <th width="120">操作</th>
	          </tr>
        </thead>
        	<?php if(is_array($navcats)): foreach($navcats as $key=>$vo): ?><tr>
		            <td><?php echo ($vo["navcid"]); ?></td>
		            <td><?php echo ($vo["name"]); ?></td>
	            	<td><?php echo ($vo["remark"]); ?></td>
	            	<td>
					<?php $mainmenu=$vo['active']?"是":"否"; ?>
					<?php echo ($mainmenu); ?>
					</td>
		            <td>
		            	<a href="<?php echo U('navcat/edit',array('id'=>$vo['navcid']));?>">修改</a>|
		            	<a href="<?php echo U('navcat/delete',array('id'=>$vo['navcid']));?>" class="J_ajax_del" >删除</a>
					</td>
	          	</tr><?php endforeach; endif; ?>
          </table>
      <div class="p10"><div class="pages">  </div> </div>
     
    </div>
  	</form>
</div>
<script src="/statics/js/common.js?"></script>
</body>
</html>