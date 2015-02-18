@extends('layouts.default')

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Suggestions and consultations, visit us now!</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="contact-us">
                <div style="font-size: 15px;" class="container">
                    <div class="row">
                        <div class="span6">
                            <h3>Visit us at...</h3>
                            <p>Association of Educator for Interrelated Research and Studies (AEIRS)</p>
                            <p>Rm. 209, Llabres Bldg., Blk. 12,<br/>
                                Lot 19 Verdant Heights,<br/>
                                Multinational Village, Paraňaque City</p>
                        </div>
                        <div class="span6">
                            <h3>...or Contact us</h3>
                            <p>Email Address: {{ 'dextermanzano65@yahoo.com' }}</p>
                            <p>Mobile Numbers: </p>
                            <p>0915 – 116 – 8501 (Globe)</p>
                            <p>0908 – 820 – 1187 (Smart)</p>
                        </div>
                    </div>
                    <p></p>
                </div>


                <!--EVENT START-->
                <!--EVENT LOCATION MAP START-->
                <div class="event-location-map">
                    <div id="map-canvas"></div>
                </div>
                <!--EVENT LOCATION MAP END-->
            </div>

            <div class="clearfix"></div>
        </div>
    </div>
    <!--CONTANT END-->
@stop

@section('page-script')
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="js/jquery.easy-pie-chart.js"></script>
    <script src="/js/modernizr.js"></script>
    <script type="text/javascript" src="js/skrollr.min.js"></script>
    <script src="/js/functions.js"></script>
@stop