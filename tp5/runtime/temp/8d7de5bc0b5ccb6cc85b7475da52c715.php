<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Admin\adminindex.html";i:1579193163;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理界面</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/admin/admin_index.css">
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
<!--                <input readonly="readonly" style="width: 100px;" value="管理员" />-->
<!--              <ul class="slite">-->
<!--                  <li>管理员</li>-->
<!--              </ul>-->
<!--            <br/>-->
<!--                <select id="peolpe">-->
<!--                    <option>访客</option>-->
<!--                </select>-->
<!--                <br/>-->
<!--                <select id="node">-->
<!--                    <option>查看日记</option>-->
<!--                    <option>修改</option>-->
<!--                </select>-->

        </div>
        <div id="ad_right">
首页
            <hr/>
            <div class="ad_content">
            <div class="ad_right_photo">
            <img src="http://127.0.0.1/tp5/public/static/index/image/lishan.png" width="100%" height="100%">
            </div>
        <div class="ad_right_font">
<h1 style="margin-top: 50%" align="center">欢迎进入后台管理界面</h1>
        </div></div>
        </div>
        </div>
    </div>
</div>
</body>
</html>