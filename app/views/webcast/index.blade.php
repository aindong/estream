<!DOCTYPE html>
<html>
<head>
    <title>Video Conference - WebRTC</title>
    <style>
        video {
            border-radius:15px;
            margin-top:40px;
            width: 380px;
            height: 290px;
            text-align: center;
            background-color: #CCCCCC;
            margin-left:60px;
            float: left;
        }

    </style>
    <link rel="stylesheet" type="text/css" href="/css/style3.css" />
    <link rel="stylesheet" type="text/css" href="/css/style2.css" />
    <script>
        var toggle = function() {
            var mydiv = document.getElementById('chatBlock');
            var mybtn = document.getElementById('btn2');
            if (mydiv.style.display === 'block' || mydiv.style.display === ''){
                mydiv.style.display = 'none';
                mybtn.textContent = "Show Text Chat";
            }
            else{
                mydiv.style.display = 'block';
                mybtn.textContent = "Hide Text Chat";
            }
        }
    </script>
</head>

<body id="body">
<div id="main">

    {{--<div id="header" style="width:600px"></div>--}}

    <div id="chatBlock" style="display:none"><table style="background: url('/images/cb.jpg');cell-spacing:1px;border:0px;margin-left:220px;border-radius:15px;">
            <tr>
                <td><input type="text" style="width:100px;" id="chatNick"></td>
                <td><input type="text" style="width:590px;" onkeydown="javascript:sendChatMsg();" id="chatInputText"></td>
                <td id="xBtn"></td>
            </tr>
            <tr>
                <td colspan="3"><iframe id="chatFrame" src="about:blank" width="100%" height="100" style="background-image:url('/images/cb.png');"></iframe></td>
            </tr>
        </table></div>

    <div id="livevideodivk" ><video id="sourcevid" style="background: url('/images/cb.jpg');" autoplay></video></div>

    <div id="anim" style="visibility:hidden;"><img id="animation" src="/images/anim.gif" width="210px" /></div>

    <div id="remotevideodivk" ><video id="remotevid" style="background: url('/images/cb.jpg');" autoplay style="margin-left:30px;"></video></div>

    <br><br><br><br>
    <button id="btn" type="button" onclick="startVideo();">Start video</button>
    <button id="btn" type="button" onclick="stopVideo();">Stop video</button>
    <button id="btn" type="button" onclick="connect();" >Connect</button>
    <button id="btn" type="button" onclick="onHangUp();">Hang Up</button>
    <button id="btn2" type='button' onclick="toggle();">Show Text Chat</button>
    <br><br><br><br>


