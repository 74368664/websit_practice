<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:82:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\fan_opera.html";i:1579231536;}*/ ?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		
		<title></title>
		<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp5/public/static/index/css/other.css" />
		<style>
			body{
				/*margin: 0;*/

				overflow-x:hidden ; /*隐藏水平滚动条*/
				overflow-y:hidden ; /*隐藏水平滚动条*/
			}
			#o_main{
				background-image: none;
				background-color: white;
				height: 100%;
				/*background-color: #8A2BE2;*/
			}
			#walk{
				
				position:absolute;
				width:200px;
				height:200px;
				
				top: 252px;
				left: 1100px;
			/* 	background-color: white; */
				background-image: url("http://127.0.0.1/tp5/public/static/index/image/3.gif");
				background-size: 100%;
				position: fixed;
				animation: mymove1 50s infinite;
				-webkit-animation:mymove1 50s infinite;
			}
				
			#fan_logo{
				position:absolute;
				width:50px;
				height: 200px;
				top: 19px;
				left: 260px;
				font-size: 40px;
			    font-weight: bolder;
			}
			@-webkit-keyframes mymove1{
				/* 20%{left:500px}; */
				100%{left: -150px;}
				
			}
			.o_right{
				z-index: 200;
				/*background-color: #87CEFA;*/
				width: 70%;
				margin-right: -5%;
				height: 400px;


			}

			#o_right2{
				/*background-color: #8A2BE2;*/
				margin-right: 15%;
				overflow-x:hidden ; /*隐藏水平滚动条*/
				overflow-y:hidden ; /*隐藏水平滚动条*/
			}
				
			#o_bottom{
				width: 900px;
				height: 210px;
				position: absolute;
				top:420px;
				left: 360px;
				/* background-color: #8A2BE2; */
			}
				.o_right3_f{
					/*background-color: #8A2BE2;*/
					margin-left:0px;
					width: 700px;
					height: 300px;
					border-width: 2px;
					border-style: solid;
					border-color: #a7c7b9;
					margin-bottom: 20px;
				}
				.o_right1{
					/*background-color: #93e25b;*/
					position: relative;
					margin-right: 20px;
					width: 700px;
					border-width: 2px;
					border-style: solid;
					border-color: #a7c7b9;
				}

			#time_fan{
				width:150px;
				height: 150px;
				float: left;
				
				top:10px;
				/* background-color:#ADFF2F; */
				border: 0;
				border-top-width: 3px;
				border-top-style: solid;
					border-top-color: #87CEFA;
				/* -webkit-animation: mymove_time 5s infinite;
				
				animation: mymove_time 5s infinite; */
			}
			@-webkit-keyframes mymove_time{
				50%{transform:rotate(10);}
			}
			#o_left_top2{
				background-image: url('http://127.0.0.1/tp5/public/static/index/image/2.jpg');
				background-size: cover;
				opacity:0.7;
			}
			textarea{
				width: 430px;
				height: 260px;
				margin-left: 250px;
				margin-top:-1px;
				border-width:0px;

			}
			.fan_photo{
			width: 240px;
				height: 290px;
				margin-left: 5px;
				margin-top: -320px;
			}
.title{
	margin-left: 260px;
	margin-top: 0;
	width: 420px;
	/*background-color: #4c79ce;*/
	font-size: 20px;
	font-weight: bolder;
	/*color: #5a26e2;*/
}
			.hrr{
				margin-left: 230px;
				margin-top: -15px;
			}
		</style>
	</head>
	<body>
		<div id="o_main">
			<div id="walk">
			<!-- <img src="../img/fan/3.gif" /> --></div>
			<div id="fan_logo">   番剧推荐</div>
			<div id="o_left">


				<div id="o_left_top1">
					<div id="o_left_top2"></div>
					<div id="o_head_photo"><img src="http://127.0.0.1/tp5/public/static/index/image/head_photo.png " width="70px">
						<p align="center" style="font-size:20px;font-weight:bold;">梧&nbsp;桐</p>
						<p><a href="<?php echo url('wutong/Login/indexmain'); ?>" target="_blank">主页</a></p>
						<p><a href="<?php echo url('wutong/Page/article'); ?>" >文章</a></p>
						<a href="<?php echo url('wutong/Page/note'); ?>" >日记</a>

						<p><a href="<?php echo url('wutong/Page/Fan_Opera'); ?>" target="_blank">番剧推荐</a></p>
						<p><a href="<?php echo url('wutong/Page/Message'); ?>" target="_blank">留言簿</a></p>

					</div>
				</div>
			</div>
<!--		 <iframe src="people.html" height="100%"width="100%"></iframe>-->
		<div id="o_right2">
		<div class="o_right">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
		<div class="o_right3_f">

			<p align="center" class="title">
			<a href="<?php echo $infor['href']; ?>" title="<?php echo $infor['title']; ?>"><?php echo $infor['title']; ?></a>
			</p><hr class="hrr">
			<textarea style="text-indent:8px;letter-spacing:3px;color: black" readonly="readonly" >
<?php echo $infor['content']; ?>
			</textarea>
		</div>


			<img src="http://127.0.0.1/tp5/public/static/index/image/fan_o/<?php echo $infor['photo']; ?>" class="fan_photo" style="float:left">

		<?php endforeach; endif; else: echo "" ;endif; ?>
		</div>

		</div>
	</div>
		<div id="o_bottom">
			<img src="http://127.0.0.1/tp5/public/static/index/image/ph2.png" width="300px" height="400px" style="margin-left: 0px;margin-top:-60px">

			<img src="http://127.0.0.1/tp5/public/static/index/image/ph.png" width="300px" height="400px" style="margin-left:200px;margin-top:-60px">

<!--			-->
<!--				<ul>-->
<!--				-->
<!--					<a href="" title="笨蛋.测试.召唤兽"><div id="time_fan"><li><br>2019-1</br>-->
<!--					<img src="../img/33.jpg" width="90px" height="90px" />-->
<!--			</a></li></div>-->
<!--			<a href="" title="夏目友人帐"><div id="time_fan"><li><br>2019-2</br>-->
<!--					<img src="../img/2.jpg" width="90px" height="90px" />-->
<!--			</a></li></div>-->
<!--			<a href="" title="家庭教师"><div id="time_fan"><li><br>2019-3</br>-->
<!--					<img src="../img/hai.jpg" width="90px" height="90px" />-->
<!--			</a></li></div>-->
<!--			<a href="" title="从零开始的异世界"><div id="time_fan"><li><br>2019-4</br>-->
<!--					<img src="../img/fan/5.jpg" width="90px" height="90px" />-->
<!--			</a></li></div>-->
<!--			-->
<!--			<a href="" title="干物妹小埋"><div id="time_fan"><li><br>2019-5</br>-->
<!--					<img src="../img/fan/6.jpg" width="90px" height="90px" />-->
<!--			</a></li></div>-->
<!--			</ul>-->
		</div>
		</div>
	</body>
</html>
