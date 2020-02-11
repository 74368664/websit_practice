<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:84:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\User\registeretd.html";i:1579229827;}*/ ?>
<!-- 注册 -->
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>注册</title>

<link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/registeretd.css">
<style>
	#re_main{
		position: fixed;
	}
</style>
<script>

		window.onload=function () {
			var name=document.getElementById('username');
			var pass=document.getElementById('userpass');

			function Ajacinfo(){
				var uname=name.value;
				var upass=pass.value;
				if (uname==0){
					document.getElementById('judge_name').innerHTML="姓名不能为空";
				}
				else  if (uname.length>=2){
					document.getElementById('judge_name').innerHTML="";
				}
				else  if (2>uname.length>0){
					document.getElementById('judge_name').innerHTML="姓名最少为两位";
				}

				if (upass.length==0){
					document.getElementById('judge_password').innerHTML="密码不能为空";
				}
				else  if (upass.length>=6){
					document.getElementById('judge_password').innerHTML="";
				}
				else  if (6>upass.length>0){
					document.getElementById('judge_password').innerHTML="密码最少为六位";
				}

			}
			pass.onblur=function () {
				Ajacinfo();
			};
			name.onblur=function () {
				Ajacinfo();
			};

			}

</script>
</head>
<body>

<div id="re_main">
<form action="<?php echo url('wutong/login/registeretd'); ?>" method="post" enctype="multipart/form-data" >
<table border="0" cellpadding="0" cellspacing="0"  >
<caption style="font-size: 30px;">注册</caption>


<tr>
	<td width="150"  style="text-align:right;">账户名:&nbsp;</td>
<td width="300"  style="text-align:left;">
<input type="text"  name="username" id="username"value="" size="40px" placeholder="请输入账户名" required="required"/>
</td>
<td style="color:red;">*</td></tr>
	<tr><td colspan="3" id="judge_name" style="color: #bd1cff"></td><td></td></tr>

	<tr>
	<td >密码:&nbsp;</td>
    <td style="text-align:left;" >
      <input type="password" name="userpassword" id="userpass" value="" size="40px" placeholder="请输入密码" required="required"/>
   </td>
   <td style="color:red;">*</td></tr>
	<tr>
	<td colspan="3" id="judge_password" style="color: #bd1cff"></td>
	</tr>



<tr>
	<td>验证密码:&nbsp;</td>
    <td style="text-align:left;">
    <input type="password" name="repassword" id="" value="" size="40px" placeholder="请重新输入密码" required="required"/>
</td><td style="color:red;">*</td>
</tr>
	<tr><td colspan="3" ></td></tr>
	<tr>
		<td>邮箱:&nbsp;</td>
		<td style="text-align:left;">
			<input type="email" name="useremail" value="" size="40px" placeholder="请输入邮箱" required="required"/>
		</td><td style="color:red;">*</td>
	</tr>
	<tr>
		<td colspan="3" id="judge_email" style="color: #bd1cff"></td>
	</tr>



<tr>
	<td >性别:&nbsp;</td>
<td style="text-align: left; color:gold;">
	<label for="sex" >
	<input type="radio" name="sex" id="girl" value="女" checked>女</input>
	<input type="radio" name="sex" id="boy" value="男">男</input>
	</label></td></tr>
	<tr><td colspan="3" ></td></tr>




	<tr><td>职业:&nbsp;</td>
	<td style="text-align:left; ">
		<select   name="job">
			<option value="学生">学生</option>
			<option value="在职">在职</option>
			<option value="自由职业者">自由职业者</option>
			<option value="其他">其他</option>
			</select>
	</td></tr>

<tr><td colspan="3" ></td></tr>
			<tr><td>头像:&nbsp;</td><td>
			<input type="file" value="" style="float: left;" name="photo" accept="image/*"></td></tr>
<tr><td colspan="3" ></td></tr>
	<tr>
		<td>输入验证码:</td>
		<td style="text-align: left">
			<input type="text" name="captcha" size="40">
		</td>
		<td style="color:red;">*</td></tr></tr>
	<tr><td colspan="3" ></td></tr>
	<tr>
		<td>
		</td>
		<td style="text-align: left">
			<div width="100px" height="20px"><?php echo captcha_img(); ?></div></td></tr>




	<tr>
		<td colspan="2" style="text-align: center;">
	<input type="submit" name="submit" value="提交"  />
	&nbsp;&nbsp;<input type="reset" name="reset"  value="重置" />
			<a href="<?php echo url('Login/login'); ?>">
				&nbsp;&nbsp;<input type="button" name="reset"  value="返回" /></a>
		</td>
	</tr>
</table>
</form>
</div>
	</body>
</html>
