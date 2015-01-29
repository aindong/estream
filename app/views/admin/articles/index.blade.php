@extends('layouts.admin')

@section('content')
    <h2>Article Management <a href="/admin/articles/create" class="btn btn-primary">Add New</a></h2>
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
            @foreach($articles as $article)
                <tr>
                    <!-- <td>{{{ $article->info->last_name }}}, {{{ $article->info->first_name }}} {{{ $article->info->middle_name }}}</td>
                    <td>{{{ $article->email }}}</td>
                    <td>{{{ ucfirst($article->info->membership) }}}</td>
                    <td>
                      @if($article->info->membership == 'member')
                        {{{ date('M d, Y', strtotime($article->info->membership_expire_at)) }}}
                      @else
                        N/A
                      @endif
                    </td>
                    <td><a href="/admin/articles/{{ $article->id }}/edit" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td> -->
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
    </script>
@stop
