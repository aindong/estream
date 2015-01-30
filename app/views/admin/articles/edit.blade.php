@extends('layouts.admin')

@section('content')
    <h2>Updating a article</h2>
    {{ Form::model($articles, ['route' => ['admin.articles.update', $articles->id], 'method' => 'put']) }}
    @include('admin.articles.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
