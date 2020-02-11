<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:78:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\photo.html";i:1579179915;}*/ ?>
<!-- 相册 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>相册</title>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp5/public/static/index/css/other.css" />
	<style type="text/css">
			
		#o_main{
				height:560px;
			background-image: url(__PUBLIC/image/photo_b.jpg);
		
		}	
		.o_right2{
			
			-webkit-transform:rotate(10deg); /* Safari and Chrome */
				transform:rotate(10deg);/* 2d旋转 */
				
				
		}
		.o_right2{
			height: 470px;
		
				margin-right:150px;
		}	
		#o_right1 img{
			height: 100%;
			width: 50%;
			float: left;
			
			/* transform:rotate(180deg);/* 2d旋转 */ 
		}
		#o_right1 p{
			text-align: center;
			color:#D8BFD8;
			
		}
		#o_right1{
			width: 100%;
			background-color:#E6E6FA;
			margin-right: 50px;
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
						<p><a href="photo.html" target="_blank">相册</a></p>
						<p><a href="note.html" target="_blank">日记</a></p>
						<p><a href="" target="_blank">学习笔记</a></p>
						<p><a href="<?php echo url('wutong/Page/Fan_Opera'); ?>" target="_blank">番剧推荐</a></p>
						<p><a href="<?php echo url('wutong/Page/Message'); ?>" target="_blank">留言簿</a></p>

					</div>
				</div>
			</div>
		<div class="o_right2">
		<div class="o_right">


				<div class="o_right1">
					<img src="../img/33.jpg">
					<p>FFF团</p><p>《笨蛋测试召唤兽》</p></div>
					<div class="o_right1">
						<img src="../img/a.jpg"><p>栗山未来</p><p>《境界的彼方》</p></div>
						<div class="o_right1">
							<img src="../img/hai.jpg" />
							<p>六道骸</p>
							<p>《家庭教师》</p>
							</div>

			</div>
		</div>
	</body>
</html>
