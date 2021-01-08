@extends('layouts.master')
@section('content')

 <section id="inner_heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page_heading">
                    <h2>ADMISSION MANAGER</h2>
                </div>
            </div>
        </div>
</section>
<section class="whycsm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="content_container">
                    <h1>Admission Manager</h1>
                    <p>Our Admission Manager module is the solution for streamlining the admission process for institutions. It facilitates the management of admission related activities such as admission enquiry, student admission, fee collection, seat allocation, admission cancellations, credit transfers etc. The Cyber School Manager Admission Manager allows for easy management of registration, tracking of application status and more.</p>
                    <div class="about_us">
                        <h1>Key Features</h1>
                        <ul>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Single Entry Admission </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Unique Student ID </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Comprehensive admission form </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Upload student photo and documents </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Manage Key Contacts </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Manage Parents/Guardian </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Fully Customizable for each institutions </p></li>
                        </ul>
                    </div>
                   
                    <div class="features">
                        <h2><span>Powerful </span> Reports</h2>
                        <p>Easy generation of powerful reports using visual charts providing useful insights on applicants biographic and demographic data, seat allocation etc</p>
                        <h2><span>Online </span> Forms</h2>
                        <p>Easy to fill admission forms that can be customized and shared widely across the web with prospecting applicants.</p>
                        <h2><span>Secure Cloud </span>System</h2>
                        <p>Easy access to student admission data from a secure and scalable cloud-based management system.</p>
                        <h2><span>Mobile </span> App</h2>
                        <p>Access admission data including profile data, exam results, send emails, alerts, SMS and push notifications straight from a mobile device.</p>
                        <h2><span>Online </span> Applications</h2>
                        <p>The software allows easy online application process for prospecting students with easy to fill online forms and real-time search and retrieval of data. Allows for multiple admissions at the same time.</p>
                        <h2><span>Application Status </span> Tracking</h2>
                        <p>Prospecting students can easily track the status of their application during the entire phases of the application from inquiry, application, and admission to enrollment.</p>
                        <h2><span>Enrollment and </span> Registration</h2>
                        <p>Automatically set rules and regulations for managing the enrolment and registration of students for various courses or classes. Register both new and transfer students by automatically capturing data on student profiles and credit transfers.</p>
                        <h2><span>Seat </span> Allocation</h2>
                        <p>Successful student applicants can be allocated seats for a number of courses or classes or put on a waitlist based on specific criteria.</p>
                        <h2><span>Set Admission </span> Rules</h2>
                        <p>Simplify the admission evaluation process with easy access to student data streamlining the approval or rejection of applications for a particular course.</p>
                        <h2><span>Schedule </span> Interviews</h2>
                        <p>Use an online calendar to schedule interviews for shortlisted student applicants indicating the date, time and venue. Automatically send shortlisted applicants personalized invitation letters for interviews.</p>
                        <h2><span>Managing </span> Documents</h2>
                        <p>Easy and secure uploading and collection of documents such as certificates, application forms, photos through the web or mobile applications.</p>
                        <h2><span>Automatic </span> Alerts</h2>
                        <p>Send applicants emails, SMS alerts and push notifications and stay connected with them at every stage of the admission process from the web or mobile devices.</p>
                        <h2><span>Payment of </span> Fees</h2>
                        <p>Send automatic invoices and notifications to prospecting applicants to pay fees online conveniently during the admission process.</p>
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