<section id="testimonial_carousel" style="padding:30px 0;">        			
	<div class="container">
		<div class="row">
		<ul class="adresses">
			<li>
				<div class="address border-left">
					<h3>Mohali Office</h3>
					<p><strong>Cybrain Software Solutions (P) LTD</strong><br/>
					Plot E-48, Industrial Area, Phase 8, Mohali - 160059<br/>
					Telephone:+91-172-505-3958<br/>
					E-mail: info@cybrain.co.in<br/>
					</p>
					
				</div>
			</li>
			<li>
				<div class="address border-left">
					<h3>Bengaluru Office</h3>
					<p><strong>Cybrain Software Solutions (P) LTD</strong><br/>
					Site No.1247, IIIrd Block BEL Layout, Vidyaranyapura, Bengaluru-560097<br/>
					Telephone:+91-804-113-1015<br/>
					E-mail: info@cybrain.co.in<br/>
					</p>
				</div>
			</li>
			<li>
				<div class="address border-left">
					<h3>US Sale Office</h3>
					<p><strong>HLI Systems </strong><br/>
								HLI Systems3036 Seaborg Ave, Suite A Ventura, CA 93003 <br/>
								Telephone: (805)-277-0799<br/>
								E-mail: sales@hli.net</p>
				</div>
			</li>
			<li>
				<div class="address border-left" style="border-right:none;">
					<h3>Zambia Office</h3>
					<p><strong>Cybrain Software Solutions (P) LTD</strong>
					 Bytes Park Plot 21914/M,<br/>
					Ngwerere Road, Lusaka.<br/>
					Telephone: +260-962-646-393 <br/>
					E-mail: info@cybrain.co.zm</p>
					</p>

				</div>
			</li>
			</ul>
		</div>
	</div>
</section>
<section id="social">
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-8 col-lg-6">
					<div class="brochure">
						<ul>
							<li><a href="{!! asset('public/file/CyberSchoolManagerbroucher.pdf') !!}" target="blank"><span><img src="{!! asset('public/images/pdf.png') !!}"/></span>CSM Brochure</a></li>
							<li><a href="#popup3" class="open-popup"><span><img src="{!! asset('public/images/trial.png') !!}"/></span>Free Demo</a></li>
						</ul>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6">
					<div class="social_links">
						<ul>
							<li><a href="https://www.facebook.com/cyberschoolmanager/" target="blank"><img src="{!! asset('public/images/fb.png') !!}"/></a></li>
							<li><a href="https://www.linkedin.com/company/cybrain-software-soultion?trk=top_nav_home" target="blank"><img src="{!! asset('public/images/linkedin.png') !!}"/></a></li>
							<li><a href="https://www.instagram.com/cyberschoolmanager/" target="blank"><img style="max-width: 31px;" src="{!! asset('public/images/instagram.png') !!}"/></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</section>
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-xs-12 col-sm-8 col-md-6 col-lg-6">
					<div class="copyright">
						<p>&copy; CSM  All Right Reserved&nbsp;&nbsp; <a href="{{ url('/support') }}">Support</a><a href="{{ url('/services') }}">Services</a><a href="{{ url('/privacy_policy') }}">Privacy Policy</a></p>
					</div>
				</div>
				<div class="col-xs-12 col-sm-4 col-md-6 col-lg-6">
					<div class="foot_logo">
						<a href="https://cybersolutionindia.com" target="blank"><img src="{!! asset('public/images/cybrainlogo.png') !!}"/></a>
					</div>
				</div>
			</div>
			
		</div>
		<!-- <div class="ticket_submit">
			<a href="#"><img src="images/ticket-submit.png"/></a>
		</div> -->
	</footer>
	<!--<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">
    <!-- Modal content
    <div class="modal-content1">
		<div class="modal-header">
		<button type="button" class="close" data-dismiss="modal">×</button>
		</div>
      <div class="modal-body">
       <a href="#popup3" class="open-popup trial-btn"><img class="img-responsive" src="images/demo-popup.jpg"/></a>
      </div>
    </div>

  </div>
