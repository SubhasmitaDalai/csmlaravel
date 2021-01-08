<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
    	
		$siteTitle = 'Online Best School Management Software | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
		
		return view('pages/index')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function aboutus()
    {
    	$siteTitle = 'Best Online School ERP System | Online School Management System';
    	$siteKeywords = 'school crm,school erp system';
    	$siteDescription = 'School ERP System to organize all your School Management Activities like fee payment, admission, attendance, exam, time table etc for smooth running.';
		return view('pages/aboutus')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function whycsm()
    {
    	$siteTitle = 'Online School Software | School Management System';
    	$siteKeywords = 'school software';
    	$siteDescription = 'One stop solution for all your school management activities. Easy, Fast & Secure way to manage processes online.';
		return view('pages/whycsm')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function our_clients()
    {
    	$siteTitle = 'Online Best School Management Software | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
		return view('pages/our-clients')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function faq()
    {
    	$siteTitle = 'Online Best School Management Software | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
		return view('pages/faq')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function partner_csm()
    {
    	$siteTitle = 'Online Best School Management Software | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
		return view('pages/partner_csm')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function account_manager()
    {
    	$siteTitle = 'Accounting Management software | Cyber School Manager';
    	$siteKeywords = 'Accounting Management Software';
    	$siteDescription = 'Accounting Management Software offers a quick and efficient solution for managing accounts';
		return view('pages/account_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function admission_manager()
    {
    	$siteTitle = 'Admission Manager | School Software - Cyber School Manager';
    	$siteKeywords = 'School Admission Management';
    	$siteDescription = 'School Admission Management made easy with the help of CSM. Fast, Easy to Use & Reliable. Request a free demo today.';
		return view('pages/admission_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function attendance_manager()
    {
    	$siteTitle = 'Best Attendance Manager Software - Cyber School Manager';
    	$siteKeywords = 'Attendance Manager software';
    	$siteDescription = 'Attendance Manager software allows you to manage all your classroom attendance in an efficient manner. Book your Free Demo today!';
		return view('pages/attendance_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function employee_manager()
    {
    	$siteTitle = 'Employee Manager App |  school administration software';
    	$siteKeywords = 'Employee Manager App';
    	$siteDescription = "CSM's Employee Manager app is designed to make employee data management smooth and effortless.";
		return view('pages/employee_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}public function exam_manager()
    {
    	$siteTitle = 'Best Exam Manager Software - Cyber School Manager';
    	$siteKeywords = 'Exam Manager Software';
    	$siteDescription = 'Exam Manager Software (CSM) helps you manage your exams  effeciently. A School Software that is safe, secure and user-friendly taking care of all your needs.';
		return view('pages/exam_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function fees_manager()
    {
    	$siteTitle = 'Best Fee Manager Software | Cyber School Manager';
    	$siteKeywords = 'Fee Management Software';
    	$siteDescription = 'School Fees Payment is made easy with the help of this online school management system.
        Get your Free Demo today!';
		return view('pages/fees_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function hostel_manager()
    {
    	$siteTitle = ' Hostel Management Software | Cyber School Manager';
    	$siteKeywords = 'Hostel Management Software';
    	$siteDescription = 'The Hostel Manager software is a web-based solution for handling every facet of student accommodation. Request a free demo today!';
		return view('pages/hostel_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function library_manager()
    {
    	$siteTitle = 'Best Library Manager Software  | Cyber School Manager';
    	$siteKeywords = 'library Manager software';
    	$siteDescription = 'Online School Software that helps you manage school library at your fingertips. ';
		return view('pages/library_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function mobile_app()
    {
    	$siteTitle = 'Best School Management App- Cyber School Manager';
    	$siteKeywords = 'school management app';
    	$siteDescription = 'CSM provides a dedicated school management app on mobile so that parents can easily access school related information such as assignments , grades etc.';
		return view('pages/mobile_app')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function payroll_manager()
    {
    	$siteTitle = 'Payroll Manager Software | Cyber School Manager';
    	$siteKeywords = 'Payroll Manager Software,school administration software';
    	$siteDescription = 'CSM Payroll Manager Software enables you to manage all your payroll & school administration efficiently.';
		return view('pages/payroll_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function privacy_policy()
    {
    	$siteTitle = 'Privacy Policy | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Cyber School Manager App provides Students and Parents engagement with School and Teachers in a very efficient manner. Parents gets regular Alerts and Notifications. Student daily Attendance and Activity details is available.';
		return view('pages/privacy-policy')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}public function school_teacher_manager()
    {
    	$siteTitle = 'Online Best School Management Software | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
		return view('pages/school_teacher_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function seamless_website()
    {
    	$siteTitle = 'Seamless Integration | school administration software';
    	$siteKeywords = 'school administration software';
    	$siteDescription = 'CSM is one of the most popular School administration software due to its Seamless Integration with website.';
		return view('pages/seamless_website')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function services()
    {
    	$siteTitle = 'Service | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Cyber School Manager App provides Students and Parents engagement with School and Teachers in a very efficient manner. Parents gets regular Alerts and Notifications. Student daily Attendance and Activity details is available.';
		return view('pages/services')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function sms_manager()
    {
    	$siteTitle = 'SMS | E-mail Manager Software - School Software';
    	$siteKeywords = 'online school management system';
    	$siteDescription = "CSM School Management Software has a SMS/Email manager that sends notification to Parent/Teacher regarding child's activities.";
		return view('pages/sms_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function stock_manager()
    {
    	$siteTitle = 'Online Best School Management Software | Cyber School Manager';
    	$siteKeywords = 'school accounting software';
    	$siteDescription = 'Cyber School Manager enables your to manage and keep a track of your assets online. It is regarded as one of the best Stock & school Accounting Software.';
		return view('pages/stock_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function stu_msg_manager()
    {
    	$siteTitle = 'Top Stock Manager Software | School Accounting Software';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
		return view('pages/stu_msg_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function support()
    {
    	$siteTitle = 'Support | Cyber School Manager';
    	$siteKeywords = 'school management software,school management app';
    	$siteDescription = 'Cyber School Manager App provides Students and Parents engagement with School and Teachers in a very efficient manner. Parents gets regular Alerts and Notifications. Student daily Attendance and Activity details is available.';
		return view('pages/support')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
	public function time_table_manager()
    {
    	$siteTitle = 'Best Time Table Manager App | Time Table Management Software';
    	$siteKeywords = 'Time Table Management Software';
    	$siteDescription = 'Time Table Management software organizes and streamlines your school time activities. School Time Table Software is the need of the hour and reduces a large amount of workload of the teachers';
		return view('pages/time_table_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

	}
    public function stu_par_manager()
    {
        $siteTitle = 'Top Stock Manager Software | School Accounting Software';
        $siteKeywords = 'school management software,school management app';
        $siteDescription = 'Organize, Optimize & Streamline your School Activities with our cloud based School Management Software and dedicated mobile app.';
        return view('pages/stu_par_manager')->with(compact('siteKeywords','siteDescription','siteTitle')); 

    }
	
}

