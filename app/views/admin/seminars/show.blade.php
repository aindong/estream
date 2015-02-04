@extends('layouts.admin')

@section('content')
    <h1>{{ $seminar->title }}</h1>
    <p style="color: #000; font-size: 12px;">{{ date('d M, Y', strtotime($seminar->start_at)) }} - {{ date('d M, Y', strtotime($seminar->end_at)) }}</p>
    <p style="color: #000; font-size: 15px;">{{ $seminar->description }}</p>

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
                <td><a href="/admin/users/{{ $user->id }}/edit" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
            </tr>
        @endforeach
        </tbody>
    </table>

    <?php print_r($seminar) ?>
@stop

@section('page-script')
    <script type="text/javascript">
        $(document).ready(function() {
            $('#example').dataTable();
        });
    </script>
@stop