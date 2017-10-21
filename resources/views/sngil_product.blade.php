@extends('master_page')

 @section('content')
 
 <div role="main" class="main">

			<section class="section section-parallax parallax custom-parallax-medium-padding m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5}" data-image-src="{{asset('img/' . $titlePage->images)}}">
				<div class="container">
					<div class="row">
					   
						<div class="col-md-12">
                            <h1 class="text-uppercase text-color-light font-weight-bold center m-none"><font color="#fff">Product</font></h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border custom-section-spacement-1 background-color-light m-none ">
				<div class="container">
					<div class="row">
						
						<div class="col-md-6 col-sm-8 col-sm-offset-2 col-md-offset-0">
							<img  src="{{asset('imgProducts/' . $products->image)}}" alt class="img-responsive"  style="height: 300px; width:500px;" alt="25" />
						</div>
                                           <div  class="col-md-6" >
							<h1 class="text-uppercase text-color-dark font-font-weight:normal;">{{$products->title}}</h1>
							
							<p class="custom-text-color-1"><font color="#444444">{!! $products->content !!}</p>
						</div>
					</div>
				</div>
			</section>
                           
        
			</div>
 @endsection