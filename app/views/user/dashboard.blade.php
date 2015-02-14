@extends('layouts.default')

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Edit Profile</h2>
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
                            <a href="#" class="btn-style">{{ $user->first_name ." ". $user->last_name }}</a>
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
                    <!--EDIT PROFILE START-->
                    <div class="profile-box editing">
                        @if(Session::has('profile_error'))
                            <div class="alert alert-danger">
                                {{ Session::get('profile_error') }}
                            </div>
                        @elseif(Session::has('profile_success'))
                            <div class="alert alert-success">
                                {{ Session::get('profile_success') }}
                            </div>
                        @endif
                        <h2>Edit Profile</h2>
                        {{ Form::model($user, ['url' => '/users/' . $user->user_id . '/update', 'class' => 'form', 'method' => 'post']) }}
                        <ul>
                            <li>
                                <label>First Name</label>
                                {{ Form::text('first_name', null, ['placeholder' => 'Enter your First Name', 'class' => 'input-block-level']) }}
                            </li>
                            <li>
                                <label>Last Name</label>
                                {{ Form::text('last_name', null, ['placeholder' => 'Enter your Last Name', 'class' => 'input-block-level']) }}
                            </li>
                            <li>
                                <label>Gender</label>
                                {{ Form::select('gender', ['male' => 'Male', 'female' => 'Female'], null, ['placeholder' => 'Select a gender', 'class' => 'input-block-level']) }}
                            </li>
                            <li>
                                <label>Date of Birth</label>
                                {{ Form::text('birthdate', null, ['placeholder' => 'Enter your birthdate', 'class' => 'input-block-level']) }}
                            </li>
                            <li>
                                <label>Email</label>
                                {{ Form::text('email', null, ['placeholder' => 'Enter your email', 'class' => 'input-block-level']) }}
                            </li>
                            <li>
                                <label>Contact Number</label>
                                {{ Form::text('contactnumber', null, ['placeholder' => 'Enter your cellphone number', 'class' => 'input-block-level']) }}
                            </li>
                            <li class="fw">
                                <label>Address</label>
                                {{ Form::textarea('address', null, ['placeholder' => 'Enter your address', 'class' => 'input-block-level']) }}
                            </li>
                            <li class="fw">
                                <button class="btn-style" type="submit">Update</button>
                            </li>
                        </ul>
                        {{ Form::close() }}
                    </div>
                    <!--EDIT PROFILE END-->
                    <!--EDIT PASSWORD START-->
                    <div class="profile-box editing">
                        @if(Session::has('password_error'))
                            <div class="alert alert-danger">
                                {{ Session::get('password_error') }}
                            </div>
                        @elseif(Session::has('password_success'))
                            <div class="alert alert-success">
                                {{ Session::get('password_success') }}
                            </div>
                        @endif
                        <h2>Edit Password</h2>
                        {{ Form::model($user, ['url' => '/users/' . $user->user_id . '/password', 'class' => 'form']) }}
                        <ul>
                            <li>
                                <label>New Password</label>
                                <input type="text" class="input-block-level"  placeholder="Enter your New Password" name="newpassword">
                            </li>
                            <li>
                                <label>Confirm Password</label>
                                <input type="text" class="input-block-level" placeholder="Confirm Password" name="confirmpassword">
                            </li>
                            <li>
                                <label>Old Password</label>
                                <input type="password" class="input-block-level" placeholder="Enter your old Password" name="oldpassword">
                            </li>
                            <li class="fw">
                                <button class="btn-style" type="submit">Update</button>
                            </li>
                        </ul>
                        {{ Form::close() }}
                    </div>
                    <!--EDIT PASSWORD END-->

                </div>
            </div>
        </div>

    </div>
    <!--CONTANT END-->

    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
            <h3 id="myModalLabel">Change profile picture</h3>
        </div>
        <div class="modal-body">
            {{ Form::open(['url' => '/users/'.Auth::getUser()->id.'/picture', 'method' => 'post', 'enctype' => "multipart/form-data"]) }}
                <label for="picture" class="form-label">Browse image</label>
                {{ Form::file('picture',['required' => 'required', 'class' => 'form-control', 'id' => 'picture', 'accept' => 'image/*']) }}
                <button class="btn-style" type="submit">Submit</button>
            {{ Form::close() }}
        </div>
        <div class="modal-footer">
            <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
        </div>
    </div>
@stop