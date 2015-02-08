@extends('layouts.admin')

@section('content')
    @if(isset($_GET['seminar']))
    <h2>Upload downloadables</h2>
    {{ Form::open(['route' => 'admin.downloadables.store', 'method' => 'post', 'enctype' => "multipart/form-data"]) }}

        <input type="hidden" name="seminar_id" value="<?php echo $_GET['seminar']; ?>"/>
        <div class="form-group">
            {{ Form::label('name', 'Name *', ['class' => 'form-label']) }}
            {{ Form::text('name', null, ['class' => 'form-control controls', 'id' => 'locationSearch', 'required' => 'required']) }}
        </div>

        <div class="form-group">
            {{ Form::label('file', 'Image *', ['class' => 'form-label']) }}
            {{ Form::file('file',null, ['class' => 'form-control', 'required' => 'required']) }}
        </div>

        <a href="/admin/medias" class="btn btn-danger">Back</a>
        <button type="submit" class="btn btn-primary">Submit</button>

    {{ Form::close() }}
    @else
        <p>No action in here</p>
    @endif
@stop

@section('page-script')

@stop
