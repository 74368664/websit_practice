<?php
namespace app\wutong\controller;
use app\wutong\model\Accound;
use think\Controller;

class Index extends Controller
{

    public function index()
    {
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


}
