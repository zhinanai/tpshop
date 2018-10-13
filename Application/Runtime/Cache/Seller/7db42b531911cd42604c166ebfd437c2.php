<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>商家中心</title>
<meta name="renderer" content="webkit|ie-comp|ie-stand">
<link href="/Public/css/base.css" rel="stylesheet" type="text/css">
<link href="/Public/css/seller_center.css" rel="stylesheet" type="text/css">
<script>
//var COOKIE_PRE = '3CC6_';var _CHARSET = 'utf-8';
var SITEURL = 'http://www.shop.com/';
//var RESOURCE_SITE_URL = 'http://www.xiaomi.com/data/resource';
//var SHOP_RESOURCE_SITE_URL = 'http://www.xiaomi.com/shop/resource';
//var SHOP_TEMPLATES_URL = 'http://www.xiaomi.com/shop/templates/default';
</script>
<script type="text/javascript" src="/Public/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="/Public/js/seller/seller.js"></script>
<script type="text/javascript" src="/Public/js/seller/waypoints.js"></script>
<script type="text/javascript" src="/Public/js/seller/jquery.ui.js"></script>
<script type="text/javascript" src="/Public/js/seller/common.js"></script>
<script type="text/javascript" src="/Public/js/seller/member.js" charset="utf-8"></script>
<script type="text/javascript" src="/Public/js/dialog/dialog.js" id="dialog_js" charset="utf-8"></script>
<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
      <script src="http://www.xiaomi.com/data/resource/js/html5shiv.js"></script>
      <script src="http://www.xiaomi.com/data/resource/js/respond.min.js"></script>
<![endif]-->
<!--[if IE 6]>
<script src="http://www.xiaomi.com/data/resource/js/IE6_MAXMIX.js"></script>
<script src="http://www.xiaomi.com/data/resource/js/IE6_PNG.js"></script>
<script>
DD_belatedPNG.fix('.pngFix');
</script>
<script>
// <![CDATA[
if((window.navigator.appName.toUpperCase().indexOf("MICROSOFT")>=0)&&(document.execCommand))
try{
document.execCommand("BackgroundImageCache", false, true);
   }
catch(e){}
// ]]>
</script>
<![endif]-->

</head>
<body>
<script type="text/javascript" src="/Public/js/seller/ToolTip.js"></script>
<div id="append_parent"></div>
<div id="ajaxwaitid"></div>
<div class="wrapper">
<link href="/Public/css/shop_custom.css" rel="stylesheet" type="text/css">
<div class="ncsc-path"><i class="icon-desktop"></i>商家管理中心<i class="icon-angle-right"></i>店铺<i class="icon-angle-right"></i>店铺装修<i class="icon-angle-right"></i>页面设计</div>
<div class="ncsc-decoration-layout">
  <div class="ncsc-decoration-menu" id="waypoints">
    <div class="title"><i class="icon"></i>
      <h3>店铺装修选项</h3>
      <h5>店铺首页模板设计操作</h5>
    </div>
    <ul class="menu">
      <li><a id="btn_edit_background" href="javascript:void(0);"><i class="background"></i>编辑背景</a></li>
      <li><a id="btn_edit_head" href="javascript:void(0);"><i class="head"></i>编辑头部</a></li>
      <li><a id="btn_add_block" href="javascript:void(0);"><i class="block"></i>添加布局块</a></li>
      <li><a id="btn_preview" href="<?php echo U('Home/Store/decoration_preview',array('decoration_id'=>$decoration_id,'store_id'=>$store_id));?>" target="_blank"><i class="preview"></i>设计预览</a></li>
      <li><a id="btn_close" href="javascript:void(0);"><i class="close"></i>完成退出</a></li>
    </ul>
    <div class="faq">下方区域为1200像素宽度即时编辑区域；“添加布局块”后选择模块类型进行详细设置；“设计预览”可查看生成后效果；内容将实时保存，设置完成后直接选择“完成退出”。</div>
  </div>
  <div id="store_decoration_content" style="<?php echo ($decoration_background_style); ?>">
    <div id="decoration_banner" class="ncsl-nav-banner"> </div>
    <div id="decoration_nav" class="ncsl-nav">
      <div class="ncs-nav">
        <ul>
          <li class="active"><a href="javascript:void(0);"><span>店铺首页<i></i></span></a></li>
          <li><a href="javascript:void(0);"><span>店铺动态<i></i></span></a></li>
        </ul>
      </div>
    </div>
    <div id="store_decoration_area" class="store-decoration-page">
	    <?php if(is_array($block_list)): foreach($block_list as $key=>$block): ?><div id="block_<?php echo ($block[block_id]); ?>" data-block-id="<?php echo ($block[block_id]); ?>" nctype="store_decoration_block" 
