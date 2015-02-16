@extends('layouts.admin')

@section('content')
    <h2>Audit Trail</h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>User</th>
            <th>Action</th>
            <th>Date</th>
            <!-- <th>Actions</th> -->
        </tr>
        </thead>
        <tbody>
        @foreach($logs as $log)
            <tr>
                <td>{{{ $log->user->email }}}</td>
                <td>{{{ $log->action }}}</td>
                <td>{{{ date('M d, Y H:i:s', strtotime($log->created_at)) }}}</td>
                <!-- <td><a href="#" class="btn btn-danger">Delete</a></td> -->
            </tr>
        @endforeach
        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable();
        });
    </script>
@stop
