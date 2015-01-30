@extends('layouts.admin')

@section('content')
    <h2>Updating a media</h2>
    {{ Form::model($medias, ['route' => ['admin.medias.update', $medias->id], 'method' => 'put']) }}
    @include('admin.medias.form')
    {{ Form::close() }}
@stop

@section('page-script')

@stop