class="ncsc-decration-block store-decoration-block-1 <?php if($block[block_full_width] == 1): ?>store-decoration-block-full-width<?php endif; ?> tip" title="<?php echo ($block_title); ?>">
    <div nctype="store_decoration_block_content" class="ncsc-decration-block-content store-decoration-block-1-content">
        <div nctype="store_decoration_block_module" class="store-decoration-block-1-module">
            <?php if($block[block_module_type] == 'html'): $block = empty($block) ? $output['block'] : $block; $block_content = $block['block_content']; ?>
            	<?php echo html_entity_decode($block_content);?>
            <?php elseif($block[block_module_type] == 'slide'): ?>
				<?php $block_content = unserialize($block['block_content']);?>
				<ul nctype="store_decoration_slide" style="height:<?php echo ($block_content['height']); ?>px; overflow:hidden;">
				    <?php if(is_array($block_content['images'])): foreach($block_content['images'] as $key=>$value): ?><li data-image-name="<?php echo ($value['image_name']); ?>" data-image-url="<?php echo ($value[image_url]); ?>" data-image-link="<?php echo ($value['image_link']); ?>" style="height:<?php echo ($block_content['height']); ?>px; background: url(<?php echo ($value[image_url]); ?>) no-repeat scroll center top transparent;">
					    	<a href="<?php echo ($value['image_link']); ?>" target="_blank" style="display:block;width:100%;height:100%;"></a>
					    </li><?php endforeach; endif; ?>
				</ul>
			<?php elseif($block[block_module_type] == 'goods'): ?>
			<?php  if(empty($goods_list)) { $block_content = empty($block_content) ? $output['block_content'] : $block_content; $goods_list = unserialize($block['block_content']); } ?>
			<?php if(!empty($goods_list)): ?><ul class="goods-list">
			  <?php if(is_array($goods_list)): foreach($goods_list as $key=>$val): ?><li nctype="goods_item" data-goods-id="<?php echo ($val['goods_id']); ?>" data-goods-name="<?php echo ($val['goods_name']); ?>" data-goods-price="<?php echo ($val['shop_price']); ?>"  data-goods-image="<?php echo ($val['goods_image']); ?>">
			    <div class="goods-thumb"> 
			    	<a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$val[goods_id]));?>" target="_blank" title="<?php echo ($val['goods_name']); ?>"> 
			    	<img src="<?php echo (goods_thum_images($val["goods_id"],240,240)); ?>" alt="<?php echo ($val['goods_name']); ?>"> </a> 
			    </div>
			    <dl class="goods-info">
			      <dt><a href="<?php echo U('Home/Goods/goodsInfo',array('id'=>$val[goods_id]));?>" target="_blank" title="<?php echo ($val['goods_name']); ?>"><?php echo ($val['goods_name']); ?></a></dt>
			      <dd>¥<?php echo ($val['shop_price']); ?></dd>
			    </dl>
			  </li><?php endforeach; endif; ?>
			</ul>
			<div style="text-align: center; display: block; padding: 15px 0; margin: 0!important;" id="page_list"><?php echo ($show_page); ?></div><?php endif; ?>
			<?php elseif($block[block_module_type] == 'hot_area'): ?>
				<?php $block_content = unserialize($block['block_content']);?>
				<div>
				    <?php $hot_area_flag = str_replace('.', '',$block_content['image']);?>
				    <img data-image-name="<?php echo $block_content['image'];?>" usemap="#<?php echo $hot_area_flag;?>" src="<?php echo $block_content['image_url'];?>" alt="<?php echo $block_content['image'];?>">
				    <map name="<?php echo $hot_area_flag;?>" id="<?php echo $hot_area_flag;?>">
				        <?php if(!empty($block_content['areas']) && is_array($block_content['areas'])) {?>
				        <?php foreach($block_content['areas'] as $value) {?>
				        <area target="_blank" shape="rect" coords="<?php echo $value['x1'];?>,<?php echo $value['y1'];?>,<?php echo $value['x2'];?>,<?php echo $value['y2'];?>" href ="<?php echo $value['link'];?>" alt="<?php echo $value['link'];?>" />
				        <?php } ?>
				        <?php } ?>
				    </map>
				</div>
			<?php else: endif; ?>
        </div>
        <?php if($control_flag == 1): ?><a class="edit" nctype="btn_edit_module" data-module-type="<?php echo ($block['block_module_type']); ?>" href="javascript:;" data-block-id="<?php echo ($block[block_id]); ?>"><i class="icon-edit"></i>编辑模块</a><?php endif; ?>
    </div>
    <?php if($control_flag == 1): ?><a class="delete" nctype="btn_del_block" href="javascript:;" data-block-id="<?php echo ($block[block_id]); ?>" title="删除该布局块"><i class="icon-trash"></i>删除布局块</a><?php endif; ?>
