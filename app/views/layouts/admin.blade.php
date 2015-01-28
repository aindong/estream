<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/packages/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="stylesheet" href="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.css"/>
    @yield('page-style')
</head>
<body>

<div class="row main-wrapper">
    <header class="col-md-12">
        <span>EStreaming Admin Dashboard</span>
        <div class="pull-right">
            <ul>
                <li><a href="#">Logout</a></li>
                <li><a href="#">My Profile</a></li>
            </ul>
        </div>
    </header>

    <div class="col-md-3 sidebar">
        <ul class="nav fixed">
            <h3 class="container" style="width: 100%">Navigation</h3>
            <hr/>
            <li><a href="/admin/dashboard">Dashboard</a></li>
            <li><a href="/admin/users">Users</a></li>
            <li><a href="#">Seminars</a></li>
            <li><a href="#">Medias</a></li>
            <li><a href="#">Webcasts Requests</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Audit Trail</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </div>

    <div id="content" class="col-md-9">
        @yield('content')
    </div>
</div>

<!-- Jquery Lib -->
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/packages/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/packages/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.js"></script>

@yield('page-script')
</body>
</html>