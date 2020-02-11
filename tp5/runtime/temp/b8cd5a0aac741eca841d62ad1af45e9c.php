<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:87:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Admin\admin_message.html";i:1579193163;}*/ ?>
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
            留言板
            <hr/>
        <div id="page_put" ><?php echo $list->render(); ?></div>
        <div class="ad_content">
            <table border="1" cellspacing="0" cellpadding="0" align="center">
            <tr >
            <td >
                <input type="text" name="username" value="账户名" readonly="readonly">
            </td>
            <td >
                <input type="text" name="username" value="留言内容" readonly="readonly" size="70">
            </td>
            <td align="center" width="30px">
                <input type="button" value="添加" id="addmessage" name="adduser" style="border-width: 0;background-color: transparent"></td>
            <td>
            </td>
            </tr>
<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
            <tr align="center">
            <td> <input type="text" value="<?php echo $infor['user_name']; ?>" class="name" readonly="readonly">
            </td>
            <td><textarea cols="60" readonly="readonly" class="content"><?php echo $infor['content']; ?></textarea>
            </td>
            <td  width="30px"><input type="button" value="修改" class="modify" style="border-width: 0;background-color: transparent"></td>
            <td align="center" ><input type="button" value="删除" class="del" style="border-width: 0;background-color: transparent"></td>
            <td  hidden><input type="text" name="m_id" class="m_id" value="<?php echo $infor['id']; ?>"></td></tr>
            <?php endforeach; endif; else: echo "" ;endif; ?>
            </table>
    </div>
</div>
</div>
</div>
<script>

    var dele=document.getElementsByClassName('del');
    var modify=document.getElementsByClassName('modify');
    var addmessage=document.getElementById('addmessage');
    //添加
    addmessage.onclick = function () {

        layer.open({
            type: 1 //Page层类型
            , area: ['700px', '500px']
            , title: '添加留言'
            , shade: 0.6 //遮罩透明度
            , maxmin: true //允许全屏最小e化
            , anim: 1 //0-6的动画形式，-1不开启
            , content: '<div style="padding:50px;">' +
                '<form action="<?php echo url('wutong/AdminPage/AddMessage'); ?>"  method="post">账&nbsp;&nbsp;户&nbsp;&nbsp;名：' +
                ' <input type="text" value="" id="name" name="username"  required="required" size="39">' +
                ' <br> 留&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;言：&nbsp;' +
                '<textarea required="required" cols="30" rows="20" name="content">' +
                '</textarea>' +
                '<br>' +
                '<input  type="submit" value="确认" style="margin-left: 170px"></form>' +

                '</div>'
        });


    }
    //修改
    for(let i = 0;i < modify.length;i++) {
        modify[i].onclick = function () {
            var count=0;
            count = i;

            var m_id=document.getElementsByClassName('m_id')[count].value;
            var name=document.getElementsByClassName('name')[count].value;
            var content=document.getElementsByClassName('content')[count].value;
console.log(m_id);
            layer.open({
                type: 1 //Page层类型
                , area: ['700px', '500px']
                , title: '修改留言'
                , shade: 0.6 //遮罩透明度
                , maxmin: true //允许全屏最小e化
                , anim: 1 //0-6的动画形式，-1不开启
                , content: '<div style="padding:50px;">' +
                    '<form action="<?php echo url('wutong/AdminPage/UpdateMessage'); ?>"  method="post">账&nbsp;&nbsp;户&nbsp;&nbsp;名：' +
                    ' <input type="text" value="" id="username" name="username" readonly="readonly" size="39">' +
                    ' <br> 留&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;言：&nbsp;' +
                    '<textarea required="required" cols="30" rows="20" name="content" id="content">' +
                    '</textarea>' +
                    '<br>' +
                    '<input type="text" name="messageid" id="messageid" hidden>' +
                    '<input type="submit" value="确认" style="margin-left: 170px"></form>' +
                    '</div>'
            });
            document.getElementById('username').value=name;
            document.getElementById('content').value=content;
            document.getElementById('messageid').value=m_id;
        }
    }
    //删除
    for(let i = 0;i < dele.length;i++) {
        dele[i].onclick = function () {
            var count=0;
            count = i;
            console.log("aa");
            var name=document.getElementsByClassName('name')[count].value;
            var m_id=document.getElementsByClassName('m_id')[count].value;
            layer.open({
                type: 1 //Page层类型
                , area: ['500px', '300px']
                , title: '删除留言'
                , shade: 0.6 //遮罩透明度
                , maxmin: true //允许全屏最小e化
                , anim: 1 //0-6的动画形式，-1不开启
                , content: '<div style="padding:50px;">' +
                    '<form action="<?php echo url('wutong/AdminPage/DeleteMessage'); ?>"  method="post">确认删除:用户' +
                    ' <input type="text" value="" id="username" name="username" readonly="readonly"style="border-width: 0">' +
                    '<input type="text" name="messageid" id="messageid" hidden>' +
                    '<input type="submit" value="确认"></form>' +
                    '</div>'
            });
            document.getElementById('username').value=name;
            document.getElementById('messageid').value=m_id;

        }
    }
</script>
</body>
</html>