<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=UTF-8">
		<meta charset="utf-8">
		<title><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?>安全应急响应中心</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
		<link href="/dev/Public/Home/css/bootstrap.min.css" rel="stylesheet">
		<link href="/dev/Public/Home/index/carousel.css" rel="stylesheet">
		<!--[if lt IE 9]>
			<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<link href="/dev/Public/Home/css/styles.css" rel="stylesheet">
		<script src="/dev/Public/User/js/jquery-1.10.2.js"></script>
 <script>
    $(function(){
        $(".verify").click(function(){
            var src = "<?php echo U('reg/verify');?>";
            var random = Math.floor(Math.random()*(1000+1));
            $(this).attr("src",src+"&random="+random);

        });
    })
</script>
	</head>
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
          <a class="yahei navbar-brand" href="/dev"><strong><?php if(is_array($title)): foreach($title as $key=>$v): echo ($v["value"]); endforeach; endif; ?></strong>
          <span class="yahei navbar-brand-subtitle">安全应急响应中心</span>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
              <ul class="yahei nav navbar-nav">
             <li class="active"><a href="<?php echo U('index/index');?>">个人中心</a></li>
            </div>
        </div><!--/.navbar-collapse -->
      </div>
    </nav>

<div class="gallery">
   <div class="row">
        <div class="col-md-4 col-md-offset-4">
		<br/>
            <h3>找回密码</h3><hr/>
    
	<form action="<?php echo U('forget/find');?>" method="post">
	<div class="form-group">
		<label>用户名</label>
		<input class="form-control" type="text" name="username" placeholder="请输入用户名">
	</div>
    <div class="form-group">
		<label>邮箱</label>
		<input class="form-control" type="text" name="email" placeholder="请输入邮箱">
	</div>
	<div class="form-group">
                    <label for="exampleInputCode"> 验证码</label>
                    <div class="row" >
                        <div class="col-md-5 row col-md-offset-0">
                            <input type="text"  name="verify" class="form-control" id="exampleInputCode" placeholder="验证码">
                        </div>
                        <div class="col-md-4">
                            <a href="javascript:void(0)"><img class="verify" src="<?php echo U('forget/verify');?>" alt="点击刷新"/></a>
                        </div>
                    </div>
	<div class="form-group">
		<button class="btn btn-success" type="submit" >找回密码</button>
	</div>

    </form>
        </div>
    </div>
</div>

<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-md-offset-3 text-center">
        <ul class="list-inline">
          <li><i class="icon-facebook icon-2x"></i></li>
          <li><i class="icon-twitter icon-2x"></i></li>
          <li><i class="icon-google-plus icon-2x"></i></li>
          <li><i class="icon-pinterest icon-2x"></i></li>
        </ul>
        <hr>
        <p>Copyright © <?php echo date("Y")?></i> at <a href=""> Demo Company.</a>All Rights Reserved</p>
      </div>
    </div>
  </div>
</footer>

	<!-- script references -->
		<script src="/dev/Public/Home/js/jquery.min.js"></script>
		<script src="/dev/Public/Home/js/bootstrap.min.js"></script>
		<script src="/dev/Public/Home/js/scripts.js"></script>
	</body>
</html>