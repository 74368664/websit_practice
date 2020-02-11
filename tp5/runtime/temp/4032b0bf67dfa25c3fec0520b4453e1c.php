<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Admin\admin_admin.html";i:1579193164;}*/ ?>
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
    <div id="ad_top" align="center">
        <div ></div><div class="admin_left_photo"><?php echo $ad_name; ?> </div>
<!--        <span style="color: #9bc6e2;margin-left: 80% ;" > 欢迎管理员：<?php echo $ad_name; ?>    登录 </span>-->
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
            管理员
    <hr/>
            <div id="page_put" ><?php echo $list->render(); ?></div>
    <div class="ad_content">
        <form >
        <table border="1" cellspacing="0" cellpadding="0" align="center">
        <tr align="center">
        <td ><input type="text" name="username" value="账户名" readonly="readonly"></td>
        <td><input type="text" name="username" value="密码" readonly="readonly"></td>
        <td align="center" width="30px">
            <input type="button" value="添加" id="addadmin" name="adduser" style="border-width: 0;background-color: transparent"></td>
        <td align="center" ></td></tr>
            <?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
        <tr align="center">

        <td>
            <input type="text" value="<?php echo $infor['adminname']; ?>" class="name" readonly="readonly" name="adminname"></td>
        <td>
            <input type="text" value="<?php echo $infor['adminpassword']; ?>"  class="pass" readonly="readonly" name="adminpassword"></td>
        <td align="center" width="30px"><input type="button" value="修改" class="modify" style="border-width: 0;background-color: transparent"></td>
        <td align="center" >
            <input type="button" value="删除" class="del" style="border-width: 0;background-color: transparent" ></td>
        </tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
        </table>
        </form>

            </div>

        </div>
    </div>
</div>
<script>

    var dele=document.getElementsByClassName('del');
    var modify=document.getElementsByClassName('modify');
    var addadmin=document.getElementById('addadmin');
    //添加
    addadmin.onclick = function () {

        layer.open({
            type: 1 //Page层类型
            , area: ['500px', '300px']
            , title: '你好，' + name
            , shade: 0.6 //遮罩透明度
            , maxmin: true //允许全屏最小e化
            , anim: 1 //0-6的动画形式，-1不开启
            , content: '<div style="padding:50px;">' +
                '<form action="<?php echo url('wutong/AdminPage/AddAdmin'); ?>"  method="post">管&nbsp;&nbsp;理&nbsp;&nbsp;员：' +
                ' <input type="text" value="" id="adminname" name="adminname"  required="required">' +
                ' <br> 密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：&nbsp;' +
                '<input type="text" value="" id="adminname" name="adminpassword" required="required">' +
                ' <br> 重复密码：&nbsp;' +
                '<input type="text" value="" id="adminname" name="repassword"  required="required">' +
                '<br>' +
                '<br>' +
                '<input type="submit" value="确认" style="margin-left: 170px"></form>' +
                '</div>'
        });


    }
    //修改
    for(let i = 0;i < modify.length;i++) {
        modify[i].onclick = function () {
            var count=0;
            count = i;

            var name=document.getElementsByClassName('name')[count].value;
            var pass=document.getElementsByClassName('pass')[count].value;
            console.log(pass);
            layer.open({
                type: 1 //Page层类型
                , area: ['500px', '300px']
                , title: '你好，' + name
                , shade: 0.6 //遮罩透明度
                , maxmin: true //允许全屏最小e化
                , anim: 1 //0-6的动画形式，-1不开启
                , content: '<div style="padding:50px;">' +
                    '<form action="<?php echo url('wutong/AdminPage/UpdateAdmin'); ?>"  method="post">管&nbsp;&nbsp;理&nbsp;&nbsp;员：' +
                    ' <input type="text" value="" id="adminname1" name="adminname"  required="required">' +
                    ' <br> 密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码：&nbsp;' +
                    '<input type="text" value="" id="adminpassword1" name="adminpassword" required="required">' +
                    ' <br> 重复密码：&nbsp;' +
                    '<input type="text" value="" id="adminpassword" name="repassword"  required="required">' +
                    '<br>' +
                    '<br>' +
                    '<input type="submit" value="确认" style="margin-left: 170px"></form>' +
                    '</div>'
            });
            document.getElementById('adminname1').value=name;
            document.getElementById('adminpassword1').value=pass;
        }
    }
    //删除
    for(let i = 0;i < dele.length;i++) {
        dele[i].onclick = function () {
            var count=0;
            count = i;
            console.log("aa");
            var name=document.getElementsByClassName('name')[count].value;
            layer.open({
                type: 1 //Page层类型
                , area: ['500px', '300px']
                , title: '你好，' + name
                , shade: 0.6 //遮罩透明度
                , maxmin: true //允许全屏最小e化
                , anim: 1 //0-6的动画形式，-1不开启
                , content: '<div style="padding:50px;">' +
                    '<form action="<?php echo url('wutong/AdminPage/DeleteAdmin'); ?>"  method="post">确认删除:用户' +
                    ' <input type="text" value="" id="adminname" name="adminname" readonly="readonly"style="border-width: 0">' +
                    '<input type="submit" value="确认"></form>' +
                    '</div>'
            });
            document.getElementById('adminname').value=name;


        }
    }
</script>
</body>
</html>