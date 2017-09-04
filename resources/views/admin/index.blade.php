<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Vim</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Website Template by freehtml5.co" />
	<meta name="keywords" content="free website templates, free html5, free template, free bootstrap, free website template, html5, css3, mobile first, responsive" />
	


  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Animate.css -->
	<link rel="stylesheet" href="{{ URL::asset('web/css/animate.css')}}">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="{{ URL::asset('web/css/icomoon.css')}}">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="{{ URL::asset('web/css/bootstrap.css')}}">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="{{ URL::asset('web/css/magnific-popup.css')}}">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="{{ URL::asset('web/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{ URL::asset('web/css/owl.theme.default.min.css')}}">

	<!-- Theme style  -->
	<link rel="stylesheet" href="{{ URL::asset('web/css/style.css')}}">

	<!-- Modernizr JS -->
	<script src="{{ URL::asset('web/js/modernizr-2.6.2.min.js')}}"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="../web/js/respond.min.js"></script>
	<![endif]-->

	</head>
	<body>
		
	<div class="fh5co-loader"></div>
	
	<div id="page">
	<nav class="fh5co-nav" role="navigation">
		<div class="top">
			<div class="container">
				<div class="row">
					<div class="col-xs-12 text-right">
						<p class="num">Call: +01 123 456 7890</p>
						<ul class="fh5co-social">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
							<li><a href="#"><i class="icon-github"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col-xs-1">
						<div id="fh5co-logo"><a href="index.html">vim<span>.</span></a></div>
					</div>
					<div class="col-xs-11 text-right menu-1">
						<ul>
							<li class="active"><a href="{{URL::asset('admin/index')}}">Home</a></li>
							<li class="has-dropdown">
								<a href="{{URL::asset('admin/index')}}">健身课程</a>
								<ul class="dropdown">
									<li><a href="{{URL::asset('admin/index')}}">Web Design</a></li>
									<li><a href="{{URL::asset('admin/index')}}">eCommerce</a></li>
									<li><a href="{{URL::asset('admin/index')}}">Branding</a></li>
									<li><a href="{{URL::asset('admin/index')}}">API</a></li>
								</ul>
							</li>
							<li><a href="{{URL::asset('live/index')}}">直播</a></li>
							<li><a href="{{URL::asset('admin/index')}}">商城</a></li>
							<li><a href="{{URL::asset('admin/index')}}">我</a></li>
							<li class="btn-cta"><a href="{{URL::asset('log/index')}}"><span>登录</span></a></li>
							<li class="btn-cta"><a href="{{URL::asset('login/index')}}"><span>注册</span></a></li>
						</ul>
					</div>
				</div>				
			</div>
		</div>
	</nav>

	<header id="fh5co-header" class="fh5co-cover" role="banner" style="background-image:url({{ URL::asset('web/images/bg_1.jpg')}});" data-stellar-background-ratio="0.5">
		<div class="overlay"></div>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center">
					<div class="display-t">
						<div class="display-tc animate-box" data-animate-effect="fadeIn">
							<h1>Vim.</h1>
							<p><a class="btn btn-primary btn-lg btn-learn " href="#">Course</a> <a class="btn btn-primary btn-lg popup-vimeo btn-video" href="{{URL::asset('live/index')}}"><i class="icon-play"></i>Live</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>

	<div id="fh5co-counter" class="fh5co-counters">
		<div class="container">
			<div class="row">
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="40356" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Students</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="30290" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Courses</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="2039" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Instructor</span>
				</div>
				<div class="col-md-3 text-center animate-box">
					<span class="fh5co-counter js-counter" data-from="0" data-to="997585" data-speed="5000" data-refresh-interval="50"></span>
					<span class="fh5co-counter-label">Earnings</span>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-explore" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Take A Course</h2>
					<p>量身定制&nbsp;1-4周训练安排</p>
				</div>
			</div>
		</div>		
		<div class="fh5co-explore fh5co-explore1">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-push-5 animate-box">
						<img class="img-responsive" src="{{ URL::asset('web/images/w_1.jpg')}}" alt="work">
					</div>
					<div class="col-md-4 col-md-pull-8 animate-box">
						<div class="mt">
							<h3>We Want You To Learn English</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<ul class="list-nav">
								<li><i class="icon-check2"></i>Far far away, behind the word</li>
								<li><i class="icon-check2"></i>There live the blind texts</li>
								<li><i class="icon-check2"></i>Separated they live in bookmarksgrove</li>
							</ul>
							<p><a class="btn btn-primary btn-lg popup-vimeo btn-video" href="https://vimeo.com/channels/staffpicks/93951774"><i class="icon-play"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="fh5co-explore">
			<div class="container">
				<div class="row">
					<div class="col-md-8 col-md-pull-1 animate-box">
						<img class="img-responsive" src="{{ URL::asset('web/images/w_2.jpg')}}" alt="work">
					</div>
					<div class="col-md-4 animate-box">
						<div class="mt">
							<div>
								<h4><i class="icon-user"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
							<div>
								<h4><i class="icon-video2"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. </p>
							</div>
							<div>
								<h4><i class="icon-shield"></i>Real Project For Real Solutions</h4>
								<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia. </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div id="fh5co-project">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>推荐课程</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
		</div>
		<div class="container-fluid proj-bottom">
			<div class="row">
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{ URL::asset('web/images/t-1.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>瑜伽</h3>
						<span>晨间唤醒</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{ URL::asset('web/images/t-2.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>新手入门</h3>
						<span>HIIT适应性训练</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{ URL::asset('web/images/t-3.jpeg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>按摩放松</h3>
						<span>办公室颈肩放松</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{ URL::asset('web/images/t-4.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>活力燃脂</h3>
						<span>HIIT燃脂初级</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{ URL::asset('web/images/t-5.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>热身拉伸</h3>
						<span>全身拉伸</span>
					</a>
				</div>
				<div class="col-md-4 col-sm-6 fh5co-project animate-box" data-animate-effect="fadeIn">
					<a href="#"><img src="{{ URL::asset('web/images/t-6.jpg')}}" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
						<h3>户外运动</h3>
						<span>户外综合能力初级</span>
					</a>
				</div>
			</div>
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-12 text-center animate-box">
					<p><a class="btn btn-primary btn-lg btn-learn" href="#">定制课程表</a></p>
				</div>
			</div>
		</div>
	</div>
    <div class="copyrights">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>

	<div id="fh5co-steps">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>开始训练</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>

			<div class="row bs-wizard animate-box" style="border-bottom:0;">
                
				<div class="col-xs-3 bs-wizard-step complete">
					<div class="text-center bs-wizard-stepnum"><h4>第一周</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Create A Free Course</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step active"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>第二周</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Upload Content</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
					<div class="text-center bs-wizard-stepnum"><h4>第三周</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Make Your Course Beautiful</p></div>
				</div>

				<div class="col-xs-3 bs-wizard-step disabled"><!-- active -->
					<div class="text-center bs-wizard-stepnum"><h4>第四周</h4></div>
					<div class="progress"><div class="progress-bar"></div></div>
					<a href="#" class="bs-wizard-dot"></a>
					<div class="bs-wizard-info text-center"><p>Start Making Money</p></div>
				</div>
			</div>

		</div>
	</div>

	<div id="fh5co-testimonial" class="fh5co-bg-section">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>明星教练</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-10 col-md-offset-1">
					<div class="row animate-box">
						<div class="owl-carousel owl-carousel-fullwidth">
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="{{ URL::asset('web/images/person_1.jpg')}}" alt="user">
									</figure>
									<span>Jean Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="{{ URL::asset('web/images/person_2.jpg')}}" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
							<div class="item">
								<div class="testimony-slide active text-center">
									<figure>
										<img src="{{ URL::asset('web/images/person_3.jpg')}}" alt="user">
									</figure>
									<span>John Doe, via <a href="#" class="twitter">Twitter</a></span>
									<blockquote>
										<p>&ldquo;Far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div id="fh5co-blog">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>vim Find</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('web/images/f-1.jpg')}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('web/images/f-2.jpg')}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Worksspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
				<div class="col-lg-4 col-md-4">
					<div class="fh5co-blog animate-box">
						<a href="#"><img class="img-responsive" src="{{ URL::asset('web/images/f-3.png')}}" alt=""></a>
						<div class="blog-text">
							<h3><a href=""#>45 Minimal Workspace Rooms for Web Savvys</a></h3>
							<span class="posted_on">Nov. 15th</span>
							<span class="comment"><a href="">21<i class="icon-speech-bubble"></i></a></span>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
							<a href="#" class="btn btn-primary">Read More</a>
						</div> 
					</div>
				</div>
			</div>
		</div>
	</div>


	<div id="fh5co-started" style="background-image:url(images/img_bg_2.jpg);">
		<div class="overlay"></div>
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>饮食</h2>
					<p>Dignissimos asperiores vitae velit veniam totam fuga molestias accusamus alias autem provident. Odit ab aliquam dolor eius.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center">
					<p><a href="#" class="btn btn-default btn-lg">vim. 饮食</a></p>
				</div>
			</div>
		</div>
	</div>

	<footer id="fh5co-footer" role="contentinfo">
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">
					<h4>About Learning</h4>
					<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit. Eos cumque dicta adipisci architecto culpa amet.</p>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learning</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Learn &amp; Grow</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Engage us</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1">
					<h4>Legal</h4>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.More Templates <a href="http://www.cssmoban.com/" target="_blank" title="模板之家">模板之家</a> - Collect from <a href="http://www.cssmoban.com/" title="网页模板" target="_blank">网页模板</a></small>
					</p>
					<p>
						<ul class="fh5co-social-icons">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>

		</div>
	</footer>
	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	
	<!-- jQuery -->
	<script src="{{ URL::asset('web/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{ URL::asset('web/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{ URL::asset('web/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{ URL::asset('web/js/jquery.waypoints.min.js')}}"></script>
	<!-- Stellar Parallax -->
	<script src="{{ URL::asset('web/js/jquery.stellar.min.js')}}"></script>
	<!-- Carousel -->
	<script src="{{ URL::asset('web/js/owl.carousel.min.js')}}"></script>
	<!-- countTo -->
	<script src="{{ URL::asset('web/js/jquery.countTo.js')}}"></script>
	<!-- Magnific Popup -->
	<script src="{{ URL::asset('web/js/jquery.magnific-popup.min.js')}}"></script>
	<script src="{{ URL::asset('web/js/magnific-popup-options.js')}}"></script>
	<!-- Main -->
	<script src="{{ URL::asset('web/js/main.js')}}"></script>

	</body>
</html>

