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
                            <a href="#"><img src="/images/profile-img.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <p>Welcome</p>
                            <a href="#" class="btn-style">{{ $user->info->first_name ." ". $user->info->last_name }}</a>
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
                        <h2>Edit Profile</h2>
                        <ul>
                            <li>
                                <label>First Name</label>
                                <input type="text" class="input-block-level"  placeholder="Enter your First Name" value="{{ $user->info->first_name }}">
                            </li>
                            <li>
                                <label>Last Name</label>
                                <input type="text" class="input-block-level" placeholder="Enter your Last Name" value="{{ $user->info->last_name }}">
                            </li>
                            <li>
                                <label>Gender</label>
                                <select class="input-block-level">
                                    <option>Male</option>
                                    <option>Female</option>
                                </select>
                            </li>
                            <li>
                                <label>Date of Birth</label>
                                <input type="text" class="input-block-level">
                            </li>
                            <li>
                                <label>Email</label>
                                <input type="text" class="input-block-level"  placeholder="Enter your E-mail ID" value="{{ $user->email }}">
                            </li>
                            <li>
                                <label>Contact Number</label>
                                <input type="text" class="input-block-level" placeholder="Enter your Contact Number" value="{{ $user->info->contactnumber }}">
                            </li>
                            <li class="fw">
                                <label>Address</label>
                                <textarea class="input-block-level"></textarea>
                            </li>
                            <li class="fw">
                                <button class="btn-style">Update</button>
                            </li>
                        </ul>
                    </div>
                    <!--EDIT PROFILE END-->
                    <!--EDIT PASSWORD START-->
                    <div class="profile-box editing">
                        <h2>Edit Password</h2>
                        <ul>
                            <li>
                                <label>New Password</label>
                                <input type="text" class="input-block-level"  placeholder="Enter your New Password">
                            </li>
                            <li>
                                <label>Confirm Password</label>
                                <input type="text" class="input-block-level" placeholder="Confirm Password">
                            </li>
                            <li>
                                <label>Old Password</label>
                                <input type="password" class="input-block-level" placeholder="Enter your old Password">
                            </li>
                            <li class="fw">
                                <button class="btn-style">Update</button>
                            </li>
                        </ul>
                    </div>
                    <!--EDIT PASSWORD END-->

                </div>
            </div>
        </div>

    </div>
    <!--CONTANT END-->
@stop