<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:85:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Admin\admin_login.html";i:1579179147;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">

    <title>snake</title>
    <link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp5/public/static/index/css/admin/index_.css">
    <style>
        .logo_index{
            margin-left: 30%;
        }
    </style>

</head >
<body >

<div class="main">

<div class="index_accound" >
</div>
    <h1 align="center">管理员登录</h1>

    <div id="photo">
        <img src="http://127.0.0.1/tp5/public/static/index/image/logo_index.png" width="100%" height="100%"></div>

</div>


<div class="index_login">
<form id="log_" action="<?php echo url('AdminLogin/Admin_Login'); ?>" method="post">
<table id=""  border="0px">
    <tr>
    <td  style="height: 50px">账户：
    </td>
    <td>
        <input  type="text" name="adminname" value=""placeholder="请输入用户名" size="30" required="required">
    </td>
    </tr>
    <tr>
    <td> 密码：
    </td>
    <td>
        <input  type="password" name="adminpassword" value=""placeholder="请输入密码" size="30" required="required">
    </td>
    </tr>
    <tr>
    <td>
    </td>
    <td>

    </td>
    </tr>
    <tr>
        <td colspan="2" span="2">  &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
<!--    <input type="submit"   height="30px" width="70px" align="right"  value="登录">-->
    <input type="image"  src="http://127.0.0.1/tp5/public/static/index/image/accound.png"  height="30px" width="70px" align="right" >
    &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;
</table>
</form>

    </div>



<script>

</script>
</body>
</html>