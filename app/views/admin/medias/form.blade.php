@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<div class="form-group">
    {{ Form::label('file', 'Image *', ['class' => 'form-label']) }}
    {{ Form::file('file',null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/medias" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>
