@extends('layouts.default')

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>My Seminars</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="row">
                <div class="span4">
                    <!--PROFILE IMAGE START-->
                    <div class="profile-box profile-view">
                        <div class="thumb">
                            <a href="edit-profile.html#"><img src="/images/profile-img.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <p>Welcome</p>
                            <a href="edit-profile.html#" class="btn-style">Marrie James</a>
                            <div style="line-height: 0.4em;">
                                @if(Auth::getUser()->info->membership == 'member')
                                    <p style="font-weight: bold;">Member</p>
                                    <p style="font-size: 18px;">Membership Expiration Date</p>
                                    <p>{{ date('M d Y', strtotime(Auth::getUser()->info->membership_expire_at)) }}</p>
                                @else
                                    <p style="font-weight: bold;">Regular</p>
                                @endif

                            </div>
                        </div>
                    </div>
                    <!--PROFILE IMAGE END-->
                    <!--EDIT PROFILE START-->
                    <div class="profile-box edit-profile">
                        <h2>Account Setting</h2>
                        <ul>
                            <li><a href="/users/dashboard">Edit Profile</a></li>
                            <li><a href="/users/seminars">My Seminars</a></li>
                            <li><a href="/users/webcasts">Webcasts Request</a></li>
                        </ul>
                        <div class="logout">
                            <a href="/logout">Log Out</a>
                        </div>
                    </div>
                    <!--EDIT PROFILE END-->
                </div>
                <div class="span8">
                    @foreach($seminarUsers as $seminaruser)
                    <div class="profile-box editing">
                       <h1>{{ $seminaruser->seminar->title }}</h1>
                       <p style="font-size: 12px"><i class="fa fa-calendar-o"></i> {{ date('d M, Y', strtotime($seminaruser->seminar->start_at)) }} - {{ date('d M, Y', strtotime($seminaruser->seminar->end_at)) }}</p>
                       <p><i>{{ $seminaruser->seminar->location }}</i></p>
                       <p>{{ substr($seminaruser->seminar->description, 0, 200) }} ...</p>
                       <p>Status: <span style="font-weight: bold">{{ ucfirst($seminaruser->status) }}</span></p>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--CONTANT END-->
@stop