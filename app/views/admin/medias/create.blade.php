@extends('layouts.admin')

@section('page-style')
    <!-- CSS to style the file input field as button and adjust the Bootstrap progress bars -->
    <link rel="stylesheet" href="/css/jquery.fileupload.css">
    <link rel="stylesheet" href="/css/jquery.fileupload-ui.css">
@stop

@section('content')
    <h2>Create a new media</h2>
    {{ Form::open(['route' => 'admin.medias.store', 'method' => 'post', 'enctype' => "multipart/form-data"]) }}
        @include('admin.medias.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
