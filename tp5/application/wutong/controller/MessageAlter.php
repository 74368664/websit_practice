<?php


namespace app\wutong\controller;
use app\wutong\model\Message;

use think\Controller;
use think\Db;
use think\Request;

class MessageAlter extends Controller
{
    public function checkLogin()
    {

        if (!session('id')) {
            $this->error('请登录后操作', url('Login/Login'));
        }
    }

    public function Add()
    {
        $this->checkLogin();

        // 2. 获取post请求数据
        if (request()->isPost()) {
            $data = input('post.');
            $content = $data['content'];
            if(!session('username')) {
                $this->error('请登录后操作', url('Login/Login'));
            }
            else{
            $user_name = session('username');



                if (empty($content)) {
                    $this->error('留言不能为空');
                } else if (mb_strlen($content, 'utf-8') > 200) {
                    $this->error('留言内容太长');
                } else {
                    $userId = session('id');

                    $message = new Message();

                    $message->data([
                        'user_id' => $userId,
                        'content' => $content,
                        'user_name' => $user_name,
                        'create_time' => time(),
                    ]);

                    $ret = $message->save();

                    if ($ret > 0) {
                        $this->success('评论成功！', url('Page/Message'));
                    } else {
                        $this->error('评论失败');
                    }

                }
            }

        }

    }
}