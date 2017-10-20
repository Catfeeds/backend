<?php 
use yii\helpers\Url;
use yii\helpers\Html;

$base = Url::base();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width,user-scalable=no,initial-scale=1,maximum-scale=1, minimum-scale=1,target-densitydpi=device-width" />
	<!--<meta name="viewport" content="width=device-width, initial-scale=0.7, maximum-scale=1.0, user-scalable=no">-->
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="format-detection"content="telephone=no" />
	<link href="<?php echo $base; ?>/css/animate.min.css" rel="stylesheet">
	<link href="<?php echo $base; ?>/css/institution.css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo $base; ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>/js/institution.js"></script>
	<script type="text/javascript" src="<?php echo $base; ?>/js/laydate.dev.js"></script>
	<title><?= Html::encode($this->title);?></title>
</head>
<body class="bgF">
	<div class="container">
	   <?php if(empty(Yii::$app->session['user_login'])){ ?>
		<!--登陆前-->
		<header class="header">
			<div class="topBar">
				<div class="maxW">
					<a href="<?php echo $base; ?>/account/login" class="linkT1">登陆</a>
					<span class="kf"><i class="ico icokf"></i>机构客户专线：400-068-1176</span>
				</div>
			</div>
			<div class="navWarp">
				<div class="maxW">
					<h1 class="logo">汇成基金-机构理财·原来如此简单</h1>
				</div>
			</div>
		</header>
		<!--登陆前结束-->
		<?php }else{ 
		    $session = Yii::$app->session['user_login'];
		?>
		<!--登陆后-->
		<header class="header">
			<div class="topBar">
				<div class="maxW">
					<span class="welcome">欢迎您！<?php echo empty($session['orgName'])?'':$session['orgName']; ?></span>
					<span class="kf"><i class="ico icokf"></i>机构客户专线：400-068-1176</span>
					<span class="welcome"><i class="ico icokf"></i><a href="/account/loginout">退出登录</a></span>
				</div>
			</div>
			<div class="navWarp">
				<div class="maxW">
					<h1 class="logo">汇成基金-机构理财·原来如此简单</h1>
					<div class="nav">
						<ul>
							<li><a href="<?php echo $base; ?>/record/position" class="navLink">持仓查询</a></li>
							<li><a href="<?php echo $base; ?>/fund/index" class="navLink">产品市场</a></li>
							<li class="dropMenu">
								<span class="navLink ">
									交易
								</span>
								<span class="subMenu">
									<a href="<?php echo $base; ?>/trade/orderpage" class="subLink">交易下单</a>
									<a href="<?php echo $base; ?>/record/order" class="subLink">交易查询</a>
								</span>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</header>
		<!--登陆后结束-->
		<?php } ?>
		<?php echo $content; ?>
			</div>
	<footer class="footer">
		<div class="maxW">
			<div class="equal">
				<ul class=" fixed">
					<li>
						<span class="rBorder">
							<a href="login.html" class="linkB2">
								<span class="sBk mB15">基金销售资格</span>
								<span class="sBk"><img src="<?php echo $base; ?>/images/imgF.jpg"/></span>
							</a>
						</span>
					</li>
					<li>
						<span class="rBorder">
							<a href="login.html" class="linkB2">
								<span class="sBk mB15">监管机构</span>
								<span class="sBk"><img src="<?php echo $base; ?>/images/imgF-02.jpg"/></span>
							</a>
						</span>
					</li>
					<li>
						<span class="rBorder">
							<a href="login.html" class="linkB2">
								<span class="sBk mB15">监管银行</span>
								<span class="sBk"><img src="<?php echo $base; ?>/images/imgF-03.jpg"/></span>
							</a>
						</span>
					</li>
					<li>
						<span class="rBorder">
							<a href="login.html" class="linkB2">
								<span class="sBk mB15">自律组织</span>
								<span class="sBk"><img src="<?php echo $base; ?>/images/imgF-04.jpg"/></span>
							</a>
						</span>
					</li>
				</ul>
			</div>
			<!--equal end-->
		</div>
		<!--maxW end-->
		<div class="copyRight">
			<a href="login.html" class="crLink">联系我们</a>｜<a href="login.html" class="crLink">投资人权益须知</a>｜<a href="login.html" class="crLink">基金销售适用性规则</a>｜<a href="login.html" class="crLink">风险提示</a>｜<a href="login.html" class="crLink">免责声明</a>｜<a href="login.html" class="crLink">资质证明</a>
			<br />
			北京汇成基金销售有限公司 版权所有 All Rights Reserved. ICP 备案登记证编号:粤ICP备15062379号-1<br />
			地址：北京市海淀区中关村E世界A座1108室  邮编：510308
		</div>
	</footer>	
</body>
</html>