<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:88:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\AdminDeal\updateuser.html";i:1579193164;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>管理界面</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/admin/admin_index.css" >
    <style>
        table{
            margin-top: 5%;
            border-color: #bcd8ff;
            border-width: 1px;
            border-style: solid;
            text-align: center;
        }
        td{
            border-width: 1px;
            border-style: solid;
            border-color: #bcd8ff;
        }
        input{
            border-width: 1px;
            border-style: solid;
            border-color: #bcd8ff;
        }
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
用户->修改用户
<hr/>
<div class="ad_content">
    <form method="post" action="<?php echo url('wutong/AdminPage/UpdateUser'); ?>" method="post" enctype="multipart/form-data">
    <table  cellspacing="0" cellpadding="0" align="center" >

        <tr>
        <td width="100"  >账户名:&nbsp;</td>
        <td width="300"  >
            <input type="text"  name="username" id="username" value="<?php echo $username; ?>" size="40px" placeholder="请输入账户名" required="required"/>
        </td>
        <td style="color:red;">*必填</td></tr>


        <tr>
        <td >密码:&nbsp;</td>
        <td  >
            <input type="password" name="userpassword" id="userpass" value="<?php echo $userpassword; ?>" size="40px" placeholder="请输入密码" required="required"/>
        </td>
        <td style="color:red;">*必填</td></tr>
            </tr>




        <tr>
        <td>验证密码:&nbsp;</td>
        <td >
            <input type="password" name="repassword" id="" value="<?php echo $userpassword; ?>" size="40px" placeholder="请重新输入密码" required="required"/>
        <td style="color:red;">*必填</td></tr>
        </tr>

        <tr>
        <td>邮箱:&nbsp;</td>
        <td >
            <input type="email" name="useremail" value="<?php echo $useremail; ?>" size="40px" placeholder="请输入邮箱" required="required"/>
        </td>
        <td style="color:red;">*必填</td></tr>
        </tr>




        <tr>
        <td >性别:&nbsp;</td>
        <td style="color:gold;">
            <label for="sex" >
                <input type="radio" name="sex" id="girl" value="女" checked>女</input>
                <input type="radio" name="sex" id="boy" value="男">男</input>
            </label>
        </td>
        </tr>





        <tr><td>职业:&nbsp;</td>
        <td  >
        <select   name="job" style="font-size:15px">
            <option value="学生">学生</option>
            <option value="在职">在职</option>
            <option value="自由职业者">自由职业者</option>
            <option value="其他">其他</option>
        </select>
        </td></tr>


        <tr><td>头像:&nbsp;</td><td>
            <input type="file" style="float: left;" name="photo" accept="image/*"></td></tr>


        <tr>
        <td colspan="2" style="text-align: center;">
            <input type="submit" name="submit" value="提交"  />
            &nbsp;&nbsp;<input type="reset" name="reset"  value="重置" />
        </td>
        </tr>

            </table>
    </form>
    </div>
    </div>
    </div>
</div>
<script>

</script>
</body>
</html>