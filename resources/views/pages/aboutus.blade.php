@extends('layouts.master')
@section('content')
<section id="inner_heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page_heading">
							<h2>ABOUT US</h2>
						</div>
					</div>
				</div>
		</section>
		<section id="about-ash-section">
			<div class="container">
				<div class="col-lg-7 col-md-7 col-sm-12 col-xs-12">
				
				<p>Cyber School Manager is a complete custom- made software solution developed for schools to manage all their academic as well as administrative functions effectively.</p>

<p>Cyber School Manager ensures smooth functioning of the day-to-day school operations whereas CSM Mobile App enables parent-school interaction in an instant manner bridging all the possible communication gaps. The software is hosted on Google App Engine ensuring scalability and robustness.</p>

<p>CSM is a Trade Mark Product of Cybrain Software Solutions Pvt. Ltd. It was introduced to the company portfolio in 2015 and are now working with around 150+ Schools and have over a 250,000+ registered students, parents and 15000+ teachers on our platform, including some of the renowned names in like Mindtree Schools, Learning Paths School Mohali, Shivalik Group of Schools, Delhi Cambridge School Zirakpur, Gurukul Global School, Hansraj Public School, Little Flower Convent School, Blue Birds High School, Cambridge InternationalSchools and many more, who use Cyber School Manager everyday to improve their productivity and parent teacher communication.</p>



				</div>
				<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
					<img class="img-responsive" src="{!! asset('public/images/about-img-ash-01.jpg') !!}">
				</div>
				<div class="col-lg-12">
					<div class="cybrain-info">
						<p>Cybrain Software Solutions is an ISO 9001:2015 certified software and web development company based in India, headquartered in Mohali,Chandigarh. Our expertise in providing industry specific services and custom solutions has enabled us to deliver absolute business solutions to our clients worldwide.</p>
					</div>
				</div>
			</div>
		</section>
		<section class="history-section">
			<div class="container">
				<div class="row">
				<div class="col-md-6 col-md-offset-3">
                    <div class="team-title text-center">
                        <h2>Our Journey</h2>
                        <p>Here is a look at our journey, since our start</p>
                    </div>
                </div>
				<div class="clearfix"></div>
					<div class="col-lg-12 wow fadeIn animated" data-wow-duraion="1s" data-wow-delay="0s">
						<div class="row our_history">
							<ul class="border-right">
								<!-- <li class="box-right"> 
									<div class="his_year">2006</div>
									<div class="his_info"><h4>Carpetserv company was founded</h4>
									<p> Quisque bibendum ipsum sed varius placerat. Sed eu ligula vestibulum, sagittis lectus ac, pellentesque mi..</p></div>
								</li>-->
								<li class="box-right">
									<div class="his_year">2009</div>
									<div class="his_info"><h4>Cyber School Manager was developed</h4>
										<p> We developed a desktop version which was incorporated in Him Academy, Shivalik School etc.</p>
									</div>
								</li>
								<li class="box-right">
									<div class="his_year">2011</div>
									<div class="his_info"><h4>CSM started gaining popularity</h4>
										<p> CSM started gaining popularity and we had over 30 Schools using the software.</p>
									</div>
								</li>
								<li class="box-right">
									<div class="his_year">2012</div>
									<div class="his_info"><h4>CSM Client Server launched</h4>
										<p> We Launched CSM Client Server Architecture based version. </p>
									</div>									
								</li>
								<li class="box-right">
									<div class="his_year">2015</div>
									<div class="his_info"><h4>CSM Cloud version</h4>
										<p> Cyber School Manager Cloud version was developed</p>
									</div>
								</li>
								<li class="box-right">
									<div class="his_year">2017</div>
									<div class="his_info"><h4>Embarked Launched</h4>
										<p> Embarked the Launch on CSM Mobile APP</p>
									</div>
								</li>
								<li class="box-right">
									<div class="his_year">2019</div>
									<div class="his_info"><h4>App Live for Teachers</h4>
										<p> CSM Connect & Teacher App. Currently, being used in 150+ Schools</p>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
	<section class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 col-sm-12 col-xs-12">
					<div class="fot_top">
						<p>CSM delivers the right solution for school</p>
					</div>
				</div>
				<div class="col-lg-4 col-sm-12 col-xs-12 fot_top_btns">
					<a href="{{ url('/contact') }}">Contact Us</a>
					<a href="#popup3" class="open-popup trial-btn">Request for demo</a>
				</div>
			</div>
		</div>
	</section>
@stop