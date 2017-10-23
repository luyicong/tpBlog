<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<head>
<title><?php echo ($tpte["author"]); ?> - <?php echo ($tptl["title"]); ?></title>
<meta name="keywords" content="<?php echo ($tptl["keywords"]); ?>"/>
<meta name="description" content="<?php echo ($tptl["description"]); ?>"/>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="uyan_auth" content="6aa51c9f35" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="/favicon.ico" rel="shortcut icon">
<link rel="stylesheet" href="/Templet/index/public/css/global.css">
<link rel="stylesheet" href="/Templet/index/public/css/style.css">
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
							<?php if(is_array($tpta)): foreach($tpta as $k=>$vo): if($vo['show'] == 1): ?><li class="dropdown"><a <?php if($vo['blank'] == 1): ?>target="_blank"<?php endif; ?>href="<?php echo ($vo["link"]); ?>"><?php echo ($vo["name"]); ?></a>
							<?php if($vo['link'] != ''): else: ?>
							<ul class="subnav"><?php endif; ?>
								<?php if(is_array($tptas)): foreach($tptas as $k=>$vs): if($vo["id"] == $vs['tid']): if($vs['show'] == 1): ?><li><a <?php if($vs['blank'] == 1): ?>target="_blank"<?php endif; ?>href="<?php echo ($vs["link"]); ?>"><?php echo ($vs["name"]); ?></a></li><?php endif; endif; endforeach; endif; ?>
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

<link rel="stylesheet" type="text/css" href="/public/wangEditor/css/wangEditor.min.css">
<style type="text/css">
.wangEditor-container .wangEditor-txt {padding: 0;margin-top: 0;overflow-y: auto;}
.wangEditor-container {border: 0px solid #fff;}
.wangEditor-container .wangEditor-txt pre {border: 1px solid #f8f8f8;}
.wangEditor-container .wangEditor-txt img {max-width: 100%;height: auto;}
</style>
<!-- yoho167-ml-7 yoho167-mr-3 -->
<div class="yoho167-wp yoho167-pat-75 cl">
	<div class="yoho167-ml-7">
	<div class="yoho167-f">
		<div class="yoho167-none-768 cl">
		<div class="bdsharebuttonbox">
			<a href="#" class="bds_tsina1 bds_ico" data-cmd="tsina" title="分享到新浪微博"></a>
			<a href="#" class="bds_weixin1 bds_ico" data-cmd="weixin" title="分享到微信"></a>
			<a href="#" class="bds_qzone1 bds_ico" style="border-bottom: 0px" data-cmd="qzone" title="分享到QQ空间"></a>
			<a href="#pinglun" class="bds_pin bds_ico2" style="margin-top: 30px;border-bottom: 0px">评论</a>
		</div>
		<script>window._bd_share_config={"common":{"bdSnsKey":{},"bdText":"","bdMini":"2","bdMiniList":false,"bdPic":"","bdStyle":"0","bdSize":"24"},"share":{},"selectShare":{"bdContainerClass":null,"bdSelectMiniList":["qzone","tsina","tqq","renren","weixin"]}};with(document)0[(getElementsByTagName('head')[0]||body).appendChild(createElement('script')).src='http://bdimg.share.baidu.com/static/api/js/share.js?v=89860593.js?cdnversion='+~(-new Date()/36e5)];</script>
	</div>
	<div class="left3 cl">
		<div class="content top9 cl">
			<div class="toubu">
				<h2><?php echo ($tptl["title"]); ?></h2>
				<div class="toubu_span cl">
					<span style="color:#333;"><?php echo ($tptl["author"]); ?></span><span class="pipe">|</span>
					<span>阅读：<?php echo ($tptl["view"]); ?></span><span class="pipe"></span>
					<span>发表时间：<?php echo (date("Y-m-d H:i:s",$tptl["time"])); ?></span>
					<span class="y"><?php if(C('WEB_URL') == 1): ?><a href="/index/<?php echo ($tpti["id"]); ?>.html"><?php else: ?>
					<a href="<?php echo U('Home/index/category',array('id'=>$tpti['id']));?>"><?php endif; echo ($tpti["name"]); ?></a></span>
				</div>
			</div>
			<!--文章正文 start-->
			<div class="wangEditor-container cl">
				<div class="wangEditor-txt"><?php echo ($content); ?></div>
			</div>
			<!--文章正文 end-->
			<!--上一篇、下一篇 start-->
			<div class="prev-next-nav">
				<div class="prev">
					<span><<上一篇：</span>
					<a href="<?php echo U('Home/index/article',array('id'=>$prev_article['id']));?>"><?php echo ($prev_article["title"]); ?></a>
					<if condition="count($prev_article) eq 0"> <a href="javascript:;">没有了</a> <if>
				</div>

				<div class="next">
					<span>下一篇：</span>
					<a href="<?php echo U('Home/index/article',array('id'=>$next_article['id']));?>"><?php echo ($next_article["title"]); ?></a>
					>>
				</div>
			</div>
			<!--上一篇、下一篇 end-->
			<!--打赏 start-->
			<div class="gratuity">
				<p>如果觉得我的文章对您有用，请随意打赏一下。您的支持将是我继续创作的动力！</p>
				<a href="javascript:;">￥打赏支持￥</a>
			</div>
			<!--打赏 end-->
			<!-- <div class="neirong-shouquan">
				<span class="c2">*文章为作者独立观点，不代表Templet360的立场<br>
				</span>
				<span id="pinglun">本文由Templet360发表并编辑，转载此文章须经作者同意，并请附上出处及本页链接。如有侵权，请联系本站删除。
				</span>
			</div> -->
<div style="margin-top: 25px;"></div>
<!-- 评论代码 -->
<div id="SOHUCS" sid="<?php echo ($tptl["id"]); ?>"></div>
<script charset="utf-8" type="text/javascript" src="https://changyan.sohu.com/upload/changyan.js" ></script>
<script type="text/javascript">
window.changyan.api.config({
appid: '<?php echo C("WEB_CID");?>',
conf: '<?php echo C("WEB_CKEY");?>'
});
</script>
<!-- END -->
		</div>
	    </div>
	</div></div>
	<div class="yoho167-mr-3">
		<div class="yoho167-sidebar cl">
	<div class="search">
		<form action="/index.php/search.html" method="get">
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
<!-- NET -->
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
<script src="/Templet/index/public/js/common.js"></script>

</body>
</html>