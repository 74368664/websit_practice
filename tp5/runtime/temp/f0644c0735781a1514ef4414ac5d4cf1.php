<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Admin\adminuser.html";i:1579193164;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理界面</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/admin/admin_index.css">
    <script src="http://127.0.0.1/tp5/public/static/index/js/jquery-3.4.1.js"></script>
    <script src="http://127.0.0.1/tp5/public/static/index/js/layer/layer.js"></script>
    <style>

    </style>
</head>
<body>
<div id="ad_main">
    <div id="ad_top">
        <div ></div><div class="admin_left_photo"><?php echo $ad_name; ?> </div>
    </div>
    <div id="ad_middle">
        <div id="ad_left">
            <a href="<?php echo url('wutong/AdminPage/Admin'); ?>">
                <input type="text" readonly="readonly" value="首页" style="" >
            </a>
            <a href="<?php echo url('wutong/AdminPage/AdminUser'); ?>">
                <input type="text" readonly="readonly" value="用户"  >
            </a>
            <a href="<?php echo url('wutong/AdminPage/AdminAdmin'); ?>">
                <input type="text" readonly="readonly" value="管理员"  >
            </a>
            <a href="<?php echo url('wutong/AdminPage/AdminMessage'); ?>">
                <input type="text" readonly="readonly" value="留言板"  >
            </a>
            <a href="<?php echo url('wutong/AdminPage/AdminNote'); ?>">
                <input type="text" readonly="readonly" value="日记"  >
            </a>
            <a href="<?php echo url('wutong/AdminPage/AdminArticle'); ?>">
                <input type="text" readonly="readonly" value="文章"  >
            </a>
            <a href="<?php echo url('wutong/AdminPage/AdminFan'); ?>">
                <input type="text" readonly="readonly" value="番剧"  >
            </a>
            <a href="<?php echo url('wutong/Login/indexMain'); ?>">
                <input type="text" readonly="readonly" value="退出"  >
            </a>
        </div>

        <div id="ad_right">
            用户
            <hr/>
        <div class="ad_content">
            <form method="post">
           <table border="1" cellspacing="0" cellpadding="0" align="center">
           <tr align="center">
           <td ><input type="text" name="username" value="账户名" readonly="readonly"></td>
           <td><input type="text" name="username" value="密码" readonly="readonly"></td>
           <td><input type="text" name="username" value="性别" readonly="readonly"></td>
           <td><input type="text" name="username" value="职业" readonly="readonly"></td>
           <td><input type="text" name="username" value="头像" readonly="readonly"></td>
           <td align="center" width="30px">
               <a href="<?php echo url('wutong/AdminPage/AddUser'); ?>">
               <input type="button" value="添加" id="adduser" name="adduser" style="border-width: 0;background-color: transparent">
          </a>
           </td>
           <td align="center" ></td></tr>
               <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
           <tr align="center">
           <td ><input type="text" value="<?php echo $infor['username']; ?>" class="name" readonly="readonly"></td>
           <td><input type="text" value="<?php echo $infor['userpassword']; ?>" readonly="readonly"></td>
           <td><input type="text" value="<?php echo $infor['sex']; ?>" readonly="readonly" style="border-width: 0;background-color: transparent"></td>
           <td><input type="text" value="<?php echo $infor['job']; ?>" readonly="readonly" style="border-width: 0;background-color: transparent"></td>
           <td><input type="text" value="<?php echo $infor['photo']; ?>" readonly="readonly" style="border-width: 0;background-color: transparent"></td>
           <td align="center" width="30px">
<!--               <a href="<?php echo url('AdminPage/UpdateUser'); ?>">-->
                   <input type="button" value="修改" class="modify">
<!--               </a>-->
           </td>
           <td align="center" >
<!--                  <a href="<?php echo url('wutong/AdminPage/DeleteUser'); ?>">-->
                      <input type="button" value="删除" name="dele" class="dele">
<!--               </a>-->
           </td>
           </tr>
                 <?php endforeach; endif; else: echo "" ;endif; ?>
           </table>
            </form>
            <div id="page_put" ><?php echo $list->render(); ?></div>
        </div>
    </div>
</div>
</div>
<script>
    var modify=document.getElementsByClassName('modify');
    var dele=document.getElementsByClassName('dele');
    var adduser=document.getElementById('adduser');
    for(let i = 0;i < dele.length;i++) {
        modify[i].onclick = function () {
            var count=0;
            count = i;

            var name=document.getElementsByClassName('name')[count].value;

            layer.open({
                type: 1 //Page层类型
                , area: ['500px', '300px']
                , title: '修改用户'
                , shade: 0.6 //遮罩透明度
                , maxmin: true //允许全屏最小e化
                , anim: 1 //0-6的动画形式，-1不开启
                , content: '<div style="padding:50px;">' +
                    '<form action="<?php echo url('wutong/AdminPage/UpdateUserPage'); ?>"  method="post">确认修改:用户' +
                    ' <input type="text" value="" id="username" name="username" readonly="readonly"style="border-width: 0">' +
                    '<input type="submit" value="确认"></form>' +
                    '</div>'
            });
            document.getElementById('username').value=name;
        }
        }
    for(let i = 0;i < dele.length;i++) {
        dele[i].onclick = function () {
            var count=0;
            count = i;

            var name=document.getElementsByClassName('name')[count].value;



            layer.open({
                type: 1 //Page层类型
                , area: ['500px', '300px']
                , title: '删除用户'
                , shade: 0.6 //遮罩透明度
                , maxmin: true //允许全屏最小e化
                , anim: 1 //0-6的动画形式，-1不开启
                , content: '<div style="padding:50px;">' +
                    '<form action="<?php echo url('wutong/AdminPage/DeleteUser'); ?>"  method="post">确认删除:用户' +
                    ' <input type="text" value="" id="username" name="username" readonly="readonly"style="border-width: 0">' +
                    '<input type="submit" value="确认"></form>' +
                    '</div>'
            });
            document.getElementById('username').value=name;

        }
    }


    // var name='<?php echo $list[1]["username"]; ?>';
    // console.log(name);

</script>
</body>
</html>