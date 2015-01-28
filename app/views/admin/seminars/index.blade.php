@extends('layouts.admin')

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
            })

        });
    </script>
@stop