</div>
<script>
    var socket = new WebSocket('ws://192.168.1.12:1337/');  // change the IP address to your websocket server
    var stunServer = "stun.l.google.com:19302";
    var sourcevid = document.getElementById('sourcevid');
    var remotevid = document.getElementById('remotevid');
    var localStream = null;
    var remoteStream;
    var peerConn = null;
    var started = false;
    var isRTCPeerConnection = true;
    var mediaConstraints = {'mandatory': {
        'OfferToReceiveAudio':true,
        'OfferToReceiveVideo':true }};

    var logg = function(s) { console.log(s); };

    //for text chat
    var chatInput;
    var chatArea;
    var chatNick;
    var chatFrameObj;
    myMid =Math.floor(Math.random()*100000);
    myMid = "'"+myMid+"'";
    chatInput = document.getElementById("chatInputText");
    chatNick = document.getElementById("chatNick");
    chatFrameObj = document.getElementById("chatFrame");
    chatNick.value = myMid;


    // send the message to websocket server
    function sendMessage(message) {
        var mymsg = JSON.stringify(message);
        logg("SEND: " + mymsg);
        socket.send(mymsg);
    }

    function createPeerConnection() {
        try {
            logg("Creating peer connection");
            var servers = [];
            servers.push({'url':'stun:' + stunServer});
            var pc_config = {'iceServers':servers};
            peerConn = new webkitRTCPeerConnection(pc_config);
            peerConn.onicecandidate = onIceCandidate;
        } catch (e) {
            try {
                peerConn = new RTCPeerConnection('STUN ' + stunServer, onIceCandidate00);
                isRTCPeerConnection = false;
            } catch (e) {
                logg("Failed to create PeerConnection, exception: " + e.message);
            }
        }

        peerConn.onaddstream = onRemoteStreamAdded;
        peerConn.onremovestream = onRemoteStreamRemoved;
    }

    // when remote adds a stream, hand it on to the local video element
    function onRemoteStreamAdded(event) {
        logg("Added remote stream");
        remotevid.src = window.webkitURL.createObjectURL(event.stream);
    }

    function waitForRemoteVideo() {
        if (remoteStream.videoTracks.length === 0 || remotevid.currentTime > 0) {
            transitionToActive();
        } else {
            setTimeout(waitForRemoteVideo, 100);
        }
    }

    function transitionToActive() {
        remotevid.style.opacity = 1;
        card.style.webkitTransform = "rotateY(180deg)";
        setTimeout(function() { sourcevid.src = ""; }, 500);
        setStatus("<input type=\"button\" id=\"hangup\" value=\"Hang up\" onclick=\"onHangup()\" />");
    }

    // when remote removes a stream, remove it from the local video element
    function onRemoteStreamRemoved(event) {
        logg("Remove remote stream");
        remotevid.src = "";
    }

    function onIceCandidate(event) {
        if (event.candidate) {
            sendMessage({type: 'candidate',
                label: event.candidate.sdpMLineIndex,
                id: event.candidate.sdpMid,
                candidate: event.candidate.candidate});
        } else {
            logg("End of candidates.");
        }
    }

    function onIceCandidate00(candidate, moreToFollow) {
        if (candidate) {
            sendMessage({type: 'candidate', label: candidate.label, candidate: candidate.toSdp()});
        }
        if (!moreToFollow) {
            logg("End of candidates.");
        }
    }

    // start the connection upon user request
    function connect() {
        if (!started && localStream) {
            document.getElementById('anim').style.visibility='visible';
            console.log("Creating PeerConnection.");
            createPeerConnection();
            logg('Adding local stream...');
            peerConn.addStream(localStream);
            started = true;
            logg("isRTCPeerConnection: " + isRTCPeerConnection);

            //create offer
            if (isRTCPeerConnection) {
                peerConn.createOffer(setLocalAndSendMessage, null, mediaConstraints);
            } else {
                var offer = peerConn.createOffer(mediaConstraints);
                peerConn.setLocalDescription(peerConn.SDP_OFFER, offer);
                sendMessage({type: 'offer', sdp: offer.toSdp()});
                peerConn.startIce();
            }

        } else {
            alert("Local stream not running yet.");
        }
    }

    // accept connection request
    socket.addEventListener("message", onMessage, false);
    function onMessage(evt) {
        logg("RECEIVED: " + evt.data);
        if (isRTCPeerConnection)
            processSignalingMessage(evt.data);
        else
            processSignalingMessage00(evt.data);
    }

    function processSignalingMessage(message) {
        var msg = JSON.parse(message);

        if (msg.type === 'offer') {

            if (!started && localStream) {
                createPeerConnection();
                logg('Adding local stream...');
                peerConn.addStream(localStream);
                started = true;
                logg("isRTCPeerConnection: " + isRTCPeerConnection);


                if (isRTCPeerConnection) {
                    //set remote description
                    peerConn.setRemoteDescription(new RTCSessionDescription(msg));
                    //create answer
                    console.log("Sending answer to peer.");
                    peerConn.createAnswer(setLocalAndSendMessage, null, mediaConstraints);
                } else {
                    //set remote description
                    peerConn.setRemoteDescription(peerConn.SDP_OFFER, new SessionDescription(msg.sdp));
                    //create answer
                    var offer = peerConn.remoteDescription;
                    var answer = peerConn.createAnswer(offer.toSdp(), mediaConstraints);
                    console.log("Sending answer to peer.");
                    setLocalAndSendMessage00(answer);
                }
            }

        } else if (msg.type === 'answer' && started) {
            peerConn.setRemoteDescription(new RTCSessionDescription(msg));
        } else if (msg.type === 'candidate' && started) {
            var candidate = new RTCIceCandidate({sdpMLineIndex:msg.label, candidate:msg.candidate});
            peerConn.addIceCandidate(candidate);
        } else if (msg.type == 'chat'){
            addChatMsg(msg.nick, msg.cid, msg.data);
        }
        else if (msg.type === 'bye' && started) {
            onRemoteHangUp();
        }
    }

    function processSignalingMessage00(message) {
        var msg = JSON.parse(message);

        // if (msg.type === 'offer')  --> will never happened since isRTCPeerConnection=true initially
        if (msg.type === 'answer' && started) {
            peerConn.setRemoteDescription(peerConn.SDP_ANSWER, new SessionDescription(msg.sdp));
        } else if (msg.type === 'candidate' && started) {
            var candidate = new IceCandidate(msg.label, msg.candidate);
            peerConn.processIceMessage(candidate);
        } else if (msg.type === 'bye' && started) {
            onRemoteHangUp();
        }
    }

    function setLocalAndSendMessage(sessionDescription) {
        peerConn.setLocalDescription(sessionDescription);
        sendMessage(sessionDescription);
    }

    function setLocalAndSendMessage00(answer) {
        peerConn.setLocalDescription(peerConn.SDP_ANSWER, answer);
        sendMessage({type: 'answer', sdp: answer.toSdp()});
        peerConn.startIce();
    }

    function onRemoteHangUp() {
        logg("Remote Hang up.");
        closeSession();
    }

    function onHangUp() {
        logg("Hang up.");
        document.getElementById('anim').style.visibility='hidden';
        if (started) {
            sendMessage({type: 'bye'});
            closeSession();
        }
    }

    function closeSession() {
        peerConn.close();
        peerConn = null;
        started = false;
        remotevid.src = "";
    }

    window.onbeforeunload = function() {
        if (started) {
            sendMessage({type: 'bye'});
        }
    }

    function startVideo() {
        // Replace the source of the video element with the stream from the camera
        try {
            navigator.webkitGetUserMedia({audio: true, video: true}, successCallback, errorCallback);
        } catch (e) {
            navigator.webkitGetUserMedia("video,audio", successCallback, errorCallback);
        }
        function successCallback(stream) {
            sourcevid.src = window.webkitURL.createObjectURL(stream);
            sourcevid.style.webkitTransform = "rotateY(180deg)";
            localStream = stream;
        }
        function errorCallback(error) {
            logg('An error occurred: [CODE ' + error.code + ']');
        }
    }

    function stopVideo() {
        sourcevid.src = "";
    }

    function sendChatMsg(){
        var classIdx = myMid.substr(myMid.length-1, 1);
        if(window.event.keyCode == 13){
            if(chatInput.value.length < 1){
                return;
            }
            console.log("msg will be sent -> "+chatInput.value);
            addChatMsg("Me", classIdx, chatInput.value);
            sendMessage({type:"chat", data:chatInput.value, mid:myMid, nick:chatNick.value, cid:classIdx});

            chatInput.value='';

        }
    }

    function addChatMsg(id, classIdx, msg){
        var msgP = document.createElement("span");
        var idSpan = document.createElement("span");
        idSpan.className="member"+classIdx;
        idSpan.innerText = id;
        var msgSpan = document.createElement("span");
        msgSpan.innerText = msg+"\r\n";
        var delimSpan = document.createElement("span");
        delimSpan.innerText = " : ";
        msgP.appendChild(idSpan);
        msgP.appendChild(delimSpan);
        msgP.appendChild(msgSpan);
        chatFrame.document.body.appendChild(msgP);
        chatFrame.document.body.scrollTop = 999999;
    }