</div>-->
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->

    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="{!! asset('public/js/bootstrap.min.js') !!}"></script>
	<script src="{!! asset('public/js/bootstrap-multiselect.js') !!}"></script>
    <script src="{!! asset('public/js/owl.carousel.min.js') !!}"></script>
	<script src="{!! asset('public/js/wow.min.js') !!}"></script>
	 <script src="{!! asset('public/js/custom.js') !!}"></script>
	 <!-- <script src="js/jQuery.scrollSpeed.js"></script> -->
	 <script src="{!! asset('public/js/jquery.fullscreen-popup.min.js') !!}"></script>
	 <script src="{!! asset('public/js/responsiveslides.min.js') !!}"></script>
	 <script src="{!! asset('public/js/frontajax.js') !!}"></script>

	<script>
	$(function() {
    var owl = $('.owl-carousel11'),
        owlOptions = {
            loop: false,
            margin: 10,
            responsive: {
                0: {
                    items: 1,
										dots: false

                }
            }
        };

    if ( $(window).width() < 767 ) {
        var owlActive = owl.owlCarousel(owlOptions);
    } else {
        owl.addClass('off');
    }

    $(window).resize(function() {
        if ( $(window).width() < 854 ) {
            if ( $('.owl-carousel11').hasClass('off') ) {
                var owlActive = owl.owlCarousel(owlOptions);
                owl.removeClass('off');
            }
        } else {
            if ( !$('.owl-carousel11').hasClass('off') ) {
                owl.addClass('off').trigger('destroy.owl.carousel');
                owl.find('.owl-stage-outer').children(':eq(0)').unwrap();
            }
        }
    });
});
	</script>
	<script>
            $(document).ready(function() {
              $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                responsiveClass: true,
                responsive: {
                  0: {
                    items: 1,
                    nav: false,
					dots: true
                  },
                  600: {
                    items: 3,
                    nav: false
                  },
                  1000: {
                    items: 4,
                    nav: false,
                    loop: false,
                    margin: 20,
					autoplay:true
                  }
                }
              })
            })
			// $(function() {
			// jQuery.scrollSpeed(100, 800);
			// });
			// $(window).scroll(function() {    
			// var scroll = $(window).scrollTop();
			// if (scroll >= 100) {
			// $(".header-main").addClass("sticky");
			// }
			// else  {
			// $(".header-main").removeClass("sticky");
			// }
			// }); 
			$(function() {
				$(".open-popup").fullScreenPopup({
					bgColor: '#fff'
				});
			});
			$(window).load(function() {
			function ahref() {
			$("#myModal").modal('show'); }; 
			setTimeout(function(){ ahref(); }, 5000); 
			})
			$(document).ready(function() {
				$('#example-selectAllValue-numeric').multiselect({
					includeSelectAllOption: true,
					selectAllName: 'select-all-name'
				});
			});
			// $(window).scroll(function () {
            //         if ($(this).scrollTop() > 200) {
            //             $('#back-to-top').fadeIn();
            //         } else {
            //             $('#back-to-top').fadeOut();
            //         }
            //     });  
				
			  $(function() {
					$(".rslides").responsiveSlides();
				  });	

          </script>
          <script>
			$('#accordion').click(function() {
				$('#accordion .panel.active').removeClass('active');
				$(this).addClass('active');
			});
          </script>
          <script>
				$(function() {
			    var owl = $('.owl-carousel11'),
			        owlOptions = {
			            loop: false,
			            margin: 10,
			            responsive: {
			                0: {
			                    items: 2
			                }
			            }
			        };

			    if ( $(window).width() < 767 ) {
			        var owlActive = owl.owlCarousel(owlOptions);
			    } else {
			        owl.addClass('off');
			    }

			    $(window).resize(function() {
			        if ( $(window).width() < 767 ) {
			            if ( $('.owl-carousel').hasClass('off') ) {
			                var owlActive = owl.owlCarousel(owlOptions);
			                owl.removeClass('off');
			            }
			        } else {
			            if ( !$('.owl-carousel').hasClass('off') ) {
			                owl.addClass('off').trigger('destroy.owl.carousel');
			                owl.find('.owl-stage-outer').children(':eq(0)').unwrap();
			            }
			        }
			    });
			});
		  </script>
		  
		  <div id="popup2" class="fill-pop" style="display: none;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 full-bg">
					<div class="about-ceo">
						<div class="schedule_img"><img src="{!! asset('public/images/csm-white.png') !!}"/></div>
						<h4>GET STARTED WITH CYBER SCHOOL MANAGER</h4>
						<p>Watch a recorded demo. Need more information? Write to us at info@cybrain.co.in</p>
						<p></p>
					</div>
				</div>
				<div class="col-md-8 pull-right">
					<div class="partner-form">
						<h2>Apply to become a CSM/OEM Partner</h2>
						<div class="row">
							<div class="alert alert-danger print-error-msg" style="display:none"> 
							<ul></ul>
							</div>
							<div class="alert alert-success print-success-msg" style="display:none">
							</div>	
							<div class="errormessageformdiv"></div>
						<form id="contactusform" action="{{ route('contactstorecontactus') }}" class="ajax_save_form">
							{{ csrf_field() }}
							<div class="form-group col-md-6">
								<input type="text" name="company_name" id="company_name"placeholder="Company Name"/>
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="company_website" id="company_website" placeholder="Company Website"/>
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="first_name" id="first_name" placeholder="First Name"/>
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="last_name" id="last_name" placeholder="Last Name"/>
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="company_mail" id="company_mail" placeholder="Email"/>
							</div>
							<div class="form-group col-md-6">
								<input type="text" name="phone_number" id="phone_number" placeholder="Phone Number"/>
							</div>
							<div class="form-group col-md-6">
								<select name="country" id="country" >
									<option value="">Select Country</option>
									<option value="India">India</option>
									<option value="Australia">Australia</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<select name="employees" id="employees">
									<option value="">No. of Employees</option>
									<option value="1-10">1-10</option>
									<option value="11-25">11-25</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<select name="partner" id="partner">
									<option value="">-Select-</option>
									<option value="Consulting Partner">Consulting Partner</option>
									<option value="Referral Partner">Referral Partner</option>
									<option value="Technology Partner">Technology Partner</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<textarea name="message_field" id="message_field" placeholder="Message"></textarea>
							</div>
							<div class="form-group col-md-12">
								<input class="submit btn-submitcontact" type="submit" placeholder="Submit"/>
							</div>
						</form>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
		<div id="popup3" class="fill-pop" style="display: none;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 col-sm-4 full-bg">
					<div class="about-ceo">
						<div class="schedule_img"><img src="{!! asset('public/images/csm-white.png') !!}"/></div>
						<h4>Get started with Cyber School Manager</h4>
						<p>Watch a recorded demo. Need more information? Write to us at info@cybrain.co.in</p>
					</div>
				</div>
				<div class="col-md-8 col-sm-8 pull-right">
					<div class="partner-form">
						<h2>Apply For Free Demo</h2>
						<div class="row" id="tttt">
							
							<div class="alert alert-danger print-error-msg" style="display:none"> 
								<ul></ul>
    						</div>
    						<div class="alert alert-success print-success-msg" style="display:none"> 
    						</div>
    						<div class="errormessageformdiv"></div>	
						<form id="feedbackform" action="{{ route('contactstoredemo') }}" class="ajax_save_form">
							{{ csrf_field() }}
							<div class="form-group col-md-6">
								<input name="school_name" placeholder="School Name" type="text" id="school_name">
							</div>
							<div class="form-group col-md-6">
								<select name="school_board" id="school_board">
								  <option value="">Select Your School Board</option>
								  <option value="CBSE">CBSE</option>
								  <option value="ICSE">ICSE</option>
								  <option value="State Board">State Board</option>
								  <option value="OTHER">OTHER</option>
								</select>
							</div>
							<div class="form-group col-md-6">
								<input placeholder="Phone Number" name="school_phone_number" type="text" id="school_phonenumber">
							</div>
							<div class="form-group col-md-6">
								<input name="school_website" placeholder="School Website(e.g:https://www.cybrain.com/)" type="text" id="school_website">
							</div>
							<div class="form-group col-md-6">
								<input name="school_email" value="" placeholder="Email ID" type="email" id="school_email">
							</div>
							<div class="form-group col-md-6">
								<textarea name="school_address" placeholder="Enter Address Here" id="school_address"></textarea>
							</div>
							
							<div class="form-group col-md-12">
								<!-- <input class="submit" type="submit" placeholder="Submit"/> -->
								<button class="submit btn-submit">Submit</button>
							</div>
					</form>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
	<div id="popup8" class="fill-pop" style="display: none;">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-4 full-bg">
					<div class="about-ceo">
						<div class="schedule_img"><img src="{!! asset('public/images/csm-white.png') !!}"/></div>
						<h4>Get started with Cyber School Manager</h4>
						<p>Watch a recorded demo. Need more information? Write to us at info@cybrain.co.in</p>
					</div>
				</div>
				<div class="col-md-8 pull-right">
					<div class="partner-form">
						<h2>CSM App Enquiry</h2>
						<div class="row">
							<div class="alert alert-danger print-error-msg" style="display:none"> 
								<ul></ul>
    						</div>
    						<div class="alert alert-success print-success-msg" style="display:none"> 
    						</div>
    						<div class="errormessageformdiv"></div>
							<form id="appform" action="{{ route('contactstoreapp') }}" class="ajax_save_form">
							{{ csrf_field() }}
							<div class="form-group col-md-6">
								<input name="school_name" id="school_nameapp" placeholder="School Name" type="text">
							</div>
							<div class="form-group col-md-6">
								<div class="ash-group">
								  <select id="school_boardapp" style="color: #999999 !important;" name="school_board" class="field_ctrl">
									<option class="selected" value="">Select Your School Board</option>
									<option value="CBSE">CBSE</option>
									<option value="ICSE">ICSE</option>
									<option value="State Board">State Board</option>
									<option value="OTHER">OTHER</option>
								  </select>
								</div>
							</div>
							<div class="form-group col-md-6">
								<input id="school_phonenumberapp" placeholder="School Phone Number" name="school_phonenumber" type="text">
							</div>
							<div class="form-group col-md-6">
								<input id="school_websiteapp" name="school_website" placeholder="School Website(e.g:https://www.cybrain.com/)" type="text">
							</div>
							<div class="form-group col-md-6">
								<input id="school_emailapp" name="school_email" value="" placeholder="Email ID" type="email">
							</div>
							<div class="form-group col-md-6">
								<input id="contact_personapp" name="contact_person" value="" placeholder="Contact Person Name" type="text">
							</div>
							<div class="form-group col-md-6">
								<input id="mobile_noapp" name="mobile_no" value="" placeholder="Mobile No" type="text">
							</div>
							<div class="form-group col-md-6">
								<textarea id="school_addressapp" name="school_address" placeholder="Enter Address Here"></textarea>
							</div>
							<div class="form-group col-md-6">
								<textarea id="school_enquiryapp" name="school_enquiry" placeholder="Type your query here"></textarea>
							</div>
							<div class="form-group col-md-12">
								<input class="submit btn-submitapp" type="submit" placeholder="Submit"/>
							</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		
		</div>
	</div>
