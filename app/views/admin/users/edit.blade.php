@extends('layouts.admin')

@section('content')
    <h2>Create a new user</h2>
    {{ Form::model($user, ['route' => ['admin.users.update', $user->id], 'method' => 'put']) }}
    @include('admin.users.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop