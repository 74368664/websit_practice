<?php
namespace app\wutong\controller;
use app\wutong\model\Accound;
use app\wutong\model\Article;
use app\wutong\model\Fan;
use app\wutong\model\Note;
use app\wutong\model\Admin;
use app\wutong\model\Message;
use think\Db;
use think\Session;
use think\Request;
use think\Controller;
Class AdminPage extends Controller
{
    //后台主页面
    public function Admin()
    {
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/adminindex');
    }

//用户页面
    public function AdminUser()
    {
        $list = db('accound')
            ->alias('accound')
            ->paginate(5);  //分页数量

        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/adminuser');
    }

    public function AdminAdmin()
    {

        $list = db('admin')
            ->alias('admin')
            ->paginate(10);  //分页数量

        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_admin');
    }

    public function AdminMessage()
    {
        $list = db('message')
            ->alias('message')
            ->paginate(7);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_message');
    }

    public function AdminNote()
    {
        $list = db('note')
            ->alias('note')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_note');
    }
    public function AdminArticle()
    {
        $list = db('article')
            ->alias('article')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_article');
    }
    public function AdminFan()
    {
        $list = db('fan')
            ->alias('fan')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_fan');
    }

    //删除用户
    public function DeleteUser()
    {

        if (request()->isPost()) {
            $data = input('post.');

            $username = $data['username'];
            $db = db('accound');
            $db->where('username', $username)->delete();
            //删除用户的同时删除用户的留言
            $db = db('message');
            $db->where('user_name', $username)->delete();
        }


        $list = db('accound')
            ->alias('accound')
            ->paginate(5);  //分页数量

        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/adminuser');
    }

    public function AddUser()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $username = $data['username'];
            $userpassword = $data['userpassword'];
            $repassword = $data['repassword'];
            $useremail = $data['useremail'];
            $sex = $data['sex'];
            $job = $data['job'];
            if (strcmp($userpassword, $repassword)) {
                $this->error('两次输入的密码不一致');
            }
            if (strlen($username) < 2) {
                $this->error('姓名最少为两位');
            }
            if (strlen($userpassword) < 6) {
                $this->error('密码最少为六位数');
            }

            $accound = new  Accound;
            $res = $accound->where('username', $username)->find();
            if ($res) {
                $this->error('用户名已存在');
            } else {
                // 将新用户插入到数据库中
                $file = request()->file('photo');
                if ($file) {


                    $photo = $_FILES['photo']['name'];
//                    $type_p= $_FILES['photo']['type'];
                    $type_p = strrchr($photo, '.');


                    $photo = md5($photo);

                    $info = $file->move('static' . DS . 'index' . DS . 'image' . DS . 'head', $photo);
                    $photo = $photo . $type_p;

                } else {
                    $photo = '1.png';
                }

                $accound->data([
                    'username' => $username,
                    'userpassword' => $userpassword,
                    'useremail' => $useremail,
                    'sex' => $sex,
                    'job' => $job,
                    'photo' => $photo

                ]);
                // 2. 将对象中的值插入到数据库
                $ret = $accound->save();
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的login方法*/
                    $this->success('注册成功！', url('AdminPage/AdminUser'));
                }
            }
        }
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('AdminDeal/adduser');
    }

    public function UpdateUser()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $username = $data['username'];
            $userpassword = $data['userpassword'];
            $repassword = $data['repassword'];
            $useremail = $data['useremail'];
            $sex = $data['sex'];
            $job = $data['job'];

            if (strcmp($userpassword, $repassword)) {
                $this->error('两次输入的密码不一致');
            }

            $accound = new  Accound;
            $file = request()->file('photo');
            if ($file) {

                $photo = $_FILES['photo']['name'];
//                    $type_p= $_FILES['photo']['type'];
                $type_p = strrchr($photo, '.');


                $photo = md5($photo);

                $info = $file->move('static' . DS . 'index' . DS . 'image' . DS . 'head', $photo);
                $photo = $photo . $type_p;

            } else {
                $photo = '1.png';
            }
            $dat = [
                'username' => $username,
                'userpassword' => $userpassword,
                'useremail' => $useremail,
                'sex' => $sex,
                'job' => $job,
                'photo' => $photo,


            ];

            $ret = $accound->save($dat, ['username' => $username]);

            if ($ret > 0) {
                /*跳转到当面模块当前控制器下的后台的用户方法*/
                $this->success('修改成功！', url('AdminPage/AdminUser'));

//               }
            }
        }

        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        $this->assign('sex', $data['sex']);
        $this->assign('userpassword', $data['userpassword']);
        $this->assign('job', $data['job']);

        $this->assign('useremail', $data['useremail']);
        $this->assign('username', $data['username']);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('AdminDeal/updateuser');

    }

