@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<div class="form-group">
    {{ Form::label('question', 'Question *', ['class' => 'form-label']) }}
    {{ Form::text('question', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('answer', 'Answer *', ['class' => 'form-label']) }}
    {{ Form::textarea('answer', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<a href="/admin/faqs" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>
