@extends('layouts.admin')

@section('content')
    <h2>Seminars Management <a href="/admin/seminars/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Title</th>
            <th>Description</th>
            <th>Price</th>
            <th>Location</th>
            <th>Start</th>
            <th>End</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($seminars as $seminar)
                <tr>
                    <td>{{{ $seminar->title }}}</td>
                    <td>{{{ $seminar->description }}}</td>
                    <td>{{{ $seminar->price }}}</td>
                    <td>{{{ $seminar->location }}}</td>
                    <td>{{{ date('M d, Y', strtotime($seminar->start)) }}}</td>
                    <td>{{{ date('M d, Y', strtotime($seminar->end)) }}}</td>
                    <td><a href="/admin/users/{{ $seminar->id }}/edit" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
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
