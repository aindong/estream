@extends('layouts.admin')

@section('content')
    <h2>Updating a faq</h2>
    {{ Form::model($faqs, ['route' => ['admin.faqs.update', $faqs->id], 'method' => 'put']) }}
    @include('admin.faqs.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
