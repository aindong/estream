@extends('layouts.default')

@section('page-style')
    <!-- PIE CHART -->
    <link href="css/chart.css" rel="stylesheet" type="text/css">
@stop

@section('content')
    <!--BANNER START-->

    <div class="page-heading">

        <div class="container">

            <h2>Latest Articles</h2>

            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>

        </div>

    </div>

    <!--BANNER END-->

    <!--CONTANT START-->

    <div class="contant">

        <div class="container">

            <div class="row">

                <div class="span8">

                    <div class="blog">

                        @foreach($articles as $article)
                            <div class="blog-contant">
                                <h2><a href="/articles/{{{ $article->id }}}">{{{ $article->title }}}</a></h2>
                                <div class="text">
                                    <p>{{{ substr($article->body, 0, 200) }}} ...</p>
                                    <a href="/articles/{{{ $article->id }}}">Read More</a>
                                </div>

                                <div class="blog-comments">

                                    <a href="#"><i class="fa fa-user"></i>{{{ $article->user->info->first_name }}}</a>

                                    <a href="#"><i class="fa fa-calendar"></i>{{{ date('d M Y', strtotime($article->created_at)) }}}</a>

                                    {{--<a href="blog.html#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>--}}

                                </div>
                            </div>
                        @endforeach

                        {{--<!--BLOG START-->--}}

                        {{--<div class="blog-contant">--}}

                            {{--<h2><a href="blog.html#">Summer Holidays Education</a></h2>--}}

                            {{--<div class="blog-tags">--}}

                                {{--Filed in: <a href="blog.html#">Online Courses</a> /  Tags: <a href="blog.html#">Fashion</a>, <a href="blog.html#">Learning</a>, <a href="blog.html#">webdesign</a>, <a href="blog.html#">Course</a>--}}

                            {{--</div>--}}

                            {{--<div class="thumb">--}}

                                {{--<a href="blog.html#"><img src="images/blog-img.jpg" alt=""></a>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}

                                {{--<a href="blog.html#" class="btn-style">Read More</a>--}}

                            {{--</div>--}}

                            {{--<div class="blog-comments">--}}

                                {{--<a href="blog.html#"><i class="fa fa-user"></i>David</a>--}}

                                {{--<a href="blog.html#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>--}}

                                {{--<a href="blog.html#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<!--BLOG END-->--}}

                        {{--<!--BLOG START-->--}}

                        {{--<div class="blog-contant">--}}

                            {{--<h2><a href="blog.html#">Summer Holidays Education</a></h2>--}}

                            {{--<div class="blog-tags">--}}

                                {{--Filed in: <a href="blog.html#">Online Courses</a> /  Tags: <a href="blog.html#">Fashion</a>, <a href="blog.html#">Learning</a>, <a href="blog.html#">webdesign</a>, <a href="blog.html#">Course</a>--}}

                            {{--</div>--}}

                            {{--<div class="thumb">--}}

                                {{--<a href="blog.html#"><img src="images/blog-img2.jpg" alt=""></a>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}

                                {{--<a href="blog.html#" class="btn-style">Read More</a>--}}

                            {{--</div>--}}

                            {{--<div class="blog-comments">--}}

                                {{--<a href="blog.html#"><i class="fa fa-user"></i>David</a>--}}

                                {{--<a href="blog.html#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>--}}

                                {{--<a href="blog.html#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<!--BLOG END-->--}}

                        {{--<!--BLOG START-->--}}

                        {{--<div class="blog-contant">--}}

                            {{--<h2><a href="blog.html#">Summer Holidays Education</a></h2>--}}

                            {{--<div class="blog-tags">--}}

                                {{--Filed in: <a href="blog.html#">Online Courses</a> /  Tags: <a href="blog.html#">Fashion</a>, <a href="blog.html#">Learning</a>, <a href="blog.html#">webdesign</a>, <a href="blog.html#">Course</a>--}}

                            {{--</div>--}}

                            {{--<div class="thumb-video">--}}

                                {{--<iframe src="https://player.vimeo.com/video/87001310"></iframe>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}

                                {{--<a href="blog.html#" class="btn-style">Read More</a>--}}

                            {{--</div>--}}

                            {{--<div class="blog-comments">--}}

                                {{--<a href="blog.html#"><i class="fa fa-user"></i>David</a>--}}

                                {{--<a href="blog.html#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>--}}

                                {{--<a href="blog.html#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<!--BLOG END-->--}}

                        {{--<!--BLOG START-->--}}

                        {{--<div class="blog-contant">--}}

                            {{--<h2><a href="blog.html#">Summer Holidays Education</a></h2>--}}

                            {{--<div class="blog-tags">--}}

                                {{--Filed in: <a href="blog.html#">Online Courses</a> /  Tags: <a href="blog.html#">Fashion</a>, <a href="blog.html#">Learning</a>, <a href="blog.html#">webdesign</a>, <a href="blog.html#">Course</a>--}}

                            {{--</div>--}}

                            {{--<div class="thumb-audio">--}}

                                {{--<iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/149871945&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>--}}

                            {{--</div>--}}

                            {{--<div class="text">--}}

                                {{--<p>t is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text.</p>--}}

                                {{--<a href="blog.html#" class="btn-style">Read More</a>--}}

                            {{--</div>--}}

                            {{--<div class="blog-comments">--}}

                                {{--<a href="blog.html#"><i class="fa fa-user"></i>David</a>--}}

                                {{--<a href="blog.html#"><i class="fa fa-calendar"></i>06 Dec, 2011</a>--}}

                                {{--<a href="blog.html#" class="pull-right"><i class="fa fa-comment"></i>35 Comments</a>--}}

                            {{--</div>--}}

                        {{--</div>--}}

                        {{--<!--BLOG END-->--}}

                    </div>

                    <div class="pagination">

                        {{ $pagination }}

                    </div>

                </div>

                <div class="span4">

                    <!--SIDEBAR START-->

                    <div class="sidebar">

                        <!--PAPULAR POST WIDGET START-->

                        <div class="widget widget-papular-post">

                            <h2>Popular Posts</h2>

                            <ul>

                                <!--LIST ITEM START-->

                                <li>

                                    <h4>Donec neque ipsum, sodales nec trist</h4>

                                    <div class="thumb">

                                        <a href="blog.html#"><img src="images/papular-post.jpg" alt=""></a>

                                    </div>

                                    <div class="text">

                                        <p class="date">19 May 2012  <span>Admin</span></p>

                                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>

                                    </div>

                                </li>

                                <!--LIST ITEM END-->

                                <!--LIST ITEM START-->

                                <li>

                                    <h4>Donec neque ipsum, sodales nec trist</h4>

                                    <div class="thumb">

                                        <a href="blog.html#"><img src="images/papular-post2.jpg" alt=""></a>

                                    </div>

                                    <div class="text">

                                        <p class="date">19 May 2012  <span>Admin</span></p>

                                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>

                                    </div>

                                </li>

                                <!--LIST ITEM END-->

                                <!--LIST ITEM START-->

                                <li>

                                    <h4>Donec neque ipsum, sodales nec trist</h4>

                                    <div class="thumb">

                                        <a href="blog.html#"><img src="images/papular-post3.jpg" alt=""></a>

                                    </div>

                                    <div class="text">

                                        <p class="date">19 May 2012  <span>Admin</span></p>

                                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>

                                    </div>

                                </li>

                                <!--LIST ITEM END-->

                                <!--LIST ITEM START-->

                                <li>

                                    <h4>Donec neque ipsum, sodales nec trist</h4>

                                    <div class="thumb">

                                        <a href="blog.html#"><img src="images/papular-post4.jpg" alt=""></a>

                                    </div>

                                    <div class="text">

                                        <p class="date">19 May 2012  <span>Admin</span></p>

                                        <p>Lorem ipsum dolor sit amet, consect adipiscing elit.</p>

                                    </div>

                                </li>

                                <!--LIST ITEM END-->

                            </ul>

                        </div>

                        <!--PAPULAR POST WIDGET END-->

                        <!--TWITTER WIDGET START-->

                        <div class="widget widget-twitter">

                            <h2>Latest Tweets</h2>

                            <ul>

                                <li>

                                    <p>What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.</p>

                                    <a href="blog.html#"># Quotes About Photography</a>

                                    <p class="minuts-ago">8 mins ago</p>

                                </li>

                                <li>

                                    <p>There are no bad pictures; that's just how your face looks sometimes..</p>

                                    <a href="blog.html#"># Quotes About Photography</a>

                                    <p class="minuts-ago">8 mins ago</p>

                                </li>

                                <li>

                                    <p>What i like about photographs is that they capture a moment that’s gone forever, impossible to reproduce.</p>

                                    <a href="blog.html#"># Quotes About Photography</a>

                                    <p class="minuts-ago">8 mins ago</p>

                                </li>

                            </ul>

                        </div>

                        <!--TWITTER WIDGET END-->

                        <!--NEWS LETTERS WIDGET START-->

                        <div class="widget widget-newsletter">

                            <div class="inner">

                                <h2>Join Newsletters</h2>

                                <div class="input-cover">

                                    <i class="fa fa-envelope-o"></i>

                                    <input type="text" class="input-block-level" placeholder="Enter Your E-Mail ID">

                                </div>

                                <button class="btn-style">Subscribe</button>

                            </div>

                        </div>

                        <!--NEWS LETTERS WIDGET END-->

                    </div>

                    <!--SIDEBAR END-->

                </div>

            </div>

        </div>

        <!--FOLLOW US SECTION START-->

        <section class="follow-us">

            <div class="container">

                <div class="row">

                    <div class="span4">

                        <div class="follow">

                            <a href="blog.html#">

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

                            <a href="blog.html#">

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

                            <a href="blog.html#">

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

        </section>

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