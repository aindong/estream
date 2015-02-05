@if(Session::has('error'))
    <div class="alert alert-danger">
        <span>{{ Session::get('error') }}</span>
    </div>
@endif

<div class="form-group">
    {{ Form::label('email', 'Email Address *', ['class' => 'form-label']) }}
    {{ Form::text('email', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('password', 'Password *', ['class' => 'form-label']) }}
    {{ Form::password('password', ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('first_name', 'First Name *', ['class' => 'form-label']) }}
    {{ Form::text('first_name', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('middle_name', 'Middle Name *', ['class' => 'form-label']) }}
    {{ Form::text('middle_name', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('last_name', 'Last Name *', ['class' => 'form-label']) }}
    {{ Form::text('last_name', null, ['class' => 'form-control', 'required' => 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('membership', 'Membership *', ['class' => 'form-label']) }}
    {{ Form::select('membership', ['regular' => 'Regular', 'member' => 'Member'], null, ['class' => 'form-control', 'required']) }}
</div>

<div class="form-group">
    {{ Form::label('membership_expire_at', 'Membership Expires at', ['class' => 'form-label']) }}
    {{ Form::text('membership_expire_at', null, ['class' => 'form-control membership_expire_at']) }}
</div>

<div class="form-group">
    {{ Form::label('role_id', 'Role *', ['class' => 'form-label']) }}
    {{ Form::select('role_id', [1 => 'User', 2 => 'Admin'], null, ['class' => 'form-control', 'required']) }}
    {{--{{ Form::text('role', null, ['class' => 'form-control', 'required' => 'required']) }}--}}
</div>

<a href="/admin/users" class="btn btn-danger">Back</a>
<button type="submit" class="btn btn-primary">Submit</button>
