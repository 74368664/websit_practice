<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\temp.html";i:1579182269;}*/ ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<form action="<?php echo url('temp/login'); ?>" method="post">

    <table valign="top" width="50%">

        <tr><td colspan="2"><h4 style="letter-spacing:1px;font-size:16px;">RainMan 网站管理后台</h4></td></tr>

        <tr><td>管理员：</td><td><input type="text" name="user_name" value="" /></td></tr>

        <tr><td>密    码：</td><td><input type="password" name="password" value="" /></td></tr>

        <tr><td>验证码：</td>

            <div id="aa"><?php echo captcha_img(); ?></div>

            <td><img src="/wutong/index/verifyImg" onclick="this.src='/wutong/index/verifyImg/'+Math.random()" alt=""/></td>

        </tr>

        <tr class="bt" align="center"><td> <input type="submit" value="登陆" /></td><td> <input type="reset" value="重填" /></td></tr>

    </table>

</form>
</body>
</html>