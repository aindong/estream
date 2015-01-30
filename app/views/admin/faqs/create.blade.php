@extends('layouts.admin')

@section('content')
    <h2>Create a new faq</h2>
    {{ Form::open(['route' => 'admin.faqs.store', 'method' => 'post']) }}
        @include('admin.faqs.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
