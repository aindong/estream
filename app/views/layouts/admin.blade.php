<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/packages/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="stylesheet" href="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.css"/>
    <link rel="stylesheet" href="/packages/FullCalendar/fullcalendar.min.css"/>
    <link rel="stylesheet" href="/css/datepicker.css"/>
    @yield('page-style')
</head>
<body>

<div class="row main-wrapper">
    <header class="col-md-12">
        <span>EStreaming Admin Dashboard</span>
        <div class="pull-right">
            <ul>
                <li><a href="/logout">Logout</a></li>
                <li><a href="#">My Profile</a></li>
            </ul>
        </div>
    </header>

    <div class="col-md-3 sidebar">
        <ul class="nav fixed">
            <h3 class="container" style="width: 100%">Navigation</h3>
            <hr/>
            <li><a href="/admin/dashboard"><i class="glyphicon glyphicon-th-large"></i> Dashboard</a></li>
            <li><a href="/admin/users"><i class="glyphicon glyphicon-user"></i> Users</a></li>
            <li><a href="/admin/articles"><i class="glyphicon glyphicon-pencil"></i> News Articles</a></li>
            <li><a href="/admin/seminars"><i class="glyphicon glyphicon-calendar"></i> Seminars</a></li>
            <li><a href="/admin/medias"><i class="glyphicon glyphicon-picture"></i> Gallery</a></li>
            {{--<li><a href="/admin/webcasts"><i class="glyphicon glyphicon-headphones"></i> Webcasts Requests</a></li>--}}
            <li><a href="/admin/webcast"><i class="glyphicon glyphicon-headphones"></i> Webcasts</a></li>
            <li><a href="/admin/faqs"><i class="glyphicon glyphicon-th-list"></i> FAQ</a></li>
            <li><a href="/admin/logs"><i class="glyphicon glyphicon-bell"></i> Audit Trail</a></li>
            <li><a href="/admin/reports"><i class="glyphicon glyphicon-stats"></i> Reports</a></li>
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
<script src="/js/moment.js"></script>
<script src="/packages/FullCalendar/fullcalendar.min.js"></script>
<script src="/js/bootstrap-datepicker.js"></script>
<script src="//cdn.ckeditor.com/4.4.7/basic/ckeditor.js"></script>
@yield('page-script')
</body>
</html>
