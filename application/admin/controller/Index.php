<?php

namespace app\admin\controller;

use app\common\model\Orderslist;
use think\Controller;
use think\Db;
use think\Request;

class index extends Common
{
    /**
     * 后台首页
     * @return \think\response\View
     */
    public function index(){
//        订单数量
        $oc = Db::table('orders')->count();
//        p($oc);
        $olc= Db::table('orderslist')->count();
        $uc= Db::table('users')->count();
        $orders = Db::table('orders')->select();
        $users = Db::table('users')->select();
        foreach ($users as $v){
            $orderslist[$v['id']] = Db::table('orders')->where('users_id',$v['id'])->count();
        }
//        p($orderslist);
        return view('',compact('oc','olc','uc','orders','users','orderslist'));
    }


    /**
     * 显示创建资源表单页.
     *
     * @return \think\Response
     */
    public function create()
    {
        //
    }

    /**
     * 保存新建的资源
     *
     * @param  \think\Request  $request
     * @return \think\Response
     */
    public function save(Request $request)
    {
        //
    }

    /**
     * 显示指定的资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function read($id)
    {
        //
    }

    /**
     * 显示编辑资源表单页.
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * 保存更新的资源
     *
     * @param  \think\Request  $request
     * @param  int  $id
     * @return \think\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * 删除指定资源
     *
     * @param  int  $id
     * @return \think\Response
     */
    public function delete($id)
    {
        //
    }
}
