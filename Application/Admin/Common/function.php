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
 * Date: 2015-09-09
 */

/**
 * 管理员操作记录
 * @param $log_url 操作URL
 * @param $log_info 记录信息
 * @param $log_type 日志类别
 */
function adminLog($log_info,$log_type=0){
    $add['log_time'] = time();
    $add['admin_id'] = session('admin_id');
    $add['log_info'] = $log_info;
    $add['log_ip'] = getIP();
    $add['log_url'] = __ACTION__;
    $add['log_type'] = $log_type;
    M('admin_log')->add($add);
}


function getAdminInfo($admin_id){
    return D('admin')->where("admin_id=$admin_id")->find();
}

function tpversion()
{
    
}

/**
 * 面包屑导航  用于后台管理
 * 根据当前的控制器名称 和 action 方法
 */
function navigate_admin()
{
    $navigate = include APP_PATH.'Common/Conf/navigate.php';
    $location = strtolower('Admin/'.CONTROLLER_NAME);
    $arr = array(
        '后台首页'=>'javascript:void();',
        $navigate[$location]['name']=>'javascript:void();',
        $navigate[$location]['action'][ACTION_NAME]=>'javascript:void();',
    );
    return $arr;
}

/**
 * 导出excel
 * @param $strTable	表格内容
 * @param $filename 文件名
 */
function downloadExcel($strTable,$filename)
{
    header("Content-type: application/vnd.ms-excel");
    header("Content-Type: application/force-download");
    header("Content-Disposition: attachment; filename=".$filename."_".date('Y-m-d').".xls");
    header('Expires:0');
    header('Pragma:public');
    echo '<html><meta http-equiv="Content-Type" content="text/html; charset=utf-8" />'.$strTable.'</html>';
}

/**
 * 格式化字节大小
 * @param  number $size      字节数
 * @param  string $delimiter 数字和单位分隔符
 * @return string            格式化后的带单位的大小
 */
function format_bytes($size, $delimiter = '') {
    $units = array('B', 'KB', 'MB', 'GB', 'TB', 'PB');
    for ($i = 0; $size >= 1024 && $i < 5; $i++) $size /= 1024;
    return round($size, 2) . $delimiter . $units[$i];
}

/**
 * 根据id获取地区名字
 * @param $regionId id
 */
function getRegionName($regionId){
    $data = M('region')->where(array('id'=>$regionId))->field('name')->find();
    return $data['name'];
}

function getMenuList($act_list){
    //根据角色权限过滤菜单
    $menu_list = getAllMenu();
    if($act_list != 'all'){
        $right = M('system_menu')->where("id in ($act_list)")->cache(true)->getField('right',true);
        foreach ($right as $val){
            $role_right .= $val.',';
        }
        $role_right = explode(',', $role_right);
        foreach($menu_list as $k=>$mrr){
            foreach ($mrr['sub_menu'] as $j=>$v){
                if(!in_array($v['control'].'Controller@'.$v['act'], $role_right)){
                    unset($menu_list[$k]['sub_menu'][$j]);//过滤菜单
                }
            }
        }
    }
    return $menu_list;
}

