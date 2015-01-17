@extends('layouts.default')

@section('page-style')
    <!-- PRETTY PHOTO BACKGROUNDS -->
    <link href="css/prettyPhoto.css" rel="stylesheet" media="screen">
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Sign In</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="row">
                <div class="span6">
                    <div class="form-box">
                        <form id="loginForm">
                            <div class="form-body">
                                <fieldset>
                                    <legend>Login Below:</legend>
                                    <div class="alert alert-login" style="display: none;"></div>
                                    <label>Email Address</label>
                                    <input type="text" placeholder="Enter your E-mail ID" class="input-block-level" name="username">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password" class="input-block-level" name="password">

                                    <button type="submit" class="btn-style" id="loginBtn">Submit</button>
                                </fieldset>
                            </div>
                            <div class="footer">
                                <ul>
                                    <li><a href="signin.html#">I Forgot My Password</a></li>
                                    <li><a href="signin.html#">Re-send Confirmation Email</a></li>
                                    <li><a href="signin.html#">Sign up Today for Free!</a></li>
                                    <li><a href="signin.html#">Terms of Use</a></li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="span6">
                    <div class="form-box">
                        <form id="registerForm">
                            <div class="form-body">
                                <fieldset>
                                    <legend>First time here? Sign up now!</legend>
                                    <div class="alert alert-register" style="display: none;"></div>
                                    <div class="row-fluid">
                                        <div class="span6">
                                            <label>First Name</label>
                                            <input type="text" placeholder="First Name" class="input-block-level" name="first_name">
                                        </div>
                                        <div class="span6">
                                            <label>Last Name</label>
                                            <input type="text" placeholder="Last Name" class="input-block-level" name="last_name">
                                        </div>
                                    </div>
                                    <label>Email Address</label>
                                    <input type="text" placeholder="Enter your E-mail ID" class="input-block-level" name="email">
                                    <label>Password</label>
                                    <input type="password" placeholder="Enter Password" class="input-block-level" name="password">
                                    <button type="submit" class="btn-style">Sign Up</button>
                                </fieldset>
                            </div>
                            <div class="footer">
                                <p>By Registering, You Accept Terms &amp; Conditions</p>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--FOLLOW US SECTION START-->
        <section class="follow-us">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="follow">
                            <a href="signin.html#">
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
                            <a href="signin.html#">
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
                            <a href="signin.html#">
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
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/modernizr.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script src="js/functions.js"></script>
    <script src="js/class/users.js"></script>
@stop