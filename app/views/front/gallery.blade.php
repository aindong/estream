@extends('layouts.default')

@section('page-style')
    <!-- PRETTY PHOTO BACKGROUNDS -->
    <link href="css/prettyPhoto.css" rel="stylesheet" media="screen">
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Gallery</h2>
            <p>Look for more pictures of our recent seminars</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="gallery">
                <h2>Gallery</h2>
                <ul class="row">
                    @foreach($medias as $key => $media)
                        <li class="span3">
                            <img src="{{ '/public/uploads/gallery/'.$media->file }}" alt=""/>
                            <div class="social-icons">
                                <a href="{{ '/public/uploads/gallery/'.$media->file }}" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>
                            </div>
                        </li>
                    @endforeach
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery1.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery1.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery2.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery2.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery3.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery3.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                            {{--<br>--}}
                            {{--<a href="#"><i class="fa fa-picture-o"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-info-circle"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery4.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery4.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                            {{--<br>--}}
                            {{--<a href="#"><i class="fa fa-picture-o"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-info-circle"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery5.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery5.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                            {{--<br>--}}
                            {{--<a href="#"><i class="fa fa-picture-o"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-info-circle"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery6.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery6.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                            {{--<br>--}}
                            {{--<a href="#"><i class="fa fa-picture-o"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-info-circle"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery7.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery7.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                            {{--<br>--}}
                            {{--<a href="#"><i class="fa fa-picture-o"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-info-circle"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                    {{--<li class="span3">--}}
                        {{--<img src="images/gallery8.jpg" alt="">--}}
                        {{--<div class="social-icons">--}}
                            {{--<a href="images/gallery8.jpg" rel="prettyPhoto[gallery2]"><i class="fa fa-search"></i></a>--}}
                            {{--<br>--}}
                            {{--<a href="#"><i class="fa fa-picture-o"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-link"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-info-circle"></i></a>--}}
                            {{--<a href="#"><i class="fa fa-heart"></i></a>--}}
                        {{--</div>--}}
                    {{--</li>--}}
                </ul>
            </div>
        </div>
    </div>
    <!--CONTANT END-->
@stop

@section('page-script')
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/skrollr.min.js"></script>

@stop