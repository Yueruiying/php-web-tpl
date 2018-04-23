<!-- <?php
    session_start();
    $msg = null;
    if ($_SESSION && isset($_SESSION['nick_name'])) {
        $msg = $_SESSION['company_name'] . '(' . $_SESSION['nick_name'] . ')';
        $msg .= '<a href="quit.php">注销</a>';
    } else {
        $msg = '<a href="signin.php">登录去</a> or <a href="signin.php">注册</a>';
    }
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>网络科技有限公司-首页</title>
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="css/base.css">
	<link rel="stylesheet" type="text/css" href="css/slick.css">
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
	<link rel="stylesheet" type="text/css" href="css/animate.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
</head>
<body>
	<!-- 头部 导航栏 -->
    <header>
		<div>
			<img src="images/index-img/logo.png">
			<div class="l-link">
				<ul class="link-warp clear">
					<li class="link lf"><a class="active" href="#">网站首页</a></li>
					<li class="link lf"><a href="#">关于我们</a></li>
					<li class="link lf"><a href="#">新闻资讯</a></li>
					<li class="link lf"><a href="#">产品展示</a></li>
					<li class="link lf"><a href="#">下载中心</a></li>
					<li class="link lf"><a href="#">客户案例</a></li>
					<li class="link lf btn"><a class="lg-btn" href="signin.php">注册</a></li>
					<li class="link lf btn"><a class="lg-btn" href="signin.php">登录</a></li>
				</ul>
			</div>
		</div>
	</header>

	<section class="banner">
		<div class="slider">
			<div class="text-layer">
				<p>7年专注，网站建设</p>
				<p>专注于设计体验，专业于解决方案</p>
			</div>
			<img class="banner-img" src="images/index-img/banner1.jpg">
		</div>
		<div class="slider">
			<div class="text-layer">
				<p>先入为主，布局未来</p>
				<p>响应式布局，智能识别多种终端设备</p>
			</div>
			<img class="banner-img" src="images/index-img/banner2.jpg">
		</div>
		<div class="slider">
			<div class="text-layer">
				<p>7年专注，网站建设</p>
				<p>专注于设计体验，专业于解决方案</p>
			</div>
			<img class="banner-img" src="images/index-img/banner1.jpg">
		</div>
		<div class="slider">
			<div class="text-layer">
				<p>先入为主，布局未来</p>
				<p>响应式布局，智能识别多种终端设备</p>
			</div>
			<img class="banner-img" src="images/index-img/banner2.jpg">
		</div>
	</section>

	<!-- 主要业务 -->
	<div class="p1">
		<div class="title">
			<h3 class="webside">专注网站建设七年</h3>
			<p class="cando">我们能做什么？</p>
		</div>

		<div class="doit">

			<div class="do-wrap">
				<div class="do-img"><i class="fa fa-desktop" aria-hidden="true"></i></div>
				<h5 class="do-title">高端网站定制</h5>
				<p class="do-content">企业高端网站定制设计彰显品牌形象</p>
			</div>

			<div class="do-wrap">
				<div class="do-img"><i class="fa fa-code" aria-hidden="true"></i></div>
				<h5 class="do-title">高端网站定制</h5>
				<p class="do-content">企业高端网站定制设计彰显品牌形象</p>
			</div>

			<div class="do-wrap">
				<div class="do-img"><i class="fa fa-group" aria-hidden="true"></i></div>
				<h5 class="do-title">高端网站定制</h5>
				<p class="do-content">企业高端网站定制设计彰显品牌形象</p>
			</div>

			<div class="do-wrap">
				<div class="do-img"><i class="fa fa-refresh" aria-hidden="true"></i></div>
				<h5 class="do-title">高端网站定制</h5>
				<p class="do-content">企业高端网站定制设计彰显品牌形象</p>
			</div>
		</div>		
	</div>
	<!-- 成功案例 -->
	<div class="case">
		<h3 class="case-title">成功案例</h3>
		<p class="case-content">国内最优秀的电商平台及相关系统服务商</p>
		<div class="case-links">
			<a class="case-link active" href="#">全部</a>
			<a class="case-link" href="#">营销型网站</a>
			<a class="case-link" href="#">响应式网站</a>
			<a class="case-link" href="#">电子商务网站</a>
			<a class="case-link" href="#">外贸型网站</a>
			<a class="case-link" href="#">企业型网站</a>
		</div>
		<div class="case-items">
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company2.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company2.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company2.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company2.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
			<div class="case-item">
				<div class="item-img">
					<img src="images/index-img/Company.jpg" alt="爱普生装饰">
				</div>
				<h4 class="item-name"><a href="#">爱普生装饰</a></h4>
			</div>
		</div>
	</div>
	<!--  新闻动态 -->
	<div class="news">
		<div class="new-head">
			<div class="new-left">
				<h3 class="new-title">新闻动态</h3>
				<p class="new-desc"></p>
			</div>
			<div class="news-links">
				<a class="active" href="#">全部</a>
				<a href="#">优化推广</a>
				<a href="#">公司动态</a>
				<a href="#">建站经验</a>
			</div>
		</div>
		<div class="news-content">
			<div class="news-list">
				<div class="item-left">
					<a class="news-link" href="#">
						<div class="news-item-img">
							<img src="images/index-img/news.jpg" alt="新闻动态">
						</div>
						<div class="news-text">
							<div class="date">
								<span class="news-day">02</span>
								<span class="news-year">2018-02</span>
							</div>
							<div class="item-content">
								<h3>SEO网站的基本术语</h3>
								<p>SEOSEO就是SearchEngineOptimization的缩写,中文就是搜索引擎优化。PR值全称为PageRank(网页级别）,是Google用于用来标识网页的等级</p>
							</div>
						</div>
					</a>
				</div>
				<div class="item-right">
					<!-- qq http://uc.zhuzi.me/#/template/view/202	-->
					<!-- aa   竹子建站	http://uc.zhuzi.me/#/template/view/197-->
					<ul class="items-list">
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
						<li>
							<a href="#">
								<h3>企业用网站进行网络宣传的优势</h3>
								<span>2018-02-02</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<a class="new-more" href="#">MORE  ></a>
		</div>
	</div>
	<!-- 公司简介 -->
	<div class="int-Company">
		<div class="int-warp">
			<h2>公司简介</h2>
			<div class="content">
				<img src="images/Company.png" alt="">
				<div class="right-int">
					<div class="int-content">
						<p>
							成立于2008年，坐落于广东省广州市，是中国优秀的互联网服务提供商。
							自成立以来，专注于高端网站建设、系统软件开发、营销策划推广服务器
							部署运维，为客户的互联网应用提供一站式服务。我们秉持著以最专业的
							态度...
						</p>
						<a class="int-more" href="#">MORE  ></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- 我们的客人 -->
	<div class="guest">
		<div class="head">
			<h1>我们的客人</h1>
			<p>与各行各业均保持着紧密联系</p>
		</div>
		<ul class="guests-warp">
			<li class="g-info">
				<img src="images/china.jpg" alt="联通">
				<h3>中国报道</h3>
				<p>为我们公司制定了一套相当不错的建站方案，很好的解决了我们公司的难题，是值得合作的公司。</p>
			</li>
			<li class="g-info">
				<img src="images/china.jpg" alt="联通">
				<h3>中国报道</h3>
				<p>为我们公司制定了一套相当不错的建站方案，很好的解决了我们公司的难题，是值得合作的公司。</p>
			</li>
			<li class="g-info">
				<img src="images/china.jpg" alt="联通">
				<h3>中国报道</h3>
				<p>为我们公司制定了一套相当不错的建站方案，很好的解决了我们公司的难题，是值得合作的公司。</p>
			</li>
			<li class="g-info">
				<img src="images/china.jpg" alt="联通">
				<h3>中国报道</h3>
				<p>为我们公司制定了一套相当不错的建站方案，很好的解决了我们公司的难题，是值得合作的公司。</p>
			</li>
			<li class="g-info">
				<img src="images/china.jpg" alt="联通">
				<h3>中国报道</h3>
				<p>为我们公司制定了一套相当不错的建站方案，很好的解决了我们公司的难题，是值得合作的公司。</p>
			</li>
		</ul>
	</div>
	<!-- 联系我们 -->
	<div class="contact-us">
		<div class="container">
			<h2>您有建站需求？即刻联系我们吧!</h2>
			<p>与创业为伴，点来那个创新</p>
			<a href="#">联系我们</a>
		</div>
	</div>
	<!-- 底部链接 -->
	<div class="footer">
		<div class="groups">
			<div class="group-warp">
				<h3>关于我们</h3>
				<ul>
					<li>公司简介</li>
					<li>在线留言</li>
					<li>在线反馈</li>
					<li>联系我们</li>
				</ul>
			</div>
			<div class="group-warp">
				<h3>新闻资讯</h3>
				<ul>
					<li>优化推广</li>
					<li>公司动态</li>
					<li>建站经验</li>
				</ul>
			</div>
			<div class="group-warp">
				<h3>产品展示</h3>
				<ul>
					<li>营销型网站</li>
					<li>响应式网站</li>
					<li>电子商务型网站</li>
					<li>外企型网站</li>
					<li>企业型网站</li>
				</ul>
			</div>
			<div class="group-warp">
				<h3>下载中心</h3>
				<ul>
					<li>软件下载</li>
					<li>文件下载</li>
				</ul>
			</div>
		</div>
		<div class="us-info">
			<p class="tel">100-000-0000</p>
			<p class="time">周一至周五:8:30~17:30</p>
			<p class="us-icon">
				<a href="#"><i class="fa fa-weixin"></i></a>
				<a href="#"><i class="fa fa-qq"></i></a>
				<a href="#"><i class="fa fa-weibo"></i></a>
			</p>
		</div>
	</div>
	<div class="foot-link">
		<h3>友情链接：/ <a href="#">百度云</a>/<a href="#">阿里云</a></h3>
		<p>我的网站 版权所有 2008-2014 湘ICP备8888888</p>
		<p>本页面内容为网站演示数据，前台页面内容都可以在后台修改。</p>
		<p>Powered by  <a href="#">MetInfo</a>  6.0.0  &copy;2008-2018<a href="http://www.metinfo.cn" target="_blank">MetInfo Inc.</a></p>
	</div>
	<script src="js/jquery.js"></script>
	<script type="text/javascript" src="js/slick.js"></script>
	<script type="text/javascript">

		/*  顶部轮播  */
		var slick = $('.banner').slick({
			dots: true,
			autoplay: true,
  			autoplaySpeed: 3000,
		})
		// 之前
		.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
			var current = slick.$slides.get(currentSlide);
			$(current).find('.text-layer').removeClass('animated slideInUp')
		})
		// 之后
		.on('afterChange', function(event, slick, currentSlide, nextSlide){
  			var current = slick.$slides.get(currentSlide);
			$(current).find('.text-layer').addClass('animated slideInUp')
		});

		$('.banner').slick('slickGoTo', 0)

		/* 客户列表 */
		$('.guests-warp').slick({
			
		  infinite: true,
		  slidesToShow: 4,
		  slidesToScroll: 4,
		  	autoplay: true,
  			autoplaySpeed: 2000,
		});
		
	</script>
</body>
</html>