@extends('layouts.master')
@section('content')
<section id="banner_section">
  <div class="overlay"></div>
  <div class="mobile-app-button">
	<ul class="mobile-app-button-1">
								  <li><a target="new" href="https://play.google.com/store/apps/details?id=com.avrsh.cybrainschool&hl=en"><img class="" src="{!! asset('public/images/icons/Googleplay.png') !!}"/></a></li>
								  <li><a target="new" href="https://apps.apple.com/in/app/cyber-school-manager/id1380752251"><img class="" src="{!! asset('public/images/icons/ios.png') !!}"/></a></li>
								
								</ul>
  </div>
	<h2>School Management Software</h2>
	<p>Automate everything, Generate insightful reports, Make better & faster decisions</p>
			<div class="banner_img">
				<div class="po-rel">
					<div class="sliders-image">
								<ul class="rslides">
								  <li><img class="img-responsive" src="{!! asset('public/images/slider-11.jpg') !!}"/></li>
								  <li><img class="img-responsive" src="{!! asset('public/images/slider-12.jpg') !!}"/></li>
								  <li><img class="img-responsive" src="{!! asset('public/images/slider-13.jpg') !!}"/></li>
								</ul>
								</div>
							</div>

			</div>

		</section>
		<section id="about-csm">
			<div class="container">
				<div class="row">
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<div class="about_us">
							<h1>ABOUT Cyber School Manager</h1>
							<p>Cyber School Manager - CSM is a Complete School Management Solution that enables and streamlines the processes starting from an Enquiry till Alumni. CSM offers a completely  customizable Cloud and Mobile App based solution for managing all Academics & Administrative processes like Student Enquiry, Student Admission, Examination, Fee Collection, Attendance, Employee Payroll, Accounting, Library, Transportation & Hostel.
						     <a href="{{ url('/whycsm') }}">Read more…</a></P>
						</div>
						<div class="demo_btns">
							<ul style="text-align: left;">
								<li><a href="{{ url('/contact') }}">Call Us for Support</a></li>
								<!-- <li><a href="#">Schedule Demo </a></li> -->
								<li><a href="#popup3" class="open-popup trial-btn"> Request For DEMO </a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tab_img">
							<img class="img-responsive" src="{!! asset('public/images/tab.jpg') !!}"/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="csm_benifits">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						 <div class="owl-carousel owl-theme">
							<div class="item">
							  <img src="{!! asset('public/images/lock.png') !!}"/>
							  <h4>Secure</h4>
							</div>
							<div class="item">
							  <img src="{!! asset('public/images/user-friendly.png') !!}"/>
							  <h4>User-friendly</h4>
							</div>
							<div class="item">
							<img src="{!! asset('public/images/time.png') !!}"/>
							  <h4>Real - Time</h4>
							</div>
							<div class="item">
							<img src="{!! asset('public/images/eco-friendly.png') !!}"/>
							  <h4>Easy to Maintain</h4>
							</div>
							
							
						  </div>
          
					</div>
				</div>
			</div>
		</section>
		<section id="key_features" class="">
			<div class="container">
				<div class="row">
					<div class="csm_keys ">
						<h1>Key FEATURES</h1>
						<ul class="owl-carousel11 owl-theme">
							<a href="">
								<li  class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/win.svg') !!}"/>
										<h6>Lead Manager</h6>
									</div>
								</li>
							</a>
							<a href="">
								<li  class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/graduate.svg') !!}"/>
										<h6>Online Registration</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/admission_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/website.svg') !!}"/>
										<h6>Admission Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/fees_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/fee.svg') !!}"/>
										<h6>Fees Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/time_table_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/schedule.svg') !!}"/>
										<h6>Timetable Manager</h6>
									</div>
								</li>
							</a>
							<a href="">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/lecture.svg') !!}"/>
										<h6>Lesson Planning</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/attendance_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/attendant-list.svg') !!}"/>
										<h6>Attendance Manager</h6>
									</div>
								</li>
							</a>
							<a href="">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/assignment.svg') !!}"/>
										<h6>Assignment Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/exam_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/checklist.svg') !!}"/>
										<h6>Examination Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/library_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/books.svg') !!}"/>
										<h6>Library Manager</h6>
									</div>
								</li>
							</a>
							<a href="">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/school-bus.svg') !!}"/>
										<h6>Transport Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/account_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/accounting.svg') !!}"/>
										<h6>Accounting Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/payroll_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/payroll.svg') !!}"/>
										<h6>Payroll Manager</h6>
									</div>
								</li>
							</a>
							<a href="{{ url('/stock_manager') }}">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/stock.svg') !!}"/>
										<h6>Inventory Manager</h6>
									</div>
								</li>
							</a>
							<a href="">
								<li class="item">
									<div class="feature">
										<img src="{!! asset('public/images/icons/hotel.svg') !!}"/>
										<h6>50+ csm modules</h6>
									</div>
								</li>
							</a>
						</ul>
					</div>
				</div>
			</div>
		</section>
		<section id="one_place">
			<div class="container">
				<div class="row">
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="tab_img">
							<img class="img-responsive" src="{!! asset('public/images/csm-app-1.png') !!}"/>
						</div>
					</div>
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12" >
						<div class="about_us">
							<h1> WHAT WE DO </h1>
							<p>CSM provides user-friendly, technologically advanced solution to integrate all school processes and in turn, increase efficiency and add value to the system. The Cyber School Manager Mobile App enables students and parents to stay connected with school and teachers. With all modules and facilities of the system, parents can engage directly with the school administration.</p>
							<p>The school administration can seamlessly integrate the school information system with the Cyber School Manager to manage student data such as application, admission, attendance, grades and transcripts, discipline, accommodation, transport etc.
						      <a href="{{ url('/aboutus') }}">Read more…</a></P>
						</div>
						<div class="demo_btns">
							<ul>
								<li><a href="{{ url('/contact') }}">Contact for Support</a></li>
								<li><a href="https://play.google.com/store/apps/details?id=com.avrsh.cybrainschool&hl=en" target="blank">Get Our App</a></li>
								<li><a href="#popup3" class="open-popup trial-btn"> Request For DEMO </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
					
		</section>
		<section id="about_app">
			<div class="container">
				<div class="row">
					
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
						<div class="about_us">
							<h1> INTEGRATED SCHOOL SOLUTION</h1>
							<p>CSM is fully integrated school solution with various support functions to reduce repetitive resource- intensive activities through seamless automated SMS, Email, E-Exam, Biometric, Smart Card etc </p>
							<p>Cyber School Manager is India's first school management software with mobile app. Cyber School Manager ensures smooth functioning of the day-to-day school operations whereas CSM Mobile App enables parent-school interaction in an instant manner bridging all the possible communication gaps. The software is hosted on Google App Engine ensuring scalability and robustness.</p>
						</div>
						<div class="demo_btns">
							<ul style="text-align: left;">
								<li><a href="#popup8" class="open-popup trial-btn">CSM App Enquiry</a></li>
								<!-- <li><a href="#">Schedule Demo </a></li> -->
								<li><a href="#popup3" class="open-popup trial-btn">Request Free Demo</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
						<div class="tab_img">
							<img class="img-responsive" src="{!! asset('public/images/csm-app.png') !!}"/>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section id="partner_block">
			<div class="container">
				<div class="row">
					<div class="col-lg-5 col-md-5 col-sm-5 col-xs-12">
						<div class="tab_img">
							<img class="img-responsive" src="{!! asset('public/images/partner.png') !!}"/>
						</div>
					</div>
					<div class="col-lg-7 col-md-7 col-sm-7 col-xs-12">
						<div class="about_us">
							<h1>PARTNER WITH CSM</h1>
							<p>CSM partners with top software consultants and technology partners. Join us on this journey to build and implement ground-breaking solutions that create superior customer experiences.</p>
						</div>
						<div class="demo_btns">
							<ul>
								<!-- <li><a href="{{ url('/partner_csm') }}">Join Us</a></li> -->
								<li><a href="#popup2" class="open-popup">Contact US</a></li>
							</ul>
						</div>
					</div>
					
				</div>
			</div>
		</section>

		<section class="cta-four">
			<img src="{!! asset('public/images/circle-stripe-1.png') !!}" class="cta-four__stripe" alt="">
			<img src="{!! asset('public/images/line-stripe-1.png') !!}" class="cta-four__line" alt="">
			<div class="container text-center">
				<div class="block-title">
					<h2 class="an-hh2">Our Testimonials</h2>
					<!-- /.block-title__title -->
				</div>
				<div class="op-section op-eight-section section" id="section5">
					<div class="ocean-2">
						<div class="wave-2"></div>
						<div class="wave-2"></div>
					</div>
					<div class="section-eight">
						<div class="container">
							<div class="row">
								<div class="col-md-3 col-sm-3">
									<div class="container-pe-quote left">
										<div class="pp-quote li-quote-1">
											<img src="{!! asset('public/images/mohit.jpg') !!}" alt="">	
										</div>
										<div class="pp-quote li-quote-2">
											<img src="{!! asset('public/images/Ben-2.png') !!}" alt="">	
										</div>		    					
									</div>
								</div>
								<div class="col-md-6 col-sm-6">
									<div class="sec-eight-text-area">
										<!-- <img class="" src="assets/images/website/Nana-4.png" alt="">
										<h1>MADGE JENNINGS</h1> -->

										<div class="container-dp-name">
											
											<div class="box-dpname dp-name-1 hide-dp-top">
												<img class="" src="{!! asset('public/images/mohit.jpg') !!}" alt="">
												<h1>Mohit Mendiratta</h1>
											</div>	

											<div class="box-dpname dp-name-2 hide-dp-top">
												<img class="" src="{!! asset('public/images/Ben-2.png') !!}" alt="">
												<h1>MADGE JENNINGS</h1>
											</div>

										
											<div class="box-dpname dp-name-4 look">
												<img class="" src="{!! asset('public/images/Akashdeep.jpg') !!}" alt="">
												<h1>Akashdeep Dhunna</h1>
											</div>

											<div class="box-dpname dp-name-5 hide-dp-top">
												<img class="" src="{!! asset('public/images/Nana-3.png') !!}" alt="">
												<h1>Roger</h1>
											</div>


										</div>
											<div class="container-quote">

												<div class="quote quote-text-1 hide-top"> 
													<img class="" src="{!! asset('public/images/quote.png') !!}" alt="">		    							
													<p>Awesome work, I never learn things/topics that much simplified. Teacher prove here the quote of Einstein:-
													If you can't explain it simply, you don't understand it well enough.<br>
													Thanks a lot.		
													</p>												
												</div>
												<div class="quote quote-text-2 hide-top"> 
													<img class="" src="{!! asset('public/images/quote.png') !!}" alt="">		    							
													<p>Content Coming Soon .... !!!
													</p>												
												</div>
												<div class="quote quote-text-4 show"> 
													<img class="" src="{!! asset('public/images/quote.png') !!}" alt="">		    							
													<p>
													The video lectures provided by Sleepy Classes have helped me immensely in my preparation of UPSC Civil Services Examination. The content provided is simple to understand, enriching and quite relevant to the changing and complex nature of this exam. The whole process of learning has been made simple by the faculty. I would highly recommend these classes to everyone.
													</p>												
												</div>
												<div class="quote quote-text-5 hide-top"> 
													<img class="" src="{!! asset('public/images/quote.png') !!}" alt="">		    							
													<p>Content Coming Soon .... !!!
													</p>												
												</div>

											</div>

										</div>  				
									</div>
									<div class="col-md-3 col-sm-3">	
										<div class="container-pe-quote right">
											<div class="pp-quote li-quote-4 active">
												<img src="{!! asset('public/images/Akashdeep.jpg') !!}" alt="">	
											</div>
											<div class="pp-quote li-quote-5">
												<img src="{!! asset('public/images/Nana-3.png') !!}" alt="">	
											</div>
										</div>

									</div>
								</div>
							</div>		    			
						</div>
					</div>
				</div>
		</section>

		<section id="client_logo">
		<div class="container">
		<h1 class="heading-new">Our Clients</h1>
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
  						<!-- <img src="{!! asset('public/images/csm_slider.jpg') !!}" class="img-responsive" alt="a" /> -->
						  <div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://apsnoida.edu.in/" target="_blank" ><img src="{!! asset('public/images/aps_noida.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.stmanus.com/" target="_blank"><img src="{!! asset('public/images/st_manus_convent.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.sjcsfzr.com/" target="_blank" ><img src="{!! asset('public/images/st_joseph_convent.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="#"><img src="{!! asset('public/images/baring_collegiate.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.gurukulglobal.com/" target="_blank" ><img src="{!! asset('public/images/gurkul_global_school.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="https://www.ankurschool.in/" target="_blank" ><img src="{!! asset('public/images/ankur_school.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.davpschandigarh.com/" target="_blank" ><img src="{!! asset('public/images/davpschandigarh.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.springdalesjagadhri.org/" target="_blank" ><img src="{!! asset('public/images/springdales.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="https://www.christrajajind.com/" target="_blank" ><img src="{!! asset('public/images/christ_raja_convent.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="https://dpsjind.org/" target="_blank" ><img src="{!! asset('public/images/delhi-public-school.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.hopperinternational.com/" target="_blank" ><img src="{!! asset('public/images/hopper_international.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
						<div class="col-lg-3 no-padding">
							<div class="client_div1">
								<div class="client_inner_div1">
									<a href="http://www.mindtreeschool.com/" target="_blank" ><img src="{!! asset('public/images/mind_tree.png') !!}" alt="our-client" class="img-responsive"></a>
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-12">
							<div class="viewall">
								<a href="{{ url('/our_clients') }}">View All</a>
							</div>
						</div>
				</div>
			</div>
	</section> 
		<section id="call_us">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="call-now">
							<h1>CALL US: + 91- 921-695-3958</h1>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--<section id="subscribe_form">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-8 col-md-offset-2">
					<div class="subscribe">
						<h2>Subscribe</h2>
						<p>GET LATEST NEWS IN YOUR INBOX</p>
						<div class="input-group">
						  <input type="text" class="form-control" placeholder="Enter your Email adress Here . . . . .">
						  <span class="input-group-btn">
							<button class="btn btn-default" type="button">SUBSCRIBE</button>
						  </span>
						</div><!-- /input-group 
					 
					</div>
				</div>
			</div>
		</div>
	</section>-->
	
	<section id="csm_enquiry" >
		<div class="container relative">
            <div class="row height">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3 text-center">
                    <h2 class="page-title">CSM Enquiry</h2>
                    <p>Feel free to talk to our online representative at any time using our Live Chat system on our website or one of the below instant messaging programs.</p>
                </div>
            </div>
			<div class="row contact-area">
				<div class="col-xs-12 col-sm-6 col-md-5 contact-infobt text-white text-uppercase flex-box">
                    <div class="row">
                        
                                <div class="col-lg-12">
                                   <i class="fa fa-map-marker"></i>
                                   <div class="auto_width"> 
									<h4>Address</h4>
									<p>Cybrain Software Solution (P) LTD
										<br>Plot No. -E48 Industrial Area, Phase 8 Mohali (Punjab)</p>
									</div>
                                </div>
                                <div class="col-lg-12">
                                    <i class="fa fa-phone"></i>
                                    <div class="auto_width">
                                        <h4>CALL US ON</h4>
                                        <p>+91-921-695-3958
                                            <br> +91-172-505-3958</p>
                                   </div>
                                </div>
                                <div class="col-lg-12">
                                    <i class="fa fa-envelope"></i>
                                   <div class="auto_width">
                                        <h4>SEND YOUR MESSAGE</h4>
                                        <a href="#">info@cybrain.co.in</a>
                                        <br>
                                        <a href="#">www.cybersolutionindia.com</a>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <i class="fa fa-clock-o"></i>
                                    <div class="auto_width">
                                        <h4>WORKING HOURS</h4>
                                        <p>24*7 Support/Skype</p>
                                    </div>
                                </div>
                            
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-7 contact-form flex-box">
                    <!--Contact-form-->
                   <!--  @if ($errors->any())
						<div class="alert alert-danger">
							<ul>
							    @foreach ($errors->all() as $error)
							        <li>{{ $error }}</li>
							    @endforeach
							</ul>
						</div>
					@endif -->
					<div class="alert alert-danger print-error-msg" style="display:none"> 
					 <ul></ul>
    				</div>
    				<div class="alert alert-success print-success-msg" style="display:none"> 
    				</div>		
					<div class="errormessageformdiv"></div>
                    <form id="contact-form" action="{{ route('contactstoreenquiry') }}" class="ajax_save_form">
                    	{{ csrf_field() }}
                        <input class="form-control" id="name" name="name" placeholder="Your Name" type="text" value="{{ old('name') }}">
                        <div class="space-30"></div>
                        <input class="form-control" id="email" name="email" placeholder="Email Address" type="email" value="{{ old('email') }}">
                        <div class="space-30"></div>
                        <input class="form-control" id="phone" name="phone" placeholder="Phone No." type="text" value="{{ old('phone') }}">
                        <div class="space-30"></div>
                        <textarea class="form-control" rows="6" id="message_here" name="message_here" placeholder="Message here..."></textarea>
                        <div class="space-40"></div>
                        <div class="text-center">
                            <!-- <button type="submit" class="bttn">Send Message</button> -->
                            <button class="bttn btn-submitenquery">Send Message</button>
                        </div>
                    </form>
                    <!--Contact-form/-->
                </div>
            
			</div>
                </div>
	</section>
	 
	<section class="pricing py-5">
  <div class="container">
    <div class="row">
	 <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
           <div class="Grey"> <h5 class="card-title text-muted text-uppercase text-center">Core</h5>
            <h6 class="card-price text-center">4999/-pm + Taxes</h6></div>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check"></i></span>CSM Core Modules	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Student Enquiry	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Student Registration & Admission	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Student Fee Manager	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>CSM Mobile App	</li>
			    <li><span class="fa-li"><i class="fa fa-check"></i></span>Email Support	Online Training</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Online Training</li>
   
            </ul>
          </div>
        </div>
      </div>
      <!-- Free Tier -->
      <div class="col-lg-4">
        <div class="card mb-5 mb-lg-0">
          <div class="card-body">
           <div class="green"> <h5 class="card-title text-muted text-uppercase text-center">Pro</h5>
            <h6 class="card-price text-center">9,999/- pm + Taxes</h6></div>
            <hr>
            <ul class="fa-ul">
              <li><span class="fa-li"><i class="fa fa-check"></i></span>CSM Core Modules</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Lead Management System	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Online Student registration	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Admission Management	</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Fee Management	</li>
			    <li><span class="fa-li"><i class="fa fa-check"></i></span>Online Payment Gateway Integration</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Staff Attendance Manager</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>CSM Mobile App</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>CSM Connect : Teacher App</li>
			    <li><span class="fa-li"><i class="fa fa-check"></i></span>Email Support</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Phone Support</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated Coach	</li>
   
            </ul>
          </div>
        </div>
      </div>
   
      <!-- Pro Tier -->
      <div class="col-lg-4">
        <div class="card">
          <div class="card-body">
           <div class="red"> <h5 class="card-title text-muted text-uppercase text-center">Pro+ </h5>
            <h6 class="card-price text-center">3,00,000/- pa + Taxes</h6></div>
            <hr>
            <ul class="fa-ul">
             <li><span class="fa-li"><i class="fa fa-check"></i></span>50+ CSM Modules</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Automatic Time Table Generator</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Substituion Management & Reports</li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated School App </li>
              <li><span class="fa-li"><i class="fa fa-check"></i></span>SMS Integration</li>
			    <li><span class="fa-li"><i class="fa fa-check"></i></span>Custom Reports</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Email Integration</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Tally Integration</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Biometric Integration</li>
			    <li><span class="fa-li"><i class="fa fa-check"></i></span>CSM Connect : Teacher App</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated School Parent Helpdesk</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Dedicated Coach</li>
				  <li><span class="fa-li"><i class="fa fa-check"></i></span>Onsite Training Support</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script>
		$(document).ready(function(){
    // hide-top

        $('.li-quote-1').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-1').addClass('show');
            $('.quote-text-1').removeClass('hide-bottom');             
        });

        $('.li-quote-2').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');
            $('.quote-text-2').addClass('show');             
            $('.quote-text-2').removeClass('hide-bottom');
        });

        $('.li-quote-3').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');         
            $('.quote-text-3').addClass('show');             
            $('.quote-text-3').removeClass('hide-bottom');
        });
        $('.li-quote-4').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-4').addClass('show');             
            $('.quote-text-4').removeClass('hide-bottom');
        });
        $('.li-quote-5').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-5').addClass('show');             
            $('.quote-text-5').removeClass('hide-bottom');
        });
        $('.li-quote-6').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-6').addClass('show');             
            $('.quote-text-6').removeClass('hide-bottom');
        });
        $('.li-quote-7').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-7').addClass('show');             
            $('.quote-text-7').removeClass('hide-bottom');
        });
        $('.li-quote-8').click(function(e){ 
            e.stopPropagation();
            $(".show").addClass('hide-top');
            $(".hide-top").removeClass('show');      
            $('.quote-text-8').addClass('show');             
            $('.quote-text-8').removeClass('hide-bottom');
        });
});

