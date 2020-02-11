<?php


namespace app\wutong\controller;
use think\Db;
use think\Controller;
use app\wutong\model\Admin;

class AdminLogin extends Controller
{
    public function checkLogin()
    {
        if(!session('username')) {
            $this->error('请登录后操作', url('Login/Login'));
        }

    }

    public function Admin_Login()
    {


        if (request()->isPost()) {
            $data = input('post.');
            $adminname = $data['adminname'];
            $adminpassword = $data['adminpassword'];
            // 2.查询数据库，返回结果

            $admin = new  Admin;

            $res = $admin
                ->where(['adminname' => $adminname, 'adminpassword' => $adminpassword,'authority' =>'admin' ])->find();
//            $res = $admin->where(['authority' => $adminpassword])->select();

            // 判断有无结果
            if ($res) {
                session('id', $res['id']);
                session('adminname', $res['adminname']);
                $this->success('登录成功！', url('wutong/AdminPage/Admin'));
            } else {

              $this->error('账号或密码不正确!');
            }
        }
        return view('Admin/admin_login');


    }

}