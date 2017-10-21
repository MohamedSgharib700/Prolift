@extends('master_page')

 @section('content')
<div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{('imgPlants/' . $titlePage->image)}}">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-uppercase text-color-light font-weight-bold center m-none">{{$titlePage->title}}</h1>
						</div>
					</div>
				</div>
			</section>
			<br />
			 @foreach($plants as $k => $plant)
                    @if ($k % 2 == 0)
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-none">
                        <section class="parallax section section-parallax match-height custom-parallax-bg-pos-left custom-sec-left m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('imgPlants/' . $plant->image)}}" style="min-height: 315px;">
                        </section>
                    </div>
                    <div class="col-md-6 p-none">
                        <section class="section section-no-border match-height m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-left">
                                    <h2 class="text-uppercase font-weight-bold">{{$plant->title}} </h2>
                                    <p class="text-md text-color-dark">{{$plant->sub_title}}</p>
                                    <p class="text-md text-color-dark" {!! $plant->content !!}</p>
                                    
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
                @else


                <div class="row custom-sm-flex-order">
                    <div class="col-md-6 p-none">
                        <section class="section section-no-border match-height m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-right custom-text-align-right">
                                    <h2 class="text-uppercase font-weight-bold">{{$plant->title}}</h2>
                                    <p class="text-md text-color-dark">{{$plant->sub_title}}</p>
                                    <p style="color:dark" class="text-md text-color-dark" {!! $plant->content !!}</p>
                                    
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-6 p-none">
                        <section class="parallax section section-parallax match-height m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('imgPlants/' . $plant->image)}}" style="min-height: 315px;">
                        </section>
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>
            
            

			
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