<!-- <script type="text/javascript">


	$(document).ready(function() {
	    $(".btn-submit").click(function(e){
	    	// var school_name = $('#school_name').val();
	    	// alert(school_name);
	    	e.preventDefault();


	    	var _token = $("input[name='_token']").val();
	    	var school_name = $('#school_name').val();
	    	var school_board = $('#school_board').val();
	    	var school_phonenumber = $('#school_phonenumber').val();
	    	var school_website = $('#school_website').val();
	    	var school_email = $('#school_email').val();
	    	var school_address = $('#school_address').val();


	        $.ajax({
	            url: "{{ route('contactstoredemo') }}",
	            type:'POST',
	            data: {_token:_token, school_name:school_name, school_board:school_board, school_phonenumber:school_phonenumber, school_website:school_website, school_email:school_email,school_address:school_address},
	            beforeSend: function() {
					$('.errormessageformdiv').html('<span style="color:#ff0000;">Please wait while form is submitting... <img src="https://mba.hitbullseye.com/cat-scholarship/images/loading.gif"><span>');    
					},
	            success: function(data) {
	            	jQuery('.errormessageformdiv').html('');
	            	// alert(data.error);
	                if($.isEmptyObject(data.error)){
	                	// alert(data.success);
	                	$('#feedbackform')[0].reset();
	                	$(".print-error-msg").css('display','none');
	                	printSuccessMsg(data.success);
	                	$(".print-success-msg").fadeOut(10000);
	                }else{
	                	// alert('hii');
	                	printErrorMsg(data.error);
	          			$(".print-error-msg").fadeOut(10000);
	                }
	            }
	        });


	    }); 


	    $(".btn-submitcontact").click(function(e){
	    	// var company_email = $("input[name='company_email']").val();

	    	// alert(company_email);
	    	e.preventDefault();

	    	var _token = $("input[name='_token']").val();
	    	var company_name = $('#company_name').val();
	    	var company_website = $('#company_website').val();
	    	var first_name = $('#first_name').val();
	    	var last_name = $('#last_name').val();
	    	var company_email = $('#company_email').val();
	    	var phone_number = $('#phone_number').val();
	    	var country = $('#country').val();
	    	var employees = $('#employees').val();
	    	var partner = $('#partner').val();
	    	var message_field = $('#message_field').val();

	    	$.ajax({
	            url: "{{ route('contactstorecontactus') }}",
	            type:'POST',
	            data: {_token:_token, company_name:company_name, company_website:company_website, first_name:first_name, last_name:last_name, company_email:company_email,phone_number:phone_number,country:country,employees:employees,partner:partner,message_field:message_field},
	            beforeSend: function() {
					$('.errormessageformdiv').html('<span style="color:#ff0000;">Please wait while form is submitting... <img src="https://mba.hitbullseye.com/cat-scholarship/images/loading.gif"><span>');    
					},
	            success: function(data) {
	            	jQuery('.errormessageformdiv').html('');
	            	// alert(data.error);
	                if($.isEmptyObject(data.error)){
	                	// alert(data.success);
	                	$('#contactusform')[0].reset();
	                	$(".print-error-msg").css('display','none');
	                	printSuccessMsg(data.success);
	                	$(".print-success-msg").fadeOut(10000);
	                }else{
	                	// alert('hii');
	                	printErrorMsg(data.error);
	          			$(".print-error-msg").fadeOut(10000);
	                }
	            }
	        });

	    }); 

	    $(".btn-submitenquery").click(function(e){
	    	e.preventDefault();


	    	var _token = $("input[name='_token']").val();
	    	var name = $('#name').val();
	    	var email = $('#email').val();
	    	var phone = $('#phone').val();
	    	var messagehere = $('#messagehere').val();


	        $.ajax({
	            url: "{{ route('contactstoreenquiry') }}",
	            type:'POST',
	            data: {_token:_token, name:name, email:email, phone:phone, messagehere:messagehere},
	            beforeSend: function() {
					$('.errormessageformdiv').html('<span style="color:#ff0000;">Please wait while form is submitting... <img src="https://mba.hitbullseye.com/cat-scholarship/images/loading.gif"><span>');    
					},
	            success: function(data) {
	            	jQuery('.errormessageformdiv').html('');
	            	// alert(data.error);
	                if($.isEmptyObject(data.error)){
	                	// alert(data.success);
	                	$('#contact-form')[0].reset();
	                	$(".print-error-msg").css('display','none');
	                	printSuccessMsg(data.success);
	                	$(".print-success-msg").fadeOut(10000);
	                }else{
	                	// alert('hii');
	                	printErrorMsg(data.error);
	          			$(".print-error-msg").fadeOut(10000);
	                }
	            }
	        });


	    });

	     $(".btn-submitapp").click(function(e){
	    	e.preventDefault();


	    	var _token = $("input[name='_token']").val();
	    	var school_name = $('#school_nameapp').val();
	    	var school_board = $('#school_boardapp').val();
	    	var school_phonenumber = $('#school_phonenumberapp').val();
	    	var school_website = $('#school_websiteapp').val();
	    	var school_email = $('#school_emailapp').val();
	    	var contact_person = $('#contact_personapp').val();
	    	var mobile_no = $('#mobile_noapp').val();
	    	var school_enquiry = $('#school_enquiryapp').val();
	    	var school_address = $('#school_addressapp').val();


	        $.ajax({
	            url: "{{ route('contactstoreapp') }}",
	            type:'POST',
	            data: {_token:_token, school_name:school_name, school_board:school_board, school_phonenumber:school_phonenumber, school_website:school_website, school_email:school_email,contact_person:contact_person,mobile_no:mobile_no,school_enquiry:school_enquiry,school_address:school_address},
					beforeSend: function() {
					$('.errormessageformdiv').html('<span style="color:#ff0000;">Please wait while form is submitting... <img src="https://mba.hitbullseye.com/cat-scholarship/images/loading.gif"><span>');    
					},
	            success: function(data) {
	            	jQuery('.errormessageformdiv').html('');
	            	// alert(data.error);
	                if($.isEmptyObject(data.error)){
	                	// alert(data.success);
	                	$('#appform')[0].reset();
	                	$(".print-error-msg").css('display','none');
	                	printSuccessMsg(data.success);
	                	$(".print-success-msg").fadeOut(10000);
	                }else{
	                	// alert('hii');
	                	printErrorMsg(data.error);
	          			$(".print-error-msg").fadeOut(10000);
	                }
	            }
	        });


	    }); 

	     


	    function printErrorMsg (msg) {
			$(".print-error-msg").find("ul").html('');
			$(".print-error-msg").css('display','block');
			$.each( msg, function( key, value ) {
				$(".print-error-msg").find("ul").append('<li>'+value+'</li>');
			});
		}
		function printSuccessMsg (msg) {
			$(".print-success-msg").css('display','block');
		    $(".print-success-msg").append('<div>' + msg + '</div>')
		}
	});

 
</script> -->
	