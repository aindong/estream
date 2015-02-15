<!Doctype html>

<html>
<head>

    <meta charset="utf-8">
    <title>EStreaming</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CUSTOM CSS -->
    <link href="/css/style.css" rel="stylesheet" media="screen">
    <link href="/css/color.css" rel="stylesheet" media="screen">
    <link href="/css/transitions.css" rel="stylesheet" media="screen">

    <!-- BOOTSTRAP -->
    <link href="/css/bootstrap.css" rel="stylesheet" media="screen">
    <link href="/css/bootstrap-responsive.css" rel="stylesheet" media="screen">

    <!-- BX SLIDER-->
    <link href="/css/jquery.bxslider.css" rel="stylesheet" media="screen">

    <!-- OWL CAROUSEL -->
    <link href="/css/owl.carousel.css" rel="stylesheet">

    <!-- FONT AWESOME -->
    <link href="/css/font-awesome.min.css" rel="stylesheet" media="screen">

    <!-- PARALLAX BACKGROUNDS -->
    <link href="/css/parallax.css" rel="stylesheet" type="text/css" />

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
                        @if(!Auth::check())
                        <li><a href="/login">Register</a></li>
                        <li><a href="/login">Login</a></li>
                        @else
                        <li><a href="/logout">Sign Out</a></li>
                        <li><a href="/users/create-testimonials">Write a Testimonial</a></li>
                        <li>

                            <div class="dropdown">

                                @if(Auth::getUser()->role_id == 2)
                                    <a href="/admin/dashboard">

                                        My Account

                                        <b class="caret"></b>

                                    </a>
                                @else
                                    <a href="/users/dashboard">

                                        My Account

                                    </a>
                                @endif

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

                    <div style="position: relative;">
                        <a href="/" style=""><img src="/images/logo-aeirs.jpg" alt=""></a>
                        <span style="font-size:30px; font-weight: bold; position: absolute; left: 100px; top: 17px;">AEIRS</span>
                        <span style="font-size: 12px; position: absolute; left: 100px; top: 40px; width: 349px;">Association of Educators for Interrelated Research and Studies</span>
                    </div>

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
                                        <li><a href="/gallery">Gallery</a></li>
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

                                        <li><a href="/contact-us">Contact Us</a></li>

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
        <div class="copyright">

            <div class="container">

                <p>© Copyrights 2014-15. All Rights Reserved <a href="/">Estreaming</a></p>

            </div>

        </div>

    </footer>

    <!--FOOTER END-->

</div>

<!--WRAPPER END-->

<!-- Jquery Lib -->
<script src="/js/jquery-1.11.0.min.js"></script>
<!-- Bootstrap -->
<script src="/js/bootstrap.min.js"></script>
<script src="/js/class/helper.js"></script>
@yield('page-script')
</body>

</html>
