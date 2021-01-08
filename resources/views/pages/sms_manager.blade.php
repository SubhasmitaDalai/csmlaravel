@extends('layouts.master')
@section('content')
 <section id="inner_heading">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page_heading">
                    <h2>SMS/EMAIL MANAGER</h2>
                </div>
            </div>
        </div>
</section>
<section class="whycsm">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="content_container">
                    <h1>SMS/E-mail Manager</h1>
                    <p>The Cyber School Manager SMS/E-mail Manager allows the user to SMS and email notifications to recipients e.g. parents, teachers, students etc. for specific alerts. It allows for sending of bulk SMSs making it convenient. Inform parents about their progress of their child planned meetings and reminders through bulk SMS.</p>
                    <div class="about_us">
                        <h1>Key Features</h1>
                        <ul>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Automated in-built Messaging </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Fast and Convenient Message sending method </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Efficient Communication channel for administration, teachers, student and parents </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Student communication backup </p></li>
                            <li><p> <i class="fa fa-key" aria-hidden="true"></i> Early notification on school events, news, holidays etc. </p></li>
                        </ul>
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