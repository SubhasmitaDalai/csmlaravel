@extends('layouts.master')
@section('content')

 <section id="inner_heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page_heading">
                    <h2>STUDENT INBOX</h2>
                </div>
            </div>
        </div>
</section>
<section class="whycsm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="content_container">
                    <h1>Student Inbox Manager</h1>
                    <p>The Student Manager Inbox module is designed to cater to the key needs of the students. It allows the students to simply login with their unique passwords and access periodic updates class activities, timetable, teacher's notes and allocations.</p>
                    <p>Through the Student Manager Inbox the administration can inform students on exam schedules, details of fee payment, library fines and changes in class systems or warnings on discipline cases. The students can find out details on library records or school transport availability through this module.</p>
                    <p>The Student Manager Inbox is one of the most powerful features of the Cyber School Manager. It allows students to stay connected to their teachers, classroom and administration 24/7. With this module there is free flow of information among students, their teachers and the school administration.</p>
                    <p>The school administration can fully customize the information shared through the student Manager Inbox to include student information, classroom assignments, school calendar, grades, attendance data plus a message board.</p>
                    <div class="features">
                        <h2><span>Keeping track of student </span> Progress</h2>
                        <p>When students needed information on changes in school policies, class assignments, notes and activities they would go straight to the teacher/instructor or administrator. With the Student manager Inbox students can get up-to-date information anywhere anytime online at their convenience. The students can keep track of their grades, request for transcripts, attendance and performance reports. The administrators and teachers can save time on repetitive tasks and focus more time improving standards of education.</p>
                        <h2><span>Streamline </span> Communication</h2>
                        <p>If students have any concerns about assignments, school projects, homework that cannot wait for the next school day they can get in-touch with the teachers directly. They can participate in improving the learning process by asking questions, making suggestions or comments related to class activities, testing and grading, attendance and discipline. The student Manager Inbox will connect the students, teachers and administrators and they share messages directly enhancing learning.</p>
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