</script>
</body>
<div style="height:50px"></div>
<!--Start Footer-->
<div id="footer">
    <!--Start Grey Footer Bg-->
    <div id="grey_footer_bg">
        <!--Start Inner Div-->
        <div id="inner_div">
            <!--Start Footer Box-->
            {{--<div class="footer_box float_left">--}}
                {{--<h2>Additional Features</h2>--}}
                {{--<div  id="resources-listing">--}}
                    {{--<ul>--}}
                        {{--<li><a href="capture.htm">Capture picture</a></li>--}}
                        {{--<li><a href="captureAndeffects.htm">Apply live effects</a></li>--}}
                    {{--</ul>--}}
                {{--</div><!--End Resources Listing-->--}}
            {{--</div>--}}
            <!--End Footer Box-->
            {{--<!--Start Contact Info-->--}}
            {{--<div id="contact_info">--}}
                {{--<h2>Contact Info</h2>--}}
                {{--<p><span>Name:</span> Hussain Mubaireek</p>--}}
                {{--<p><span>Email:</span> <a href="mailto:hmubaireek@hotmail.com">hmubaireek@hotmail.com</a></p>--}}

                {{--<br />--}}


            {{--</div><!--End Contact Info-->--}}
            {{--<!--Start Latest from Blog-->--}}
            {{--<div id="latest_from_blog">--}}
                {{--<h2>Follow Me</h2>--}}
                {{--<!--Start Blog-->--}}

                {{--<a href="https://twitter.com/HMubaireek" class="follow_icon" title="Twitter"><img src="images/twitter-icon.jpg" alt="Twitter" /></a>&nbsp;&nbsp;&nbsp;--}}
                {{--<a href="https://youtube.com/HMubaireek" class="follow_icon" title="Facebook"><img src="images/facebook-icon.jpg" alt="Facebook" /></a>&nbsp;&nbsp;&nbsp;--}}
                {{--<a href="https://facebook.com/HMubaireek" class="follow_icon" title="You Tube"><img src="images/youtube-icon.jpg" alt="You Tube" /></a>--}}

                {{--<!--End Blog-->--}}
                {{--<div class="seperator_2"></div>--}}
                {{--<!--Start Blog-->--}}

                {{--<!--End Blog-->--}}
            {{--</div>--}}
            {{--<!--End Latest from Blog-->--}}
            <br clear="all" />
        </div>
        <!--End Inner Div-->
    </div>
    <!--End Grey Footer Bg-->
    <!--Start Green Footer Bg-->
    {{--<div id="green_footer_bg">--}}
        {{--<!--Start Inner Green Bg-->--}}
        {{--<div id="inner_green_bg">--}}
            {{--<div id="go_to_top_div"><a href="#top" id="go_to_top_arrow" class="scroll" title="Click to Go Top"><img src="images/go-to-top-arrow.gif" alt="" /></a></div>--}}
            {{--<div id="footer-links">--}}
                {{--<ul>--}}
                    {{--<li><a href="VideoConference.htm" class="firstlink">Home</a></li>--}}
                    {{--<li><a href="about-us.html">About Me</a></li>--}}
                {{--</ul>--}}
            {{--</div><!--End Footer Links-->--}}

            {{--<span>Copyright � 2012 Hussain Mubaireek</span>--}}
        {{--</div>--}}
        {{--<!--End Inner Green Bg-->--}}
    {{--</div>--}}
    <!--End Green Footer Bg-->
</div>
<!--End Footer-->
</html>