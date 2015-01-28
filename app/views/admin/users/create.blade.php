@extends('layouts.admin')

@section('content')
    <h2>Create a new user</h2>
    {{ Form::open(['route' => 'admin.users.store', 'method' => 'post']) }}
        @include('admin.users.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop