@extends('layouts.admin')

@section('content')
    <h2>Updating a user</h2>
    {{ Form::model($user, ['route' => ['admin.users.update', $user->user_id], 'method' => 'put']) }}
      @include('admin.users.form')
    {{ Form::close() }}
@stop

@section('page-script')
    <script type="text/javascript">
        $(function() {
            $('.membership_expire_at').datepicker();
        });
    </script>
@stop
