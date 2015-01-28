<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="/packages/bootstrap/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="/css/admin.css"/>
    <link rel="stylesheet" href="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.css"/>
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
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Users</a></li>
            <li><a href="#">Seminars</a></li>
            <li><a href="#">Medias</a></li>
            <li><a href="#">Webcasts Requests</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Audit Trail</a></li>
            <li><a href="#">Reports</a></li>
        </ul>
    </div>

    <div id="content" class="col-md-9">
        <h2>Users Management <a href="#" class="btn btn-primary">Add New</a></h2>
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
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 2</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 3</td>
                <td>Student</td>
                <td>Regular</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 4</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 5</td>
                <td>Student</td>
                <td>Regular</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 6</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 7</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 8</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 3</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 4</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 5</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 6</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 7</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 8</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 3</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 4</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 5</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 6</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 7</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 8</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 3</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 4</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 5</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 6</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 7</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 8</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 3</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 4</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 5</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 6</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 7</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 8</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 3</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 4</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 5</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 6</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 7</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            <tr>
                <td>Test Name 8</td>
                <td>Student</td>
                <td>Member</td>
                <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
            </tbody>
        </table>
    </div>
</div>

<!-- Jquery Lib -->
<script src="/js/jquery-1.11.0.min.js"></script>
<script src="/packages/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="/packages/datatables/media/js/jquery.dataTables.min.js"></script>
<script type="text/javascript" src="/packages/datatables/extensions/Bootstrap/dataTables.bootstrap.js"></script>

<script type="text/javascript">
    $(document).ready(function() {
        $('#example').dataTable();
    });
</script>
</body>
</html>