<!Coctype html>

<html>
<head>

    <meta charset="utf-8">
    <title>EStreaming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CUSTOM CSS -->
    <link href="css/style.css" rel="stylesheet" media="screen">
    <link href="css/color.css" rel="stylesheet" media="screen">
    <link href="css/transitions.css" rel="stylesheet" media="screen">

    <!-- BOOTSTRAP -->
    <link href="css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="css/bootstrap-responsive.css" rel="stylesheet" media="screen">

    <!-- BX SLIDER-->
    <link href="css/jquery.bxslider.css" rel="stylesheet" media="screen">

    <!-- OWL CAROUSEL -->
    <link href="css/owl.carousel.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link href="css/font-awesome.min.css" rel="stylesheet" media="screen">

    <!-- PARALLAX BACKGROUNDS -->
    <link href="css/parallax.css" rel="stylesheet" type="text/css" />

    @yield('page-style')
</head>

<body>

<!--WRAPPER START-->

<div class="wrapper">

    <!--HEADER START-->
    <header>
        <!--TOP STRIP START-->
        <div class="top-strip">
            <div class="container">
                <!--ACCOUNT SECTION START-->

                <div class="account">

                    <ul>
                        @if(!Session::get('auth'))
                        <li><a href="/login">Register</a></li>
                        <li><a href="/login">Login</a></li>
                        @else
                        <li><a href="index.html#">Sign Out</a></li>

                        <li>

                            <div class="dropdown">

                                <a class="dropdown-toggle" id="account" role="button" data-toggle="dropdown" data-target="#" href="http://crunchpress.net/page.html">

                                    My Account

                                    <b class="caret"></b>

                                </a>

                                <ul class="dropdown-menu" role="menu" aria-labelledby="account">

                                    <li><a href="index.html#">Profile</a></li>

                                    <li><a href="index.html#">Account Setting</a></li>

                                    <li><a href="index.html#">Privacy Setting</a></li>

                                </ul>

                            </div>

                        </li>
                        @endif
                    </ul>

                </div>

                <!--ACCOUNT SECTION START-->

            </div>

        </div>

        <!--TOP STRIP END-->

        <!--NAVIGATION START-->

        <div class="navigation-bar">

            <div class="container">

                <div class="logo">

                    <a href="index.html"><img src="images/logo.png" alt=""></a>

                </div>

                <div class="cart">

                    <ul>

                        <li>

                            <div class="search-bar"><i class="fa fa-search"></i></div>

                            <div class="search-box">

                                <input type="text" class="input-block-level">

                            </div>

                        </li>

                    </ul>

                </div>

                <div class="navigation">

                    <div class="navbar">

                        <div class="navbar-inner" >

                            <div class="container">

                                <button data-target=".nav-collapse" data-toggle="collapse" class="btn btn-navbar" type="button">

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                    <span class="icon-bar"></span>

                                </button>

                                <div class="nav-collapse collapse">

                                    <ul>
                                        <li><a href="/">Home</a></li>
                                        <li><a href="/news">News</a></li>
                                        <li><a href="/services">Services</a></li>
                                        <li><a href="/seminars">Seminars</a></li>
                                        <li><a href="/about-us">About us</a></li>
                                        <li><a href="/faq">FAQs</a></li>

                                        {{--<li><a href="javascript:void(0)">Pages</a>--}}

                                            {{--<ul>--}}
                                                {{--<li><a href="about-us.html">About us</a></li>--}}
                                                {{--<li><a href="404.html">Error 404</a></li>--}}
                                                {{--<li><a href="faq.html">FAQs</a></li>--}}
                                                {{--<li><a href="gallery.html">Gallery</a></li>--}}
                                                {{--<li><a href="news.html">News</a></li>--}}
                                                {{--<li><a href="our-lessons.html">Our Lessons</a></li>--}}
                                                {{--<li><a href="search-result.html">Search Result</a></li>--}}
                                                {{--<li><a href="signin.html">Sign In</a></li>--}}
                                                {{--<li><a href="student-login.html">Student Login</a></li>--}}
                                                {{--<li><a href="student-profile.html">Student Profile</a></li>--}}
                                                {{--<li><a href="teacher-profile.html">Teacher Profile</a></li>--}}
                                                {{--<li><a href="team.html">Our Team</a></li>--}}
                                                {{--<li><a href="edit-profile.html">Edit Your Profile</a></li>--}}
                                            {{--</ul>--}}

                                        {{--</li>--}}

                                        <li><a href="contact-us.html">Contact Us</a></li>

                                    </ul>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!--NAVIGATION END-->

    </header>


    @yield('content')

    <!--FOOTER START-->

    <footer>

        <div class="container">

            <div class="row">

                <!--OUR ARTICLE WIDGET START-->

                <div class="span3">

                    <div class="widget widget-article">

                        <h2>Our Articles</h2>

                        <ul class="bxslider">

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/article.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p class="color">Duis semper nuncid</p>

                                    <p>Semper nunc id metus sagittis nec ullamcorper justo qondimentum mattis.</p>

                                </div>

                            </li>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/article.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p class="color">Duis semper nuncid</p>

                                    <p>Semper nunc id metus sagittis nec ullamcorper justo qondimentum mattis.</p>

                                </div>

                            </li>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/article.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p class="color">Duis semper nuncid</p>

                                    <p>Semper nunc id metus sagittis nec ullamcorper justo qondimentum mattis.</p>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--OUR ARTICLE WIDGET END-->

                <!--TOP RATED WIDGET START-->

                <div class="span3">

                    <div class="widget widget-top-rated">

                        <h2>Top Rated Courses</h2>

                        <ul>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/toprated.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p>Business Plan Buil a Business Plan..</p>

                                    <span>$17.5</span>

                                </div>

                            </li>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/toprated.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p>Business Plan Buil a Business Plan..</p>

                                    <span>$127.5</span>

                                </div>

                            </li>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/toprated.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p>Business Plan Buil a Business Plan..</p>

                                    <span>$150.5</span>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--TOP RATED WIDGET END-->

                <!--RECENT REVIES WIDGET START-->

                <div class="span3">

                    <div class="widget widget-top-rated">

                        <h2>Recent Reviews</h2>

                        <ul>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/toprated.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p>Trusted Certificate</p>

                                    <span>By Demo User</span>

                                </div>

                            </li>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/toprated.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p>1200 Video Lessons</p>

                                    <span>By the Retailer</span>

                                </div>

                            </li>

                            <li>

                                <div class="thumb">

                                    <a href="index.html#"><img src="images/toprated.jpg" alt=""></a>

                                </div>

                                <div class="text">

                                    <p>1200 Video Lessons</p>

                                    <span>By the Retailer</span>

                                </div>

                            </li>

                        </ul>

                    </div>

                </div>

                <!--RECENT REVIES WIDGET END-->

                <!--RECENT POSTS WIDGET START-->

                <div class="span3">

                    <div class="widget widget-posts">

                        <h2>Recent Posts</h2>

                        <ul>

                            <li><p>User On <a href="index.html#">First post Name</a></p></li>

                            <li><p>User On <a href="index.html#">First post Name</a></p></li>

                            <li><p>User On <a href="index.html#">First post Name</a></p></li>

                            <li><p>User On <a href="index.html#">First post Name</a></p></li>

                            <li><p>User On <a href="index.html#">First post Name</a></p></li>

                            <li><p>User On <a href="index.html#">First post Name</a></p></li>

                        </ul>

                    </div>

                </div>

                <!--RECENT POSTS WIDGET END-->

            </div>



        </div>

        <div class="tweets">

            <div class="container">

                <div class="tweet-contant">

                    <i class="fa fa-twitter"></i>

                    <h4>Weekly Updates</h4>

                    <ul class="bxslider">

                        <li>

                            <p>Are you a morning person or is the night time the right time? Interesting perspectives on the forum - <a href="index.html#">http://t.co/tdEHlbZf</a></p>

                        </li>

                        <li>

                            <p>Dolor donec sagittis sapien. Ante aptent feugiat adipisicing. Duis int. - <a href="index.html#">http://t.co/tdEHlbZf</a></p>

                        </li>

                        <li>

                            <p>Duis interdum olor donec sagittis sapien. Ante aptent feugiat adipisicing - <a href="index.html#">http://t.co/tdEHlbZf</a></p>

                        </li>



                    </ul>

                </div>

            </div>

        </div>

        <div class="bottom-footer">

            <div class="container">

                <div class="row">

                    <!--OUR ARTICLE WIDGET START-->

                    <div class="span3">

                        <div class="widget widget-categories">

                            <h2>Course Categories</h2>

                            <ul>

                                <li><a href="index.html#">Site Style Changer</a></li>

                                <li><a href="index.html#">Bredcrums</a></li>

                                <li><a href="index.html#">Bottom Sidebar</a></li>

                                <li><a href="index.html#">Right Sidebar</a></li>

                                <li><a href="index.html#">Left Sidebar</a></li>

                                <li><a href="index.html#">Sitemap Page Setting</a></li>

                                <li><a href="index.html#">Site Style Changer</a></li>

                                <li><a href="index.html#">Bredcrums</a></li>

                                <li><a href="index.html#">Bottom Sidebar</a></li>

                            </ul>

                        </div>

                    </div>

                    <!--OUR ARTICLE WIDGET END-->

                    <!--TOP RATED WIDGET START-->

                    <div class="span3">

                        <div class="widget widget-facebook">

                            <h2>Fcebook</h2>

                            <div class="pull-left">

                                <img src="images/facebook-widget.jpg" alt="">

                            </div>

                        </div>

                    </div>

                    <!--TOP RATED WIDGET END-->

                    <!--RECENT REVIES WIDGET START-->

                    <div class="span3">

                        <div class="widget widget-newsletter">

                            <h2>Newsletters</h2>

                            <div class="newsletter-contant">

                                <p>Subscribe to be the first to know about best deals and exclusive offers!</p>

                                <p><input type="text" class="input-block-level"></p>

                                <p><button>Subscribe</button></p>

                            </div>

                        </div>

                    </div>

                    <!--RECENT REVIES WIDGET END-->

                    <!--RECENT POSTS WIDGET START-->

                    <div class="span3">

                        <div class="widget widget-map">

                            <h2>Where we are?</h2>

                            <div class="location-map">

                                <div id="map-canvas"></div>

                            </div>

                        </div>

                    </div>

                    <!--RECENT POSTS WIDGET END-->

                </div>

            </div>

        </div>

        <div class="copyright">

            <div class="container">

                <p>© Copyrights 2014-15. All Rights Reserved <a href="index.html#">CrunchPress</a></p>

            </div>

        </div>

    </footer>

    <!--FOOTER END-->

</div>

<!--WRAPPER END-->

<!-- Jquery Lib -->
<script src="js/jquery-1.11.0.min.js"></script>
<!-- Bootstrap -->
<script src="js/bootstrap.min.js"></script>
<script src="js/class/helper.js"></script>
@yield('page-script')
</body>

</html>

