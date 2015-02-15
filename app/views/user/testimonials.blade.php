@extends('layouts.default')

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>My Seminars</h2>
            <p>You can view your seminars, edit your profile, request for a webcast in here</p>
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
                            <a href="#myModal" role="button" data-toggle="modal">
                                @if(Auth::getUser()->info->picture != '')
                                    <img src="/public/uploads/user/{{ Auth::getUser()->info->picture }}" alt="">
                                @else
                                    <img src="/images/profile-img.jpg" alt="">
                                @endif
                            </a>
                        </div>
                        <div class="text">
                            <p>Welcome</p>
                            <a href="#" class="btn-style">{{ Auth::getUser()->info->first_name ." ". Auth::getUser()->info->last_name }}</a>
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
                        </ul>
                        <div class="logout">
                            <a href="/logout">Log Out</a>
                        </div>
                    </div>
                    <!--EDIT PROFILE END-->
                </div>
                <div class="span8">
                    <div class="profile-box editing">
                        <ul>
                            {{ Form::open(['url' => '/users/create-testimonials', 'method' => 'post']) }}
                                <li class="fw">
                                    <h1>Write your testimonial</h1>
                                    {{ Form::textarea('testimonial', null, ['placeholder' => 'Write your testimonial', 'class' => 'input-block-level', 'required' => 'required']) }}
                                </li>
                                <li class="fw">
                                    <button class="btn-style" type="submit">Submit</button>
                                </li>
                            {{ Form::close() }}
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--CONTANT END-->
@stop

@section('page-script')
    <script type="text/javascript">
        $(function() {

        });
    </script>
@stop