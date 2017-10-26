<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<title><?php echo ($tpte["title"]); ?></title>
<meta name="keywords" content="<?php echo ($tpte["keywords"]); ?>"/>
<meta name="description" content="<?php echo ($tpte["description"]); ?>"/>
<!--公共底部-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="uyan_auth" content="6aa51c9f35" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/Public/img/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="/Templet/index/public/css/global.css">
<link rel="stylesheet" href="/Templet/index/public/css/style.css">
<link rel="stylesheet" href="/Templet/index/public/css/animate.css">
<script src="/Templet/index/public/js/jquery-1.9.1.min.js"></script>
<script src="/Templet/index/public/js/jquery.cbFlyout.js"></script>
</head>
<body>
<div class="yoho167-header cl">
	<div class="yoho167-wp cl">
		<div class="yoho167-ml-7 header-nav">
			<div class="yoho167-mds">
				<div class="logo">
					<a href="/" title="<?php echo ($tptc["title"]); ?>"><img src="/Uploads<?php echo ($tpte["logo"]); ?>" alt="<?php echo ($tpte["title"]); ?>"></a>
				</div>
				<div id="left-flyout-nav" class="layout-left-flyout visible-sm">
				</div>
				<div class="layout-right-content">
					<header class="the-header">
					<div class="navbar container yoho167-right-1024">
						<!-- Trigger -->
						<a class="btn-navbar btn-navbar-navtoggle btn-flyout-trigger" href="javascript:;"><i style="color: #fff;font-size: 28px;" class="iconfont">&#xe607;</i></a>
						<!-- Structure -->
						<nav class="the-nav nav-collapse clearfix">
								<ul id="menu" class="nav nav-pill pull-left">
									<?php if(is_array($tpta)): foreach($tpta as $k=>$vo): if($vo['show'] == 1): ?><li class="dropdown" id="<?php echo ($vo['id']); ?>">
															<a <?php if($vo['blank'] == 1): ?>target="_blank"<?php endif; ?>href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a>
															<?php if($vo['link'] != ''): else: ?>
																	<ul class="subnav"><?php endif; ?>
																		<?php if(is_array($tptas)): foreach($tptas as $k=>$vs): if($vo["id"] == $vs['tid']): if($vs['show'] == 1): ?><li id="<?php echo ($vs['id']); ?>">
																							<a <?php if($vs['blank'] == 1): ?>target="_blank"<?php endif; ?>href="<?php echo ($vs["link"]); ?>"><?php echo ($vs["name"]); ?></a>
																						</li><?php endif; endif; endforeach; endif; ?>
																		<?php if($vo['link'] != ''): else: ?>
																	</ul><?php endif; ?>
													</li><?php endif; endforeach; endif; ?>
								</ul>
						</nav>
					</div>
					</header>
				</div>
			</div>
		</div>
		<div class="yoho167-mr-3 tougou-btn">
			<div class="yoho167-mds">
				<?php if($tpte['open'] == 1): ?><div class="status">
					<a target="_blank" href="<?php echo U('index/tougao');?>">欢迎投稿</a>
				</div><?php endif; ?>
				<!-- <div class="search">
					<form action="/index.php/search.html" method="get">
						<input placeholder="输入关键字" name="kw" value="<?php echo I('kw');?>" type="text">
						<button value="查询" type="submit"></button>
					</form>
				</div> -->
			</div>
		</div>
	</div>
</div>

