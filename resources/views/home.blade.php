@extends('master_page') 

 @section('content')

<div role="main" class="main">
                
            <div class="slider-container rev_slider_wrapper" style="height: 800px;">
                <div id="revolutionSlider" class="slider rev_slider manual">
                    <ul>
                    @foreach($slides as $k => $slide)
                    @if ($k % 2 == 0)
                        <li data-transition="fade">
                            <img src="{{asset('slides/'.$slide->slides)}}"  
                                alt=""
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <h1 class="tp-caption text-uppercase font-weight-bold text-color-light"
                                data-x="left" data-hoffset="['15', '15', '35', '35']"
                                data-y="center" data-voffset="-40"
                                data-start="800" 
                                data-fontsize="40"
                                style="letter-spacing: -2px;" 
                                data-transform_in="y:[-300%];opacity:0;s:500;">{{$slide->title}}</h1>

                            <div class="tp-caption text-uppercase font-weight-bold text-color-light"
                                data-x="left" data-hoffset="['15', '15', '35', '35']"
                                data-y="center" data-voffset="0"
                                data-start="1200"
                                data-fontsize="22"
                                data-transform_in="y:[-300%];opacity:0;s:500;">{{$slide->sup_title}}</div>

                            <a href="{{$slide->url_link}}" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold"
                                data-x="left" data-hoffset="['15', '15', '35', '35']"
                                data-y="center" data-voffset="70"
                                data-start="1500" 
                                data-fontsize="['12', '12', '12', '22']"
                                data-transform_in="y:[-300%];opacity:0;s:500;">{{$slide->link_name}}</a>
                        </li>

                        @else   
                        <li data-transition="fade">
                            <img src="{{asset('slides/'.$slide->slides)}}"  
                                alt=""
                                data-bgposition="center center" 
                                data-bgfit="cover" 
                                data-bgrepeat="no-repeat"
                                class="rev-slidebg">

                            <h1 class="tp-caption text-uppercase font-weight-bold text-color-light"
                                data-x="right" data-hoffset="['15', '15', '35', '35']"
                                data-y="center" data-voffset="-40"
                                data-start="800" 
                                data-fontsize="40"
                                style="letter-spacing: -2px;" 
                                data-transform_in="y:[-300%];opacity:0;s:500;">{{$slide->title}}</h1>

                            <div class="tp-caption text-uppercase font-weight-bold text-color-light"
                                data-x="right" data-hoffset="['15', '15', '35', '35']"
                                data-y="center" data-voffset="0"
                                data-start="1200"
                                data-fontsize="22"
                                data-transform_in="y:[-300%];opacity:0;s:500;">{{$slide->sup_title}}</div>

                            <a href="{{$slide->url_link}}" class="tp-caption btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold"
                                data-x="right" data-hoffset="['15', '15', '35', '35']"
                                data-y="center" data-voffset="70"
                                data-start="1500" 
                                data-fontsize="['12', '12', '12', '22']"
                                data-transform_in="y:[-300%];opacity:0;s:500;">{{$slide->link_name}}</a>
                        </li>
                        @endif
                     @endforeach
                    </ul>
                </div>
            </div>

            <div id="home-intro" class="home-intro custom-home-intro background-color-secondary m-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8">
                            <p class="text-color-light mb-xs mt-xs">
                                {{$about->question}}
                                <span class="text-color-primary">{{$about->answer}}</span>
                            </p>
                        </div>
                        <div class="col-md-4">
                            <a href="{{url('products')}}" class="btn btn-primary custom-btn-style-1 text-uppercase font-weight-semibold pull-right mt-sm">read more</a>
                        </div>
                    </div>
                </div>
            </div>
             @foreach($services as $k => $service)
                    @if ($k % 2 == 0)
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-none">
                        <section class="parallax section section-parallax match-height custom-parallax-bg-pos-left custom-sec-left m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('imgServices/'. $service->images)}}" style="min-height: 315px;">
                        </section>
                    </div>
                    <div class="col-md-6 p-none">
                        <section class="section section-no-border match-height m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-left">
                                    <h2 class="text-uppercase font-weight-bold">{{$service->titles}} </h2>
                                    <p class="text-md text-color-dark">{{$service->sub_titles}}</p>
                                    <p class="text-md text-color-dark" {!! str_limit ($service->content ,300) !!}</p>
                                    <a href="{{ route('serviceShow',['id'=>$service->custom_url]) }}" class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm">Read More</a>
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
                                    <h2 class="text-uppercase font-weight-bold">{{$service->titles}}</h2>
                                    <p class="text-md text-color-dark">{{$service->sub_titles}}</p>
                                    <p class="text-md text-color-dark" {!! str_limit ($service->content ,300) !!}</p>
                                    <a href="{{ route('serviceShow',['id'=>$service->custom_url]) }}" class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-sm">Read More</a>
                                </div>
                            </div>
                        </section>
                    </div>

                    <div class="col-md-6 p-none">
                        <section class="parallax section section-parallax match-height m-none" data-plugin-parallax data-plugin-options="{'speed': 1.5, 'horizontalPosition': '100%'}" data-image-src="{{asset('imgServices/'. $service->images)}}" style="min-height: 315px;">
                        </section>
                    </div>
                </div>
                @endif
                @endforeach
                
            </div>

            <section class="section section-no-border section-primary custom-section-spacement-1 m-none">
                <div class="container">
                    <div class="row">
                        <div class="counters custom-counters counters-text-light">
                            <div class="col-md-2 col-sm-4 col-md-offset-2 custom-sm-margin-bottom-1">
                                <div class="counter center">
                                    <span data-to="{{$reports->count1}}">0</span>
                                    <span class="custom-text-color-2">{{$reports->title1}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-md-offset-1 custom-sm-margin-bottom-1">
                                <div class="counter center">
                                    <span data-to="{{$reports->count2}}" data-append="+">0</span>
                                    <span class="custom-text-color-2">{{$reports->title2}}</span>
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-md-offset-1">
                                <div class="counter center">
                                    <span class="unit">+</span>
                                    <span data-to="{{$reports->count3}}">0</span>
                                    <span class="custom-text-color-2">{{$reports->title3}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section class="section section-no-border custom-section-spacement-1 background-color-light m-none">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-12">
                            <h2 class="text-uppercase text-color-dark font-weight-bold">{{$reports->product_title}}</h2>
                            <p class="text-md text-color-dark mb-xlg">{{$reports->sup_title}}</p>
                        </div>
                    </div>
                      
                                        
                    <div class="row">
                    @foreach($products as $product)
                        <div class="col-md-3 col-sm-6">
                            <a href="{{ route('productShow',['id'=>$product->custom_url]) }}" >
                                <span class="thumb-info custom-thumb-info-1 thumb-info-no-borders">
                                    <span class="thumb-info-wrapper p-none">
                                        <img style="height: 300px; width:500px;" src="{{asset('imgProducts/'.$product->image)}}" class="img-responsive" alt="">
                                    </span>
                                    <span class="thumb-info-caption background-color-light">
                                        <span class="thumb-info-caption-text">
                                            <span class="thumb-info-caption-title text-uppercase text-color-dark font-weight-bold">{{$product->title}}</span>
                                            <p>{{$product->sub_title}}</p>
                                            <span class="custom-thumb-info-caption-plus background-color-primary text-color-light">+</span>
                                        </span>
                                    </span>
                                </span>
                            </a>
                            
                        </div>                    
                        @endforeach
                    </div>
                    
                    <div class="row">
                        <div class="col-md-12 center">
                            <a href="{{url('products')}}" class="btn btn-borders btn-primary custom-btn-style-2 font-weight-semibold text-color-dark text-uppercase mt-xlg">View More</a>
                        </div>  
                    </div>
                </div>
            </section>

            <section class="section section-no-border custom-section-spacement-1 background-color-tertiary m-none">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-12">
                            <h2 class="text-uppercase text-color-dark font-weight-bold">{{$missions->title}}</h2>
                            <p class="text-md text-color-dark mb-xlg">{{$missions->sub_title}}</p>
                        </div>
                    </div>
                    <div class="row center">
                        <div class="col-md-4 col-sm-4">
                            <img style="height: 90px; width:80px;" src="{{('imgAboutUS/'.$missions->image1 )}}" class="img-responsive custom-center-img-responsive mb-md" alt />
                            <h4 class="text-uppercase font-weight-bold mb-lg">{{$missions->title1}}</h4>
                            <p class="custom-text-color-black">{!! $missions->content1 !!}</p>  
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img style="height: 90px; width:80px;" src="{{('imgAboutUS/'.$missions->image2 )}}" class="img-responsive custom-center-img-responsive mb-md" alt />
                            <h4 class="text-uppercase font-weight-bold mb-lg">{{$missions->title2}}</h4>
                            <p class="custom-text-color-black">{!! $missions->content2 !!}</p>  
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <img style="height: 90px; width:80px;" src="{{('imgAboutUS/'.$missions->image3 )}}" class="img-responsive custom-center-img-responsive mb-md" alt />
                            <h4 class="text-uppercase font-weight-bold mb-lg">{{$missions->title3}}</h4>
                            <p class="custom-text-color-black">{!! $missions->content3 !!}</p>    
                        </div>
                    </div>
                </div>
            </section>
             <!-- <section class="section section-no-border custom-section-spacement-1 background-color-light m-none">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-12">
                            <h2 class="text-uppercase font-weight-bold">{{$news->clints_title}}</h2>
                            <p class="text-md text-color-dark mb-xlg">{{$news->Csub_title}}</p>
                        </div>
                    </div>
                    <div class="row">
                    
                        <div class="owl-carousel custom-nav m-none" data-plugin-options="{'items': 1, 'loop': false, 'dots': false, 'nav': true, 'autoHeight': true}">
                            <div>
                            
                                <div class="col-md-10 col-md-offset-1">
                                
                                    <div class="testimonial testimonial-style-2 testimonial-with-quotes custom-testimonial-style">
                                    @foreach($clints as $clint)
                                        <blockquote>
                                            <p class="">{!! $clint->content !!}</p>
                                        </blockquote>
                                        <div class="testimonial-author mt-xlg">
                                            <img src="{{('imgClints/' .$clint->image )}}" class="img-responsive custom-img-rounded" alt />
                                            <p>
                                                <strong class="text-uppercase text-color-dark">{{$clint->title}}</strong>
                                            </p>
                                            <p class="text-color-dark">{{$clint->specialty}}</p>
                                        </div>
                                        @endforeach
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>

                    </div>
                </div>
            </section> -->
            

            <section class="section section-no-border custom-section-spacement-1 background-color-quaternary m-none">
                <div class="container">
                    <div class="row center">
                        <div class="col-md-12">
                            <h2 class="text-uppercase font-weight-bold text-color-light">{{$news ->title}}</h2>
                            <p class="text-md custom-text-color-3 mb-xlg">{{$news ->sub_title}}</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-10 col-md-offset-0 col-sm-offset-1 custom-sm-margin-bottom-1">
                            <article class="custom-post-blog">
                                <h4>
                                    <a class="text-decoration-none text-color-light text-uppercase font-weight-bold">{{$news ->title1}}</a>
                                </h4>
                                
                                <p>
                                    <a  class="text-decoration-none custom-text-color-1">{!! $news ->content1 !!}</a>
                                </p>
                                <div class="date center">
                                    <span class="day text-color-primary font-weight-bold">{{$news ->Ddata1}}</span>
                                    <span class="month-year text-uppercase text-color-primary">{{$news ->MYdata1}}</span>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-10 col-md-offset-0 col-sm-offset-1 custom-sm-margin-bottom-1">
                            <article class="custom-post-blog">
                                <h4>
                                    <a class="text-decoration-none text-color-light text-uppercase font-weight-bold">{{$news ->title2}}</a>
                                </h4>
                                <p>
                                    <a class="text-decoration-none custom-text-color-1">{!! $news ->content2 !!}</a>
                                </p>
                                <div class="date center">
                                    <span class="day text-color-primary font-weight-bold">{{$news ->Ddata2}}</span>
                                    <span class="month-year text-uppercase text-color-primary">{{$news ->MYdata2}}</span>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-4 col-sm-10 col-md-offset-0 col-sm-offset-1">
                            <article class="custom-post-blog">
                                <h4>
                                    <a class="text-decoration-none text-color-light text-uppercase font-weight-bold">{{$news ->title3}}</a>
                                </h4>
                                <p>
                                    <a class="text-decoration-none custom-text-color-1">{!! $news ->content3 !!}</a>
                                </p>
                                <div class="date center">
                                    <span class="day text-color-primary font-weight-bold">{{$news ->Ddata3}}</span>
                                    <span class="month-year text-uppercase text-color-primary">{{$news ->MYdata3}}</span>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-12 center">
                            <a href="{{url('news_blog')}}" class="btn btn-borders btn-primary custom-btn-style-2 text-color-light text-uppercase font-weight-semibold mt-xlg">View More</a>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 p-none">
                        <section class="section section-no-border match-height custom-section-spacement-1 background-color-primary m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-right">
                                    <h2 class="text-uppercase text-color-light font-weight-bold">We call you back</h2>
                                    <p class="text-md custom-text-color-2 mb-md">Request a Call</p>
                                  <form  class="custom-form-style" action="{{route('submitForm')}}" method="POST">
                                    {{csrf_field()}}
                                   @if(Session::has('message'))
                                     <p  class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
                                    @endif
                                        <div class="alert alert-success hidden mt-lg" id="contactFormSuccess">
                                            <strong>Success!</strong> Your message has been sent to us.
                                        </div>

                                        <div class="alert alert-danger hidden mt-lg" id="contactFormError">
                                            <strong>Error!</strong> There was an error sending your message.
                                            <span class="font-size-xs mt-sm display-block" id="contactFormErrorMessage"></span>
                                        </div>
                                        <div class="form-content">
                                            <div class="form-control-custom custom-sm-margin-bottom-2">
                                                <i class="icon-user icons"></i>
                                                <input type="text" class="form-control" name="name" placeholder="Your Name *" data-msg-required="This field is required." id="name" required="" />
                                            </div>
                                            <div class="form-control-custom custom-sm-margin-bottom-2">
                                                <i class="icon-screen-smartphone icons"></i>
                                                <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                <input type="text" class="form-control" name="phone" placeholder="Your Phone *" data-msg-required="This field is required." id="phone" required="" />
                                                @if ($errors->has('phone'))
                                               <span class="help-block">
                                               <strong>{{ $errors->first('phone') }}</strong>
                                                 </span>
                                              @endif
                                            </div>
                                            <div class="form-control-custom custom-sm-margin-bottom-2">
                                                <i class="icon-envelope icons"></i>
                                            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                             <input type="text" class="form-control"  name="email" placeholder="Your Email *" data-msg-required="This field is required." id="email" required="" />
                                             @if ($errors->has('email'))
                                               <span class="help-block">
                                               <strong>{{ $errors->first('email') }}</strong>
                                                 </span>
                                              @endif
                                            </div>
                                            <div class="form-control-custom custom-sm-margin-bottom-2">
                                                <i class="icon-bubbles icons"></i>
                                                <input type="text" class="form-control" name="discuss" placeholder="I would like to discuss *" data-msg-required="This field is required." id="discuss" required="" />
                                            </div>
                                            <input type="submit" class="btn custom-btn-style-1 custom-btn-padding-1 custom-btn-background-color-1 text-color-light text-uppercase font-weight-semibold outline-none mt-lg" value="Submit" />
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </section>
                    </div>
                    <div class="col-md-6 p-none">
                        <section class="section section-no-border match-height custom-section-spacement-1 background-color-secondary custom-background-image-1 m-none">
                            <div class="row m-none">
                                <div class="col-half-section col-half-section-left">
                                    <h2 class="text-uppercase text-color-light font-weight-bold">{{$contactData->title}}</h2>
                                    <p class="text-md custom-text-color-2 mb-xlg">{{$contactData->sub_title}}</p>
                                <p class="custom-text-color-2 custom-padding-right-1 mb-xlg">{!! $contactData->address1 !!}</p>
                                    <a href="tel:+18001234567" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box custom-opacity-effect-1 mb-md">
                                            <span class="feature-box-info">
                                                <label class="font-weight-semibold text-uppercase text-color-light pb-xs">Phone</label>
                                                <strong class="font-weight-normal custom-text-color-2">{{$contactData->phone1}}</strong>
                                            </span>
                                        </span>
                                    </a>
                                    <a href="mailto:you@domain.com" class="text-decoration-none">
                                        <span class="feature-box custom-feature-box custom-opacity-effect-1 mb-md">
                                            <span class="feature-box-info">
                                                <label class="font-weight-semibold text-uppercase text-color-light pb-xs">Email</label> 
                                                <strong class="font-weight-normal custom-text-color-2">{{$contactData->title_mail1}}</strong>
                                            </span>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </section>
                    </div>
                </div>
            </div>

            </div>
  @endsection