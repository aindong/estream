@extends('layouts.admin')

@section('content')
    <h2>Testimonials Management</h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Name</th>
            <th>Testimonial</th>
            <th>Status</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
        @foreach($testimonials as $testimonial)
            <tr>
                <td>{{{ $testimonial->user->info->last_name }}}, {{{ $testimonial->user->info->first_name }}} {{{ $testimonial->user->info->middle_name }}}</td>
                <td>{{{ $testimonial->testi }}}</td>
                <td>
                    {{{ $testimonial->status }}}
                </td>
                <td><a href="/admin/testimonials/{{ $testimonial->id }}/approve" class="btn btn-warning">Approve</a>
                    {{ Form::open(array('url' => 'admin/testimonials/' . $testimonial->id, 'class' => 'deleteItem')) }}
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
