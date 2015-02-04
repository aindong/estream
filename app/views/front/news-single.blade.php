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

                        <div class="blog-contant">
                            <h2><a href="blog-detail.html#">{{{ $article->title }}}</a></h2>
                            <div class="text">
                                <p>{{{ $article->body }}}</p>
                            </div>
                            <div class="blog-comments">
                                <a href="blog-detail.html#"><i class="fa fa-user"></i>{{{ $article->user->info->first_name }}}</a>
                                <a href="blog-detail.html#"><i class="fa fa-calendar"></i>{{{ date('d M Y', strtotime($article->created_at)) }}}</a>
                                <a class="pull-right" href="blog-detail.html#"><i class="fa fa-comment"></i>35 Comments</a>
                            </div>
                        </div>

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

                                        <a href="blog.html#"><img src="/images/papular-post.jpg" alt=""></a>

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

                                        <a href="blog.html#"><img src="/images/papular-post2.jpg" alt=""></a>

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

                                        <a href="blog.html#"><img src="/images/papular-post3.jpg" alt=""></a>

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

                                        <a href="blog.html#"><img src="/images/papular-post4.jpg" alt=""></a>

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