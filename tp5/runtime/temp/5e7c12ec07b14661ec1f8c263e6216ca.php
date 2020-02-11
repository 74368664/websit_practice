<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\page.html";i:1579224383;}*/ ?>
<!-- 文章 -->
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>文章</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp5/public/static/index/css/other.css" />
    <style type="text/css">
        body{
            margin: 0;
        }
        #o_main{
            height:800px;
            background-image: url(http://127.0.0.1/tp5/public/static/index/image/photo_b.jpg);

        }
        .o_right2{

          }
        .o_right{
/*background-color: #1E9FFF;*/

        }
        .o_right2{
            height: 600px;
            width: 900px;
            margin-right:100px;
            color: black;
        }
        #o_right1 img{
            height: 100%;
            width: 50%;
            float: left;

            /* transform:rotate(180deg);/* 2d旋转 */
        }
        #o_right1 p{
            text-align: center;
            /*color:#D8BFD8;*/

        }
        #o_right1{
            width: 93%;
            /*background-color:#E6E6FA;*/
            height: 200px;
            margin-right: 20px;
            border-style: solid;
            border-width: 1px;
            border-color: #a2b4e2;
            margin-top: 10px;
        }
        pre {
            white-space: pre-wrap;//自动换行

        }
        .cont{
            height: 500px;
            width:700px;
            margin-left: 20px;
            color: #b6bad0;
        }
    </style>
</head>
<body >
<div id="o_main">
    <div id="o_left">

        <div id="o_left_top">
        </div>
        <div id="o_left_top1">
            <div id="o_left_top2" ></div>
            <div id="o_head_photo"><img src="http://127.0.0.1/tp5/public/static/index/image/head_photo.png " width="70px">
                <p align="center" style="font-size:20px;font-weight:bold;">梧&nbsp;桐</p>
                <p><a href="<?php echo url('wutong/Login/indexmain'); ?>" target="_blank">主页</a></p>
                <p><a href="<?php echo url('wutong/Page/article'); ?>" >文章</a></p>
                <p><a href="<?php echo url('wutong/Page/note'); ?>" >日记</a></p>
                <p><a href="<?php echo url('wutong/Page/Fan_Opera'); ?>" target="_blank">番剧推荐</a></p>
                <p><a href="<?php echo url('wutong/Page/Message'); ?>" target="_blank">留言簿</a></p>

            </div>
        </div>
    </div>
    <div class="o_right2">


        <div class="o_right">



                <p style="font-size:20px; color: #6b6793; " align="center"><?php echo $title; ?></p>

                <p style="font-size:15px ;color: #8A2BE2">
                    <span>点击量：<?php echo $click; ?></span><span>&nbsp;</span>
                    <span>发布时间：<?php echo $creat_time; ?></span>
                </p>
            <hr style="border-color: #1E9FFF"/>
            <div class="cont"><pre ><?php echo $content; ?></pre></div>
            </div>



        </div>
    </div>
</body>
</html>
