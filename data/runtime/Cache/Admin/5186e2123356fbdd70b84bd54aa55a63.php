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
     <li class="active"><a href="<?php echo U('ad/index');?>">所有广告</a></li>
     <li><a href="<?php echo U('ad/add');?>">添加广告</a></li>
  </ul>
  <div class="common-form">
    <form method="post" class="J_ajaxForm" action="#">
      <div class="table_list">
      	<?php $status=array("1"=>"显示","0"=>"隐藏"); ?>
	    <table width="100%" class="table table-hover">
	        <thead>
	          <tr>
	          	<th width="16"><label><input type="checkbox" class="J_check_all" data-direction="x" data-checklist="J_check_x"></label></th>
	            <th width="50">ID</th>
	            <th>广告名称</th>
	            <th>调用代码</th>
	            <th width="45">状态</th>
	            <th width="120">操作</th>
	          </tr>
	        </thead>
	        <tbody>
	        	<?php if(is_array($ads)): foreach($ads as $key=>$vo): ?><tr>
	        		<td><input type="checkbox" class="J_check" data-yid="J_check_y" data-xid="J_check_x" name="ids[]" value="<?php echo ($vo["ad_id"]); ?>"></td>
		            <td><?php echo ($vo["ad_id"]); ?></td>
		            <td><?php echo ($vo["ad_name"]); ?></td>
		            <?php $usercode="{".":sp_getad('".$vo['ad_name']."')}"; ?>
		            <td><?php echo ($usercode); ?></td>
		            <td><?php echo ($status[$vo['status']]); ?></td>
		            <td>
		            	<a href="<?php echo U('ad/edit',array('id'=>$vo['ad_id']));?>" >修改</a>|
			            <a href="<?php echo U('ad/delete',array('id'=>$vo['ad_id']));?>" class="J_ajax_del" >删除</a>
			        </td>
	          	</tr><?php endforeach; endif; ?>
			</tbody>
	      </table>
  		</div>
  		<div class="form-actions">
            <label class="checkbox inline" for="check_all"><input type="checkbox" class="J_check_all" data-direction="y" data-checklist="J_check_y" id="check_all">全选</label>  
	        <button class="btn btn-primary J_ajax_submit_btn" type="submit" data-action="<?php echo u('ad/toggle',array('display'=>1));?>" data-subcheck="true" >显示</button>
        	<button class="btn btn-primary J_ajax_submit_btn" type="submit" data-action="<?php echo u('ad/toggle',array('hide'=>1));?>" data-subcheck="true" >隐藏</button>
      </div>
    </form>
  </div>
</div>
<script src="/statics/js/common.js?"></script>
</body>
</html>