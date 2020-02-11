<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:83:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\index_main.html";i:1579229702;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>网站</title>
		<link rel="stylesheet" href="http://127.0.0.1/tp5/public/static/index/css/index_main.css" type="text/css" />

<script>


</script>
		<style>
			.right1{
				/*background-color: #4c79ce;*/
				margin-left: 0px;
				border-width: 1px;

				border-bottom-style: solid;
			}
			#right{
				/*background-color: #ce8c7f;*/
				margin-left: -100px;
			}
			.fan_photo{
				width: 200px;
				height: 280px;
				margin-top: -50px;
			}
			textarea{
				height: 200px;
				/*margin-left: ;*/
				width: 500px;
				resize:none;
				overflow-y:hidden;
				border-width: 0px;
			}
			.font_r{
				width: 360px;
				height: 220px;
				margin-left: 240px;
				overflow: hidden;
			}
#top_top1{
	background-color: #b3cec3;
}
			#top{
				/*background-color: #e6d6ff;*/
			}


		</style>
		<?php
		if(!session('username')) {

		$check=0;
		$name="您还未登录";
		}
		else{
		$check=1;
			$name="欢迎用户:".session('username');
		}

		?>
</head>

<body>
<div id="main">
<!--	<embed height="50" width="100" src="./media/bgm1.mp3" loop="true" hidden="true">-->
	<div id="top">

		<div id="top_mleft">
			<img src="http://127.0.0.1/tp5/public/static/index/image/logo_index.png" style="border-radius:3%" width="300px" height="220px" alt="logo">
		</div>
		<div id="top_top">
				<p>
			<input type="hidden" style="background-color: transparent;" value="<?php echo $check; ?>" id="check">
			<input type="text" style="background-color: transparent; border-width: 0; color: #4c79ce" value="<?php echo $name; ?>" id="nam">
			<a href="<?php echo url('Login/unlogin'); ?>">
			<input type="button" style="background-color: transparent; width: 200px" value="退出登录" id="unlogin">
			</a>
			<a href="<?php echo url('Login/login'); ?>">
			<input type="button" style="background-color: transparent; width: 70px;height: 30px" value="登录" id="login">
			</a>
			<a href="<?php echo url('Login/registeretd'); ?>">
			<input type="button" style="background-color: transparent;width: 70px;height: 30px"  value="注册" id="reg">
			</a>
			</p>
		</div>
		<div id="top_middle">



			<div id="top_mright">
<!--				<div id="top_mm">-->
<!--						<form ><p ><input type="text" size="40%" style="height:40px;float: right; margin-right:17%;" placeholder="搜索"/>-->
<!--						 <input type="button" name="搜索" style="width:45px;height:45px;float: right; margin-right:5%;margin-top:-12% ;" value="搜索"/></p>-->
<!--				</div>-->
			</div>
		</div>
		<div id="top_top1">

			<div class="top_a">
				<a href="<?php echo url('Login/indexMain'); ?>"   >主页</a>
			</div>
			<div class="top_a">
				<a href="<?php echo url('wutong/Page/article'); ?>"  >文章</a>
			</div>
			<div class="top_a">
				<a href="<?php echo url('wutong/Page/note'); ?>" >日记</a>
			</div>
			<div class="top_a">
					<a href="<?php echo url('wutong/Page/Message'); ?>" >留言簿</a>
			</div>
			<div class="top_a">
				<a href="<?php echo url('wutong/Page/Fan_Opera'); ?>" >番剧推荐</a></p>
			</div>

			<div id="ha">
			</div>
		</div>
	</div>
	<div id="middle">
		<div id="left">
			<div id="left_top">
			</div>
			<div id="left_top1">
			<div id="left_top2"></div>
			<div id="head_photo"><img src="http://127.0.0.1/tp5/public/static/index/image/head_photo.png" width="100px;"></div>
			<p align="center" style="font-size:30px;font-weight:bold; margin-top:60px"></p>
			<p align="center"><strong>简介：</strong>kufufu</p>

				<p align="center">用户：<?php echo $people_count; ?>人</p>
		</div>
	</div>
		<div id="right_w">
		<div id="right">

			<?php if(is_array($fan) || $fan instanceof \think\Collection || $fan instanceof \think\Paginator): $i = 0; $__LIST__ = $fan;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
			<div class="right1">

				<p align="center" class="title">
				<a href="<?php echo url('wutong/Page/Fan_Opera'); ?>" title="<?php echo $infor['title']; ?>"><?php echo $infor['title']; ?>
				</p>
				<img src="http://127.0.0.1/tp5/public/static/index/image/fan_o/<?php echo $infor['photo']; ?>" class="fan_photo" style="float:left">

				<div class="font_r" ><?php echo $infor['content']; ?>
				</div>




			</div></a><?php endforeach; endif; else: echo "" ;endif; if(is_array($article) || $article instanceof \think\Collection || $article instanceof \think\Paginator): $i = 0; $__LIST__ = $article;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
			<div class="right1">

				<p align="center" class="title">
					<a href="<?php echo url('wutong/Page/article'); ?>" title="<?php echo $infor['title']; ?>"><?php echo $infor['title']; ?>
				</p>

				<div class="fan_photo" style="float:left;font-size: 20px">文章推荐</div>
				<div class="font_r" ><?php echo $infor['content']; ?>
				</div>

			</div></a><?php endforeach; endif; else: echo "" ;endif; ?>
		</div>


	</div>

	</div>
			<div id="bottom">
				<hr/>
	    	   <p align="center">版权所属：桐  |  版权号 xxxxx-xxxxx-xxxxx
			   <a href="<?php echo url('AdminLogin/Admin_Login'); ?>"><span> 管理员登录</span></a> <p>
			</div>
</div>
<script>


	var check=document.getElementById('check').value;
	console.log(check);
	var log=document.getElementById('login');
	var unlog=document.getElementById('unlogin');
	var reg=document.getElementById('reg');
	var inf=document.getElementById('inf');
	if(check==0){
		reg.style.display="";//显
		log.style.display="";//显
		unlog.style.display="none";//显

	}
	else if(check==1){

		console.log('check');
		reg.style.display="none";//隐藏
		log.style.display="none";//隐藏
		unlog.style.display="";//隐藏

	}

</script>
</body>
</html>
