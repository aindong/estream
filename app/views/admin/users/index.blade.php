@extends('layouts.admin')

@section('content')
    <h2>Users Management <a href="/admin/users/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Status</th>
            <th>Expiration</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{{ $user->info->last_name }}}, {{{ $user->info->first_name }}} {{{ $user->info->middle_name }}}</td>
                    <td>{{{ $user->email }}}</td>
                    <td>{{{ ucfirst($user->info->membership) }}}</td>
                    <td>
                      @if($user->info->membership == 'member')
                        {{{ date('M d, Y', strtotime($user->info->membership_expire_at)) }}}
                      @else
                        N/A
                      @endif
                    </td>
                    <td><a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning">Update</a>
                        {{ Form::open(array('url' => 'admin/users/' . $users->id, 'class' => 'deleteItem')) }}
                        {{ Form::hidden('_method', 'DELETE') }}
                        {{ Form::submit('Delete', array('class' => 'btn btn-danger')) }}
                        {{ Form::close() }}
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable();
        });

        $('.deleteItem').on('submit', function(e) {
            if(!confirm('Are you sure to delete this item?')) {
                return false;
            }
        });
    </script>
@stop