$(document).ready(function(){
    // hide-top

        $('.li-quote-1').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-1').addClass('look');
            $('.dp-name-1').removeClass('hide-dp-bottom');             
        });

        $('.li-quote-2').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-2').addClass('look');
            $('.dp-name-2').removeClass('hide-dp-bottom');             
        });

        $('.li-quote-3').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-3').addClass('look');
            $('.dp-name-3').removeClass('hide-dp-bottom');             
        });
		$('.li-quote-4').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-4').addClass('look');
            $('.dp-name-4').removeClass('hide-dp-bottom');             
        });
		
        $('.li-quote-5').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-5').addClass('look');
            $('.dp-name-5').removeClass('hide-dp-bottom');             
        });
		
        $('.li-quote-6').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-6').addClass('look');
            $('.dp-name-6').removeClass('hide-dp-bottom');             
        });
        $('.li-quote-7').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-7').addClass('look');
            $('.dp-name-7').removeClass('hide-dp-bottom');             
        });
        $('.li-quote-8').click(function(e){ 
            e.stopPropagation();
            $(".look").addClass('hide-dp-top');
            $(".hide-dp-top").removeClass('look');
            $('.dp-name-8').addClass('look');
            $('.dp-name-8').removeClass('hide-dp-bottom');             
        });
});
</script>
</section>
@stop
