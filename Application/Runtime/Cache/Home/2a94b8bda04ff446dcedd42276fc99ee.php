<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-CN"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?>安全应急响应中心</title>

    <!-- Bootstrap core CSS -->
    <link href="/dev/Public/Home/index/bootstrap.min.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="/dev/Public/Home/index/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="/dev/Public/Home/index/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="yahei sr-only">Toggle navigation</span>
            <span class="yahei icon-bar"></span>
            <span class="yahei icon-bar"></span>
            <span class="yaheiicon-bar"></span>
          </button>
          <a class="yahei navbar-brand" href="<?php echo U('index/index');?>"><strong><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?></strong>
          <span class="yahei navbar-brand-subtitle">安全应急响应中心</span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
              <ul class="yahei nav navbar-nav">
                <li class="yahei active"><a href="<?php echo U('index/index');?>">首页</a></li>
                <li><a class="yahei" href="/dev/user.php">漏洞提交</a></li>
				<li><a class="yahei" href="<?php echo U('post/index');?>">漏洞公开</a></li>
                <li><a class="yahei" href="<?php echo U('page/index');?>">安全公告</a></li>
				<li><a class="yahei" href="<?php echo U('blog/index');?>">研究博客</a></li>
				<li><a class="yahei" href="<?php echo U('hall/index');?>">贡献榜</a></li>
				<li><a class="yahei" href="<?php echo U('gift/index');?>">礼品库</a></li>
            </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

      </div>
    </div>


    <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide yahei" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class=""></li>
        <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner" role="listbox">
        <div class="item">
          <img class="first-slide" src="/dev/Public/Home/images/banner.jpg" alt="首页">
          <div class="container">
            <div class="carousel-caption">
              <h1>健康成长</h1>
              <p>安全是其健康成长的核心要素,我们希望借此平台加强与安全业界同仁的合作与交流</p>
              <p><a class="btn btn-lg btn-primary" href="/dev/user.php" role="button">报告漏洞</a></p>
            </div>
          </div>
        </div>
        <div class="item active">
          <img class="second-slide" src="/dev/Public/Home/images/banner.jpg" alt="首页">
          <div class="container">
            <div class="carousel-caption">
              <h1><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?>安全中心</h1>
              <p>立即加入我们，共建建设诚信、共赢、繁荣的安全生态圈</p>
              <p><a class="btn btn-lg btn-primary" href="/dev/user.php" role="button">立即报告</a></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="/dev/Public/Home/images/banner.jpg" alt="首页">
          <div class="container">
            <div class="carousel-caption">
              <h1>合作共赢</h1>
              <p>欢迎广大用户向我们反馈轻响应相关产品及业务的安全漏洞和威胁情报</p>
              <p><a class="btn btn-lg btn-primary" href="/dev/user.php" role="button">立即报告</a></p>
            </div>
          </div>
        </div>
      </div>
    </div><!-- /.carousel -->


    <!-- Marketing messaging and featurettes
    ================================================== -->
    <!-- Wrap the rest of the page in another container to center all the content. -->
<div class="container marketing yahei">
	<div class="row center">
     <h2>贡献TOP3</h2>
	 </div>
	 <br/>
	 <br/>
      <!-- Three columns of text below the carousel -->
      <div class="row">
	   <?php if(is_array($model)): foreach($model as $key=>$v): ?><div class="col-lg-4">
          <img class="img-circle" src="<?php echo ($v["url"]); ?>" alt="用户一" width="140" height="140">
          <h2><?php echo ($v["name"]); ?></h2>
          <p><?php echo ($v["des"]); ?></p>
        </div><?php endforeach; endif; ?><!-- /.col-lg-4 -->
        <!--<div class="col-lg-4">
          <img class="img-circle" src="/dev/Public/Home/images/unknow.jpeg" alt="用户二" width="140" height="140">
          <h2>路人乙</h2>
          <p>帮助轻响应发现多个严重级别的权限漏洞和逻辑漏洞，帮助轻响应提升了整体业务安全水平</p>
        </div>--><!-- /.col-lg-4 -->
        <!--<div class="col-lg-4">
          <img class="img-circle" src="/dev/Public/Home/images/unknow.jpeg" alt="用户三" width="140" height="140">
          <h2>路人丁</h2>
          <p>本月发现一枚严重级别的支付问题漏洞，帮助我们快速定位问题，保障了数万用户的安全</p>
          
        </div>--><!-- /.col-lg-4 -->
      </div><!-- /.row -->
	  <div class="row">
      <p><a class="btn btn-default center" href="<?php echo U('hall/index');?>" role="button">查看更多 »</a></p>
      </div>
      <!-- START THE FEATURETTES -->

      <hr class="featurette-divider">

      <div class="row featurette">
        <div class="col-md-7">
          <h2>平台简介</h2>
		  <span class="text-muted">Weidian Security Resonpse Center</span>
          <p >微店安全应急响应中心（Weidian Security Response Center）是轻响应致力于维护互联网健康生态环境，保障轻响应产品和业务线的信息安全，促进安全专家的合作与交流，而建立的漏洞收集及应急响应平台。本平台收集轻响应产品线及业务上存在的安全漏洞，同时，我们也希望借此平台加强与业内各界的安全合作，共同打造简单可信赖的互联网健康生态。</p>
        </div>
        <div class="col-md-5">
          <img class="featurette-image img-responsive center-block" src="/dev/Public/Home/images/main-photo.jpg" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
        </div>
      </div>

      <hr class="featurette-divider">



      <!-- FOOTER -->
      <footer>
        <p class="pull-right"><a href="<?php echo U('index/index');?>">返回顶部</a></p>
        <p>© 2016 <?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?> · <a href="<?php echo U('index/index');?>">关于我们</a> · <a href="<?php echo U('index/index');?>">隐私协议</a></p>
      </footer>

    </div><!-- /.container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/dev/Public/Home/index/jquery.min.js"></script>
    <script src="/dev/Public/Home/index/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="/dev/Public/Home/index/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="/dev/Public/Home/index/ie10-viewport-bug-workaround.js"></script>
  

</body></html>