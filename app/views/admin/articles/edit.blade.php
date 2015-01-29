@extends('layouts.admin')

@section('content')
    <h2>Updating a article</h2>
    {{ Form::model($article, ['route' => ['admin.articles.update', $article->id], 'method' => 'put']) }}
    @include('admin.articles.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
