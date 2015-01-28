@extends('layouts.default')

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Edit Profile</h2>
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
                                <p style="font-weight: bold;">Member</p>
                                <p style="font-size: 18px;">Membership Expiration Date</p>
                                <p>January 20, 2015</p>
                            </div>
                        </div>
                    </div>
                    <!--PROFILE IMAGE END-->
                    <!--EDIT PROFILE START-->
                    <div class="profile-box edit-profile">
                        <h2>Account Setting</h2>
                        <ul>
                            <li><a href="edit-profile.html#">Edit Profile</a></li>
                            <li><a href="edit-profile.html#">My Seminars</a></li>
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
                                <input type="text" class="input-block-level"  placeholder="Enter your First Name">
                            </li>
                            <li>
                                <label>Last Name</label>
                                <input type="text" class="input-block-level" placeholder="Enter your Last Name">
                            </li>
                            <li>
                                <label>Genter</label>
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
                                <input type="text" class="input-block-level"  placeholder="Enter your E-mail ID">
                            </li>
                            <li>
                                <label>Phone</label>
                                <input type="text" class="input-block-level" placeholder="Enter your Phone Number">
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
                    <!--QUIZ SCORE START-->
                    <div class="profile-box editing">
                        <h2>View quizes scores (only online course)</h2>
                        <table>
                            <thead>
                            <tr>
                                <td>Student</td>
                                <td>Part</td>
                                <td>Score</td>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td><a href="edit-profile.html#">How To Be A Great Photographer</a></td>
                                <td>1</td>
                                <td>5/25</td>
                            </tr>
                            <tr>
                                <td>Instructor: Rebecca Smith</td>
                                <td>2</td>
                                <td>2.5/25</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>3</td>
                                <td>Pending</td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td>4</td>
                                <td>Pending</td>
                            </tr>
                            </tbody>
                            <tfoot>
                            <tr>
                                <td>Total</td>
                                <td>&nbsp;</td>
                                <td>7.5/50</td>
                            </tr>
                            </tfoot>
                        </table>


                    </div>
                    <!--QUIZ SCORE END-->
                </div>
            </div>
        </div>
        <!--FOLLOW US SECTION START-->
        <section class="follow-us">
            <div class="container">
                <div class="row">
                    <div class="span4">
                        <div class="follow">
                            <a href="edit-profile.html#">
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
                            <a href="edit-profile.html#">
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
                            <a href="edit-profile.html#">
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