<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\User\Login.html";i:1579228557;}*/ ?>
<?php

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>梧桐网站</title>
    <link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/accound.css">
<!--    <script type="text/javascript" src="verification.php"></script>-->
    <script>
        window.onload=function () {
            var name=document.getElementById('username');
            var pass=document.getElementById('userpassword');
            var submit=document.getElementById('submit');
            function Ajacinfo(){
                var uname=name.value;
                var upass=pass.value;
                if (uname==0){
                    document.getElementById('j_name').innerHTML="姓名不能为空";
                }
                    // else  if (){
                    // 	document.getElementById('judge_name').innerHTML="只能输入字符和字符串";
                // }
                else  if (uname.length>0){
                    document.getElementById('j_name').innerHTML="";
                }

                if (upass.length==0){
                    document.getElementById('j_pass').innerHTML="密码不能为空";
                }
                    // else  if (result.pass=="yes"){
                    // 	document.getElementById('judge_password').innerHTML="3";
                // }
                else  if (upass.length>0){
                    document.getElementById('je_password').innerHTML="";
                }
            }
            submit.onmousedown=function () {
                Ajacinfo();
            };

        }

    </script>
</head>

<body >

<div id="a_main">
    <h1 align="center" style="margin-top: 150px;">欢 迎来到梧桐博客网站</h1>
    <div id="a_time" >
        <p id="time1" style="color:gold; font-size:39px; " align="right" ></p>
        <script>

            function mytime(){
                var a = new Date();
                var b = a.toLocaleTimeString();<!--日历-->
                var c = a.toLocaleDateString();<!--时间-->
                document.getElementById("time1").innerHTML = c+b;
            }
            setInterval(function() {mytime()},1000);

        </script>
    </div>

        <div id="a_middle">

                <form action="<?php echo url('wutong/login/login'); ?>" method="post">
                <table border="0" cellspacing="20" cellpadding="10" align="center">
             <tr><td>账号:</td>
                 <td><input type="text" name="username"  id="username" required="required"></td>
             <td id="j_name"></td></tr>

             <tr><td>密码:</td>
                 <td><input type="password" name="userpassword" id="userpassword" required="required"></td>
                 <td id="j_pass"></td></tr>

             <tr><td> <a href="<?php echo url('wutong/login/indexMain'); ?>">
                 <input type="submit" name="" value="主页" style="width:50px; " >
             </a></td>
              <td align="center"><input type="submit" name="" value="登录" style="width:50px; " >
                  &nbsp;&nbsp;
             <a href="<?php echo url('wutong/login/registeretd'); ?>"><input type="button" value="注册"style="width:50px "></a></td></tr>
             <tr><td></td></tr>

                </table>

            </form>
        </div>
    </div>

</body>
</html>
