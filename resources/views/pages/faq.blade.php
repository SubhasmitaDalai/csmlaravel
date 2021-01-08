@extends('layouts.master')
@section('content')
 <section id="inner_heading">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="page_heading">
                            <h2>FAQ</h2>
                        </div>
                    </div>
                </div>
        </section>


        <section class="faq">
            <div class="container">
                <div class="row">
                    <div class="tabbable-panel">
                        <div class="tabbable-line">
                            <ul class="nav nav-tabs ">
                                <li class="active">
                                    <a href="#tab_default_1" data-toggle="tab">General</a>
                                </li>
                                <li>
                                    <a href="#tab_default_2" data-toggle="tab">Teacher</a>
                                </li>
								<li>
                                    <a href="#tab_default_3" data-toggle="tab">Parents</a>
                                </li>
							

                            </ul>
                            <div class="tab-content tab-content11">
                                <div class="tab-pane active" id="tab_default_1">
								<div class="row">
                                    <div class="col-lg-12">
                                        <!-- <div class="team-title faq_head">
                        <h2>General/School Admin</h2>
						</div> -->
                                        <div class="panel-group custom_panel" id="accordion">
                                            <div class="panel panel-default active">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
														  Is there data backup facility available?
														</a>
													</h4>
                                                </div>
                                                <div id="collapseOne" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                      Yes. The software takes the backup daily
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
														<a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
															Do you provide training on how to use CSM?
														</a>
													</h4>
                                                </div>
                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Yes, at the time when CSM is introduced to the School, a training session is conducted by the administrator and the teachers.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
          
          Can the data be exported from the Software?
        </a>
      </h4>
                                                </div>
                                                <div id="collapseThree" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Yes. The fee receipts and the homework can be exported from the software.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefour">
          
          Does the software allow to import the existing data?
        </a>
      </h4>
                                                </div>
                                                <div id="collapsefour" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Yes. The data from the Offline software can be synced to the Online(Web) Software .
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsefive">
          
          What if my teachers are not good with technology?
        </a>
      </h4>
                                                </div>
                                                <div id="collapsefive" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Even if the teachers do not have a good hand at the technology, CSM is a user-friendly Software. There are easy menu selections to send Homework, Attendance, and Notices to the Parents/Students.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapsesix">
          
          What are its benefits over SMS?
        </a>
      </h4>
                                                </div>
                                                <div id="collapsesix" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                         <ol start="1" style="list-style-type: lower-alpha;">
														 <li>While SMS will cost you money, CSM is free</li>
														 <li>On SMS you can send just 160 characters of text & no jpg/pdf files or other important documents when needed. Another issue with SMS is you cannot know if the recipient actually opened the message, but with CSM you can do all that.</li>
														 </ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseseven">
          
          How is it better than Whatsapp?
        </a>
      </h4>
                                                </div>
                                                <div id="collapseseven" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ul>
                                                            <li>On Whatsapp there is no data security, everyone’s contact details are open.</li>
                                                            <li>As a school, managing many groups is not convenient.</li>
                                                            <li>People clutter it with unwanted messages.</li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab_default_2">
								<div class="row">
                                    <div class="col-lg-12">
                                        <!-- <div class="team-title faq_head">
                                            <h2>For Teacher</h2>

                                        </div> -->
                                        <div class="panel-group custom_panel" id="accordion1">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse9">
          
         How do I send the homework?

        </a>
      </h4>
                                                </div>
                                                <div id="collapse9" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                         Menu - Manage Homework >> Submenu - Add Homework
														 <ul>
														 <li>Enter the fields</li>
														 <li>Attach the file</li>
														 <li>Submit</li>
														 </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse10">
          
          Can I change my password?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse10" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        It depends on the School Administrator to allow the teachers to change the password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse11">
          
          How can I switch from a teacher account to a parent account?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse11" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        To switch from one account to another, log out from the current account and login with the other account.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse12">
          
         Why do I need to provide the mobile number?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse12" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Users are required to validate their account to ensure security. Users can use either email or mobile number. If the mobile number is registered, the validation code is sent to the mobile to ensure the security of your account.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse13">
          
         What information do I need to register or create my account?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse13" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        To register the account, you need enrollment number, date of birth, and the registered mobile number.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse14">
          
         I teach a class with another teacher. Can we both use the app?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse14" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Yes, both the teachers can use the app with the login details provided.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse15">
          
         I am concerned about my privacy
        </a>
      </h4>
                                                </div>
                                                <div id="collapse15" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <ol start="1" style="list-style-type: lower-alpha;">
														 <li>CSM cares about your privacy and that of your subscribers. CSM assigns and provides you a PRIVATE CLASS CODE for every grade you teach. Only those parents and students who you provide the CLASS CODE can subscribe to your grade</li>
														 <li>While registering on the app, admission number, date of birth and mobile number are required to ensure the privacy. A one time password is generated for validation while logging in for the first time.</li>
														</ol>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse16">
          
         How do I send classroom updates or notices?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse16" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Menu - Manage Notices >> Submenu - Add
														<ul>
														<li>Enter the fields</li>
														<li>Attach the file</li>
														<li>Submit</li>
														</ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse17">
          
         How do I send classroom updates or attendance?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse17" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                       Menu - Manage Attendance >> Submenu - Add attendance
													   <ul>
													  <li> Choose class and section</li>
                                                      <li>Edit records </li>
                                                      <li>Save Attendance </li>
													   </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse18">
          
        Can I schedule when I send my update?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse18" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                      As a teacher, your update is ready to be sent immediately. Parents and students receive your update instantly
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion1" href="#collapse19">
          
        Can I archive all the class room updates and have them available later?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse19" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                       The updates and data are always available on the software.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                   </div>
                                </div>
								<div class="tab-pane" id="tab_default_3">
								<div class="row">
                                     <div class="col-lg-12">
                                        <!-- <div class="team-title faq_head">
                                            <h2>For Parents and Students</h2>
                                        </div> -->
                                        <div class="panel-group custom_panel" id="accordion2">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse26">
          
         How to register as a parent?

        </a>
      </h4>
                                                </div>
                                                <div id="collapse26" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                         To register, you need the following details
														 <ul>
														 <li>Admission Number</li>
														 <li>Date of Birth of Kid</li>
														 <li>Mobile Number (Registered)</li>
														 </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse27">
          
         How will I change Grade/Section when I get promoted in the New Academic Session?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse27" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        There is an automatic up-gradation of your account when you are promoted to the new academic session.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse28">
          
          How do I save homework images sent by the teacher to my device?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse28" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                       When you open the images, there is an option to save the image. Even if you don’t save it, it is stored in your account.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse29">
          
          What information do I need to subscribe to my child’s classroom?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse29" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Admission number, date of birth, registered mobile number are required to subscribe to the classroom
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse30">
          
        I have children in multiple classes. Can I add all my children into CSM?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse30" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        Yes, you can check notices for all your wards. There are different login details for every student. Login with the details you want the information access to.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse31">
          
        Can I change my password or edit my profile?
        </a>
      </h4>
                                                </div>
                                                <div id="collapse31" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        No. The charge is with School Administration, they can make the required changes.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h4 class="panel-title">
        <a class="accordion-toggle collapsed" data-toggle="collapse" data-parent="#accordion2" href="#collapse32">
          
         How can I directly communicate to the teacher through this app? 
        </a>
      </h4>
                                                </div>
                                                <div id="collapse32" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                       No, only teacher can send you updates. There is one-way communication.
                                                    </div>
                                                </div>
                                            </div>
                                   
                                        </div>
                                    </div>
</div>
                                </div>
	
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <section class="footer_top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8">
                        <div class="fot_top">
                            <p>CSM deliver the right solution for you and your business</p>
                        </div>
                    </div>
                    <div class="col-lg-4 fot_top_btns">
                        <a href="{{ url('/contact') }}">Contact Us</a>
                        <a href="#popup3" class="open-popup trial-btn">Request for demo</a>
                    </div>
                </div>
            </div>
        </section>
       @stop
