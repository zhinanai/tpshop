<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>tpshop管理后台</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.4 -->
    <link href="/Public/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- FontAwesome 4.3.0 -->
 	<link href="/Public/bootstrap/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Ionicons 2.0.0 --
    <link href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="/Public/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- AdminLTE Skins. Choose a skin from the css/skins 
    	folder instead of downloading all of them to reduce the load. -->
    <link href="/Public/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="/Public/plugins/iCheck/flat/blue.css" rel="stylesheet" type="text/css" />   
    <!-- jQuery 2.1.4 -->
    <script src="/Public/plugins/jQuery/jQuery-2.1.4.min.js"></script>
	<script src="/Public/js/global.js"></script>
    <script src="/Public/js/myFormValidate.js"></script>    
    <script src="/Public/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="/Public/js/layer/layer-min.js"></script><!-- 弹窗js 参考文档 http://layer.layui.com/-->
    <script src="/Public/js/myAjax.js"></script>
    <script type="text/javascript">
    function delfunc(obj){
    	layer.confirm('确认删除？', {
    		  btn: ['确定','取消'] //按钮
    		}, function(){
    		    // 确定
   				$.ajax({
   					type : 'post',
   					url : $(obj).attr('data-url'),
   					data : {act:'del',del_id:$(obj).attr('data-id')},
   					dataType : 'json',
   					success : function(data){
   						if(data==1){
   							layer.msg('操作成功', {icon: 1});
   							$(obj).parent().parent().remove();
   						}else{
   							layer.msg(data, {icon: 2,time: 2000});
   						}
//   						layer.closeAll();
   					}
   				})
    		}, function(index){
    			layer.close(index);
    			return false;// 取消
    		}
    	);
    }
    
    function selectAll(name,obj){
    	$('input[name*='+name+']').prop('checked', $(obj).checked);
    }   
    
    function get_help(obj){
        layer.open({
            type: 2,
            title: '帮助手册',
            shadeClose: true,
            shade: 0.3,
            area: ['70%', '80%'],
            content: $(obj).attr('data-url'), 
        });
    }
    </script>        
  </head>
  <body style="background-color:#ecf0f5;">
 

<div class="wrapper">
	<div class="breadcrumbs" id="breadcrumbs">
	<ol class="breadcrumb">
	<?php if(is_array($navigate_admin)): foreach($navigate_admin as $k=>$v): if($k == '后台首页'): ?><li><a href="<?php echo ($v); ?>"><i class="fa fa-home"></i>&nbsp;&nbsp;<?php echo ($k); ?></a></li>
	    <?php else: ?>    
	        <li><a href="<?php echo ($v); ?>"><?php echo ($k); ?></a></li><?php endif; endforeach; endif; ?>          
	</ol>
</div>

	<section class="content">
       <div class="row">
       		<div class="col-xs-12">
	       		<div class="box">
	             <div class="box-header">
	               	<nav class="navbar navbar-default">	     
				        <div class="collapse navbar-collapse">
				          <form class="navbar-form form-inline" action="<?php echo U('Tools/regionHandle');?>" method="post">
				            <div class="form-group">
				            	<label class="control-label" for="input-mobile">增加地区</label>
				            	<div class="input-group">
				            		<input type="hidden" name="level" value="<?php echo ($parent["level"]); ?>">
				            		<input type="hidden" name="parent_id" value="<?php echo ($parent["id"]); ?>">
				              		<input type="text" name="name" class="form-control" placeholder="请输入地区">
				              	</div>
				            </div>
				            <button type="submit" class="btn btn-primary">确定</button>
				            <?php if($parent[level] > 0): ?><div class="form-group pull-right">
					            <a href="<?php echo U('Tools/region',array('parent_id'=>$parent[parent_id]));?>" class="btn btn-primary pull-right"><i class="fa fa-reply"></i> 返回上一级</a>
				            </div><?php endif; ?>		          
				          </form>
				      	</div>
	    			</nav>
	             </div>
	             <div class="box-body">
	           	 <div class="row">
	            	<div class="col-sm-12">
		              <table id="list-table" class="table table-bordered table-striped dataTable">
						<tbody>
						 <tr role="row" align="center">    
                          <?php if(is_array($region)): foreach($region as $k=>$vo): if($k%3 == 0): ?></tr><tr><?php endif; ?>
      						<td>
      							<label class="margin"><?php echo ($vo["name"]); ?></label>
      							<?php if($vo[level] < 4): ?><a href="<?php echo U('Tools/region',array('parent_id'=>$vo[id]));?>" class="btn btn-info" role="button">管理</a>
      							&nbsp;&nbsp;<?php endif; ?>
      							<a href="javascript:void(0);" data-url="<?php echo U('Tools/regionHandle',array('id'=>$vo[id]));?>" onclick="delRegion(this)" class="btn btn-default" role="button">删除</a>
      						</td><?php endforeach; endif; ?>
		                  </tr>
		                 </tbody>
		               </table>
	               </div>
	          	</div>
	          </div>
	        </div>
       	</div>
       </div>
   </section>
</div>
<script type="text/javascript">
function delRegion(obj){
	layer.confirm('确定删除此地区？', {icon: 3, title:'提示删除'}, function(index){
	   layer.close(index);
	   window.location.href = $(obj).attr('data-url');
	});
}
</script>
</body>
</html>