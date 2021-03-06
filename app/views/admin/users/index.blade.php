@extends('layouts.default')

@section('page-style')
    <!-- PRETTY PHOTO BACKGROUNDS -->
    <link href="/css/prettyPhoto.css" rel="stylesheet" media="screen">
    <link rel="stylesheet" href="/packages/datatables/media/css/dataTables.bootstrap.css"/>
@stop

@section('content')
    <!--BANNER START-->
    <div class="page-heading">
        <div class="container">
            <h2>Admin Dashboard</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
        </div>
    </div>
    <!--BANNER END-->
    <!--CONTANT START-->
    <div class="contant">
        <div class="container">
            <div class="row">
                <div class="span3">
                    <!--PROFILE IMAGE START-->
                    <div class="profile-box profile-view">
                        <div class="thumb">
                            <a href="edit-profile.html#"><img src="/images/profile-img.jpg" alt=""></a>
                        </div>
                        <div class="text">
                            <p>Welcome</p>
                            <a href="edit-profile.html#" class="btn-style">Marrie James</a>
                            <p>Status: <span>Member</span></p>
                            <p>Expiration: <span>February 1, 2015</span></p>
                        </div>
                    </div>
                    <!--PROFILE IMAGE END-->
                    <!--EDIT PROFILE START-->
                    <div class="profile-box edit-profile">
                        <h2>Dashboard Navigation</h2>
                        <ul>
                            <li><a href="/admin/users">Users Managemet</a></li>
                            <li><a href="edit-profile.html#">Seminars Management</a></li>
                            <li><a href="edit-profile.html#">Webcast Requests</a></li>
                            <li><a href="edit-profile.html#">FAQ Management</a></li>
                            <li><a href="#">Audit Trail</a></li>
                            <li><a href="#">Settings</a></li>
                            <li><a href="edit-profile.html#">Edit profile</a></li>
                        </ul>
                        <div class="logout">
                            <a href="edit-profile.html#">Log Out</a>
                        </div>
                    </div>
                    <!--EDIT PROFILE END-->
                </div>
                <div class="span9">
                    <!--QUIZ SCORE START-->
                    <div class="profile-box editing">
                        <h2>Users Management</h2>
                        <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Occupation</th>
                                    <th>Status</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Test Name 1</td>
                                    <td>Student</td>
                                    <td>Regular</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 2</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 3</td>
                                    <td>Student</td>
                                    <td>Regular</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 4</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 5</td>
                                    <td>Student</td>
                                    <td>Regular</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 6</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 7</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 8</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 3</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 4</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 5</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 6</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 7</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 8</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 3</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 4</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 5</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 6</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 7</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 8</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 3</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 4</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 5</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 6</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 7</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 8</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 3</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 4</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 5</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 6</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 7</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 8</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 3</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 4</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 5</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 6</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 7</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                                <tr>
                                    <td>Test Name 8</td>
                                    <td>Student</td>
                                    <td>Member</td>
                                    <td>Actions</td>
                                </tr>
                            </tbody>
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

@section('page-script')
    <script src="/js/jquery.bxslider.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    <script src="/js/owl.carousel.js"></script>
    <script type="text/javascript" src="/js/jquery.easy-pie-chart.js"></script>
    <script src="/js/jquery.prettyPhoto.js"></script>
    <script src="/js/modernizr.js"></script>
    <script type="text/javascript" src="/js/skrollr.min.js"></script>
    <script type="text/javascript" src="/packages/datatables/media/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="/packages/datatables/media/js/dataTables.bootstrap.js"></script>
    <script src="/js/functions.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable();
        });
    </script>
@stop