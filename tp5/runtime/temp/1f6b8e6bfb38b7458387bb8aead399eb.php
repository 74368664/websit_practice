<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\message_board.html";i:1579180303;}*/ ?>
<!-- 留言簿 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>留言簿</title>
		
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp5/public/static/index/css/other.css" />
	<style>
#o_main{
	height: 100%;
}
		textarea{
			height: 100px;
			color: #000000;
			border-radius: 7%;
			margin-right: 50px;
		}

		input{
			background-image: url('http://127.0.0.1/tp5/public/static/index/image/1.jpg');
			position: absolute;
			top:200px;

			margin-left:900px;

		}


		.speak{
			width: 700px;
			margin-top: 50px;

			margin-left: 370px;
		}


		#o_right{

		margin-left: 300px;
			margin-right: 50px;
		/*overflow: hidden;*/
		}
		#o_right1{


			/*overflow: hidden;*/
		}
		#o_right3{


			border-bottom: dashed;
			border-bottom-color:silver;
			border-bottom-width: 1px;
		}
		.o_right31{


			border-bottom: dashed;
			border-bottom-color:silver;
			border-bottom-width: 1px;
		}
#o_left_top2{
	background-image: url(http://127.0.0.1/tp5/public/static/index/image/2.jpg);
	background-size: cover;
	opacity:0.7;
}
		.speak textarea{
			height: 100%;
			color: #000000;
			border-radius: 7%;
			border: 0;
			border-bottom-style: dashed;
			border-bottom-width: 1px;

		}
		.speak img{
			border-radius: 50%;
			width: 50px;
			height: 50px;
			border:2px solid #E6E6FA;
			margin-top: 20px;
			animation:mymove 10s infinite;
		}
		@-ms-keyframes mymove{
			50%{transform: 360deg;}
		}
		#o_main{
			background-image:url('http://127.0.0.1/tp5/public/static/index/image/999.jpeg');
		}

#page_put{
	height: 7%;
	width: 30%;
	margin-top:530px;
	margin-left: 1000px;
	position:fixed;
	color: #7be2e1;
	/*background-color: #8A2BE2;*/
}
	</style>
	</head>
	<body>

		<div id="o_main"  >
			<div id="o_left">


				<div id="o_left_top1">
					<div id="o_left_top2"></div>
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
			<div id="page_put" ><?php echo $list->render(); ?></div>
				<div id="o_right">
						<p align="center">留言簿</p>
<!--					<p style="margin-left: 300px"><?php echo $list->render(); ?></p><span id="usname" style="letter-spacing: 10px">欢迎用户：-->
<!--					<span id="name" style="color: #9217ff"><?php echo $name; ?></span>  登录&nbsp;</span>-->
					<p></p>
					<hr/>

					<form action="<?php echo url('wutong/MessageAlter/Add'); ?>" method="post">
						<div id="o_right1" style="border: 0;">
							<textarea  value="" placeholder="请输入您的留言" name="content"></textarea>
						</div>
						<input type="submit" id="" value="发布" />

						</form>
				</div>


							<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
						<div class="speak">
							<div class="o_right3" style="margin-top: 20px;"><img src="http://127.0.0.1/tp5/public/static/index/image/head/<?php echo $infor['photo']; ?>"/>
								<p style="color: #4c79ce"><?php echo $infor['user_name']; ?></p>
								<textarea readonly="readonly"><?php echo $infor['content']; ?></textarea>
							</div>
						</div>


					<?php endforeach; endif; else: echo "" ;endif; ?>

		</div>



<!--		<iframe src="<?php echo url('wutong/Page/people'); ?>" width="100%" border="0" height="100%" style="position: fixed; top: 0"></iframe>-->

	</body>
</html>
