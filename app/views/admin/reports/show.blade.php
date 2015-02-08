@extends('layouts.admin')

@section('content')
    <h1>{{ $seminar->title }}</h1>
    <p style="color: #000; font-size: 12px;">{{ date('d M, Y', strtotime($seminar->start_at)) }} - {{ date('d M, Y', strtotime($seminar->end_at)) }}</p>
    <p style="color: #000; font-size: 15px;">{{ substr($seminar->description, 0, 250) }} ...</p>

    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
        </tr>
        </thead>
        <tbody>
        @foreach($seminar->attendees as $attendant)
            @if($attendant->status == 'paid')
            <tr>
                <td>{{{ $attendant->user->info->last_name }}}, {{{ $attendant->user->info->first_name }}} {{{ $attendant->user->info->middle_name }}}</td>
                <td>{{{ $attendant->user->email }}}</td>
                <td>{{{ ucfirst($attendant->status) }}}</td>
            </tr>
            @endif
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