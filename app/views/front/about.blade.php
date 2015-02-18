@extends('layouts.default')

@section('page-style')
    <!-- PIE CHART -->
    <link href="css/chart.css" rel="stylesheet" type="text/css">
    <style>
        .widerModal
        {
            width: 700px;
            margin-top: -300px !important;
            margin-left:  -350px !important;
        }

        .modal-body {
            padding-left: 33px;
            padding-right: 10px;
        }

        .modal-body ul li {
            list-style: circle;
        }

        .higherWider {
            width:970px;
            /*margin-top: -250px !important;*/
            margin-left:  -485px !important;
        }
    </style>
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>About Us</h2>
            <p>Everything you need to know and learn about our organization</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <!--INTRO SECTION START-->
        <section class="gray-bg">
            <div class="container">
                <div class="row">
                    <div class="span6">
                        <div class="intro">
                            <h2>Everything you need to know</h2>
                            <p>Established under the mandate of <b>Art III, Sec. 8 of the Constitution</b>, chosen educators from the different institutions of learning organized a training body named Association of Educators for Interrelated Research and Studies, Inc. Its office is located at Rm. 209 Llabres Bldg., Blk. 12, Lot 19 Verdant Heights, 
                            Multinational Village, Paraňaque City. Like any other organizations, the Association of Educators for Interrelated Research and Studies, Inc. (AEIRS) is registered at the Securities and Exchange Commission as a non-stock and nonprofit organization with a Company Registration Number CN201126786. It also bears TIN # 415-618-325-000 issued by the Bureau of Internal Revenue.</p>
                        </div>
                    </div>
                    <div class="span6">
                        <div class="mac">
                            <ul class="bxslider">
                                <li>
                                    <img src="/images/1.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/images/2.jpg" alt="">
                                </li>
                                <li>
                                    <img src="/images/3.jpg" alt=""/>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="span12">
                        <div class="intro">
                            <h2>Objectives</h2>
                            <p>1)  To promote love of teaching and learning and serves as an activity center for students and professionals who value discipline in studies, review, and research;<br>
                                2)  To promote materials and extension services to help the community obtain information meeting their personal, educational, and professional needs; and<br>
                                3)  To encourage career development and advancement among students and professionals.</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--INTRO SECTION END-->
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
                                <a href="#dexter" role="button" data-toggle="modal"><img src="images/admin1.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#dexter" role="button" data-toggle="modal">Dexter Manzano</a></h2>
                                <p>Assistant Director</p>
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
                                <a href="#david" role="button" data-toggle="modal"><img src="images/admin2.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#david" role="button" data-toggle="modal">David V. Lip</a></h2>
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
                                <a href="#apolinario" role="button" data-toggle="modal"><img src="images/admin3.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#apolinario" role="button" data-toggle="modal">Apolinario Saymo</a></h2>
                                <p>Seminar Director</p>
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
                                <a href="#raffy" role="button" data-toggle="modal"><img src="images/admin4.jpg" alt=""></a>
                            </div>
                            <div class="text">
                                <h2><a href="#raffy" role="button" data-toggle="modal">Raffy S. Aganon</a></h2>
                                <p>Liaison Officer</p>
                            </div>
                        </div>
                    </div>
                    <!--TEACHERS THUMB END-->
                </div>
            </div>
        </section>
        <!--OUR TEACHERS SECTION END-->

        <!-- Modal -->
        <div id="apolinario" class="modal hide fade higherWider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Admin Information</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h1>Apolinario S. Saymo</h1>
                    <ul>
                        <li>Bachelor of Arts in Journalism at the Manuel L. Quezon University</li>
                        <li>Bachelor of Secondary Education to quality him to teach in Secondary School</li>
                        <li>Professional Board Examination for teacher</li>
                        <li>Department of Education, Culture and Sports during which time for obtaining his Masteral of English</li>
                        <li>Doctor Of Educational with Major In Educational Management </li>
                    </ul>
                    <br/>
                    <p>He published articles relative to his profession and has written various books for different Educational Levels.</p>
                    <br/>
                    <ul>
                        <li>ABCs of Computer and English I-IV for High School Student</li>
                        <li>English plus Study and Thinking Skills writing</li>
                        <li>Effective speech communication</li>
                        <li>Effective writing</li>
                        <li>Technical Writing Philippines Literature</li>
                        <li>World Literature</li>
                    </ul>
                    <p>
                        He is the Editor-In-Chief of a Local newspaper and President of Different Professional Organization.
                        The Author Retired as an Associate Professor of the English Department At Tarlac State University
                    </p>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- MODAL END -->

        <!-- Modal -->
        <div id="dexter" class="modal hide fade higherWider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Admin Information</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h1>Dexter Lucas Manzano</h1>
                    <ul>
                        <li>Ed.D. in educational management(units)</li>
                        <li>Master of Arts in Education Major in Filipino</li>
                        <li>Bachelor of Secondary Education Major in Physical Education Minor in Filipino</li>
                        <li>LET Passer</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- MODAL END -->

        <!-- Modal -->
        <div id="david" class="modal hide fade higherWider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Admin Information</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h1>David Lip</h1>
                    <ul>
                        <li>Master of Arts In Education </li>
                        <li>BSAB – English in Minor in Theater arts</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- MODAL END -->

        <!-- Modal -->
        <div id="raffy" class="modal hide fade higherWider" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Admin Information</h3>
            </div>
            <div class="modal-body">
                <div class="container">
                    <h1>Raffy S. Aganon</h1>
                    <ul>
                        <li>BScience in Secondary Education</li>
                        <li>Master of Arts in Education</li>
                        <li>Doctor Of Philosophy(linguistics)</li>
                    </ul>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
            </div>
        </div>
        <!-- MODAL END -->


    </div>
    <!--CONTANT END-->
@stop

@section('page-script')
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!--required only if using cookies-->
    <script type="text/javascript" src="js/jquery.accordion.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script src="js/functions.js"></script>
@stop