<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Gaco - App Landing Page</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('land/img/icon/favicon.png') }}">
        <!-- Place favicon.ico in the root directory -->
		
		<!-- all css here -->
        <link rel="stylesheet" href="{{ asset('land/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/font-awesome.min.css') }}"> 
        <link rel="stylesheet" href="{{ asset('land/css/icofont.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/meanmenu.min.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/slick.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/owl.carousel.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/magnific-popup.css') }}">
		<link rel="stylesheet" href="{{ asset('land/css/animated-headlines.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/shortcode/shortcodes.css') }}">
        <link rel="stylesheet" href="{{ asset('land/style.css') }}">
        <link rel="stylesheet" href="{{ asset('land/css/responsive.css') }}">
        <script src="{{ asset('land/js/vendor/modernizr-2.8.3.min.js') }}"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header area start -->
		<header>
			<nav id="header-top" class="navbar">
				<div class="container">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#"><img src="{{ asset('land/img/icon/logo.png') }}" alt="logo" class="img-responsive"></a>
					</div>
					<div class="collapse navbar-collapse" id="navigation">
						<ul class="nav navbar-nav navbar-right">
							<li class="active"><a href="#slider-area">Home</a></li>
							<li><a href="#about">About</a></li>
							<li><a href="#features">Features</a></li>
							<li><a href="#team">Team</a></li>
							<li><a class="download-btn" href="#contact-area">Download</a></li>
						</ul>
					</div>
				</div>
			</nav>
		</header>
		<!-- header area end -->
		<!-- hero area start -->
		<div class="hero-area slider-1" id="slider-area">
			<div class="slider">
				<div class="container">
					<div class="row">
						<div class="col-md-offset-4 col-sm-offset-4 col-md-8">
							<div class="hero-text mr-ri-l">
								<h1>Gaco</h1>
								<p>Gaco(Garbage collection) adalah Aplikasi mobile yang membantu masyarakat solo untuk membuang sampah dengan benar dan menguntungkan.</p>
								<a href="#" class="hero-btn">Download</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- hero area end -->
		<!-- service area start -->
		<section class="service-area gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="single-service">
							<div class="service-icon">
								<img src="{{ asset('land/img/icon/service-icon-1.png') }}" alt="">
							</div>
							<div class="service-content">
								<h2>Keamanan</h2>
								<p>Data anda akan aman</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="single-service">
							<div class="service-icon">
								<img src="{{ asset('land/img/icon/service-icon-2.png') }}" alt="">
							</div>
							<div class="service-content">
								<h2>Penggunaan mudah</h2>
								<p>Tampilan diatur sedemikian rupa untuk memudahkan masyaakat dalam pengoprasian.</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="single-service">
							<div class="service-icon">
								<img src="{{ asset('land/img/icon/service-icon-3.png') }}" alt="">
							</div>
							<div class="service-content">
								<h2>Pelayanan</h2>
								<p>Pengepul akan menjempu sampah kerumah anda.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- service area start -->
		<!-- About area start -->
		<section id="about" class="about-area pt-130">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="about-content">
							<h2>About Gaco App</h2>
							<p align="justify">Gaco(Garbage collectin) adalah applikasi mobile penjualan sampah yang ada di kota solo, didalam aplikasi ini anda bis melakukan penjualan ataupun bisa menjadi pengepul. Untuk melakukan penjualan anda hanya perlu install aplikasi gaco sedangkan untuk menjadi pengepul anda bisa mendaftarkan diri di kantor kami.</p>
							<p align="justify">penggunaan applikasi ini sangatlah mudah, langsung saja anda bisa mendownloadnnya pada tombol dibwah ini atau bisa juga download di playstore.</p>
							<a class="hero-btn video-popup" href="https://www.youtube.com/watch?v=BzMLA8YIgG0">Download</a>
						</div>
					</div>
					<div class="col-md-6">
						<div class="about-img">
							<img src="{{ asset('land/img/other/about.png') }}" alt="" />
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- About area End -->
		<!-- Feature area start -->
		<section id="features" class="feature-area gray-bg pt-128 pb-70">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12">
						<div class="section-heading pb-55 text-center">
							<h2>Luaran yang diharapkan</h2>
							<p>Setelah adanya applikasi ini kami sebagai develop berharap masyarakat solo.</p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="awesome-feature text-center">
							<div class="awesome-feature-icon">
								<span><i class="icofont icofont-businesswoman"></i></span>
							</div>
							<div class="awesome-feature-details">
								<h5>Menjaga Kebersihan</h5>
								<p>Dengan adanya applikasi ini kami berharap warga solo dapat lebih memperhatikan kerbersihan</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="awesome-feature text-center">
							<div class="awesome-feature-icon">
								<span><i class="icofont icofont-tree-alt"></i></span>
							</div>
							<div class="awesome-feature-details">
								<h5>Lingkungan nyaman</h5>
								<p>Dengan lingkunagn yang bersih pastinya akan tercipta suasana lingkungan yang nyaman</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="awesome-feature text-center">
							<div class="awesome-feature-icon">
								<span><i class="icofont icofont-nurse-alt"></i></span>
							</div>
							<div class="awesome-feature-details">
								<h5>Menjaga kesehatan</h5>
								<p>Dengan adanya lingkungan yang bersih dan nyaman juga akan berpengaruh terhadap kesehatan</p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="awesome-feature text-center">
							<div class="awesome-feature-icon">
								<span><i class="fa fa-money"></i></span>
							</div>
							<div class="awesome-feature-details">
								<h5>Mendapat keuntungan</h5>
								<p>Dengan adanya applikasi ini sampah yang tidak terpakai bisa menjadi penghasilan tambahan</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="awesome-feature text-center">
							<div class="awesome-feature-icon">
								<span><i class="fa fa-money"></i></span>
							</div>
							<div class="awesome-feature-details">
								<h5>Simbiosis mutualisme</h5>
								<p>Sama-sama menguntungkan bagi diri sendiri masyarakat bahkan pemerintah</p>
							</div>
						</div>
					</div>
					<div class="col-md-4 hidden-sm">
						<div class="awesome-feature text-center">
							<div class="awesome-feature-icon">
								<span><i class="icofont icofont-heart"></i></span>
							</div>
							<div class="awesome-feature-details">
								<h5>Generasi membaggakan</h5>
								<p>Menumbuh sifat peduli akan lingkungan </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Feature feature area end -->
		
		<!-- app screenshot area start -->
		<section class="screenshot-area pt-130 pb-130">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="section-heading pb-55 text-center">
							<h2>App Screenshots</h2>
							<p> </p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 col-xs-12">
						<div class="screenshot-slider">
							<div class="single-screenshot">
								<div class="image">
									<img src="{{ asset('land/img/screenshot/1.png') }}" alt="">
								</div>
							</div>
							<div class="single-screenshot">
								<div class="image">
									<img src="{{ asset('land/img/screenshot/2.png') }}" alt="">
								</div>
							</div>
							<div class="single-screenshot">
								<div class="image">
									<img src="{{ asset('land/img/screenshot/3.png') }}" alt="">
								</div>
							</div>
							<div class="single-screenshot">
								<div class="image">
									<img src="{{ asset('land/img/screenshot/4.png') }}" alt="">
								</div>
							</div>
							<div class="single-screenshot">
								<div class="image">
									<img src="{{ asset('land/img/screenshot/5.png') }}" alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- app screenshot area end -->
		<!-- Team Area Start -->
		<section id="team" class="team-area ptb-130">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="section-heading pb-55 text-center">
							<h2>Lovely Team Member</h2>
							<p></p>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-6">
						<div class="team-single">
							<img src="{{ asset('land/img/team/1.png') }}" alt="" />
							<div class="team-overlay text-center">
								<h5>Nur Chudlori aziz</h5>
								<h6>WEB DEVELOPER </h6>
						    </div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-single">
							<img src="{{ asset('land/img/team/2.png') }}" alt="" />
							<div class="team-overlay text-center">
								<h5>Heru Prasetya</h5>
								<h6>MOBILE DEVELOPER</h6>
						    </div>
						</div>
					</div>
					<div class="col-md-4 col-sm-6">
						<div class="team-single">
							<img src="{{ asset('land/img/team/3.png') }}" alt="" />
							<div class="team-overlay text-center">
								<h5>Yunita ardiyanto</h5>
								<h6>UI/UX DESIGNER</h6>
						    </div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Team Area End -->
		<!-- Copyright Area Start -->
		<div class="copyright-area bg-5 ptb-70">
			<div class="container">
				<!-- Contact address left -->
				<div class="row">
					<div class="conct-border">
						<div class="col-md-4 col-sm-4">
							<div class="single-address">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-phone"></i>
									</div>
									<div class="media-body text-center">
										<p>+012 345 678 102 <br> +012 345 678 102</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-address">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-web"></i>
									</div>
									<div class="media-body text-center">
										<p>urname@email.com <br> kwetiau.xyz</p>
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-4">
							<div class="single-address">
								<div class="media">
									<div class="media-left">
										<i class="icofont icofont-social-google-map"></i>
									</div>
									<div class="media-body text-center">
										<p>ur address goes here, <br> street,Crossroad123.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- Contact address left -->
				<!-- Copyright right -->
				<div class="row">
					<div class="col-md-12">
						<div class="copyright-area text-center">
							<!-- Copyright social -->
							<div class="contact-social text-center pt-70 pb-35">
								<ul>
									<li>
										<a href="#"><i class="icofont icofont-social-facebook"></i></a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-social-twitter"></i></a>
									</li>
									<li>
										<a href="#"><i class="icofont icofont-social-google-plus"></i></a>
									</li>
								</ul>
							</div>
							<!-- Copyright social -->
							<div class="copyright-text">
								<p>Copyright &copy;  Gaco, 2018.</p>
							</div>
							<!-- Copyright text -->
						</div>
					</div>
				</div>
				<!-- Copyright right -->
			</div>
		</div>
		<!-- Copyright Area End -->
		
		<!-- all js here -->
        <script src="{{ asset('land/js/vendor/jquery-1.12.4.min.js') }}"></script>
        <script src="{{ asset('land/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('land/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('land/js/slick.min.js') }}"></script>
        <script src="{{ asset('land/js/jquery.ajaxchimp.min.js') }}"></script>
        <script src="{{ asset('land/js/plugins.js') }}"></script>
        <script src="{{ asset('land/js/main.js') }}"></script>
    </body>
</html>