<div class="yoho167-wp yoho167-pat-75 cl">
	<div class="yoho167-ml-7">
		<div class="yoho167-banner cl">
			<div class="yoho167-ml-6">
				<div class="yoho167-a">
					<a href="<?php echo ($tptf["alink"]); ?>" title="<?php echo ($tptf["atitle"]); ?>"><img src="/Uploads<?php echo ($tptf["apic"]); ?>" alt="<?php echo ($tptf["atitle"]); ?>"></a>
					<h2><a href="<?php echo ($tptf["alink"]); ?>" title="<?php echo ($tptf["atitle"]); ?>"><?php echo ($tptf["atitle"]); ?></a></h2>
				</div>
			</div>
			<div class="yoho167-mr-4">
				<ul class="yoho167-b">
					<li><a href="<?php echo ($tptf["blink"]); ?>" title="<?php echo ($tptf["btitle"]); ?>"><img src="/Uploads<?php echo ($tptf["bpic"]); ?>" alt="<?php echo ($tptf["btitle"]); ?>"></a>
					<h2><a href="<?php echo ($tptf["blink"]); ?>" title="<?php echo ($tptf["btitle"]); ?>"><?php echo ($tptf["btitle"]); ?></a></h2>
					</li>
					<li><a href="<?php echo ($tptf["clink"]); ?>" title="<?php echo ($tptf["ctitle"]); ?>"><img src="/Uploads<?php echo ($tptf["cpic"]); ?>" alt="<?php echo ($tptf["ctitle"]); ?>"></a>
					<h2><a href="<?php echo ($tptf["clink"]); ?>" title="<?php echo ($tptf["ctitle"]); ?>"><?php echo ($tptf["ctitle"]); ?></a></h2>
					</li>
					<ul>
					</ul>
				</ul>
			</div>
		</div>
		<ul class="main">
			<?php if(is_array($tptg)): $i = 0; $__LIST__ = $tptg;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li class="cl">
			<div class="yoho167-ml-3 cl">
				<div class="main_left">
					<?php if($vo[commend] == 1): ?><div class="mod-angle yoho167-none-768">
								热
							</div><?php endif; ?>
							<?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
					        <a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; ?>
					        <?php if($vo[pic] != ''): ?><img src="/Uploads<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
		                    <?php else: ?>
                            <img src="/Templet/index/public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
					        </a>
				</div>
			</div>
			<div class="yoho167-mr-7">
				<div class="main_right cl">
					<h2><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
					<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a></h2>
					<p>
						<span><i class="iconfont">&#xe6a3;</i><?php echo ($vo["author"]); ?></span><span class="pipe"></span><span><i class="iconfont">&#xe7e5;</i><?php echo ($vo["name"]); ?></span><span class="pipe"></span><span><i class="iconfont">&#xe6c0;</i><?php echo ($vo["view"]); ?></span><span class="pipe"></span><span class="yoho167-none-768"><i class="iconfont">&#xe64d;</i><?php echo (date("Y-m-d H:i:s",$vo["time"])); ?></span>
					</p>
					<p class="yoho167-none-768">
						<?php echo ($vo["description"]); ?>...
					</p>
				</div>
			</div>
			</li><?php endforeach; endif; else: echo "" ;endif; ?>
		</ul>
		<div class="pages"><?php echo ($page); ?></div>
	</div>
	<div class="yoho167-mr-3">
		<div class="yoho167-sidebar yoho167-about cl">
	<div class="about yoho167-c cl">
		<div class="avatar">
			<a href="javascript:;"><img src="/Templet/index/public/img/avatar.jpg" alt=""></a>

		</div>
		<div class="about-info">
			<p>网名：LYC123</p>
			<p>职业：web前端、php开发</p>
			<p>座右铭：付出，不亚于任何人的努力</p>
		</div>
		<div class="account-list">
			<a class="account-icon github" target="_blank" href="https://github.com/luyicong" title="https://github.com/luyicong"></a>
			<a class="account-icon qq" target="_blank" href="http://wpa.qq.com/msgrd?v=3&uin=2804387501&site=qq&menu=yes" title="980469887"></a>
			<a class="account-icon weixin" href="javascript:;">
				<div class="weixin-code">
					<img src="/Templet/index/public/img/weixin.jpg" alt="">
				</div>
			</a>
		</div>
	</div>
</div>

<div class="yoho167-sidebar yoho167-search cl">
	<div class="search yoho167-c cl">
		<form action="/search.html" method="get">
			<input placeholder="输入关键字" name="kw" value="<?php echo I('kw');?>" type="text" required>
			<button value="查询" class="submit-btn" type="submit">搜索</button>
		</form>
	</div>
</div>
<div class="yoho167-sidebar cl">
	<h3>热门推荐</h3>
	<ul class="yoho167-c cl">
		<?php if(is_array($tptb)): $i = 0; $__LIST__ = $tptb;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
		<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a>
		<p>
			<?php echo (date("Y-m-d H:i:s",$vo["time"])); ?>
		</p>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="yoho167-sidebar cl">
	<h3>精选内容</h3>
	<ul class="yoho167-d cl">
		<?php if(is_array($tptc)): $i = 0; $__LIST__ = $tptc;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li>
		<div>
		<?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
		<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; ?>
		<?php if($vo[pic] != ''): ?><img src="/Uploads<?php echo ($vo["pic"]); ?>" alt="<?php echo ($vo["title"]); ?>">
		<?php else: ?>
        <img src="/Templet/index/public/img/1.jpg" alt="暂无缩略图"><?php endif; ?>
		</a>
		</div>
		<p>
			<?php if(C('WEB_URL') == 1): ?><a title="<?php echo ($vo["title"]); ?>" href="/article/<?php echo ($vo["id"]); ?>.html"><?php else: ?>
			<a title="<?php echo ($vo["title"]); ?>" href="<?php echo U('Home/index/article',array('id'=>$vo['id']));?>"><?php endif; echo ($vo["title"]); ?></a>
		</p>
		</li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>
<div class="yoho167-sidebar cl">
	<h3>友情连接</h3>
	<ul class="yoho167-e cl">
		<?php if(is_array($tptd)): $i = 0; $__LIST__ = $tptd;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><li><a target="_blank" href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
	</ul>
</div>

	</div>
</div>
<div class="yoho167-footer footer yoho167-mat-30">
	<div class="yoho167-wp cl">
		<div class="yoho167-md-1">
			<div class="yoho167-mds">
				<p class="bq">Copyright© 2015-2017
					<!-- <span class="pipe">|</span> -->
          <a class="banquan" target="_blank" href="/">Powered by YOHO167</a>
					<span class="yoho167-none-768 yoho167-none-1024">
					<span class="pipe">|</span>
					<!-- <a href="http://www.miitbeian.gov.cn/" target="_blank"><?php echo ($tpte["beian"]); ?></a>
					<span class="pipe">|</span> -->
					<a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo ($tpte["qqs"]); ?>&site=qq&menu=yes" target="_blank" >QQ:<?php echo ($tpte["qqs"]); ?></a>
					</span>
				</p>
			</div>
		</div>
	</div>
</div>
<!--打赏弹窗 start-->
<div class="gratuity-alert-mask"></div>
<div class="gratuity-alert-box animated">
	<i class="close-icon close-btn"></i>
</div>
<!--打赏弹窗 end-->
<script src="/Templet/index/public/js/common.js"></script>

</head>
</html>