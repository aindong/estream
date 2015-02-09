@extends('layouts.default')

@section('page-style')
    <style>
        audio,
        video {
            -moz-transition: all 1s ease;
            -ms-transition: all 1s ease;
            -o-transition: all 1s ease;
            -webkit-transition: all 1s ease;
            transition: all 1s ease;
            vertical-align: top;
            width: 100%;
        }
        #video-wrapper {
            height: 450px;
            width: 100%;
            background-color: #000;
            margin-bottom: 50px;
        }

        .btn {
            margin-bottom: 20px;
            width: 180px;
            height: 73px;
        }
    </style>
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Webcast Seminat Title here</h2>
            <p>Watch webcast here</p>
        </div>
    </div>

    <!--CONTANT START-->
    <div class="contant">

        <div class="container">

            <div class="row">

                <div class="span2">
                    <input type="hidden" id="broadcast-name" value="testroom">
                    @if(Auth::getUser()->role_id == 2)
                    <button id="setup-new-broadcast" class="setup btn btn-primary">Setup New Broadcast</button>
                    @else
                    <button class="join btn btn-primary" data-sessionid="testroom">View His Webcam</button>
                    @endif
                </div>

                <div class="span10">

                    <div id="video-wrapper">
                        <!-- local/remote videos container -->
                        <div id="videos-container"></div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!--CONTANT END-->

@stop

@section('page-script')
    <!-- scripts used for broadcasting -->
    <script src="/packages/webrtc/firebase.min.js"></script>
    <script src="/packages/webrtc/RTCMultiConnection.js"></script>

    <script>
        var connection = new RTCMultiConnection();
        connection.session = {
            audio: true,
            video: true,
            oneway: true
        };

        connection.onstream = function(e) {
            e.mediaElement.width = 600;
            videosContainer.insertBefore(e.mediaElement, videosContainer.firstChild);
            rotateVideo(e.mediaElement);
            scaleVideos();
        };

        function rotateVideo(mediaElement) {
            mediaElement.style[navigator.mozGetUserMedia ? 'transform' : '-webkit-transform'] = 'rotate(0deg)';
            setTimeout(function() {
                mediaElement.style[navigator.mozGetUserMedia ? 'transform' : '-webkit-transform'] = 'rotate(360deg)';
            }, 1000);
        }

        connection.onstreamended = function(e) {
            e.mediaElement.style.opacity = 0;
            rotateVideo(e.mediaElement);
            setTimeout(function() {
                if (e.mediaElement.parentNode) {
                    e.mediaElement.parentNode.removeChild(e.mediaElement);
                }
                scaleVideos();
            }, 1000);
        };

        // Join room
        var joinRoomButton = document.querySelector('.join');
        joinRoomButton.onclick = function() {
            this.disabled = true;

            var sessionid = this.getAttribute('data-sessionid');
            session = sessions[sessionid];

            if (!session) throw 'No such session exists.';

            connection.join(session);
        };

        var sessions = {};
        connection.onNewSession = function(session) {
            if (sessions[session.sessionid]) return;
            sessions[session.sessionid] = session;
//
//            var tr = document.createElement('tr');
//            tr.innerHTML = '<td><strong>' + session.sessionid + '</strong> is sharing his webcam in one-way direction!</td>' +
//            '<td><button class="join">View His Webcam</button></td>';
//            roomsList.insertBefore(tr, roomsList.firstChild);
//
//            var joinRoomButton = tr.querySelector('.join');
//            joinRoomButton.setAttribute('data-sessionid', session.sessionid);
//            joinRoomButton.onclick = function() {
//                this.disabled = true;
//
//                var sessionid = this.getAttribute('data-sessionid');
//                session = sessions[sessionid];
//
//                if (!session) throw 'No such session exists.';
//
//                connection.join(session);
//            };
        };

        var videosContainer = document.getElementById('videos-container') || document.body;
        //        var roomsList = document.getElementById('rooms-list');

        document.getElementById('setup-new-broadcast').onclick = function() {
            this.disabled = true;

            connection.open(document.getElementById('broadcast-name').value || 'Anonymous');
        };

        // setup signaling to search existing sessions
        connection.connect();

        (function() {
            var uniqueToken = document.getElementById('unique-token');
            if (uniqueToken)
                if (location.hash.length > 2) uniqueToken.parentNode.parentNode.parentNode.innerHTML = '<h2 style="text-align:center;"><a href="' + location.href + '" target="_blank">Share this link</a></h2>';
                else uniqueToken.innerHTML = uniqueToken.parentNode.parentNode.href = '#' + (Math.random() * new Date().getTime()).toString(36).toUpperCase().replace(/\./g, '-');
        })();

        function scaleVideos() {
            var videos = document.querySelectorAll('video'),
                    length = videos.length,
                    video;

            var minus = 130;
            var windowHeight = 700;
            var windowWidth = 600;
            var windowAspectRatio = windowWidth / windowHeight;
            var videoAspectRatio = 4 / 3;
            var blockAspectRatio;
            var tempVideoWidth = 0;
            var maxVideoWidth = 0;

            for (var i = length; i > 0; i--) {
                blockAspectRatio = i * videoAspectRatio / Math.ceil(length / i);
                if (blockAspectRatio <= windowAspectRatio) {
                    tempVideoWidth = videoAspectRatio * windowHeight / Math.ceil(length / i);
                } else {
                    tempVideoWidth = windowWidth / i;
                }
                if (tempVideoWidth > maxVideoWidth)
                    maxVideoWidth = tempVideoWidth;
            }
            for (var i = 0; i < length; i++) {
                video = videos[i];
                if (video)
                    video.width = maxVideoWidth - minus;
            }
        }

        window.onresize = scaleVideos;
    </script>
@stop