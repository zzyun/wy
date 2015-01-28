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
<div class="wrap jj">
  <ul class="nav nav-tabs">
     <li><a href="<?php echo U('menu/index');?>">后台菜单</a></li>
     <li><a href="<?php echo U('menu/add');?>">添加菜单</a></li>
  </ul>
  <div class="common-form">
    <form method="post" class="form-horizontal J_ajaxForm" action="<?php echo U('Menu/edit_post');?>">
      <div class="table_list">
        <table cellpadding="2" cellspacing="2" class="table_form" width="100%">
          <tbody>
            <tr>
              <td width="180">上级:</td>
              <td><select name="parentid" class="normal_select">
                  <option value="0">作为一级菜单</option>
                     <?php echo ($select_categorys); ?>
                </select></td>
            </tr>
            <tr>
              <td>名称:</td>
              <td><input type="text" class="input" name="name" value="<?php echo ($data["name"]); ?>"><span class="must_red">*</span></td>
            </tr>
            <tr>
              <td>应用:</td>
              <td><input type="text" class="input" name="app" id="app" value="<?php echo ($data["app"]); ?>"><span class="must_red">*</span></td>
            </tr>
            <tr>
              <td>模块:</td>
              <td><input type="text" class="input" name="model" id="model" value="<?php echo ($data["model"]); ?>"><span class="must_red">*</span></td>
            </tr>
            <tr>
              <td>方法:</td>
              <td><input type="text" class="input" name="action" id="action" value="<?php echo ($data["action"]); ?>"><span class="must_red">*</span></td>
            </tr>
            <tr>
              <td>参数:</td>
              <td><input type="text" class="input length_5" name="data" value="<?php echo ($data["data"]); ?>">
                例:id=3&amp;p=3</td>
            </tr>
            <tr>
              <td>图标:</td>
              <td><input type="text" class="input" name="icon" id="action" value="<?php echo ($data["icon"]); ?>"></td>
            </tr>
            <tr>
              <td>备注:</td>
              <td><textarea name="remark" rows="5" cols="57"><?php echo ($data["remark"]); ?></textarea></td>
            </tr>
            <tr>
              <td>状态:</td>
              <td><select name="status" class="normal_select">
                  <option value="1" <?php if(($data["status"]) == "1"): ?>selected<?php endif; ?>>显示</option>
                  <option value="0" <?php if(($data["status"]) == "0"): ?>selected<?php endif; ?>>隐藏</option>
                </select></td>
            </tr>
            <tr>
              <td>类型:</td>
              <td><select name="type" class="normal_select">
                  <option value="1" <?php if(($data["type"]) == "1"): ?>selected<?php endif; ?>>权限认证+菜单</option>
                   <option value="0" <?php if(($data["type"]) == "0"): ?>selected<?php endif; ?>>只作为菜单</option>
                </select>
                注意：“权限认证+菜单”表示加入后台权限管理，纯碎是菜单项请不要选择此项。</td>
            </tr>
          </tbody>
        </table>
      </div>
       <input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
      <div class="form-actions">
        <button type="submit" class="btn btn-primary btn_submit  J_ajax_submit_btn">更新</button>
        <button class="btn J_ajax_close_btn"type="submit">关闭</button>
      </div>
    </form>
  </div>
</div>
<script src="/statics/js/common.js"></script>
<script>
	$(function(){
		$(".J_ajax_close_btn").on('click', function (e){
		    e.preventDefault();
		    Wind.use("artDialog", function () {
		        art.dialog({
		            id: "question",
		            icon: "question",
		            fixed: true,
		            lock: true,
		            background: "#CCCCCC",
		            opacity: 0,
		            content: "您确定需要关闭当前页面嘛？",
		            ok:function(){
		            	setCookie('refersh_time_admin_menu_index',1);
						window.close();
						return true;
					}
		        });
		    });
		});
	});

</script>
</body>
</html>