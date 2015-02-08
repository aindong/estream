@extends('layouts.admin')

@section('content')
    <h1>{{ $seminar->title }}</h1>
    <p style="color: #000; font-size: 12px;">{{ date('d M, Y', strtotime($seminar->start_at)) }} - {{ date('d M, Y', strtotime($seminar->end_at)) }}</p>
    <p style="color: #000; font-size: 15px;">{{ substr($seminar->description, 0, 250) }} ...</p>

    <h1>Downloadables <a href="/admin/downloables/create" class="btn btn-primary">Add</a></h1>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($downloadables as $downloadable)
            <tr>
                <td>{{{ $downloadable->name }}}</td>
                <td><a href="/admin/downloadables/{{ $downloadable->id }}/download" class="btn btn-danger">Download</a>
                    {{ Form::open(array('url' => 'admin/downloadables/' . $downloadable->id, 'class' => 'deleteItem')) }}
                    {{ Form::hidden('_method', 'DELETE') }}
                    {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                    {{ Form::close() }}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <h1>Requesting to attend</h1>
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
        @foreach($seminar->attendees as $attendant)
            <tr>
                <td>{{{ $attendant->user->info->last_name }}}, {{{ $attendant->user->info->first_name }}} {{{ $attendant->user->info->middle_name }}}</td>
                <td>{{{ $attendant->user->email }}}</td>
                <td>{{{ ucfirst($attendant->status) }}}</td>
                <td><a href="/admin/updateStatus/{{ $attendant->user_id }}/paid" class="btn btn-primary">Paid</a> <a href="/admin/updateStatus/{{ $attendant->user_id }}/waiting for payment" class="btn btn-danger">Unpaid</a></td>
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