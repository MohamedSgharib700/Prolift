@extends('master_page')

 @section('content')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{('imgAboutUS/' . $titlePage->image)}}">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-uppercase text-color-light font-weight-bold center m-none">{{$titlePage->title}}</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border background-color-light m-none">
				<div class="container">
					<div class="row">
					
						<div class="col-sm-10 col-md-8 col-sm-offset-2 col-md-offset-1">
						@foreach($posts as $post)
							<article class="custom-post-style-2">
								<div class="post-infos">
									<span class="post-info">
									<!--	<img src="img/demos/finance/icons/custom-icon-3.png" alt class="img-responsive mb-sm" />-->
										<span class="date-day text-color-dark font-weight-semibold text-lg">{{$post->days}}</span>
										<span class="date-month text-color-dark font-weight-semibold">{{$post->months}}</span>
									</span>
								   <!--	<span class="post-info">
										<img src="{{url('news_detils')}}" alt class="img-responsive mb-sm" />
										<span class="date-day text-color-dark font-weight-semibold text-lg">16</span>
										<span class="date-month text-color-dark font-weight-semibold">Comments</span>
									</span>
									<span class="post-info">
										<img src="img/demos/finance/icons/custom-icon-5.png" alt class="img-responsive mb-sm" />
										<span class="date-day text-color-dark font-weight-semibold text-lg">265</span>
										<span class="date-month text-color-dark font-weight-semibold">Likes</span>
									</span>-->
								</div>
								<a href="post/{{$post->custom_url}}/post" class="text-decoration-none">
									<img style="height:400px;width:600.5px;" src="{{('imgBlog/' . $post->images)}}" alt class="img-responsive mb-xlg" />
								</a>
								<h2 class="text-color-dark font-weight-bold text-uppercase mb-md">{{$post->titles}}</h2>
								<p class="custom-text-color-1">{!! str_limit($post->contents , 200) !!}</p>
                                 
								<div class="post-links">
									<a class="text-decoration-none text-uppercase text-color-dark font-weight-semibold custom-primary-hover pull-left" href="post/{{$post->custom_url}}/post">Read More <i class="fa fa-long-arrow-right text-color-primary ml-sm"></i></a>
									<ul class="social-icons custom-style-1 pull-right">
		   								<li class="text-color-dark font-weight-semibold">Share:</li>
		   								<li class="social-icons-facebook text-color-primary"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
		   								<li class="social-icons-twitter text-color-primary"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
		   								<li class="social-icons-linkedin text-color-primary"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
	    							</ul>
								</div>
							</article>
							@endforeach
						  <!-- 	<div class="row">
								<div class="col-md-12">
									<ul class="pagination custom-pagination-style-1">
										<li><a href="#" class="text-color-dark"><i class="fa fa-chevron-left"></i></a></li>
										<li class="active"><a href="#" class="text-color-dark">1</a></li>
										<li><a href="#" class="text-color-dark">2</a></li>
										<li><a href="#" class="text-color-dark">3</a></li>
										<li><a href="#" class="text-color-dark">4</a></li>
										<li><a href="#" class="text-color-dark"><i class="fa fa-chevron-right"></i></a></li>
									</ul>
								</div>
							</div> -->
						</div>
						<!--<div class="col-md-3">
							<aside class="sidebar custom-sidebar">
								<div class="custom-sidebar-search mb-xlg pb-xlg">
									<form id="searchForm" action="" method="get" novalidate="novalidate">
										<div class="input-group">
											<input type="text" class="form-control" name="q" id="q" placeholder="Search..." required="" aria-required="true">
											<span class="input-group-btn">
												<button class="btn btn-default" type="submit"><i class="icon-magnifier icons"></i></button>
											</span>
										</div>
									</form>
								</div>
								<h4 class="text-color-dark font-weight-semibold mb-xlg">Category</h4>
								<ul class="custom-list-style-1 mb-xlg pb-xlg">
									<li>
										<a class="custom-text-color-1 custom-primary-hover text-decoration-none" href="#">
											Integer sempermolestie <i class="fa fa-long-arrow-right text-color-dark pull-right"></i>
										</a>
									</li>
									<li>
										<a class="custom-text-color-1 custom-primary-hover text-decoration-none" href="#">
											Vestibulum eutellus <i class="fa fa-long-arrow-right text-color-dark pull-right"></i>
										</a>
									</li>
									<li>
										<a class="custom-text-color-1 custom-primary-hover text-decoration-none" href="#">
											Curabitur acconvallis <i class="fa fa-long-arrow-right text-color-dark pull-right"></i>
										</a>
									</li>
									<li>
										<a class="custom-text-color-1 custom-primary-hover text-decoration-none" href="#">
											Vestibulum consequat <i class="fa fa-long-arrow-right text-color-dark pull-right"></i>
										</a>
									</li>
									<li>
										<a class="custom-text-color-1 custom-primary-hover text-decoration-none" href="#">
											Nunc idorcisit amet jus <i class="fa fa-long-arrow-right text-color-dark pull-right"></i>
										</a>
									</li>
								</ul>
								<div class="custom-featured-posts mb-xlg pb-xlg">
									<h4 class="text-color-dark font-weight-semibold mb-xlg">Featured News</h4>
									<article class="custom-featured-post">
										<div class="col-xs-4 p-none">
											<a href="demo-finance-news-detail.html" class="text-decoration-none">
												<img src="img/demos/finance/blog/blog-thumb-1.jpg" alt class="img-responsive" />
											</a>
										</div>
										<div class="col-xs-8 p-none">
											<h6 class="mt-md">
												<a href="demo-finance-news-detail.html" class="text-color-dark font-weight-semibold custom-primary-hover text-decoration-none">
													Mauris sedtortor ullamcorper
												</a>
											</h6>
										</div>
									</article>
									<article class="custom-featured-post">
										<div class="col-xs-4 p-none">
											<a href="demo-finance-news-detail.html" class="text-decoration-none">
												<img src="img/demos/finance/blog/blog-thumb-2.jpg" alt class="img-responsive" />
											</a>
										</div>
										<div class="col-xs-8 p-none">
											<h6 class="mt-md">
												<a href="demo-finance-news-detail.html" class="text-color-dark font-weight-semibold custom-primary-hover text-decoration-none">
													Mauris sedtortor ullamcorper
												</a>
											</h6>
										</div>
									</article>
									<article class="custom-featured-post">
										<div class="col-xs-4 p-none">
											<a href="demo-finance-news-detail.html" class="text-decoration-none">
												<img src="img/demos/finance/blog/blog-thumb-3.jpg" alt class="img-responsive" />
											</a>
										</div>
										<div class="col-xs-8 p-none">
											<h6 class="mt-md">
												<a href="demo-finance-news-detail.html" class="text-color-dark font-weight-semibold custom-primary-hover text-decoration-none">
													Mauris sedtortor ullamcorper
												</a>
											</h6>
										</div>
									</article>
								</div>
								<h4 class="text-color-dark font-weight-semibold mb-xlg">Tag Widget</h4>
								<ul class="custom-list-style-2 mb-xlg pb-xlg">
									<li>
										<a class="btn btn-primary btn-borders custom-btn-style-3 text-color-dark font-weight-semibold text-decoration-none" href="#">
											Business
										</a>
									</li>
									<li>
										<a class="btn btn-primary btn-borders custom-btn-style-3 text-color-dark font-weight-semibold text-decoration-none" href="#">
											Meeting
										</a>
									</li>
									<li>
										<a class="btn btn-primary btn-borders custom-btn-style-3 text-color-dark font-weight-semibold text-decoration-none" href="#">
											Success
										</a>
									</li>
									<li>
										<a class="btn btn-primary btn-borders custom-btn-style-3 text-color-dark font-weight-semibold text-decoration-none" href="#">
											Happy clients
										</a>
									</li>
									<li>
										<a class="btn btn-primary btn-borders custom-btn-style-3 text-color-dark font-weight-semibold text-decoration-none" href="#">
											Top Stories
										</a>
									</li>
								</ul>
							</aside>
						</div>-->
					</div>
				</div>
			</section>

			<section class="section section-parallax parallax custom-parallax-big-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}"
		data-image-src="{{asset('imgPlants/'. $contactData->image)}}">
				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<h2 class="custom-text-size-1 text-color-light font-weight-semibold">{{$contactData->title}}</h2>
							<p class="custom-bottom-bar text-md custom-text-color-4 mb-xlg">{{$contactData->sub_title}}</p>
						</div>
					</div>
					<div class="row mt-sm">
						<div class="col-md-3 col-md-offset-3 custom-right-border">
							<a href="tel:+18001234567" class="custom-text-color-4 custom-hover-opacity text-decoration-none">
								<div class="custom-contact-item center">
									<i class="icon-call-in icons"></i>
									<span class="title text-uppercase font-weight-bold">Phone</span>
									<span class="content text-color-light">{{$contactData->phone1}}</span>
								</div>
							</a>
						</div>
						<div class="col-md-3">
							<a href="mailto:you@domain.com" class="custom-text-color-4 custom-hover-opacity text-decoration-none">
								<div class="custom-contact-item center">
									<i class="icon-envelope icons"></i>
									<span class="title text-uppercase font-weight-bold">Email</span>
									<span class="content text-color-light">{{$contactData->title_mail1}}</span>
								</div>
							</a>
						</div>
					</div>
				</div>
			</section>

			</div>
			
   
 @endsection