@extends('layouts.admin')

@section('content')
    <h2>Users Management <a href="#" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{{ $user->info->last_name }}}, {{{ $user->info->first_name }}} {{{ $user->info->middle_name }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td>Regular</td>
                    <td><a href="#" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
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