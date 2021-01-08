@extends('layouts.master')
@section('content')
<section class="contactus">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-9">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3430.283198661972!2d76.70146089969946!3d30.710437992849204!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390fee596a77600f%3A0x60ff862373270ce7!2sCybrain+Software+Solutions!5e0!3m2!1sen!2sin!4v1501159175990" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
					</div>
					<div class="col-lg-3 office_bg">
						<div class="our_office">
							<h4>Our Office</h4>
							
							<p>Industrial Area, Phase 8 Mohali (Punjab)
							Phone 0172-5053958</p>

						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="contact_form">
			<div class="container">
				<div class="row">
					<div class="col-md-4">
						<div class="contact-side">
							<h4>Find Us Here</h4>
							<ul class="contact-details">
								<li><i class="fa fa-phone-square"></i><span> <strong>Phone:</strong><br/> 0172-5053958 </span></li>
								<li><i class="fa fa-envelope-square"></i><span> <strong>E-Mail:</strong><br/> <a href="#">info@cybrain.co.in</a></span></li>
							</ul>
						</div>
					</div>
					<div class="col-md-8">
						<div class="contact">
						<h4>Contact Us</h4>
							<div class="row11">
								<!-- @if ($errors->any())
									<div class="alert alert-danger">
										<ul>
										    @foreach ($errors->all() as $error)
										        <li>{{ $error }}</li>
										    @endforeach
										</ul>
									</div>
								@endif -->
						<div class="row">
						<div class="alert alert-danger" style="display:none"> 
						<ul></ul>
						</div>
						<div class="alert alert-success" style="display:none"> 
						</div>
						<div class="errormessageformdiv"></div>
						<form action="{{ route('contactstore') }}" action="{{ route('contactstore') }}" class="ajax_save_form">
						{{ csrf_field() }}
						<div class="col-md-6">
							<div>
								<input name="name" id="name" placeholder="Your Name" type="text" value="{{ old('name') }}">
							</div>
						</div>

						<div class="col-md-6">
							<div>
								<input name="email" id="email" placeholder="Email Address" type="text" value="{{ old('email') }}">
							</div>
						</div>
						<div class="col-md-12">
						<input name="mobile_number" id="mobile_number" placeholder="Mobile Number" class="error" type="text" value="{{ old('mobile_number') }}">
					</div>
						<div class="col-md-12">
						<input name="subject" id="subject" placeholder="Subject" class="error" type="text" value="{{ old('subject') }}">
					</div>
					<div class="col-md-12">
						<textarea name="messages" cols="40" rows="3" id="messages" placeholder="Message" spellcheck="true" class="error"></textarea>
					</div>
					<div class="col-md-12">
					<input class="submit button" id="submit" value="Submit Message" type="submit">
					</div>
					</div>
				  </form>
						</div>
					</div>
				</div>
			</div>
		</section>
@stop