<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:77:"D:\code_progream\php\WWW\tp5\public/../application/wutong\view\Page\note.html";i:1579180303;}*/ ?>
<!-- 日记 -->
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>日记</title>
				<link rel="stylesheet" type="text/css" href="http://127.0.0.1/tp5/public/static/index/css/other.css" />
		<style type="text/css">
			.Pagination a:hover,.current{background-color: #f54281;border: 1px solid #f54281;color: #ffffff; }
			.Pagination{float: right;height: auto;_height: 45px; line-height: 20px;margin-right: 15px;_margin-right: 5px; color:#565656;margin-top: 10px;_margin-top: 20px; clear:both;}
			.Pagination a,.Pagination span{ font-size: 14px;text-decoration: none;display: block;float: left;color: #565656;border: 1px solid #ccc;height: 34px;line-height: 34px;margin: 0 2px;width: 34px;text-align: center;}
		</style>

				<style type="text/css">

					.o_right2{
						
						/*height:500px;*/
						/* background-color: #87CEFA;*/
						/*margin-right:190px;*/
					
					}
					
					.o_right1{
						/*width: 93%;*/
						
					}
					#o_main{
						height:650px;
					}
					body{
						margin: 0;
					}
					#page_put{
						height: 7%;
						width: 30%;
						margin-top:40%;
						margin-left: 50%;
						position:absolute;
						color: #7be2e1;
						/*background-color: #8A2BE2;*/
					}
				</style>
	</head>
	<body>

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
				<p>	<a href="<?php echo url('wutong/Page/note'); ?>" >日记</a></p>
				<p><a href="<?php echo url('wutong/Page/Fan_Opera'); ?>" target="_blank">番剧推荐</a></p>
				<p><a href="<?php echo url('wutong/Page/Message'); ?>" target="_blank">留言簿</a></p>
				
				</div>
			</div>
		</div>

		<div class="o_right2">
		<div class="o_right">
			<?php if(is_array($list) || $list instanceof \think\Collection || $list instanceof \think\Paginator): $i = 0; $__LIST__ = $list;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$infor): $mod = ($i % 2 );++$i;?>
			<div class="o_right1">
			<textarea id="" value="" readonly="readonly" style="color: #f0ebff">
				<?php echo $infor['content']; ?>
			</textarea></div>
<?php endforeach; endif; else: echo "" ;endif; ?>

			</div>
		</div>
			<div id="page_put" ><?php echo $list->render(); ?></div>
		</div>

	</body>
</html>
