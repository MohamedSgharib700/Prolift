@extends('master_page')

 @section('content')
<div role="main" class="main">
			<section class="section section-parallax parallax custom-parallax-medium-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{('imgAboutUS/' . $titlePages->images)}}">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-uppercase text-color-light font-weight-bold center m-none">{{$titlePages->titles}}</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 background-color-light m-none">
				<div class="container">
					<div class="row center">
					</div>
					<div class="row">
					@foreach($employes as $employe)
						<div class="col-md-3 col-sm-6">
							<a href="#team-content-{{$employe->id}}" class="popup-with-zoom-anim text-decoration-none">
								<span class="thumb-info custom-thumb-info-1 thumb-info-no-borders">
									<span class="thumb-info-wrapper p-none">
										<img style="height: 300px; width:500px;"  src="{{('imgEmployes/' . $employe->images)}}" class="img-responsive" alt="">
									</span>
									<span class="thumb-info-caption background-color-light">
										<span class="thumb-info-caption-text">
											<span class="thumb-info-caption-title text-uppercase text-color-dark font-weight-bold">{{$employe->titles}}</span>
											<p>{{$employe->specialty}}</p>
											<span class="custom-thumb-info-caption-plus background-color-primary text-color-light">+</span>
										</span>
									</span>
								</span>
							</a>
							<div id="team-content-{{$employe->id}}" class="dialog dialog-lg zoom-anim-dialog mfp-hide p-xlg">
								<div class="row">
									<div class="col-md-4 col-sm-4">
										<img style="height: 200px; width:300px; " src="{{('imgEmployes/' . $employe->images)}}" class="img-responsive mb-lg" alt="">
										<ul class="social-icons custom-social-icons center">
											<li class="social-icons-facebook">
												<a href="{{$employe->url_face}}" target="_blank" title="Facebook">
													<i class="fa fa-facebook"></i>
												</a>
											</li>
											<li class="social-icons-twitter">
												<a href="{{$employe->url_twitter}}" target="_blank" title="Twitter">
													<i class="fa fa-twitter"></i>
												</a>
											</li>
											<li class="social-icons-google">
												<a href="{{$employe->url_google}}" target="_blank" title="Google">
													<i class="fa fa-google-plus" aria-hidden="true"></i>
												</a>
											</li>
											<li class="social-icons-linkedin">
												<a href="{{$employe->url_instagra}}" target="_blank" title="Linkedin">
													<i class="fa fa-linkedin"></i>
												</a>
											</li>
										</ul>
									</div>
									<div class="col-md-8 col-sm-8">
										<h2 class="font-weight-semibold text-color-dark mb-xs">{{$employe->titles}}</h2>
										<p class="custom-font-style-1 font-weight-semibold">{{$employe->sub_titles}}</p>
										<p class="font-size-sm custom-line-height-1">{!! $employe->contents !!}</p>		
									</div>
								</div>
							</div>
						</div>
						@endforeach
						
					</div>
				</div>
			</section>

		<section class="section section-parallax parallax custom-parallax-big-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('imgPlants/'. $contactData->image)}}">
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