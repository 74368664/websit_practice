<?php
namespace app\wutong\controller;
use app\wutong\model\Article;
use think\Controller;
use think\Db;
use think\Request;
class Page extends  Controller{
    public function checkLogin()
    {

        if(!session('username')) {
            $this->error('请登录后操作', url('Login/Login'));
        }
    }
    public  function note(){
        $this->checkLogin();
        $list = db('note')
            ->alias('note')
            ->paginate(5);

        $this->assign('list',$list);
        return view('Page/note');
    }

    public function Message()
    {

         $name=session('username');

        $list = db('accound')
            ->alias('accound')
            ->join('Message','accound.id=Message.user_id')
            ->paginate(5);  //分页数量
        $this->assign('name',$name);
        $this->assign('list',$list);

        return view('Page/message_board');
    }
    public function Fan_Opera()
    {
        $list = db('fan')
            ->alias('fan')
            ->paginate(20);

        $this->assign('list',$list);
        return view('Page/fan_opera');
    }

    public function article()
    {
        $list = db('article')
            ->alias('article')
            ->paginate(20);
        $this->assign('list',$list);
        return view('Page/article');
    }
    public function page()
    {

        $all = Request::instance()->param();
        $id = $all['ID'];

        $artcile=new Article;
        $data=$artcile->where('id',$id)->find();
        $click=$data['click'];
        $title=$data['title'];
        $creat_time=$data['creat_time'];
        $content=$data['content'];
        $click=$click+1;
        $artcile->where('id', $id)->update(['click'=>$click]);

        $this->assign('click',$click);
        $this->assign('title',$title);
        $this->assign('creat_time',$creat_time);
        $this->assign('content',$content);
        return view('Page/page');
    }
    public function vcode(){
        $Verify = new \Think\Verify();
        $Verify->entry(1);
    }

}