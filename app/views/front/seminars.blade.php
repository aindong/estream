@extends('layouts.default')

@section('page-style')
    <!-- PIE CHART -->
    <link href="css/chart.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Seminars</h2>
            <p>Learn more of recent seminars</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="event-page">
                @foreach($seminars as $seminar)
                    <!--EVENT START-->
                    <div class="row events">
                        <div class="span6">
                            <div class="thumb">
                                
                                @if($seminar->image)
                                    <a href="#"><img src="/public/uploads/seminar/{{ $seminar->image }}" alt=""></a>
                                @else
                                    <a href="#"><img src="images/events1.jpg" alt=""></a>
                                @endif
                            </div>
                        </div>
                        <!--EVENT CONTANT START-->
                        <div class="span6">
                            <div class="text">
                                <!--EVENT HEADER START-->
                                <div class="event-header">
                                    <span>{{ date('D M d', strtotime($seminar->start_at)) }}</span>
                                    <h2><a href="/seminars/{{{ $seminar->id }}}">{{ $seminar->title }}</a></h2>
                                    <div class="data-tags">
                                        {{--<a href="#"></a>--}}
                                    </div>
                                </div>
                                <!--EVENT HEADER END-->
                                <!--EVENT BODY START-->
                                <div class="event-body">
                                    <p>{{ substr($seminar->description, 0, 200) }}...</p>
                                </div>
                                <!--EVENT BODY END-->
                                <!--EVENT VANUE START-->
                                <div class="event-vanue">
                                    <table>
                                        <tr>
                                            <td><p class="color">Date:</p></td>
                                            <td><a href="#"><i class="fa fa-calendar-o"></i>{{ date('d M, Y', strtotime($seminar->start_at)) }} - {{ date('d M, Y', strtotime($seminar->end_at)) }}</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>
                                        </tr>
                                        <tr>
                                            <td><p class="color">Venue:</p></td>
                                            <td><a href="#">{{ $seminar->location }}</a></td>
                                        </tr>
                                    </table>
                                </div>
                                <!--EVENT VANUE END-->
                                <!--EVENT FOOTER START-->
                                <div class="event-footer">
                                    <a href="/seminars/{{{ $seminar->id }}}" class="btn-style">More details</a>
                                </div>
                                <!--EVENT FOOTER END-->
                            </div>
                        </div>
                        <!--EVENT CONTANT END-->
                    </div>
                    <!--EVENT END-->
                @endforeach
                {{--<!--EVENT START-->--}}
                {{--<div class="row events">--}}
                    {{--<div class="span6">--}}
                        {{--<div class="thumb">--}}
                            {{--<a href="#"><img src="images/events1.jpg" alt=""></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT START-->--}}
                    {{--<div class="span6">--}}
                        {{--<div class="text">--}}
                            {{--<!--EVENT HEADER START-->--}}
                            {{--<div class="event-header">--}}
                                {{--<span>Mon July 2</span>--}}
                                {{--<h2>Learn Creative Skills, Shape Your Future</h2>--}}
                                {{--<div class="data-tags">--}}
                                    {{--<a href="#">Technology</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--EVENT HEADER END-->--}}
                            {{--<!--EVENT BODY START-->--}}
                            {{--<div class="event-body">--}}
                                {{--<p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}
                            {{--</div>--}}
                            {{--<!--EVENT BODY END-->--}}
                            {{--<!--EVENT VANUE START-->--}}
                            {{--<div class="event-vanue">--}}
                                {{--<table>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Date:</p></td>--}}
                                        {{--<td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Venue:</p></td>--}}
                                        {{--<td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                            {{--<!--EVENT VANUE END-->--}}
                            {{--<!--EVENT FOOTER START-->--}}
                            {{--<div class="event-footer">--}}
                                {{--<a href="#" class="btn-style">Register</a>--}}
                            {{--</div>--}}
                            {{--<!--EVENT FOOTER END-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT END-->--}}
                {{--</div>--}}
                {{--<!--EVENT END-->--}}
                {{--<!--EVENT START-->--}}
                {{--<div class="row events">--}}
                    {{--<div class="span6">--}}
                        {{--<div class="thumb">--}}
                            {{--<a href="#"><img src="images/events2.jpg" alt=""></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT START-->--}}
                    {{--<div class="span6">--}}
                        {{--<div class="text">--}}
                            {{--<!--EVENT HEADER START-->--}}
                            {{--<div class="event-header">--}}
                                {{--<span>Mon July 2</span>--}}
                                {{--<h2>Learn Creative Skills, Shape Your Future</h2>--}}
                                {{--<div class="data-tags">--}}
                                    {{--<a href="#">Technology</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--EVENT HEADER END-->--}}
                            {{--<!--EVENT BODY START-->--}}
                            {{--<div class="event-body">--}}
                                {{--<p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}
                            {{--</div>--}}
                            {{--<!--EVENT BODY END-->--}}
                            {{--<!--EVENT VANUE START-->--}}
                            {{--<div class="event-vanue">--}}
                                {{--<table>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Date:</p></td>--}}
                                        {{--<td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Venue:</p></td>--}}
                                        {{--<td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                            {{--<!--EVENT VANUE END-->--}}
                            {{--<!--EVENT FOOTER START-->--}}
                            {{--<div class="event-footer">--}}
                                {{--<a href="#" class="btn-style">Register</a>--}}
                            {{--</div>--}}
                            {{--<!--EVENT FOOTER END-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT END-->--}}
                {{--</div>--}}
                {{--<!--EVENT END-->--}}
                {{--<!--EVENT START-->--}}
                {{--<div class="row events">--}}
                    {{--<div class="span6">--}}
                        {{--<div class="thumb">--}}
                            {{--<a href="#"><img src="images/events3.jpg" alt=""></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT START-->--}}
                    {{--<div class="span6">--}}
                        {{--<div class="text">--}}
                            {{--<!--EVENT HEADER START-->--}}
                            {{--<div class="event-header">--}}
                                {{--<span>Mon July 2</span>--}}
                                {{--<h2>Learn Creative Skills, Shape Your Future</h2>--}}
                                {{--<div class="data-tags">--}}
                                    {{--<a href="#">Technology</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--EVENT HEADER END-->--}}
                            {{--<!--EVENT BODY START-->--}}
                            {{--<div class="event-body">--}}
                                {{--<p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}
                            {{--</div>--}}
                            {{--<!--EVENT BODY END-->--}}
                            {{--<!--EVENT VANUE START-->--}}
                            {{--<div class="event-vanue">--}}
                                {{--<table>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Date:</p></td>--}}
                                        {{--<td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Venue:</p></td>--}}
                                        {{--<td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                            {{--<!--EVENT VANUE END-->--}}
                            {{--<!--EVENT FOOTER START-->--}}
                            {{--<div class="event-footer">--}}
                                {{--<a href="#" class="btn-style">Register</a>--}}
                            {{--</div>--}}
                            {{--<!--EVENT FOOTER END-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT END-->--}}
                {{--</div>--}}
                {{--<!--EVENT END-->--}}
                {{--<!--EVENT START-->--}}
                {{--<div class="row events">--}}
                    {{--<div class="span6">--}}
                        {{--<div class="thumb">--}}
                            {{--<a href="#"><img src="images/events4.jpg" alt=""></a>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT START-->--}}
                    {{--<div class="span6">--}}
                        {{--<div class="text">--}}
                            {{--<!--EVENT HEADER START-->--}}
                            {{--<div class="event-header">--}}
                                {{--<span>Mon July 2</span>--}}
                                {{--<h2>Learn Creative Skills, Shape Your Future</h2>--}}
                                {{--<div class="data-tags">--}}
                                    {{--<a href="#">Technology</a>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<!--EVENT HEADER END-->--}}
                            {{--<!--EVENT BODY START-->--}}
                            {{--<div class="event-body">--}}
                                {{--<p>The point of using Lorem Ipsum is that it has a making it look like English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}
                            {{--</div>--}}
                            {{--<!--EVENT BODY END-->--}}
                            {{--<!--EVENT VANUE START-->--}}
                            {{--<div class="event-vanue">--}}
                                {{--<table>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Date:</p></td>--}}
                                        {{--<td><a href="#"><i class="fa fa-calendar-o"></i>06 Dec, 20140 - 14 Dec, 2014</a> <a href="#"><i class="fa fa-clock-o"></i>7:30 am - 9:00 pm</a></td>--}}
                                    {{--</tr>--}}
                                    {{--<tr>--}}
                                        {{--<td><p class="color">Venue:</p></td>--}}
                                        {{--<td><a href="#">103, C Block, West Street, New York, BMC, US</a></td>--}}
                                    {{--</tr>--}}
                                {{--</table>--}}
                            {{--</div>--}}
                            {{--<!--EVENT VANUE END-->--}}
                            {{--<!--EVENT FOOTER START-->--}}
                            {{--<div class="event-footer">--}}
                                {{--<a href="#" class="btn-style">Register</a>--}}
                            {{--</div>--}}
                            {{--<!--EVENT FOOTER END-->--}}
                        {{--</div>--}}
                    {{--</div>--}}
                    {{--<!--EVENT CONTANT END-->--}}
                {{--</div>--}}
                {{--<!--EVENT END-->--}}
            </div>
            <div class="pagination">
                {{ $pagination }}
            </div>
            <div class="clearfix"></div>

        </div>
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
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="js/jquery.cookie.js"></script> <!--required only if using cookies-->
    <script type="text/javascript" src="js/jquery.accordion.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script src="js/functions.js"></script>
@stop