<?php


namespace app\wutong\controller;
use think\Db;
use app\wutong\model\Accound;
use think\Controller;
use think\Request;
use app\wutong\model\Admin;
use think\Session;
use think\File;


class Login extends Controller
{
    // 用户登录
    public function login(){

        if(request()->isPost()){
            $data = input('post.');
            $username = $data['username'];
            $userpass = $data['userpassword'];

           $accound = new  Accound;
          $res = $accound->where(['username'=>$username,'userpassword'=>$userpass])->find();

            // 判断有无结果
            if($res){
                session('id',$res['id']);
                session('username',$res['username']);
                $this->success('登录成功！', url('wutong/Login/indexMain'));

            } else {
                $this->error('账号或密码不正确!');
            }
        }
        return view('User/Login');
    }
    //退出
public function unLogin(){
    Session::delete('username');
    $fan = db('fan')
        ->alias('fan')
        ->paginate(1);
    $this->assign('fan',$fan);
    $accound=new Accound;
    $res = $accound->select();
    $people_count=count($res);
    $article = db('article')
        ->alias('article')
        ->paginate(1);
    $this->assign('article',$article);
    $this->assign('fan',$fan);
    $this->assign('people_count',$people_count);
    return view('Page/index_main');
}


//
    public function registeretd(){
        if(request()->isPost()){
            $data = input('post.');

            $username = $data['username'];
            $userpassword = $data['userpassword'];
            $repassword = $data['repassword'];
            $useremail=$data['useremail'];
            $sex=$data['sex'];
            $job=$data['job'];
            if (strcmp($userpassword, $repassword)) {
                $this->error('两次输入的密码不一致');
            }
            if (strlen($username)<2) {
                $this->error('姓名最少为两位');
            }
            if (strlen($userpassword)<6) {
                $this->error('密码最少为六位数');
            }
            //think自带的验证
            $code = input('captcha');
            if (!captcha_check($code)){
                $this->error('验证未通过');
            }else{


            $accound = new  Accound;
            $res = $accound->where('username',$username)->find();
            if ($res) {
                $this->error('用户名已存在');
            } else {
                $file = request()->file('photo');
                if($file) {


                    $photo = $_FILES['photo']['name'];
//                    $type_p= $_FILES['photo']['type'];
                    $type_p=strrchr($photo,'.');


                    $photo = md5($photo);

                    $info = $file->move('static' . DS . 'index' . DS . 'image' . DS . 'head', $photo);
                    $photo=$photo.$type_p;

                }else{
                    $photo = '1.png';
                }



                $accound->data([
                    'username' => $username,
                    'userpassword' => $userpassword,
                    'useremail'=>$useremail,
                    'sex'=>$sex,
                    'job'=>$job,
                    'photo'=>$photo

                ]);

                $ret =  $accound->save();
                if ($ret > 0) {
                    /*跳转到当面模块当前控制器下的login方法*/
                    $this->success('注册成功！', url('Login/login'));
                }
            }
            }
        }
        return view('User/registeretd');
    }
    // 显示主页
    public function indexMain(){
        $fan = db('fan')
            ->alias('fan')
            ->paginate(1);
        $this->assign('fan',$fan);
        $name=session('username');
        $article = db('article')
            ->alias('article')
            ->paginate(1);
        $this->assign('article',$article);
        $accound=new Accound;
        $res = $accound->select();
        $people_count=count($res);
        $this->assign('name',$name);
        $this->assign('people_count',$people_count);
        return view('Page/index_main');
    }


}