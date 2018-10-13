<?php
/**
 * tpshop
 * ============================================================================
 * * 版权所有 2015-2027 深圳搜豹网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.tp-shop.cn
 * ----------------------------------------------------------------------------
 * Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
 * ============================================================================
 * $Author: IT宇宙人 2015-08-10 $
 */ 
namespace WXAPI\Controller;
use Think\Controller;
class IndexController extends BaseController {
    public function index(){
       // $this->show('<style type="text/css">*{ padding: 0; margin: 0; } div{ padding: 4px 48px;} body{ background: #fff; font-family: "微软雅黑"; color: #333;font-size:24px} h1{ font-size: 100px; font-weight: normal; margin-bottom: 12px; } p{ line-height: 1.8em; font-size: 36px } a,a:hover,{color:blue;}</style><div style="padding: 24px 48px;"> <h1>:)</h1><p>欢迎使用 <b>ThinkPHP</b>！</p><br/>版本 V{$Think.version}</div><script type="text/javascript" src="http://ad.topthink.com/Public/static/client.js"></script><thinkad id="ad_55e75dfae343f5a1"></thinkad><script type="text/javascript" src="http://tajs.qq.com/stats?sId=9347272" charset="UTF-8"></script>','utf-8');
        $this->display();
    }
 
    /*
     * 获取首页数据
     */
    public function home(){
        //获取轮播图
        $data = M('ad')->where('pid = 2')->field(array('ad_link','ad_name','ad_code','pid'))->cache(true,TPSHOP_CACHE_TIME)->select();
        
        
        //广告地址转换
        foreach($data as $k=>$v){
//           
            $data[$k]['ad_code'] = SITE_URL.$v['ad_code'];

        }
        
        
        //广告2
        //27,28,29,30,31
        $ad[0] = M('ad')->where(array("ad_id"=>52))->find();
        $ad[1] = M('ad')->where(array("ad_id"=>53))->find();
        $ad[2] = M('ad')->where(array("ad_id"=>54))->find();
        $ad[3] = M('ad')->where(array("ad_id"=>55))->find();
        $ad[4] = M('ad')->where(array("ad_id"=>56))->find();
        
        foreach ($ad as $key=>$value)
        {
        	$ad[$key]['ad_code'] = SITE_URL.$value['ad_code'];
        }
        
        
        //获取大分类
        $category_arr = M('goods_category')->where('parent_id=0')->field('id,name')->limit(3)->order('sort_order desc')->cache(false,TPSHOP_CACHE_TIME)->select();
        $result = array();
        foreach($category_arr as $c){
            $cat_arr = getCatGrandson($c['id']);
            //获取商品
            //$sql = "select goods_name,goods_id,original_img,shop_price from __PREFIX__goods where  cat_id in (".implode(',',$cat_arr).") limit 4";
            //$goods = M()->query($sql);
            if($cat_arr)
                $cat_id = implode (',', $cat_arr);
            $goodsList = M('goods')->where("cat_id1 in($cat_id)")->limit(4)->cache(false,TPSHOP_CACHE_TIME)->getField("goods_id,goods_name,original_img,shop_price,sales_sum,click_count");
            foreach($goodsList as $k => $v){
                $v['original_img'] = SITE_URL.$v['original_img'];
                $c['goods_list'][] = $v;
            }            
            $result[] = $c;
        }

        exit(json_encode(array('status'=>1,'msg'=>'获取成功','result'=>array('goods'=>$result,'ad'=>$data),"ad"=>$ad)));
    }
    
    /**
     * 获取服务器配置
     */
    public function getConfig()
    {
        $config_arr = M('config')->select();
        exit(json_encode(array('status'=>1,'msg'=>'获取成功','result'=>$config_arr)));
    }
    /**
     * 获取插件信息
     */
    public function getPluginConfig()
    {
        $data = M('plugin')->where("type='payment' OR type='login'")->select();
        $arr = array();
        foreach($data as $k=>$v){
            unset( $data[$k]['config']);
            unset( $data[$k]['config']);

            $data[$k]['config_value'] = unserialize($v['config_value']);
            if($data[$k]['type'] == 'payment'){
                $arr['payment'][] =  $data[$k];
            }
            if($data[$k]['type'] == 'login'){
                $arr['login'][] =  $data[$k];
            }
        }
        exit(json_encode(array('status'=>1,'msg'=>'获取成功','result'=>$arr ? $arr : '')));
    }
}