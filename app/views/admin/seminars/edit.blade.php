@extends('layouts.admin')

@section('content')
    <h2>Updating a seminar</h2>
    {{ Form::model($seminar, ['route' => ['admin.seminars.update', $seminar->id], 'method' => 'put']) }}
    @include('admin.seminars.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
