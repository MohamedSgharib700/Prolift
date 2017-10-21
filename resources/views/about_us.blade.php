@extends('master_page')

 @section('content')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{('imgAboutUS/' . $titlePage->images)}}">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-uppercase text-color-light font-weight-bold center m-none">{{$titlePage->titles}}</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 background-color-light m-none ">
				<div class="container">
					<div class="row">
						@foreach($abouts as  $k => $about)
                            @if ($k % 2 == 0)
						<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0">
							<img src="{{('imgAboutUS/'.$about->images )}}" alt class="img-responsive"  style="height:520px;width:446.5px;" alt="25" />
						</div>
                                           <div  class="col-md-6" >
							<h1 class="text-uppercase text-color-dark font-font-weight:normal;">{{$about->titles}}</h1>
							<p class="text-md text-color-dark mb-xlg">{!! $about->content !!} </p>
						</div>
					</div>
				</div>
			</section>
			@else
			<section class="section section-no-border custom-section-spacement-1 background-color-light m-none ">
				<div class="container">
					<div class="row">
                                            <div class="col-md-6">
							<h1 class="text-uppercase text-color-dark font-weight-bold">{{$about->titles}}</h1>
							<p class="text-md text-color-dark mb-xlg">{!! $about->content !!} </p>
						</div>
					<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0">
							<img src="{{('imgAboutUS/'.$about->images )}}" alt class="img-responsive"  style="height:520px;width:446.5px;" alt="25"/>
						</div>
                    </div>
				</div>
			</section>
			  @endif
              @endforeach            
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