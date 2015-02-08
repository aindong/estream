@extends('layouts.admin')

@section('content')
    <h2>Upload downloadables</h2>
    {{ Form::open(['route' => 'admin.downloadables.store', 'method' => 'post', 'enctype' => "multipart/form-data"]) }}

        <div class="form-group">
            {{ Form::label('name', 'Name *', ['class' => 'form-label']) }}
            {{ Form::text('name', null, ['class' => 'form-control controls', 'placeholder' => 'Type a location here and press enter', 'id' => 'locationSearch', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::label('file', 'Image *', ['class' => 'form-label']) }}
            {{ Form::file('file',null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <a href="/admin/medias" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    {{ Form::close() }}
@stop

@section('page-script')

@stop
