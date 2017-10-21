<!DOCTYPE html>
<html>
	<head>

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">	

	 <title>{{$headers->titleSite}}</title>	
 
        <meta name="metaTitle" content="{{$headers->metaTitles}}">
		<meta name="keywords" content="{{$headers->keywords}}" />
	    <meta name="description" content="{{$headers->metaDescrabtions}}">
		
		<!-- Favicon -->
		<link rel="shortcut icon" href="{{asset('logos/'.$headers->iconSite)}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{asset('logos/'.$headers->iconSite)}}">
    
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css">
           
		<!-- Vendor CSS -->
		<link rel="stylesheet" href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/animate/animate.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/simple-line-icons/css/simple-line-icons.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.carousel.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/owl.carousel/assets/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/magnific-popup/magnific-popup.min.css')}}">
           
		<!-- Theme CSS -->
		<link rel="stylesheet" href="{{asset('css/theme.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-elements.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-blog.css')}}">
		<link rel="stylesheet" href="{{asset('css/theme-shop.css')}}">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/settings.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/layers.css')}}">
		<link rel="stylesheet" href="{{asset('vendor/rs-plugin/css/navigation.css')}}">

		<!-- Skin CSS -->
		<link rel="stylesheet" href="{{asset('css/skins/skin-finance.css')}}"> 

		<!-- Demo CSS -->
		<link rel="stylesheet" href="{{asset('css/demos/demo-finance.css')}}">

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="{{asset('css/custom.css')}}">

		<!-- Head Libs -->
		<script src="{{asset('vendor/modernizr/modernizr.min.js')}}"></script>

	</head>
	<body data-spy="scroll" data-target="#navSecondary" data-offset="170">

		<div class="body">
			<header id="header" class="header-narrow" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 0, 'stickySetTop': '0', 'stickyChangeLogo': false}">
				<div class="header-body">
					<div class="header-container container">
						<div class="header-row">
							<div class="header-column">
								<div class="header-logo">
									<a href="{{url('/')}}">
										<img alt="Porto Finance" width="250" height="80" src="{{asset('logos/'.$headers->logos)}}">
									</a>
								</div>
							</div>
							<div class="header-column">
								<div class="header-row">
									<div class="header-nav">
										<button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main">
											<i class="fa fa-mobile"></i>
										</button>
										<a href="about_us" class="text-color-dark text-decoration-none hidden-xs" target="_blank">
											<span class="custom-toll-free pull-right font-weight-bold mt-xs">
												<i class="fa fa-mobile"></i>
												<span class="toll-free-title text-uppercase font-weight-normal">{{$headers->contactTitle}}</span>
												<span class="toll-free-number font-weight-bold">{{$headers->phone}}</span>
											</span>
										</a>
										<div class="header-nav-main header-nav-main-effect-1 header-nav-main-sub-effect-1 custom-header-nav-main-dark-style collapse">
											<nav>
												<ul class="nav nav-pills" id="mainNav">
													<li class="active">
														<a href="{{url('/')}}">
															Home
														</a>
													</li>
                                                                                                       
												
                                                                                                        
													<li class="">
														<a href="{{url('/wittur_plants')}}">
															Prolift Plants
														</a>
													</li>
													@php
													      $services = \App\services::all();  
                                                            $products = \App\Products::all();
													@endphp
													
                                                    <li class="dropdown">
														<a class="dropdown-toggle" href="{{url('products')}}">
															Products
														</a>
														<ul class="dropdown-menu">
                                                      @foreach($products as $product)
															<li><a href="{{ route('productShow',['id'=>$product->custom_url]) }}">{{$product->title}}</a></li>
														 @endforeach
														</ul>
													</li>
													<li class="dropdown">
														<a class="dropdown-toggle" href="{{url('/services')}}">
															Services
														</a>
                                                        <ul class="dropdown-menu">
                                                      @foreach($services as $service)
															<li><a href="{{ route('serviceShow',['id'=>$service->custom_url]) }}">{{$service->titles}}</a></li>
														 @endforeach
														</ul>
													</li>
													<li class="">
														<a href="{{url('/news_blog')}}">
															Prolift Academy
														</a>
													</li>
													<li class="dropdown">
														<a  href="{{url('/about_us')}}">
															About Us
														</a>
                                                     
													</li>

													<li class="dropdown">
														<a   href="{{url('/contact_Us')}}">
															Contacts us
														</a>
													</li>
                                                    </li>
													</li>
												</ul>
											</nav>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>

		@yield('content')

		<footer id="footer" class="custom-footer background-color-light m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-2">
							<a href="#" class="text-decoration-none">

								<img src="{{asset('logos/' . $footers->logo)}}" width="100" height="45" class="img-responsive" alt />
							</a>
						</div>
						<div class="col-md-2 col-md-offset-1">
							<h5 class="text-color-dark font-weight-bold mb-xs">Home Pages</h5>
							<ul>
								<li>
									   <a class="custom-text-color-1" href="{{url('/')}}" title="Contact Us">
									    <font color="black" >
										Home 
										</font>
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="{{url('products')}}" title="products">
									    <font color="black" >
										Products
										</font>
									</a>
								</li>
								
								<li>
									<a class="custom-text-color-1" href="{{url('services')}}" title="services">
									    <font color="black" >
										Services
										</font>
									</a>
								</li>
							</ul>
						</div>
						
						<div class="col-md-2 col-md-offset-1">
							<h5 class="text-color-dark font-weight-bold mb-xs">Other Pages</h5>
							<ul>
								<li>
									   <a class="custom-text-color-1" href="{{url('wittur_plants')}}" title="Contact Us">
									    <font color="black" >
										Prolift PLANTS 
										</font>
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="{{url('news_blog')}}" title="products">
									    <font color="black" >
										Prolift ACADEMY
										</font>
									</a>
								</li>
								
								
							</ul>
						</div>
						
						<div class="col-md-2 col-md-offset-1">
							<h5 class="text-color-dark font-weight-bold mb-xs">Info Pages</h5>
							<ul>
									<li>
									   <a class="custom-text-color-1" href="{{url('about_us')}}" title="Contact Us">
									    <font color="black" >
										About US 
										</font>
									</a>
								</li>
								<li>
									<a class="custom-text-color-1" href="{{url('contact_us')}}" title="Contact Us">
									    <font color="black" >
										Contact US
										</font>
									</a>
								</li>

                            
							</ul>
						</div>
					
						<div class="col-md-2">
							<ul class="social-icons custom-social-icons">
								<li class="social-icons-facebook">
									<a href="{{$footers->url_title1}}" target="_blank" title="Facebook">
										<i class="fa fa-facebook"></i>
									</a>
								</li>
								<li class="social-icons-twitter">
									<a href="{{$footers->url_title2}}" target="_blank" title="Twitter">
										<i class="fa fa-twitter"></i>
									</a>
								</li>
								<li class="social-icons-instagram">
									<font color="black" ><a href="{{$footers->url_title3}}" target="_blank" title="Instagram">
										<i class="fa fa-instagram"></i>
									</a>
									</font>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="footer-copyright background-color-light m-none pt-md pb-md">
					<div class="container">
						<div class="row">
							<div class="col-md-12 center pt-md">
								<p ><font color="black" >{{$footers->copy_right}}</font></p>
							</div>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.appear/jquery.appear.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easing/jquery.easing.min.js')}}"></script>
		<script src="{{asset('vendor/jquery-cookie/jquery-cookie.min.js')}}"></script>
		<script src="{{asset('vendor/bootstrap/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('vendor/common/common.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.validation/jquery.validation.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.easy-pie-chart/jquery.easy-pie-chart.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.gmap/jquery.gmap.min.js')}}"></script>
		<script src="{{asset('vendor/jquery.lazyload/jquery.lazyload.min.js')}}"></script>
		<script src="{{asset('vendor/isotope/jquery.isotope.min.js')}}"></script>
		<script src="{{asset('vendor/owl.carousel/owl.carousel.min.js')}}"></script>
		<script src="{{asset('vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>
		<script src="{{asset('vendor/vide/vide.min.js')}}"></script>
		
		<!-- Theme Base, Components and Settings -->
		<script src="{{asset('js/theme.js')}}"></script>
		
		<!-- Current Page Vendor and Views -->
		<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.tools.min.js')}}"></script>
		<script src="{{asset('vendor/rs-plugin/js/jquery.themepunch.revolution.min.js')}}"></script>

		<!-- Demo -->
		<script src="{{asset('js/demos/demo-finance.js')}}"></script>
		
		<!-- Theme Custom -->
		<script src="{{asset('js/custom.js')}}"></script>
		
		<!-- Theme Initialization Files -->
		<script src="{{asset('js/theme.init.js')}}"></script>


		

		<!-- Google Analytics: Change UA-XXXXX-X to be your site's ID. Go to http://www.google.com/analytics/ for more information.
		<script>
			(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		
			ga('create', 'UA-12345678-1', 'auto');
			ga('send', 'pageview');
		</script>
		 -->


	</body>
</html>
