<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<title>MOB ESPORTS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- site favicon -->
	<link rel="icon" type="image/png" href="assets/images/">
	<!-- Place favicon.ico in the root directory -->

	<!-- All stylesheet and icons css  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/animate.css">
	<link rel="stylesheet" href="assets/css/icofont.min.css">
	<link rel="stylesheet" href="assets/css/swiper.min.css">
	<link rel="stylesheet" href="assets/css/lightcase.css">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
	<!-- preloader start here -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
	<!-- preloader ending here -->

	<!-- scrollToTop start here -->
    <a href="#" class="scrollToTop"><i class="icofont-rounded-up"></i></a>
    <!-- scrollToTop ending here -->

	<!-- ==========shape image Starts Here========== -->
	<div class="body-shape">
		<img src="assets/images/shape/body-shape.png" alt="shape">
	</div>
	<!-- ==========shape image end Here========== -->




	<!-- ==========Header Section Starts Here========== -->
	<header class="header-section">
		<div class="container">
			<div class="header-holder d-flex flex-wrap justify-content-between align-items-center">
				<div class="brand-logo d-none d-lg-inline-block">
					<div class="logo">
						<a href="index.html">
							<img src="assets/images/logo/logo.png" alt="logo">
						</a>
					</div>
				</div>
				<div class="header-menu-part">
					<div class="header-top">
						<div class="header-top-area">
							<ul class="left">
								<li>
									<i class="icofont-ui-call"></i> <span>+977 9761654803</span>
								</li>
								<li>
									<i class="icofont-location-pin"></i> KATHMANDU,NEPAL
								</li>
							</ul>
							<ul class="social-icons d-flex align-items-center">
								<li>
									<a href="#" class="fb"><i class="icofont-facebook-messenger"></i></a>
								</li>
								<li>
									<a href="#" class="twitter"><i class="icofont-twitter"></i></a>
								</li>
							</ul>
						</div>
					</div>
					<div class="header-bottom">
						<div class="header-wrapper justify-content-lg-end">
							<div class="mobile-logo d-lg-none">
								<a href=""><img src="assets\images\logo\LOGO1.png" alt="logo"></a>
							</div>
							<div class="menu-area">
								<ul class="menu">
									<li>
                                        <a href="#0" class="active">Home</a>
                                    </li>

									<li>
										<a href="#0">Features</a>
										
									</li>
									<li><a href="">achievement</a></li>
									<li>
										<a href="#0">Blog</a>
										{{-- <ul class="submenu">
											<li><a href="blog.html">Blog</a></li>
											<li><a href="blog-2.html">Blog 2</a></li>
											<li><a href="blog-single.html">Blog Single</a></li>
										</ul> --}}
									</li>
									<li><a href="">Contact</a></li>
								</ul>
                                <li>
								@if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                    @else
                        <li><a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a></li>

                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a></li>
                        @endif
                    @endauth
                    
                </div>
            @endif

								<!-- toggle icons -->
								<div class="header-bar d-lg-none">
									<span></span>
									<span></span>
									<span></span>
								</div>
								<div class="ellepsis-bar d-lg-none">
									<i class="icofont-info-square"></i>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	</header>
	<!-- ==========Header Section Ends Here========== -->



	<!-- ===========Banner Section start Here========== -->
	<section class="banner-section" style="background-image: url(assets\images\cta);">
		<div class="container">
			<div class="">
				<div class="banner-content text-center">
					<h4 class="fw-normal theme-color mb-4">FROM MOB ESPORTS</h4>
	
					<p>ESPORTS BROADCASTING</p>
					<a href="" class="default-button reverse-effect" data-rel="lightcase"><span>JOIN NOW <i class="icofont-play-alt-1"></i></span> </a>
				</div>
				
			</div>
		</div>
	</section>
	<!-- ===========Banner Section Ends Here========== -->


	

	<!-- ===========Sponsor Section Ends Here========== -->


	

	<!-- ================ footer Section start Here =============== -->
    <footer class="footer-section">
        <div class="footer-top">
            <div class="container">
                <div class="row g-3 justify-content-center g-lg-0">
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/icons/01.png" alt="Phone-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Phone Number : +977 9761654803</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/icons/02.png" alt="email-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Email : support@mobcr3atives.com</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 col-12">
                        <div class="footer-top-item lab-item">
                            <div class="lab-inner">
                                <div class="lab-thumb">
                                    <img src="assets/images/footer/icons/03.png" alt="location-icon">
                                </div>
                                <div class="lab-content">
                                    <span>Address : Kathmandu,Nepal</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-middle padding-top padding-bottom" style="background-image: url(assets/images/footer/bg.jpg);">
            <div class="container">
                <div class="row padding-lg-top">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                <div class="fm-item-title mb-4">
                                    <img src="assets/images/logo/LOGO1.png" alt="logo">
                                </div>
                                <div class="fm-item-content">
                                    <p class="mb-4">MOB CREATIVES : CREATING BROADCASTING AND PRODUCTION EASIER FOR ESPORTS SECTOR</p>
									<ul class="match-social-list d-flex flex-wrap align-items-center">

									</ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item mb-lg-0">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="footer-middle-item-wrapper">
                            <div class="footer-middle-item-3 mb-lg-0">
                                <div class="fm-item-title">
                                    <h4>WANT TO CONTACT US ?</h4>
                                </div>
                                <div class="fm-item-content">
                                    <p>MOB ESPORTS : SUPPORTED BY MOB CREATIVES</p>
                                    <form>
                                        <div class="form-group mb-4">
                                            <input type="text" class="form-control" placeholder="Your Name">
                                        </div>
                                        <div class="form-group mb-2">
                                            <input type="email" class="form-control" placeholder="Your Email">
                                        </div>
										<button type="submit" class="default-button"><span>SEND MESSAGE <i class="icofont-circled-right"></i></span></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="footer-bottom-content text-center">
                            <p>&copy;2023 <a href="">MOB CREATIVES</a> CREATED FOR KNOWLEDGE AND SALES PURPOSE </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ================ footer Section end Here =============== -->







	<!-- All Needed JS -->
	<script src="assets/js/vendor/jquery-3.6.0.min.js"></script>
	<script src="assets/js/vendor/modernizr-3.11.2.min.js"></script>
	<script src="assets/js/circularProgressBar.min.js"></script>
	<script src="assets/js/isotope.pkgd.min.js"></script>
	<script src="assets/js/swiper.min.js"></script>
	<script src="assets/js/lightcase.js"></script>
	<script src="assets/js/waypoints.min.js"></script>
	<script src="assets/js/wow.min.js"></script>
	<script src="assets/js/vendor/bootstrap.bundle.min.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/main.js"></script>


	<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
	<script>
		window.ga = function () {
			ga.q.push(arguments)
		};
		ga.q = [];
		ga.l = +new Date;
		ga('create', 'UA-XXXXX-Y', 'auto');
		ga('set', 'anonymizeIp', true);
		ga('set', 'transport', 'beacon');
		ga('send', 'pageview')
	</script>
	<script src="https://www.google-analytics.com/analytics.js" async></script>



</body>

</html>