</div><?php endforeach; endif; ?>
     </div>
  </div>
</div>

<!-- 背景编辑对话框 -->
<div id="dialog_edit_background" class="eject_con dialog-decoration-edit" style="display:none;">
  <dl>
    <dt>背景颜色：</dt>
    <dd>
      <input id="txt_background_color" class="text w80" type="text" name="" value="<?php echo ($decoration_setting['background_color']); ?>" maxlength="7">
      <p class="hint">设置背景颜色请使用十六进制形式(#XXXXXX)，默认留空为白色背景。</p>
    </dd>
  </dl>
  <dl>
    <dt>背景图：</dt>
    <dd>
      <div class="ncsc-upload-btn"> <a href="javascript:void(0);"><span>
        <input type="file" hidefocus="true" size="1" class="input-file" id="file_background_image" name="file"/>
        </span>
        <p><i class="icon-upload-alt"></i>图片上传</p>
        </a> </div>
      <div id="div_background_image" <?php if(empty($decoration_setting['background_image'])): ?>style="display:none;"<?php endif; ?> class="background-image-thumb">
        <img id="img_background_image" src="<?php echo ($decoration_setting['background_image_url']); ?>" alt="">
        <input id="txt_background_image" type="hidden" name="" value="<?php echo ($decoration_setting['background_image']); ?>">
        <a id="btn_del_background_image" class="del" href="javascript:void(0);" title="移除背景图">X</a>
       </div>
    </dd>
  </dl>
  <dl>
    <dt>背景图定位：</dt>
    <dd>
      <input id="txt_background_position_x" class="text w40" type="text" value="<?php echo ($decoration_setting['background_position_x']); ?>"><label class="add-on">X</label>
      &#12288;&#12288;
      <input id="txt_background_position_y" class="text w40" type="text" value="<?php echo ($decoration_setting['background_position_y']); ?>"><label class="add-on">Y</label>
      <p class="hint">设置背景图像的起始位置。</p>
    </dd>
  </dl>
  <dl>
    <dt>背景图填充方式：</dt>
    <dd>
      <?php $repeat = $decoration_setting['background_image_repeat'];?>
      <input id="input_no_repeat" type="radio" value="no-repeat" name="background_repeat" <?php if(empty($repeat) || $repeat == 'no-repeat') {echo 'checked';}?>>
      <label for="input_no_repeat">不重复</label>
      <input id="input_repeat" type="radio" value="repeat" name="background_repeat" <?php if($repeat == 'repeat') {echo 'checked';}?>>
      <label for="input_repeat">平铺</label>
      <input id="input_repeat_x" type="radio" value="repeat-x" name="background_repeat" <?php if($repeat == 'repeat-x') {echo 'checked';}?>>
      <label for="input_repeat_x">x轴平铺</label>
      <input id="input_repeat_y" type="radio" value="repeat-y" name="background_repeat" <?php if($repeat == 'repeat-y') {echo 'checked';}?>>
      <label for="input_repeat_y">y轴平铺</label>
    </dd>
  </dl>
  <dl>
    <dt>背景滚动模式：</dt>
    <dd>
      <input id="txt_background_attachment" class="text w80" type="text" value="<?php echo ($decoration_setting['background_attachment']); ?>">
      <p class="hint">设置背景随屏幕滚动或固定，例如："scroll"或"fixed"。 </p>
    </dd>
  </dl>
  <div class="bottom">
    <label class="submit-border"><a id="btn_save_background" class="submit" href="javascript:void(0);">保存</a></label>
  </div>
</div>
<!-- 头部编辑对话框 -->
<div id="dialog_edit_head" class="eject_con dialog-decoration-edit" style="display:none;">
  <div id="dialog_edit_head_tabs">
    <ul>
      <li><a href="#dialog_edit_head_tabs_1">头部导航</a></li>
      <li><a href="#dialog_edit_head_tabs_2">头部图片</a></li>
    </ul>
    <div id="dialog_edit_head_tabs_1">
      <dl>
        <dt>是否显示：</dt>
        <dd>
          <label for="decoration_nav_display_true">
            <input id="decoration_nav_display_true" type="radio" class="radio" value="true" name="decoration_nav_display" checked>
            显示</label>
          <label for="decoration_nav_display_false">
            <input id="decoration_nav_display_false" type="radio" class="radio" value="false" name="decoration_nav_display" >
            不显示</label>
          <p class="hint">“头部导航”为店铺首页店铺导航条，可设置是否显示， 默认为显示。</p>
        </dd>
      </dl>
      <dl>
        <dt>导航样式：</dt>
        <dd>
          <textarea id="decoration_nav_style" class="w400 h100"><?php echo ($decoration_nav[style]); ?></textarea>
          <p> <a id="btn_default_nav_style" class="ncsc-btn-mini" href="javascript:void(0);"><i class="icon-refresh"></i>恢复默认</a> </p>
          <p class="hint">导航条对应CSS文件，如修改后显示效果不符可恢复默认值。</p>
        </dd>
      </dl>
      <div class="bottom">
        <label class="submit-border"><a id="btn_save_decoration_nav" class="submit" href="javascript:void(0);">保存</a></label>
      </div>
    </div>
    <div id="dialog_edit_head_tabs_2">
      <dl>
        <dt>是否显示：</dt>
        <dd>
          <label for="decoration_banner_display_true">
            <input id="decoration_banner_display_true" type="radio" class="radio" value="true" name="decoration_banner_display" checked>
            显示</label>
          <label for="decoration_banner_display_false">
            <input id="decoration_banner_display_false" type="radio" class="radio" value="false" name="decoration_banner_display" >
            不显示</label>
          <p class="hint">“头部图片”为店铺首页最上方图片，可设置是否显示。</p>
        </dd>
      </dl>
      <dl>
        <dt>图片：</dt>
        <dd>
          <div id="div_banner_image"  class="background-image-thumb">	<img id="img_banner_image" src="<?php echo ($decoration_banner['image']); ?>" alt="">
            <input id="txt_banner_image" type="hidden" name="" value="<?php echo ($decoration_banner["image"]); ?>">
            <a id="btn_del_banner_image" class="del" href="javascript:void(0);" title="移除">X</a> </div>
          <div class="ncsc-upload-btn"> <a href="javascript:void(0);"> <span>
            <input type="file" hidefocus="true" size="1" class="input-file" id="file_decoration_banner" name="file"/>
            </span>
            <p><i class="icon-upload-alt"></i>图片上传</p>
            </a> </div>
          <p class="hint">选择上传头部图片，建议使用宽度为1000像素，大小不超过1M的gif\jpg\png格式图片。</p>
        </dd>
      </dl>
      <div class="bottom">
        <label class="submit-border"><a id="btn_save_decoration_banner" class="submit" href="javascript:void(0);">保存设置</a></label>
      </div>
    </div>
  </div>
</div>
<!-- 选择模块对话框 -->
<div id="dialog_select_module" class="dialog-decoration-module" style="display:none;">
  <ul>
    <li><a nctype="btn_show_module_dialog" data-module-type="slide" href="javascript:void(0);"><i class="slide"></i>
      <dl>
        <dt>图片和幻灯</dt>
        <dd>添加图片和可切换幻灯</dd>
      </dl>
      </a></li>
    <li><a nctype="btn_show_module_dialog" data-module-type="hot_area" href="javascript:void(0);"><i class="hotarea"></i>
      <dl>
        <dt>图片热点</dt>
        <dd>添加图片并设置热点区域链接</dd>
      </dl>
      </a></li>
    <li> <a nctype="btn_show_module_dialog" data-module-type="goods" href="javascript:void(0);"><i class="goods"></i>
      <dl>
        <dt>店铺商品</dt>
        <dd>选择添加店铺内的在售商品</dd>
      </dl>
      </a> </li>
    <li> <a nctype="btn_show_module_dialog" data-module-type="html" href="javascript:void(0);"><i class="html"></i>
      <dl>
        <dt>自定义</dt>
        <dd>编辑器自定义编辑html</dd>
      </dl>
      </a> </li>
  </ul>
</div>
<!-- 自定义模块编辑对话框 -->
<div id="dialog_module_html" class="eject_con dialog-decoration-edit" style="display:none;">
  <div class="alert">
    <ul>
      <li>1. 可将预先设置好的网页文件内容复制粘贴到文本编辑器内，或直接在工作窗口内进行编辑操作。</li>
      <li>2. 默认为可视化编辑，选择第一个按钮切换到html代码编辑。css文件可以Style=“...”形式直接写在对应的html标签内。</li>
    </ul>
  </div>
  <textarea id="module_html_editor" name="module_html_editor" class="render" style=" width:1016px; height:400px; visibility:hidden;"></textarea>
  <div class="bottom">
    <label class="submit-border"><a id="btn_save_module_html" class="submit" href="javascript:void(0);">保存设置</a></label>
  </div>
</div>
<!-- 幻灯模块编辑对话框 -->
<div id="dialog_module_slide" class="eject_con dialog-decoration-edit" style="display:none;">
  <div class="alert">
    <ul>
      <li>1. 可选择图片以全屏或非全屏形式显示，<strong class="orange">且必须设定图片的高度</strong>，否则将无法正常浏览。</li>
      <li>2. 上传单张图片时系统默认显示为<strong>“图片链接”</strong>形式显示，如一次上传多图将以<strong>“幻灯片”</strong>形式显示。</li>
    </ul>
  </div>
  <div id="module_slide_html" class="slide-upload-thumb">
    <ul class="module-slide-content">
    </ul>
  </div>
  <h4>相关设置：</h4>
  <dl class="display-set">
    <dt>显示设置：</dt>
    <dd><span>全屏显示
      <input id="txt_slide_full_width" type="checkbox" class="checkobx" name="">
      </span><span><strong class="orange">*</strong> 显示高度
      <input id="txt_slide_height" type="text" class="text w40" value=""><em class="add-on">像素</em></span>
      <p><a id="btn_add_slide_image" class="ncsc-btn mt5" href="javascript:void(0);"><i class="icon-plus"></i>添加图片</a></p>
    </dd>
  </dl>
  <div id="div_module_slide_upload" style="display:none;">
    <form action="">
      <dl>
        <dt>图片上传：</dt>
        <dd>
          <div id="div_module_slide_image" class="module-upload-image-preview"></div>
          <div class="ncsc-upload-btn"> <a href="javascript:void(0);"> <span>
            <input type="file" hidefocus="true" size="1" class="input-file" name="file" id="file"  nctype="btn_module_slide_upload"/>
            </span>
            <p><i class="icon-upload-alt"></i>图片上传</p>
            </a> </div>
          <p class="hint">请上传宽度为1000像素的jpg/gif/png格式图片。</p>
        </dd>
      </dl>
      <dl>
        <dt>图片链接：</dt>
        <dd>
          <input id="module_slide_url" class="text w400" type="text">
          <p class="hint">请输入以http://为开头的图片链接地址，仅作为图片使用时请留空此选项</p>
          <p class="mt5"><a id="btn_save_add_slide_image" class="ncsc-btn ncsc-btn-acidblue" href="javascript:void(0);">添加</a> <a id="btn_cancel_add_slide_image" class="ncsc-btn ncsc-btn-orange" href="javascript:void(0);">取消</a></p>
        </dd>
      </dl>
    </form>
  </div>
  <div class="bottom">
    <label class="submit-border"><a id="btn_save_module_slide" class="submit" href="javascript:void(0);">保存设置</a></label>
  </div>
</div>
<!-- 图片热点模块编辑对话框 -->
<div id="dialog_module_hot_area" class="eject_con dialog-decoration-edit" style="display:none;">
  <div class="alert">
    <ul>
      <li>1. 在已上传的图片范围拖动鼠标形成选择区域，对该区域添加以http://格式开头的链接地址并点击“添加网址”按钮生效。</li>
      <li>2. 对已添加的热点可做编辑链接地址修改，如需调整位置，请删除该热点区域并保存，之后重新选择添加。</li>
    </ul>
  </div>
  <div id="div_module_hot_area_image" class="hot-area-image" style="position: relative;"></div>
  <ul id="module_hot_area_select_list" class="hot-area-select-list">
  </ul>
  <h4>相关设置：</h4>
  <form action="">
    <dl>
      <dt>图片上传：</dt>
      <dd>
        <div class="ncsc-upload-btn"> <a href="javascript:void(0);"> <span>
          <input type="file" hidefocus="true" size="1" class="input-file" name="file" id="file"  nctype="btn_module_hot_area_upload"/>
          </span>
          <p><i class="icon-upload-alt"></i>图片上传</p>
          </a> </div>
        <p class="hint">选择上传jpg/gif/png格式图片，建议宽度不超过1000像素，高度不超过400像素，如超出此范围，请先自行对图片进行裁切调整。</p>
      </dd>
    </dl>
  </form>
  <dl>
    <dt>热点链接设置：</dt>
    <dd>
      <input id="module_hot_area_url" class="text w400" type="text" />
      <a id="btn_module_hot_area_add" class="ncsc-btn ml5" href="javascript:void(0);"><i class="icon-anchor"></i>添加网址</a>
      <p class="hint">在输入框中添加以“http://”格式开头的热点区域跳转网址。</p>
    </dd>
  </dl>
  <div class="bottom">
    <label class="submit-border"><a id="btn_save_module_hot_area" class="submit" href="javascript:void(0);">保存设置</a></label>
  </div>
</div>
<!-- 商品模块编辑对话框 -->
<div id="dialog_module_goods" class="eject_con dialog-decoration-edit" style="display:none;">
  <div class="alert">
    <ul>
      <li>1. 搜索店铺内在售商品并“选择添加”，设置窗口上部将出现已选择的商品列表，也可对其进行“取消选择”操作，点击保存设置后生效。</li>
      <li>2. 当已选择的商品超过10个时，系统默认未全部显示，可通过在已选区域滚动鼠标或拉动侧边条进行查看及操作。</li>
    </ul>
  </div>
  <div id="decorationGoods">
    <ul id="div_module_goods_list" class="goods-list">
    </ul>
  </div>
  <h4 class="mt10">店铺在售商品选择</h4>
  <div class="decoration-search-goods">
    <div class="search-bar">输入商品关键字：
      <input id="txt_goods_search_keyword" type="text" class="text w200 vm" name="">
      <a id="btn_module_goods_search" class="ncsc-btn" href="javascript:void(0);">搜索</a><span class="ml10 orange">小提示： 留空搜索显示店铺全部在售商品，每页显示10个。</span></div>
    <div id="div_module_goods_search_list"></div>
  </div>
  <div class="bottom"><label class="submit-border"><a id="btn_save_module_goods" class="submit" href="javascript:void(0);">保存设置</a></label></div>
</div>
<!-- 幻灯模板 --> 
<script id="template_module_slide_image_list" type="text/html">
<li data-image-name="<%=image_name%>" data-image-url="<%=image_url%>" data-image-link="<%=image_link%>">
<span><img src="<%=image_url%>"></span>
<a nctype="btn_del_slide_image" href="javascript:void(0);" title="删除">X</a>
</li>
</script> 
<!-- 热点块控制模板 --> 
<script id="template_module_hot_area_list" type="text/html">
<li data-hot-area-link="<%=link%>" data-hot-area-position="<%=position%>">
<i></i>
<p>热点区域<%=index%></p>
<p><a nctype="btn_module_hot_area_select" data-hot-area-position="<%=position%>" class="ncsc-btn-mini ncsc-btn-acidblue" href="javascript:void(0);">选择</a>
<a data-index="<%=index%>" nctype="btn_module_hot_area_del" class="ncsc-btn-mini ncsc-btn-red" href="javascript:void(0);">删除</a></p>
</li>
</script> 
<!-- 热点块标识模板 --> 
<script id="template_module_hot_area_display" type="text/html">
<div class="store-decoration-hot-area-display" style="width:<%=width%>px;height:<%=height%>px;position:absolute;left:<%=left%>px;top:<%=top%>px;border:1px solid #cccccc;" id="hot_area_display_<%=index%>">热点区域<%=index%></div>
</li>
</script>
<script type="text/javascript">
    window.UEDITOR_Admin_URL = "/Public/plugins/Ueditor/";
    var URL_upload = "<?php echo ($URL_upload); ?>";//图片上传提交地址
    var URL_fileUp = "<?php echo ($URL_fileUp); ?>";//附件上传提交地址
    var URL_scrawlUp = "<?php echo ($URL_scrawlUp); ?>";//涂鸦上传地址
    var URL_getRemoteImage = "<?php echo ($URL_getRemoteImage); ?>";//处理远程图片抓取的地址
    var URL_imageManager = "<?php echo ($URL_imageManager); ?>";
    var URL_imageUp = "<?php echo ($URL_imageUp); ?>";
    var URL_getMovie = "<?php echo ($URL_getMovie); ?>";
    var URL_home = "<?php echo ($URL_home); ?>";
</script> 
<script type="text/javascript" src="/Public/js/seller/template.min.js" charset="utf-8"></script> 
<script type="text/javascript" src="/Public/js/fileupload/jquery.iframe-transport.js" charset="utf-8"></script> 
<script type="text/javascript" src="/Public/js/fileupload/jquery.ui.widget.js" charset="utf-8"></script> 
<script type="text/javascript" src="/Public/js/fileupload/jquery.fileupload.js" charset="utf-8"></script> 
<script type="text/javascript" src="/Public/plugins/Ueditor/ueditor.config.js"></script>
<script type="text/javascript" src="/Public/plugins/Ueditor/ueditor.all.min.js"></script>
<link media="all" rel="stylesheet" href="/Public/js/jquery.imgareaselect/imgareaselect-animated.css" type="text/css" />
<script type="text/javascript" src="/Public/js/jquery.imgareaselect/jquery.imgareaselect.min.js"></script> 
<script src="/Public/js/jquery.poshytip.min.js"></script> 
<script type="text/javascript"> 
    //定义api常量
    var DECORATION_ID = "<?php echo ($decoration_id); ?>";
    var URL_DECORATION_ALBUM_UPLOAD = "<?php echo U('Decoration/album_upload');?>";
    var URL_DECORATION_BACKGROUND_SETTING_SAVE = "<?php echo U('Decoration/background_setting_save');?>";
    var URL_DECORATION_NAV_SAVE = "<?php echo U('Decoration/nav_save');?>";
    var URL_DECORATION_BANNER_SAVE = "<?php echo U('Decoration/banner_save');?>";
    var URL_DECORATION_BLOCK_ADD = "<?php echo U('Decoration/block_add');?>";
    var URL_DECORATION_BLOCK_DEL = "<?php echo U('Decoration/block_del');?>";
    var URL_DECORATION_BLOCK_SAVE = "<?php echo U('Decoration/block_save');?>";
    var URL_DECORATION_BLOCK_SORT = "<?php echo U('Decoration/block_sort');?>";
    var URL_DECORATION_GOODS_SEARCH = "<?php echo U('Decoration/goods_search');?>";
    var LOADING_IMAGE = 'http://www.xiaomi.com/shop/templates/default/images/loading.gif';
    var POSHYTIP = {
        className: 'tip-yellowsimple',
        showTimeout: 1,
        alignTo: 'target',
        alignX: 'top',
        alignY: 'left',
        offsetX: -300,
        offsetY: -5,
        allowTipHover: false
    };

    $(document).ready(function(){
        //浮动导航  waypoints.js
        $("#waypoints").waypoint(function(event, direction) {
            $(this).parent().toggleClass('sticky', direction === "down");
            event.stopPropagation();
        });

        //商品模块已选商品滚动条
        $('#decorationGoods').perfectScrollbar();

		//title提示
    	$('.tip').poshytip(POSHYTIP);

    });		

</script> 
<script type="text/javascript" src="/Public/js/seller/store_decoration.js" charset="utf-8"></script> 
</div>

<script type="text/javascript">
$(document).ready(function(){
    //浮动导航  waypoints.js
    $("#sidebar,#mainContent").waypoint(function(event, direction) {
        $(this).parent().toggleClass('sticky', direction === "down");
        event.stopPropagation();
    });
});

// 搜索商品不能为空
$('input[nctype="search_submit"]').click(function(){
    if ($('input[nctype="search_text"]').val() == '') {
        return false;
    }
});
</script>
 
<div id="faq">
  <div class="faq-wrapper"></div>
</div>
<script type="text/javascript" src="/Public/js/jquery.cookie.js"></script>
<link href="/Public/js/perfect-scrollbar.min.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="/Public/js/perfect-scrollbar.min.js"></script>
<script type="text/javascript" src="/Public/js/qtip/jquery.qtip.min.js"></script>
<link href="/Public/js/qtip/jquery.qtip.min.css" rel="stylesheet" type="text/css">
<!-- 对比 -->
<script type="text/javascript">
$(function(){
	// Membership card
	//$('[nctype="mcard"]').membershipCard({type:'shop'});
});

function fade() {
	$("img[rel='lazy']").each(function () {
		var $scroTop = $(this).offset();
		if ($scroTop.top <= $(window).scrollTop() + $(window).height()) {
			$(this).hide();
			$(this).attr("src", $(this).attr("data-url"));
			$(this).removeAttr("rel");
			$(this).removeAttr("name");
			$(this).fadeIn(500);
		}
	});
}
if($("img[rel='lazy']").length > 0) {
	$(window).scroll(function () {
		fade();
	});
};
fade();
</script>
<div id="tbox">
  <div class="btn" id="msg"><a href="<?php echo U('Seller/Index/index');?>"><i class="msg"></i>站内消息</a></div>
  <div class="btn" id="gotop" style="display:none;"><i class="top"></i><a href="javascript:void(0);">返回顶部</a></div>
</div>
</body>
</html>