function getAllMenu(){
    return	array(
        'system' => array('name'=>'系统设置','icon'=>'fa-cog','sub_menu'=>array(
            array('name'=>'网站设置','act'=>'index','control'=>'System'),
            array('name'=>'自定义导航','act'=>'navigationList','control'=>'System'),
            array('name'=>'区域管理','act'=>'region','control'=>'Tools'),
			array('name'=>'文章分类','act'=>'categoryList','control'=>'article'),
			array('name'=>'文章管理','act'=>'articleList','control'=>'article'),
			array('name'=>'评论管理','act'=>'index','control'=>'Comment'),
            //array('name'=>'权限资源列表','act'=>'right_list','control'=>'System'),
        )),
        'access' => array('name' => '权限管理', 'icon'=>'fa-sitemap', 'sub_menu' => array(
            array('name' => '管理员列表', 'act'=>'index', 'control'=>'Admin'),
            array('name' => '角色管理', 'act'=>'role', 'control'=>'Admin'),
            array('name' => '管理员日志', 'act'=>'log', 'control'=>'Admin'),
            array('name' => '供应商列表', 'act'=>'supplier', 'control'=>'Admin'),
        )),
        'member' => array('name'=>'会员管理','icon'=>'fa-user','sub_menu'=>array(
            array('name'=>'会员列表','act'=>'index','control'=>'User'),
            array('name'=>'会员等级','act'=>'levelList','control'=>'User'),
            array('name'=>'会员充值','act'=>'recharge','control'=>'User'),
            array('name'=>'入驻申请','act'=>'ruzhu','control'=>'User'),
            //array('name'=>'会员整合','act'=>'integrate','control'=>'User'),
        )),
        'goods' => array('name' => '商品管理', 'icon'=>'fa-tasks', 'sub_menu' => array(
            array('name' => '商品分类', 'act'=>'categoryList', 'control'=>'Goods'),
            array('name' => '商品列表', 'act'=>'goodsList', 'control'=>'Goods'),
            array('name' => '商品类型', 'act'=>'goodsTypeList', 'control'=>'Goods'),
            array('name' => '商品规格', 'act' =>'specList', 'control' => 'Goods'),
            array('name' => '品牌列表', 'act'=>'brandList', 'control'=>'Goods'),
        )),
        'order' => array('name' => '订单管理', 'icon'=>'fa-money', 'sub_menu' => array(
            array('name' => '订单列表', 'act'=>'index', 'control'=>'Order'),
            array('name' => '发货单', 'act'=>'delivery_list', 'control'=>'Order'),
           // array('name' => '快递单', 'act'=>'express_list', 'control'=>'Order'),
            //array('name' => '退货单', 'act'=>'return_list', 'control'=>'Order'),
            array('name' => '订单日志', 'act'=>'order_log', 'control'=>'Order'),
            array('name' => '商品评论','act'=>'index','control'=>'Comment'),
		    //array('name' => '商品咨询','act'=>'ask_list','control'=>'Comment'),

        )),
        'Store' => array('name' => '店铺管理', 'icon'=>'fa-shopping-cart', 'sub_menu' => array(
            array('name' => '店铺等级', 'act'=>'store_grade', 'control'=>'Store'),
            array('name' => '店铺分类', 'act'=>'store_class', 'control'=>'Store'),
            array('name' => '店铺列表', 'act'=>'store_list', 'control'=>'Store'),
            array('name' => '自营店铺', 'act'=>'store_own_list', 'control'=>'Store'),
            array('name' => '经营类目审核', 'act'=>'apply_class_list', 'control'=>'Store'),
        )),
        'Ad' => array('name' => '广告管理', 'icon'=>'fa-flag', 'sub_menu' => array(
            array('name' => '广告列表', 'act'=>'adList', 'control'=>'Ad'),
            array('name' => '广告位置', 'act'=>'positionList', 'control'=>'Ad'),
        )),
        'promotion' => array('name' => '活动管理', 'icon'=>'fa-plus', 'sub_menu' => array(
            array('name' => '抢购管理', 'act'=>'flash_sale', 'control'=>'Promotion'),
            array('name' => '团购管理', 'act'=>'group_buy_list', 'control'=>'Promotion'),
            array('name' => '优惠促销', 'act'=>'prom_goods_list', 'control'=>'Promotion'),
            array('name' => '订单促销', 'act'=>'prom_order_list', 'control'=>'Promotion'),
            array('name' => '代金券','act'=>'index', 'control'=>'Coupon'),
        )),



        /* *

        'distribut' => array('name' => '分销管理', 'icon'=>'fa-cubes', 'sub_menu' => array(
                array('name' => '分销商列表', 'act'=>'distributor_list', 'control'=>'Distribut'),
                array('name' => '分销关系', 'act'=>'tree', 'control'=>'Distribut'),
//					array('name' => '提现申请', 'act'=>'withdrawals', 'control'=>'Distribut'),
                array('name' => '分成日志', 'act'=>'rebate_log', 'control'=>'Distribut'),
        )),
*/
        'tools' => array('name' => '插件工具', 'icon'=>'fa-plug', 'sub_menu' => array(

            array('name' => '数据备份', 'act'=>'index', 'control'=>'Tools'),
            array('name' => '数据还原', 'act'=>'restore', 'control'=>'Tools'),
			array('name'=>'支付/物流','act'=>'index','control'=>'plugin'),
		
        )),
        'finance' => array('name' => '财务统计', 'icon'=>'fa-credit-card', 'sub_menu' => array(
            array('name' => '商家提现申请', 'act'=>'store_withdrawals', 'control'=>'Finance'),
            array('name' => '商家汇款记录', 'act'=>'store_remittance', 'control'=>'Finance'),
            array('name' => '会员提现申请', 'act'=>'withdrawals', 'control'=>'Finance'),
            array('name' => '会员汇款记录', 'act'=>'remittance', 'control'=>'Finance'),
            array('name' => '商家结算记录', 'act'=>'order_statis', 'control'=>'Finance'),
        )),
        'count' => array('name' => '统计报表', 'icon'=>'fa-bar-chart-o', 'sub_menu' => array(
            array('name' => '销售概况', 'act'=>'index', 'control'=>'Report'),
            array('name' => '销售排行', 'act'=>'saleTop', 'control'=>'Report'),
            array('name' => '会员排行', 'act'=>'userTop', 'control'=>'Report'),
            array('name' => '销售明细', 'act'=>'saleList', 'control'=>'Report'),
            array('name' => '会员统计', 'act'=>'user', 'control'=>'Report'),
            array('name' => '运营概览', 'act'=>'finance', 'control'=>'Report'),
        ))
    );
}


function respose($res){
    exit(json_encode($res));
}
