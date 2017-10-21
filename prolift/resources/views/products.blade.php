@extends('master_page')

 @section('content')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{('img/' . $titlePage->images)}}">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
					<h1 class="text-uppercase text-color-light font-weight-bold center m-none">{{$titlePage->titles}}</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border section-tertiary custom-section-spacement-1 m-none">
				<div class="container">
					<div class="row center">
						<div class="col-md-12">
							<h2 class="text-uppercase text-color-dark font-weight-bold">{{$titlePage->title}}</h2>
							<p class="text-md text-color-dark mb-xlg">{{$titlePage->sub_title}}</p>
						</div>
					</div>
					<div class="row">
					@foreach($products as $product)
						<div class="col-md-4 col-sm-6">
						    <a href="{{ route('productShow',['id'=>$product->custom_url]) }}" >
							<article class="custom-post-style-1">
								<img style="height:194px;width:360px;" src="{{('imgProducts/' . $product->image)}}" alt class="img-responsive mb-xlg" />
								<h3 class="text-color-dark font-weight-bold mb-md">{{$product->title}}</h3>
								<p class="custom-text-color-1" ></p>{!! str_limit ( $product->content,200) !!}</p>
								<p class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm"> Read More  </p>
								
							</article>
							</a>
						</div>
						
				    @endforeach
					</div>
				</div>
			</section>

			<section class="section section-parallax parallax custom-parallax-big-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('imgPlants/'. $contactData->image)}}">
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