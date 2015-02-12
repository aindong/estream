@extends('layouts.default')

@section('page-style')
    <!-- PIE CHART -->
    <link href="/css/chart.css" rel="stylesheet" type="text/css">
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
                    <!--EVENT START-->
                    <div class="row events">
                        <div class="span6">
                            <div class="thumb">
                                <a href="#"><img src="/images/events1.jpg" alt=""></a>
                            </div>
                        </div>
                        <!--EVENT CONTANT START-->
                        <div class="span6">
                            <div class="text">
                                <!--EVENT HEADER START-->
                                <div class="event-header">
                                    <span>{{ date('D M d', strtotime($seminar->start_at)) }}</span>
                                    <h2>{{ $seminar->title }}</h2>
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
                                        <tr>
                                            <td><p class="color">Price:</p></td>
                                            <td>Php {{ $seminar->price }}</td>
                                        </tr>
                                    </table>
                                </div>
                                <!--EVENT VANUE END-->
                                <!--EVENT FOOTER START-->
                                <div class="event-footer">
                                @if(Auth::check())
                                    <?php
                                        $seminarStatus = '';
                                        $id = $seminar->id;
                                        foreach (Auth::getUser()->seminars as $sem) {
                                            if ($id == $sem->seminar_id) {
                                                $seminarStatus = $sem->status;
                                                break;
                                            }
                                        }
                                    ?>

                                    @if($seminarStatus == "paid")
                                        <a href="#myModal" role="button" data-toggle="modal" class="btn-style">Download Assets</a>
                                    @elseif($seminarStatus == 'waiting for payment')
                                        Waiting for your payment
                                    @else
                                        <a href="#" class="btn-style register" data-id="{{ $seminar->id }}">Register</a>
                                    @endif
                                @else
                                    <a href="/login" class="btn-style">Login</a>
                                @endif
                                </div>
                                <!--EVENT FOOTER END-->
                            </div>
                        </div>
                        <!--EVENT CONTANT END-->
                    </div>
                    <!--EVENT END-->
                <!--EVENT DETAIL TEXT START-->
                <div class="text-detail">
                    <p>{{ $seminar->description }}</p>
                </div>
                <!--EVENT DETAIL TEXT END-->
                <!--EVENT LOCATION MAP START-->
                <div class="event-location-map">
                    <div id="map-canvas"></div>
                </div>
                <!--EVENT LOCATION MAP END-->
            </div>
            <div class="clearfix"></div>

            <!-- Modal -->
            <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel">Downloadables</h3>
              </div>
              <div class="modal-body">

                <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($downloadables as $downloadable)
                        <tr>
                            <td>{{{ $downloadable->name }}}</td>
                            <td><a href="/downloadables/{{ $downloadable->id }}" class="btn btn-primary">Download</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>

              </div>
              <div class="modal-footer">
                <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
              </div>
            </div>

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
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/jquery.easy-pie-chart.js"></script>
    <script type="text/javascript" src="/js/jquery.cookie.js"></script> <!--required only if using cookies-->
    <script type="text/javascript" src="/js/jquery.accordion.js"></script>
    <script src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/skrollr.min.js"></script>
    {{--<script src="/js/functions.js"></script>--}}

    <script type="text/javascript">
        $(function() {
            $('.register').on('click', function(e) {
                e.preventDefault();

                $.ajax({
                    url: '/users/seminars/register/' + $(this).data('id'),
                    type: 'POST',
                    success: function() {
                        console.log('success');
                        alert('Successfully registered for the seminar');
                        location.reload();
                    },
                    error: function() {
                        console.log('error');
                    }
                });
            });

            // MAP
            var map;
            var brooklyn = new google.maps.LatLng({{ $seminar->lat }},{{ $seminar->long }});

            var MY_MAPTYPE_ID = 'custom_style';

            function initialize() {

                var featureOpts = [
                    {
                        stylers: [
                            { hue: '#b1e7b8' },
                            { visibility: 'simplified' },
                            { gamma: 0.5 },
                            { weight: 0.5 }
                        ]
                    },
                    {
                        elementType: 'labels',
                        stylers: [
                            { visibility: 'on' }
                        ]
                    },
                    {
                        featureType: 'water',
                        stylers: [
                            { color: '#b1e7b8' }
                        ]
                    }
                ];

                var mapOptions = {
                    zoom: 16,
                    center: brooklyn,
                    mapTypeControlOptions: {
                        mapTypeIds: [google.maps.MapTypeId.ROADMAP, MY_MAPTYPE_ID]
                    },
                    mapTypeId: MY_MAPTYPE_ID
                };

                map = new google.maps.Map(document.getElementById('map-canvas'),
                        mapOptions);

                var styledMapOptions = {
                    name: 'Custom Style'
                };

                var customMapType = new google.maps.StyledMapType(featureOpts, styledMapOptions);

                map.mapTypes.set(MY_MAPTYPE_ID, customMapType);

                var marker = new google.maps.Marker({
                    position: brooklyn,
                    map: map,
                    title: '{{ $seminar->location }}'
                });

            }

            google.maps.event.addDomListener(window, 'load', initialize);
        });
    </script>
@stop