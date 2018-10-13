<?php
namespace Seller\Model;
use Think\Model;

class SellerModel extends Model{

    public function getModel()
    {
        return new   \Think\Model(); // 实例化一个model对象 没有对应任何数据表

    }

    /*
     * 验证用户登陆数据
     * */
    public function validateSeller($username,$password){

        if($seller=M("seller")->where("seller_name='{$username}'")->find()){
             $userInfo=$this->getModel()->query("select * from ysk_user where userid={$seller['user_id']}");//查询商户对应用户表信息
            if($userInfo[0]['login_pwd']==md5(md5($password).$userInfo[0]['login_salt'])){
                if($seller['is_admin'] == 0 && $seller['enabled'] == 1){
                    return ['status'=>0,"msg"=>"该账户还没启用激活"];
                }
                if($seller['group_id'] > 0){
                    $group = M('seller_group')->where(array('group_id'=>$seller['group_id']))->find();
                    $seller['act_limits'] = $group['act_limits'];
                    $seller['smt_limits'] = $group['smt_limits'];
                }
                session('seller',$seller);
                session('seller_id',$seller['seller_id']);
                session('store_id',$seller['store_id']);
                M('seller')->where(array('seller_id'=>$seller['seller_id']))->save(array('last_login_time'=>time()));
                sellerLog('商家管理中心登录',__ACTION__);
                $url = session('from_url') ? session('from_url') : U('Index/index');
                return ['status'=>1,'url'=>$url];
            }else{
                return ['status'=>0,"msg"=>"账号密码不正常"];
            }
        }else{
            return ['status'=>0,"msg"=>"商户不存在"];
        };


    }
}
