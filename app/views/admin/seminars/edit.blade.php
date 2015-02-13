@extends('layouts.admin')

@section('page-style')
    <style>
        #map-canvas {
            height: 400px;
            margin: 0px;
            padding: 0px
        }

        .controls {
            margin-top: 16px;
            border: 1px solid transparent;
            border-radius: 2px 0 0 2px;
            box-sizing: border-box;
            -moz-box-sizing: border-box;
            height: 32px;
            outline: none;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
            margin-left: 20px;
        }

        #locationSearch {
            background-color: #fff;
            padding: 0 11px 0 13px;
            width: 400px;
            font-family: Roboto;
            font-size: 15px;
            font-weight: 300;
            text-overflow: ellipsis;
        }

        #locationSearch:focus {
            border-color: #4d90fe;
            margin-left: 19px;
            padding-left: 14px;  /* Regular padding-left + 1. */
            width: 401px;
        }

        .pac-container {
            font-family: Roboto;
        }

        #type-selector {
            color: #fff;
            background-color: #4d90fe;
            padding: 5px 11px 0px 11px;
        }

        #type-selector label {
            font-family: Roboto;
            font-size: 13px;
            font-weight: 300;
        }
    </style>
@stop

@section('content')
    <h2>Updating a seminar</h2>
    {{ Form::model($seminar, ['route' => ['admin.seminars.update', $seminar->id], 'method' => 'put', 'enctype' => "multipart/form-data"]) }}
    @include('admin.seminars.form')
    {{ Form::close() }}
@stop

@section('page-script')
    <script type="text/javascript">
        $(function() {
            $('.startDate').datepicker();
            $('.endDate').datepicker();
        });
    </script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCeziEtPjf1dHcEcDDKbvgg-tW6rbjwmD0&v=3.exp&libraries=places"></script>
    <script type="text/javascript">
        'use strict';
        function initialize() {
            var latLocation  = $('#latLocation'),
                    longLocation = $('#longLocation');

            var markers = [];
            var map = new google.maps.Map(document.getElementById('map-canvas'), {
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                zoom: 10,
                maxZoom: 10,
                minZoom: 9,
                disableDefaultUI: true,
                center: {
                    lat: 14.599512399999991,
                    lng: 120.9842195
                }
            });

            // var defaultBounds = new google.maps.LatLngBounds(
            //   new google.maps.LatLng(-1.2242178089464335, 106.56062790625003),
            //   new google.maps.LatLng(21.540574823143377, 129.85164353125003));
            // map.fitBounds(defaultBounds);

            // Create the search box and link it to the UI element.
            var input = /** @type {HTMLInputElement} */(
                    document.getElementById('locationSearch'));
            map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

            var searchBox = new google.maps.places.SearchBox(
                    /** @type {HTMLInputElement} */(input));

            // Listen for the event fired when the user selects an item from the
            // pick list. Retrieve the matching places for that item.
            google.maps.event.addListener(searchBox, 'places_changed', function() {
                var places = searchBox.getPlaces();

                if (places.length == 0) {
                    return;
                }
                for (var i = 0, marker; marker = markers[i]; i++) {
                    marker.setMap(null);
                }

                // For each place, get the icon, place name, and location.
                markers = [];
                var bounds = new google.maps.LatLngBounds();
                for (var i = 0, place; place = places[i]; i++) {
                    var image = {
                        url: place.icon,
                        size: new google.maps.Size(71, 71),
                        origin: new google.maps.Point(0, 0),
                        anchor: new google.maps.Point(17, 34),
                        scaledSize: new google.maps.Size(25, 25)
                    };

                    // Create a marker for each place.
                    var marker = new google.maps.Marker({
                        map: map,
                        icon: image,
                        title: place.name,
                        position: place.geometry.location
                    });

                    latLocation.val(place.geometry.location.k);
                    longLocation.val(place.geometry.location.D);
                    markers.push(marker);

                    bounds.extend(place.geometry.location);
                }

                map.fitBounds(bounds);
            });

            // Bias the SearchBox results towards places that are within the bounds of the
            // current map's viewport.
            // google.maps.event.addListener(map, 'bounds_changed', function() {
            //   var bounds = map.getBounds();
            //   searchBox.setBounds(bounds);
            // });

        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
@stop
