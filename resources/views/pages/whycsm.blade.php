@extends('layouts.master')
@section('content')
 <section id="inner_heading">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="page_heading">
							<h2>KEY FEATURES</h2>
						</div>
					</div>
				</div>
		</section>
		<section class="whycsm">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="team-title text-center" style="margin-bottom:15px;">
							<h2>Revolutionising Your School Management</h2>
						</div>
					</div>
					<div class="col-lg-12">
						<div class="whycsm_content text-center">
							<p>With our modules, your Management gets convenient, saving you funds and resources. CSM allows you to maintain records and the history of information, so that you don’t need to store hundreds of registers and also organizes  the records efficiently</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<section class="our_modules gray-bg">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="team-title text-center">
							<h2>Our Modules</h2>
						</div>
					</div>
				</div>
				<div class="row">
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/admission_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/website.svg') !!}" alt="features"/>
							<h2>Admission Manager</h2>
							<p>Our Admission Manager module is the solution for streamlining the admission process for institutions.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/attendance_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/attendant-list.svg') !!}" alt="features"/>
							<h2>Attendance Manager</h2>
							<p>The Attendance Manager allows teachers or instructors to take attendance fast, making the information  available to the school administration immediately</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/payroll_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/payroll.svg') !!}" alt="features"/>
							<h2>Payroll Manager</h2>
							<p>The Cyber School Manager Payroll Manager is a module that enables schools to keep track of all the financial aspects of employees including salary reports, payslips generation, allowances, deductions time cards, employee records etc. for teachers and other employees.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/exam_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/checklist.svg') !!}" alt="features"/>
							<h2>Exam Manager</h2>
							<p>The Exam Manager module enables instructors to develop examinations, record student scores and publish the results online for both students and parents to view.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/fees_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/fee.svg') !!}" alt="features"/>
							<h2>Fees Manager</h2>
							<p>The CSM Fees Manager allows school administrators to track the fee billing details of the students from the past, current and future payment receipts.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/library_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/books.svg') !!}" alt="features"/>
							<h2>Library Manager</h2>
							<p>The CSM Library Manager provides all the functions of a librarian in a simple and easy to use library system.</p>
								</a>
						</div>
				
					
						<div class="col-md-4 modules_block text-center"> 
						<a href="{{ url('/sms_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/mail_manager.svg') !!}" alt="features"/>
							<h2>SMS/Email Manager</h2>
							<p>The Cyber School Manager SMS/Email Manager allows the user to SMS and email notifications to recipients.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/stock_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/stock.svg') !!}" alt="features"/>
							<h2>Inventory Manager</h2>
							<p>Every institution needs to keep track of all its assets whether it is furniture, ICT equipment, buildings etc. It is important for the institution to know where all its assets are.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/time_table_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/schedule.svg') !!}" alt="features"/>
							<h2>Timetable Manager</h2>
							<p>This Module allows you to make clear and error free timetables within minutes ensuring the best utilization of teachers and employees across your institution.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
<a href="{{ url('/employee_manager') }}" class="next_page">						
							<img src="{!! asset('public/images/icons/work.svg') !!}" alt="features"/>
							<h2>Employee Manager</h2>
							<p>The Cybrain Software Solutions Employee Manager module is designed to make employee data management smooth and effortless.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/account_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/accounting.svg') !!}" alt="features"/>
							<h2>Accounting Manager</h2>
							<p>The Cybrain Software Solutions Employee Manager module is designed to make employee data management smooth and effortless.  Some of its features include debit and credit (payment and note), bank withdrawal and deposits, daybooks, petty cash book, ledgers, online bookkeeping.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/hostel_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/hotel.svg') !!}" alt="features"/>
							<h2>Hostel Manager</h2>
							<p>Monitor student accommodation with the Hostel manager module with many features like room allotment, room management, daily attendance register of hostel and hostel reports.</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/stu_par_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/family.svg') !!}" alt="features"/>
							<h2>Student/Parent Login</h2>
							<p>The Student/Parent Login Manager enables parents to be connected with the classroom activities and teachers of their students 24/7</p>
								</a>
						</div>
				
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/school_teacher_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/classroom.svg') !!}" alt="features"/>
							<h2>School/Teacher Login</h2>
							<p>The School-Teacher Login Manager is designed to make the management of the academic curriculum and student records stress-free and effortless. </p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center">
						<a href="{{ url('/stu_msg_manager') }}" class="next_page">
							<img src="{!! asset('public/images/icons/graduate.svg') !!}" alt="features"/>
							<h2>Student Inbox Manager</h2>
							<p>The Student Manager Inbox module allows the students to simply login with their unique passwords and access periodic updates class activities, timetable, teacher's notes and allocations</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center"> 
						<a href="{{ url('/seamless_website') }}" class="next_page">
							<img src="{!! asset('public/images/icons/webpage.svg') !!}" alt="features"/>
							<h2>Seamless Integration with Institute Website</h2>
							<p>The Cyber School Manager allows for the seamless integration of the school information system into the school website. This provides a single repository and URL for all the institution information and content</p>
							</a>
						</div>
					
					
						<div class="col-md-4 modules_block text-center"> 
						<a href="{{ url('/mobile_app') }}" class="next_page">
							<img src="{!! asset('public/images/icons/mobile-app.svg') !!}" alt="features"/>
							<h2>Mobile App for Student and Parents</h2>
							<p>With the tremendous growth in the use of mobile devices and applications, schools can communicate directly with most students and parents can on these devices</p>
							</a>
						</div>
					
				</div>
			</div>
		</section>
		<section class="footer_top">
		<div class="container">
			<div class="row">
				<div class="col-lg-8">
					<div class="fot_top">
						<p>CSM delivers the right solution for your school</p>
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