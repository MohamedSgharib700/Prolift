@extends('master_page')

 @section('content')
<div role="main" class="main">

			<section class="section section-no-border background-color-tertiary custom-parallax-medium-padding m-none">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<h1 class="text-uppercase font-weight-bold center m-none">{{$contactData->title_page}}</h1>
						</div>
					</div>
				</div>
			</section>

			<section class="section section-no-border background-color-light custom-section-spacement-1 m-none pb-none">
				<div class="container">
					<div class="row">
						<div class="col-md-3 col-sm-6 custom-min-height-1 custom-center-xs">
							<img src="img/demos/finance/icons/custom-icon-6.png" alt class="mb-md" />
							<h4 class="font-weight-semibold mb-md">Address</h4>
							<p class="custom-text-color-black">
								{{$contactData->title_address1}}<br>
								{{$contactData->title_address2}}<br>
								{{$contactData->title_address3}}
							</p>
						</div>
						<div class="col-md-3 col-sm-6 custom-min-height-1 custom-center-xs">
							<img src="img/demos/finance/icons/custom-icon-7.png" alt class="mb-md" />
							<h4 class="font-weight-semibold mb-md">Phone</h4>
							<ul class="custom-list-style-3">
								<li>
									<span class="title text-color-dark">{{$contactData->title_phone1}} <span class="custom-text-color-black pull-right">:</span></span>
									<span class="custom-text-color-black value">
									{{$contactData->phone1}}
									</span>
								</li>
								<li>
									<span class="title text-color-dark">{{$contactData->title_phone2}} <span class="custom-text-color-black pull-right">:</span></span>
									<span class="custom-text-color-black value">
										{{$contactData->phone2}}
									</span>
								</li>
								<li>
									<span class="title text-color-dark">{{$contactData->title_phone3}} <span class="custom-text-color-black pull-right">:</span></span>
									<span class="custom-text-color-black value">
										{{$contactData->phone3}}
									</span>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 custom-min-height-1 custom-center-xs">
							<img src="img/demos/finance/icons/custom-icon-8.png" alt class="mb-md" />
							<h4 class="font-weight-semibold mb-md">Email</h4>
							<ul class="custom-list">
								<li>
									<a href="{{$contactData->url_mail1}}" class="custom-text-color-black" title="Contact Us">{{$contactData->title_mail1}}</a>
								</li>
								<li>
									<a href="{{$contactData->url_mail2}}" class="custom-text-color-black" title="Sales">{{$contactData->title_mail2}}</a>
								</li>
								<li>
									<a href="{{$contactData->url_mail3}}" class="custom-text-color-black" title="Careers">{{$contactData->title_mail3}}</a>
								</li>
							</ul>
						</div>
						<div class="col-md-3 col-sm-6 custom-min-height-1 custom-center-xs">
							<img src="img/demos/finance/icons/custom-icon-9.png" alt class="mb-md" />
							<h4 class="font-weight-semibold mb-md">Social media</h4>
							<ul class="custom-list">
								<li>
									<i class="fa fa-facebook-square custom-text-color-1 mr-sm"></i>
									<a href="{{$contactData->url_face}}" class="custom-text-color-black" title="Facebook">{{$contactData->title_face}}</a> 
								</li>
								<li>
									<i class="fa fa-twitter-square custom-text-color-1 mr-sm"></i>
									<a href="{{$contactData->url_twitter}}" class="custom-text-color-black" title="Twitter">{{$contactData->title_twitter}}</a> 
								</li>
								<li>
									<i class="fa fa-linkedin-square custom-text-color-1 mr-sm"></i>
									<a href="{{$contactData->url_linkadin}}" class="custom-text-color-black" title="Linkedin">{{$contactData->title_linkadin}}</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</section>
                <form method="get" action="{{url('contact_us')}} ">
                <table align="center">
                <tr>

               @if(Session::has('message'))
                   <td> <p class="preloader-wrapper big active {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p></td>
                   @endif
                  </table>
                  </tr>
                 </form>
			<section class="section section-no-border section-primary custom-section-spacement-1 m-none">
				<div class="container">
					<div class="row center">
						<h2 class="text-uppercase font-weight-bold text-color-light">Get In Touch</h2>
						<p class="text-md text-color-light mb-xlg">send us your needs</p>
					</div>
					<div class="row">
						<div class="col-md-8 col-md-offset-2">
					<form  class="custom-form-style contact-page" action="{{url('contact_us')}}" method="POST">
					{{csrf_field()}}
					
								<div class="alert alert-success hidden mt-lg" id="contactFormSuccess">
									<strong>Success!</strong> Your message has been sent to us.
								</div>

								<div class="alert alert-danger hidden mt-lg" id="contactFormError">
									<strong>Error!</strong> There was an error sending your message.
									<span class="font-size-xs mt-sm display-block" id="contactFormErrorMessage"></span>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6 custom-sm-margin-bottom-2">
											<div class="form-control-custom">
												<i class="icon-user icons text-color-light"></i>
												<input type="text" value="" data-msg-required="Please enter your name." maxlength="100" class="form-control" name="name" id="name" placeholder="Name *" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-control-custom mb-none">
												<i class="icon-envelope icons text-color-light"></i>
												<input type="email" value="" data-msg-required="Please enter your email address." data-msg-email="Please enter a valid email address." maxlength="100" class="form-control" name="email" id="email" placeholder="Email *" required>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-6 custom-sm-margin-bottom-2">
											<div class="form-control-custom">
												<i class="icon-call-out icons text-color-light"></i>
												<input type="text" value="" data-msg-required="Please enter your phone number." maxlength="100" class="form-control" name="phone" id="phone" placeholder="Phone *" required>
											</div>
										</div>
										<div class="col-md-6">
											<div class="form-control-custom custom-select-style mb-none">
												<i class="icon-target icons text-color-light"></i>
												<select data-msg-required="Please select..." class="form-control" name="selectSample" id="selectSample" placeholder="Services *" required>
													<option value="">...</option>
													<option value="Option 1">Option 1</option>
													<option value="Option 2">Option 2</option>
													<option value="Option 3">Option 3</option>
													<option value="Option 4">Option 4</option>
												</select>
											</div>
										</div>
									</div>
								</div>
								<div class="row">
									<div class="form-group">
										<div class="col-md-12">
											<div class="form-control-custom">
												<i class="icon-bubble icons text-color-light"></i>
												<textarea maxlength="5000" data-msg-required="Please enter your message." rows="10" class="form-control" name="message" id="message" placeholder="Message *" required></textarea>
											</div>
										</div>
									</div>
								</div>
								<div class="row center">
									<div class="col-md-12">
										<input type="submit" value="Submit Now" class="btn btn-borders custom-btn-style-4 text-uppercase" data-loading-text="Loading...">
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
				
			</section>

			<!-- Google Maps - Go to the bottom of the page to change settings and map location. -->
			<div id=""></div>
               <iframe src="{{$contactData->map_link}}" width="1498" height="800" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>

 @endsection