//删除用户打印页面
    public function UpdateUserPage()
    {

        if (request()->isPost()) {
            $data = input('post.');

            $username = $data['username'];
            $accound = new  Accound;
            $res = $accound->where(['username' => $username])->find();

//            $db=db('accound');
//            $list=$db->where('username',$username)->select();


            $this->assign('sex', $res['sex']);
            $this->assign('userpassword', $res['userpassword']);
            $this->assign('job', $res['job']);
            $this->assign('photo', $res['photo']);
            $this->assign('useremail', $res['useremail']);
            $this->assign('username', $res['username']);
            $ad_name = session('adminname');
            $this->assign('ad_name', $ad_name);
            return view('AdminDeal/updateuser');
        }
    }

    //删除管理员
    public function DeleteAdmin()
    {

        if (request()->isPost()) {
            $data = input('post.');

            $adminname = $data['adminname'];
            $db = db('admin');
            $db->where('adminname', $adminname)->delete();

        }
        $list = db('admin')
            ->alias('admin')
            ->paginate(5);  //分页数量

        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_admin');
    }

    public function AddAdmin()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $adminname = $data['adminname'];
            $adminpassword = $data['adminpassword'];
            $repassword = $data['repassword'];

            if (strcmp($adminpassword, $repassword)) {
                $this->error('两次输入的密码不一致');
            }
            $admin = new  Admin;
            $res = $admin->where('adminname', $adminname)->find();
            if ($res) {
                $this->error('用户名已存在');
            } else {
                // 将新用户插入到数据库中

                $admin->data([
                    'adminname' => $adminname,
                    'adminpassword' => $adminpassword,


                ]);
                // 2. 将对象中的值插入到数据库
                $ret = $admin->save();
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的login方法*/

                    $this->success('添加成功！');
                }
            }
        }
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_admin');
    }


    //修改管理员
    public function UpdateAdmin()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $adminname = $data['adminname'];
            $adminpassword = $data['adminpassword'];
            $repassword = $data['repassword'];

            if (strcmp($adminpassword, $repassword)) {
                $this->error('两次输入的密码不一致');
            }

            $admin = new  admin;

            $dat = [
                'adminname' => $adminname,
                'adminpassword' => $adminpassword,


            ];

            // 2. 将对象中的值插入到数据库
            $ret = $admin->save($dat, ['adminname' => $adminname]);
            if ($ret > 0) {
                /*跳转到当面模块当前控制器下的后台的用户方法*/
                $this->success('修改成功！', url('AdminPage/AdminAdmin'));

            }
        }
        $list = db('admin')
            ->alias('admin')
            ->paginate(5);  //分页数量

        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_admin');
    }


    /*留言板*/

    //删除留言板
    public function DeleteMessage()
    {

        if (request()->isPost()) {
            $data = input('post.');
            $messageid = $data['messageid'];
            $db = db('message');
            $db->where('id', $messageid)->delete();

        }
        $list = db('message')
            ->alias('message')
            ->paginate(7);  //分页数量
        $this->assign('list', $list);

        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_message');
    }

//添加留言板
    public function AddMessage()
    {
        if (request()->isPost()) {
            $data = input('post.');

            $username = $data['username'];
            $content = $data['content'];
            $accound = new Accound;
            $res = $accound->where('username', $username)->find();
            if (!$res) {
                $this->error('暂无此用户');
            } else {
                $message = new  Message;

                // 将新用户插入到数据库中

                $message->data([
                    'user_name' => $username,
                    'content' => $content,


                ]);
                // 2. 将对象中的值插入到数据库
                $ret = $message->save();
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的login方法*/

                    $this->success('添加成功！');
                }
            }
        }
        $list = db('message')
            ->alias('message')
            ->paginate(7);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_message');
    }

//修改留言板

    public function UpdateMessage()
    {
        if (request()->isPost()) {
            $data = input('post.');

            $username = $data['username'];
            $content = $data['content'];
            $messageid = $data['messageid'];

//模块添加数据库


            $accound = new Accound;
            $res = $accound->where('username', $username)->find();
            if (!$res) {
                $this->error('暂无此用户');
            } else {
                $message = new  Message;
                $dat = [
                    'user_name' => $username,
                    'content' => $content,


                ];

                // 2. 将对象中的值插入到数据库
                $ret = $message->save($dat, ['id' => $messageid]);
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的后台的用户方法*/
                    $this->success('修改成功！', url('AdminPage/AdminMessage'));
                }
            }
        }
        $list = db('message')
            ->alias('message')
            ->paginate(7);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_message');
    }





    /*日记*/

    //删除日记
    public function DeleteNote()
    {

        if (request()->isPost()) {
            $data = input('post.');
            $noteid = $data['noteid'];
            $db = db('note');
            $db->where('id', $noteid)->delete();

        }
        $list = db('note')
            ->alias('note')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_note');
    }

//添加日记
    public function AddNote()
    {
        if (request()->isPost()) {
            $data = input('post.');

            $content = $data['content'];
            $note = new  Note;
            // 将新日记插入到数据库中
            $note->data([
                'content' => $content,
            ]);
            $ret = $note->save();
            if ($ret > 0) {
                $this->success('添加成功！');
            }
        }
        $list = db('note')
            ->alias('note')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_note');
    }

