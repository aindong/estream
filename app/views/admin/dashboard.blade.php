@extends('layouts.admin')
@section('page-style')
    <style>

    </style>
@stop

@section('content')
    <h2>Seminars <a href="#" class="btn btn-primary">Add New</a></h2>
    <div id='calendar'></div>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {

            // page is now ready, initialize the calendar...
            $('#calendar').fullCalendar({
                // put your options and callbacks here
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                }
            })

        });
    </script>
@stop
