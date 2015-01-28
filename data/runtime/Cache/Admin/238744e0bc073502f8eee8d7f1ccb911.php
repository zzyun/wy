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
     <li class="active"><a href="<?php echo U('menu/index');?>">后台菜单</a></li>
     <li><a href="<?php echo U('menu/add');?>">添加菜单</a></li>
     <li><a href="<?php echo U('menu/spmy_import_menu');?>">导入菜单</a></li>
     <?php if(APP_DEBUG): ?><li><a href="<?php echo U('menu/lists');?>">所有菜单</a></li>
     	<li><a href="<?php echo U('menu/spmy_export_menu');?>">备份菜单</a></li><?php endif; ?>
  </ul>
  <form class="J_ajaxForm" action="<?php echo U('Menu/listorders');?>" method="post">
    <div class="table_list">
      <table width="100%" class="table table-hover" id="menus-table">
        <thead>
          <tr>
            <th width="80">排序</th>
            <th width="50">ID</th>
            <th>应用</th>
            <th>菜单名称</th>
            <th width="80">状态</th>
            <th width="200">管理操作</th>
          </tr>
        </thead>
        <?php echo ($categorys); ?>
      </table>
    </div>
    <div class="form-actions">
        <button class="btn btn_submit btn-primary mr10 J_ajax_submit_btn" type="submit">排序</button>
      </div>
  </form>
</div>
<script src="/statics/js/common.js"></script>
<script>

$(document).ready(function () {
	Wind.css('treeTable');
    Wind.use('treeTable', function () {
        $("#menus-table").treeTable({
            indent: 20
        });
    });
});

setInterval(function () {
    var refersh_time = getCookie('refersh_time_admin_menu_index');
    if (refersh_time == 1) {
    	reloadPage(window);
    }
}, 1000);
setCookie('refersh_time_admin_menu_index',0);

</script>
</body>
</html>