//修改日记

    public function UpdateNote()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $content = $data['content'];
            $noteid = $data['noteid'];

            $note = new  Note;
            $dat = [
                'content' => $content,
            ];

            $ret = $note->save($dat, ['id' => $noteid]);
            if ($ret > 0) {
                /*跳转到当面模块当前控制器下的后台的用户方法*/
                $this->success('修改成功！', url('AdminPage/AdminNote'));
            }
        }

        $list = db('note')
            ->alias('note')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_note');
    }


    /*番剧*/

    //删除番剧
    public function DeleteFan()
    {

        if (request()->isPost()) {
            $data = input('post.');
            $fanid = $data['fanid'];
            $db = db('fan');
            $db->where('id', $fanid)->delete();

        }
        $list = db('fan')
            ->alias('fan')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_fan');
    }

//添加番剧
    public function AddFan()
    {
        if (request()->isPost()) {
            $data = input('post.');

            $content = $data['content'];
            $title = $data['title'];
            $href = $data['href'];
            $file = request()->file('photo');

            if ($file) {

                $photo = $_FILES['photo']['name'];
                $type_p = strrchr($photo, '.');
                $photo = md5($photo);
                $info = $file->move('static' . DS . 'index' . DS . 'image' . DS . 'fan_o', $photo);
                $photo = $photo . $type_p;
                $fan = new  Fan();
                // 将新日记插入到数据库中
                $fan->data([
                    'content' => $content,
                    'title' => $title,
                    'href' => $href,
                    'photo' => $photo,
                ]);
                $ret = $fan->save();
                if ($ret > 0) {
                    $this->success('添加成功！');
                }
            } else {
                $this->error('未上传图片');
            }
        }
        $list = db('fan')
            ->alias('fan')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_fan');
    }

//修改番剧

    public function UpdateFan()
    {
        if (request()->isPost()) {
            $data = input('post.');

            $fanid = $data['fanid'];
            $content = $data['content'];
            $title = $data['title'];
            $href = $data['href'];
            $file = request()->file('photo');
            if ($file) {

                $photo = $_FILES['photo']['name'];
                $type_p = strrchr($photo, '.');
                $photo = md5($photo);
                $info = $file->move('static' . DS . 'index' . DS . 'image' . DS . 'fan_o', $photo);
                $photo = $photo . $type_p;

                // 将新日记插入到数据库中
                // 将新日记插入到数据库中

                $fan = new  Fan;

                $dat = [
                    'content' => $content,
                    'title' => $title,
                    'href' => $href,
                    'photo' => $photo,
                ];
                $ret = $fan->save($dat, ['id' => $fanid]);
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的后台的用户方法*/
                    $this->success('修改成功！', url('AdminPage/AdminFan'));
                }
            } else {
                $this->error('未上传图片');
            }
        }
            $list = db('fan')
                ->alias('fan')
                ->paginate(5);  //分页数量
            $this->assign('list', $list);
            $ad_name = session('adminname');
            $this->assign('ad_name', $ad_name);
            return view('Admin/admin_Fan');

    }


                /*文章*/

    //删除文章
    public function DeleteArticle()
    {

        if (request()->isPost()) {
            $data = input('post.');
            $fanid = $data['fanid'];
            $db = db('article');
            $db->where('id', $fanid)->delete();

        }
        $list = db('article')
            ->alias('article')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_article');
    }

//添加文章
    public function AddArticle()
    {
        if (request()->isPost()) {
            $data = input('post.');
            $content = $data['content'];
            $title = $data['title'];
            $click=0;
            date_default_timezone_get('PRC');
            $creat_time=date('Y-m-d H:i:s');
                $article = new  Article;
                // 将新日记插入到数据库中
                $article->data([
                    'content' => $content,
                    'title' => $title,
                    'click'=>$click,
                    'creat_time'=>$creat_time,
                ]);
                $ret = $article->save();
                if ($ret > 0) {
                    $this->success('添加成功！');
                }
            } else {
                $this->error('未上传图片');
            }

        $list = db('article')
            ->alias('article')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_article');
    }

//修改文章

    public function UpdateArticle()
    {
        if (request()->isPost()) {
            $data = input('post.');

            $fanid = $data['fanid'];
            $content = $data['content'];
            $title = $data['title'];



                // 将新日记插入到数据库中
                // 将新日记插入到数据库中

                $article = new  Article;

                $dat = [
                    'content' => $content,
                    'title' => $title,


                ];
                $ret = $article->save($dat, ['id' => $fanid]);
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的后台的用户方法*/
                    $this->success('修改成功！', url('AdminPage/AdminArticle'));
                }
            } else {
                $this->error('未上传图片');
            }

        $list = db('article')
            ->alias('article')
            ->paginate(5);  //分页数量
        $this->assign('list', $list);
        $ad_name = session('adminname');
        $this->assign('ad_name', $ad_name);
        return view('Admin/admin_article');

    }
}