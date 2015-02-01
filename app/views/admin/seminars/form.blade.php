@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<legend>Seminar Information</legend>

<div class="form-group">
    {{ Form::label('title', 'Title *', ['class' => 'form-label']) }}
    {{ Form::text('title', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('description', 'Description *', ['class' => 'form-label']) }}
    {{ Form::textarea('description', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('price', 'Registration Price *', ['class' => 'form-label']) }}
    {{ Form::number('price', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('image', 'Seminar Image *', ['class' => 'form-label']) }}
    {{ Form::file('image', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('location', 'Location *', ['class' => 'form-label']) }}
    {{ Form::text('location', null, ['class' => 'form-control controls', 'placeholder' => 'Type a location here and press enter', 'id' => 'locationSearch', 'required' => 'required']) }}
</div>
<div id="map-canvas"></div>

{{ Form::hidden('lat', null, ['id' => 'latLocation']) }}
{{ Form::hidden('long', null, ['id' => 'longLocation']) }}

<div class="form-group">
    {{ Form::label('start_at', 'Start date *', ['class' => 'form-label']) }}
    {{ Form::text('start_at', null, ['class' => 'form-control startDate', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('end_at', 'End date *', ['class' => 'form-label']) }}
    {{ Form::text('end_at', null, ['class' => 'form-control endDate', 'required' => 'required']) }}
</div>
<!-- 
<legend>Speakers</legend> -->

<a href="/admin/seminars" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>
<br/><br/>