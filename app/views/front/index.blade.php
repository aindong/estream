@extends('layouts.default')

@section('content')
    <!--HEADER END-->

    <!--BANNER START-->

    <div class="banner">

        <ul class="bxslider">

            <li><img src="images/home1.jpg" alt=""> </li>

            <li><img src="images/home2.jpg" alt=""></li>

            <li><img src="images/home3.jpg" alt=""></li>

            <li><img src="images/home4.jpg" alt=""></li>

            <li><img src="images/home5.jpg" alt=""></li>

        </ul>

        <div class="newsletters">

            <h1>We provide seminars for you.</h1>

            <h4>Wide range of topic that you can see on our new website</h4>

            {{--<div class="subscribe">--}}

                {{--<input type="text" class="input-block-level">--}}

                {{--<button>Subscribe</button>--}}

            {{--</div>--}}

        </div>

    </div>

    <!--BANNER END-->

    <!--CONTANT START-->

    <div class="contant">

        {{--<!--SERVICES SECTION START-->--}}

        {{--<section>--}}

            {{--<div class="container">--}}

                {{--<!--SECTION HEADER START-->--}}

                {{--<div class="sec-header">--}}

                    {{--<h2>Our Services</h2>--}}

                    {{--<p>Take a look at what we have are doing</p>--}}

                    {{--<span></span>--}}

                    {{--<span></span>--}}

                    {{--<span></span>--}}

                {{--</div>--}}

                {{--<!--SECTION HEADER END-->--}}

                {{--<div class="row">--}}

                    {{--<!--SERVICE ITEM START-->--}}

                    {{--<div class="span4">--}}

                        {{--<div class="services">--}}

                            {{--<div class="header">--}}

                                {{--<i class="fa fa-tablet"></i>--}}

                                {{--<i class="fa fa-user inner-icon"></i>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<h3><a href="#">Expert teachers</a></h3>--}}

                                {{--<p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--SERVICE ITEM END-->--}}

                    {{--<!--SERVICE ITEM START-->--}}

                    {{--<div class="span4">--}}

                        {{--<div class="services">--}}

                            {{--<div class="header">--}}

                                {{--<i class="fa fa-tablet"></i>--}}

                                {{--<i class="fa fa-list-alt inner-icon"></i>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<h3><a href="#">Trusted certifications</a></h3>--}}

                                {{--<p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--SERVICE ITEM END-->--}}

                    {{--<!--SERVICE ITEM START-->--}}

                    {{--<div class="span4">--}}

                        {{--<div class="services">--}}

                            {{--<div class="header">--}}

                                {{--<i class="fa fa-tablet"></i>--}}

                                {{--<i class="fa fa-cogs inner-icon"></i>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<h3><a href="#">Start Learning</a></h3>--}}

                                {{--<p>UI improvements were the one aspect of WordPress's future that everyone I spoke to seemed to agree on: </p>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--SERVICE ITEM END-->--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</section>--}}

        {{--<!--SERVICES SECTION END-->--}}

        {{--<!--LATEST COURSES SECTION START-->--}}

        {{--<section class="gray-bg">--}}

            {{--<div class="container">--}}

                {{--<!--SECTION HEADER START-->--}}

                {{--<div class="sec-header">--}}

                    {{--<h2>Latest Courses</h2>--}}

                    {{--<p>Check Our Featured Courses</p>--}}

                    {{--<span></span>--}}

                    {{--<span></span>--}}

                    {{--<span></span>--}}

                {{--</div>--}}

                {{--<!--SECTION HEADER END-->--}}

                {{--<div class="customNavigation">--}}

                    {{--<a class="btn prev"><i class="fa fa-angle-left"></i></a>--}}

                    {{--<a class="btn next"><i class="fa fa-angle-right"></i></a>--}}

                {{--</div>--}}

                {{--<div id="owl-carousel" class="owl-carousel owl-theme">--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course1.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>9</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Management</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Build a Business Plan</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course2.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>51</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Music</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>How to play the guitar</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course3.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>20</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Marketing</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Marketing Management</p>--}}

                                {{--<span>$1200</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course4.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>8</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Holidays Education</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Holidays Education Course</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course1.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>15</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Management</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Build a Business Plan</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course2.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>63</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Music</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>How to play the guitar</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course3.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>19</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Marketing</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Marketing Management</p>--}}

                                {{--<span>$1200</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course4.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>25</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Holidays Education</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Holidays Education Course</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course1.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>13</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Management</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Build a Business Plan</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course2.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>17</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Music</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>How to play the guitar</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course3.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>31</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Marketing</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Marketing Management</p>--}}

                                {{--<span>$1200</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                    {{--<!--COURSE ITEM START-->--}}

                    {{--<div class="course">--}}

                        {{--<div class="thumb">--}}

                            {{--<a href="#"><img src="images/course4.jpg" alt=""></a>--}}

                            {{--<div class="price"><span>$</span>36</div>--}}

                        {{--</div>--}}

                        {{--<div class="text">--}}

                            {{--<div class="header">--}}

                                {{--<h4>Holidays Education</h4>--}}

                                {{--<div class="rating">--}}

                                    {{--<span>☆</span><span>☆</span><span>☆</span><span>☆</span><span>☆</span>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                            {{--<div class="course-name">--}}

                                {{--<p>Holidays Education Course</p>--}}

                                {{--<span>$800</span>--}}

                            {{--</div>--}}

                            {{--<div class="course-detail-btn">--}}

                                {{--<a href="#">Subscribe</a>--}}

                                {{--<a href="#">Detail</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                    {{--<!--COURSE ITEM END-->--}}

                {{--</div>--}}

            {{--</div>--}}

        {{--</section>--}}

        {{--<!--LATEST COURSES SECTION END-->--}}

        {{--<!--Registration FORM SECTION START-->--}}

        {{--<section class="form">--}}

            {{--<div class="form-contant relative">--}}

                {{--<div class="container form-fields">--}}

                    {{--<div class="row">--}}

                        {{--<div class="span6">--}}

                            {{--<img src="images/student.png" alt="">--}}

                        {{--</div>--}}

                        {{--<div class="span6">--}}

                            {{--<div class="student-form">--}}

                                {{--<div class="header">--}}

                                    {{--<h2>Registration Form</h2>--}}

                                    {{--<p>Learn how to build websites &amp; apps, write code or start a business.</p>--}}

                                {{--</div>--}}

                                {{--<div class="form-data">--}}

                                    {{--<ul>--}}

                                        {{--<li><input type="text" class="input-block-level" placeholder="Name"></li>--}}

                                        {{--<li><input type="text" class="input-block-level" placeholder="Email ID"></li>--}}

                                        {{--<li><input type="text" class="input-block-level" placeholder="Phone Number"></li>--}}

                                        {{--<li><input type="text" class="input-block-level" placeholder="Select Course"></li>--}}

                                        {{--<li>--}}

                                            {{--<div class="gender">--}}

                                                {{--<span>--}}

                                                    {{--<input name="gender" type="radio" value="" id="male">--}}

                                                    {{--<label for="male">Male</label>--}}

                                                {{--</span>--}}

                                                {{--<span>--}}

                                                    {{--<input name="gender" type="radio" value="" id="female">--}}

                                                    {{--<label for="female">Female</label>--}}

                                                {{--</span>--}}

                                            {{--</div>--}}

                                            {{--<button>Submit</button>--}}

                                        {{--</li>--}}

                                    {{--</ul>--}}

                                {{--</div>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                    {{--</div>--}}

                {{--</div>--}}

                {{--<div id="bg1" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>--}}

                {{--<div id="bg2" data-0="background-position:0px 0px;" data-end="background-position:0px -1500px;"></div>--}}

                {{--<div id="bg3" data-0="background-position:0px 0px;" data-end="background-position:0px -900px;"></div>--}}

            {{--</div>--}}

        {{--</section>--}}

        {{--<!--STUDENT FORM SECTION END-->--}}

        <!--OUR TEACHERS SECTION START-->
        <section>
            <div class="container">
                <!--SECTION HEADER START-->
                <div class="sec-header">
                    <h2>Administrators</h2>
                    <!-- <p>Discover courses by topic</p> -->
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!--SECTION HEADER END-->
                <div class="row">
                    <!--TEACHERS THUMB START-->
                    <div class="span3">
                        <div class="teachers">
                            <!-- <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                            </div> -->
                            <div class="thumb">
                                <a href="#"><img src="images/admin1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">Dexter Manzano</a></h2>
                                <p>Assistant Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <!--TEACHERS THUMB END-->
                    <!--TEACHERS THUMB START-->
                    <div class="span3">
                        <div class="teachers">
                            <!-- <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                            </div> -->
                            <div class="thumb">
                                <a href="#"><img src="images/admin2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">David V. Lip</a></h2>
                                <p>Technical Staff</p>
                            </div>
                        </div>
                    </div>
                    <!--TEACHERS THUMB END-->
                    <!--TEACHERS THUMB START-->
                    <div class="span3">
                        <div class="teachers">
                            <!-- <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                            </div> -->
                            <div class="thumb">
                                <a href="#"><img src="images/admin3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">Apolinario Saymo</a></h2>
                                <p>Seminar Coordinator</p>
                            </div>
                        </div>
                    </div>
                    <!--TEACHERS THUMB END-->
                    <!--TEACHERS THUMB START-->
                    <div class="span3">
                        <div class="teachers">
                            <!-- <div class="social-icons">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-flickr"></i></a>
                                <a href="#"><i class="fa fa-dribbble"></i></a>
                                <a href="#"><i class="fa fa-google-plus"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-vimeo-square"></i></a>
                            </div> -->
                            <div class="thumb">
                                <a href="#"><img src="images/admin4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#">Raffy S. Aganon</a></h2>
                                <p>Liaison officer</p>
                            </div>
                        </div>
                    </div>
                    <!--TEACHERS THUMB END-->
                </div>
            </div>
        </section>
        <!--OUR TEACHERS SECTION END-->

        <!--PAPULAR POSTS SECTION START-->

        <section class="papular-post">

            <div id="bg4" data-0="background-position:0px 0px;" data-end="background-position:0px -1000px;"></div>

            <div class="container post-contant">

                <!--SECTION HEADER START-->

                <div class="sec-header">

                    <h2>Popular Posts</h2>

                    <p>Latest From Blog</p>

                    <span></span>

                    <span></span>

                    <span></span>

                </div>

                <!--SECTION HEADER END-->

                <div class="row">

                    <div class="span6">

                        <div class="post">

                            <div class="thumb"><img src="images/post.png" alt=""></div>

                            <!--POST HEADER START-->

                            <div class="header">

                                <!--POST DATE START-->

                                <div class="post-date">

                                    <p>January<span>11</span>2015</p>

                                </div>

                                <!--POST DATE START-->

                                <div class="icons">

                                    <ul>

                                        <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span></li>

                                        <li><a href="#"><i class="fa fa-link"></i></a></li>

                                        <li><a href="#"><i class="fa fa-comments-o"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                            <!--POST HEADER END-->

                            <div class="text">

                                <h2>Association of Educators for Interrelated Research and Studies, Inc.</h2>

                                <h5>Apolinario S. Saymo / President</h5>

                                <p>To promote love of teaching and learning and serves as an activity center for students and professionals who value discipline in studies, review, and research </p>

                                <a href="#" class="more">Read More</a>

                            </div>

                        </div>

                    </div>

                    <div class="span6">

                        <div class="post">

                            <div class="thumb">

                                <img src="images/post.png" alt="">

                            </div>

                            <!--POST HEADER START-->

                            <div class="header">

                                <!--POST DATE START-->

                                <div class="post-date">

                                    <p>February<span>01</span>2015</p>

                                </div>

                                <!--POST DATE START-->

                                <div class="icons">

                                    <ul>

                                        <li><a href="#"><i class="fa fa-heart-o"></i></a><span class="notification">25</span></li>

                                        <li><a href="#"><i class="fa fa-link"></i></a></li>

                                        <li><a href="#"><i class="fa fa-comments-o"></i></a></li>

                                    </ul>

                                </div>

                            </div>

                            <!--POST HEADER END-->

                            <div class="text">

                                <h2>Association of Educator for Interrelated Research and Studies (AEIRS)</h2>

                                <h5>Dexter L. Manzano / Vice-President</h5>

                                <p>To promote materials and extension services to help the community obtain information meeting their personal, educational, and professional needs. </p>

                                <a href="#" class="more">Read More</a>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--PAPULAR POSTS SECTION END-->

        <!--GALLERY AND NEXT COURSES SECTION START-->

        <section class="gray-bg">

            <div class="container">

                <div class="row">

                    <div class="span4">

                        <div class="box">

                            <h2>Latest Seminars</h2>

                            <ul class="event-galley">

                                <!--LIST ITEM START-->
                                @foreach($seminars as $seminar)

                                <li>

                                    <div class="thumb">

                                        <a href="#"><img alt="" src="images/event1.png"></a>

                                    </div>

                                    <div class="text">

                                        <p>{{ date('D M d', strtotime($seminar->start_at)) }}</p>

                                        <h4>{{ $seminar->title }}</h4>

                                        <!-- <a href="#" class="tags">Equipment</a>

                                        <a href="#" class="tags">tips</a> -->

                                    </div>

                                </li>

                                @endforeach

                                <!--LIST ITEM END-->

                            </ul>

                        </div>

                    </div>

                    <div class="span4">

                        <div class="box lesson">

                            <h2>About Trial Lessons</h2>

                            <iframe src="http://player.vimeo.com/video/10734556?title=0&amp;byline=0&amp;portrait=0&amp"></iframe>

                            <div class="text">

                                <h3 class="pull-left">Watch Seminars </h3>

                                <span class="pull-right">Free!</span>

                                <p>To promote love of teaching and learning and serves as an activity center for students and professionals who value discipline in studies, review, and research. To promote materials and extension services to help the community obtain information meeting their personal, educational, and professional needs. </p>

                            </div>

                        </div>

                    </div>

                    <div class="span4">

                        <div class="box">

                            <h2>Latest Posts</h2>

                            <ul class="event-galley next-course">

                                <!--LIST ITEM START-->

                                @foreach($articles as $article)

                                <li>

                                    <div class="thumb">

                                        <a href="#"><img alt="" src="images/event3.png"></a>

                                    </div>

                                    <div class="text">

                                        <p>{{ date('D M d', strtotime($article->start_at)) }}</p>

                                        <h4>{{ $article->title }}</h4>

                                        <!-- <a href="#" class="tags">Equipment</a>

                                        <a href="#" class="tags">tips</a> -->

                                    </div>

                                </li>

                                @endforeach

                                <!--LIST ITEM END-->

                            </ul>

                        </div>

                    </div>

                </div>

            </div>

        </section>

        <!--GALLERY AND NEXT COURSES SECTION END-->

        <!--TESTIMONIALS SECTION START-->

        <section class="testimonials">

            <div class="container testimonial-contant">

                <div class="sec-header">

                    <h2>Read Our Testimonials</h2>

                    <p>What Students say</p>

                    <span></span>

                    <span></span>

                    <span></span>

                </div>

                <div class="testimonial-data">

                    <ul class="bxslider2">

                        <li>

                            <div class="testimonial-text">

                                <p>To promote love of teaching and learning and serves as an activity center for students and professionals who value discipline in studies, review, and research. To promote materials and extension services to help the community obtain information meeting their personal, educational, and professional needs. </p>

                                <a href="#">Naiana Ansa</a>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial-text">

                                <p>To promote love of teaching and learning and serves as an activity center for students and professionals who value discipline in studies, review, and research </p>

                                <a href="#">Jasmine Dou</a>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial-text">

                                <p>I'm learning as I go along in this program and developing career interests through each phase of the process. I do hope to find a more secure place in the working world upon completion of my degree. </p>

                                <a href="#">David john</a>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial-text">

                                <p>The program requirements were very “do-able” with my work schedule and I was able to transfer many credits from my AS degree. I also liked the idea of obtaining a degree from a university with an excellent reputation as opposed to one of the “online only” schools that advertise heavily on TV. </p>

                                <a href="#">Roth Brown</a>

                            </div>

                        </li>

                        <li>

                            <div class="testimonial-text">

                                <p>The online coursework has been the most enjoyable aspect of the program. They are just as stimulating as those classes taken on campus! I've just finished my third semester and the time as flown by. </p>

                                <a href="#">Timothy Smith</a>

                            </div>

                        </li>

                    </ul>

                    <div id="bx-pager">

                        <a data-slide-index="0" href="#">

                            <div class="thumb">

                                <img src="images/student-testi1.jpg" alt="">

                            </div>

                            <p>Naiana Ansa</p>

                            <p class="color">guitarist</p>

                        </a>

                        <a data-slide-index="1" href="#">

                            <div class="thumb">

                                <img src="images/student-testi2.jpg" alt="">

                            </div>

                            <p>Jasmine Dou</p>

                            <p class="color">student</p>

                        </a>

                        <a data-slide-index="2" href="#">

                            <div class="thumb">

                                <img src="images/student-testi3.jpg" alt="">

                            </div>

                            <p>David john</p>

                            <p class="color">student</p>

                        </a>

                        <a data-slide-index="3" href="#">

                            <div class="thumb">

                                <img src="images/student-testi4.jpg" alt="">

                            </div>

                            <p>Roth Brown</p>

                            <p class="color">Artist</p>

                        </a>

                        <a data-slide-index="4" href="#">

                            <div class="thumb">

                                <img src="images/student-testi5.jpg" alt="">

                            </div>

                            <p>Timothy Smith</p>

                            <p class="color">Smithies</p>

                        </a>

                    </div>

                </div>

                <div class="side-imgage"><img src="images/testimonials-bg2.png" alt=""></div>

            </div>

            <div id="bg5" data-0="background-position:0px 0px;" data-end="background-position:0px -1800px;"></div>

        </section>

        <!--TESTIMONIALS SECTION END-->

        <!--FOLLOW US SECTION START-->

        <!-- <section class="follow-us">

            <div class="container">

                <div class="row">

                    <div class="span4">

                        <div class="follow">

                            <a href="#">

                                <i class="fa fa-facebook"></i>

                                <div class="text">

                                    <h4>Follow us on Facebook</h4>

                                    <p>Faucibus toroot menuts</p>

                                </div>

                            </a>

                        </div>

                    </div>

                    <div class="span4">

                        <div class="follow">

                            <a href="#">

                                <i class="fa fa-google"></i>

                                <div class="text">

                                    <h4>Follow us on Google Plus</h4>

                                    <p>Faucibus toroot menuts</p>

                                </div>

                            </a>

                        </div>

                    </div>

                    <div class="span4">

                        <div class="follow">

                            <a href="#">

                                <i class="fa fa-linkedin"></i>

                                <div class="text">

                                    <h4>Follow us on Linkedin</h4>

                                    <p>Faucibus toroot menuts</p>

                                </div>

                            </a>

                        </div>

                    </div>

                </div>

            </div>

        </section> -->

        <!--FOLLOW US SECTION END-->

    </div>

    <!--CONTANT END-->
@stop

@section('page-script')
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="js/owl.carousel.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <script src="js/functions.js"></script>
@stop