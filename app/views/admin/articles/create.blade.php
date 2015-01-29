@extends('layouts.admin')

@section('content')
    <h2>Create a new article</h2>
    {{ Form::open(['route' => 'admin.articles.store', 'method' => 'post']) }}
        @include('admin.articles.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
