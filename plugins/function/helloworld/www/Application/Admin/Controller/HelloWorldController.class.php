<?php
/**
 * tpshop HelloWorld 插件  demo 示例
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * Author: IT宇宙人      
 * Date: 2015-09-09
 */
namespace Admin\Controller;

// 这是一个demo 插件
class HelloWorldController extends BaseController {

    public function index(){        
        $hello = M('HelloWorld')->find();        
        $this->assign('hello',$hello);
        $this->display();
    }
}