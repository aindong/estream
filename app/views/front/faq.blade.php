@extends('layouts.default')

@section('page-style')
    <!-- PIE CHART -->
    <link href="css/chart.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>FAQs</h2>
            <p>Learn more Frequently asked Questions</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="row">
                <div class="span8">
                    <div class="faq-2">
                        <h3>What is the difference between Live and On Demand?</h3>
                        <p>Unable to attend a Web seminar during the scheduled time? On Demand Web seminars provide you the flexibility to extend your professional learning when it is most convenient. On Demand Web seminars are recorded during the actual Live event and include all audio, video, chat discussion, and actions within the presentation.</p>
                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section1">--}}
                            {{--<p>we provide courses at affordable prices</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}

                        @foreach($faqs as $k => $faq)
                            <div class="accordion_cp" id="section{{{ $k+1 }}}">
                                <p>{{{ $faq->question }}}</p><span><img src="/images/faq-pen.png" alt=""/></span>
                            </div>
                            <div class="contain_cp_accor">
                                <div class="content_cp_accor">
                                    <p>{{{ $faq->answer }}}</p>
                                </div>
                            </div>
                        @endforeach

                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section2">--}}
                            {{--<p>WE PROVIDE A VARIETY OF COURSES cHECK OUT THE COUSES NOW</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}
                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section3">--}}
                            {{--<p>We have world class teaching facilities</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}
                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section4">--}}
                            {{--<p>Learning Management</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}
                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section5">--}}
                            {{--<p>Learn Cooking Basics Online</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}
                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section6">--}}
                            {{--<p>What you have to know about MBA</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>--}}
                                {{--<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}
                        {{--<!--ACORDIAN DATE START-->--}}
                        {{--<div class="accordion_cp" id="section7">--}}
                            {{--<p>WE PROVIDE A VARIETY OF COURSES cHECK OUT THE COUSES NOW</p><span><img src="images/faq-pen.png" alt=""></span>--}}
                        {{--</div>--}}
                        {{--<div class="contain_cp_accor">--}}
                            {{--<div class="content_cp_accor">--}}
                                {{--<p>Lorem ipsum dolor sit amet, ius minim gubergren ad. At mei sumo sonet audiam, ad mutat elitr platonem vix. Ne nisl idque fierent vix. Ferri clita ponderum ne duo, simul appellantur reprehendunt mea an. An gloriatur vulputate eos, an sed fuisset, in quo inani eligendi.</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<!--ACORDIAN DATE END-->--}}
                    </div>
                </div>
                <div class="span4">
                    <!--SIDEBAR START-->
                    <div class="sidebar">
                        <!--PAPULAR POST WIDGET START-->
                        <div class="widget widget-papular-post">

                            <h2>Latest Seminar</h2>

                            @foreach($seminars as $seminar)

                            <ul>

                                <!--LIST ITEM START-->

                                <li>

                                    <h4>{{ $seminar->title }}</h4>

                                    <div class="thumb">

                                        <a href="/seminars/{{ $seminar->id }}"><img src="images/papular-post.jpg" alt=""></a>

                                    </div>

                                    <div class="text">

                                        <p class="date">{{ date('D M d', strtotime($seminar->start_at)) }}</p>

                                        <p>{{ substr($seminar->description, 0, 200) }}...</p>

                                    </div>

                                </li>

                                <!--LIST ITEM END-->

                            </ul>

                            @endforeach

                        </div>
                        <!--PAPULAR POST WIDGET END-->
                    </div>
                    <!--SIDEBAR END-->
                </div>
            </div>
        </div>
        <!--FOLLOW US SECTION START-->
        <!-- <section class="follow-us">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="follow">
                            <a href="faq.html#">
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
                            <a href="faq.html#">
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
                            <a href="faq.html#">
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
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!--required only if using cookies-->
    <script type="text/javascript" src="js/jquery.accordion.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script src="js/functions.js"></script>
@stop