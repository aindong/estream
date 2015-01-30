@extends('layouts.admin')

@section('content')
    <h2>Create a new media</h2>
    {{ Form::open(['route' => 'admin.medias.store', 'method' => 'post']) }}
        @include('admin.medias.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
