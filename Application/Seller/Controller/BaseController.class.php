<?php

/**
 * tpshop
 * ============================================================================
 * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * Author: 当燃
 * Date: 2016-06-09
 */

namespace Seller\Controller;
use Think\Controller;
use Admin\Logic\UpgradeLogic;
class BaseController extends Controller {

    /**
     * 析构函数
     */
    function __construct() 
    {
        parent::__construct();
        $upgradeLogic = new UpgradeLogic();
        $upgradeMsg = $upgradeLogic->checkVersion(); //升级包消息        
        $this->assign('upgradeMsg',$upgradeMsg);    
        //用户中心面包屑导航
        $navigate_admin = navigate_admin();
        $this->assign('navigate_admin',$navigate_admin);
        tpversion();        
   }    
    
    /*
     * 初始化操作
     */
    public function _initialize() 
    {
        $this->assign('action',ACTION_NAME);
        //过滤不需要登陆的行为
        if(in_array(ACTION_NAME,array('login','logout','vertify')) || in_array(CONTROLLER_NAME,array('Ueditor','Uploadify'))){
        	//return;
        }else{
        	if(session('seller_id') > 0 ){
                define('STORE_ID',session('store_id')); //将当前的session_id保存为常量，供其它方法调用
        		$this->check_priv();//检查管理员菜单操作权限
        	}else{
        		$this->error('请先登陆',U('Admin/login'),1);
        	}
        }
        $this->public_assign();
    }
    
    /**
     * 保存公告变量到 smarty中 比如 导航 
     */
    public function public_assign()
    {
       $tpshop_config = array();
       $tp_config = M('config')->select();       
       foreach($tp_config as $k => $v)
       {
          $tpshop_config[$v['inc_type'].'_'.$v['name']] = $v['value'];
       }
       $this->assign('tpshop_config', $tpshop_config);       
    }
    
    public function check_priv()
    {	
    	$seller = session('seller');
    	if($seller['is_admin'] == 0){
    		$ctl = CONTROLLER_NAME;
    		$act = ACTION_NAME;
    		$act_list = $seller['act_limits'];
    		//无需验证的操作
    		$uneed_check = array('login','logout','vertifyHandle','vertify','imageUp','upload','login_task');
    		if($ctl == 'Index' || $act_list == 'all'){
    			//后台首页控制器无需验证,超级管理员无需验证
    			return true;
    		}elseif(strpos('ajax',$act) || in_array($act,$uneed_check)){
    			//所有ajax请求不需要验证权限
    			return true;
    		}else{
    			$role_right = explode(',', $act_list);
    			//检查是否拥有此操作权限
    			if(!in_array($ctl.'@'.$act, $role_right)){
    				$this->error('您没有操作权限,请联店铺超级管理员分配权限',U('Index/welcome'));
    			}
    		}
    	}
    	return true;
    }
    
}