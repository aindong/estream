@extends('layouts.admin')

@section('content')
    <h2>Faq Management <a href="/admin/faqs/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
        <tr>
            <th>Question</th>
            <th>Answer</th>
            <th>Created</th>
            <th>Updated</th>
            <th>Actions</th>
        </tr>
        </thead>
        <tbody>
            @foreach($faqs as $faq)
                <tr>
                    <td>{{{ $faq->question }}}</td>
                    <td>
                      {{{ substr($faq->answer,0 , 55)." ..." }}}
                    </td>
                    <td>{{{ $faq->created_at }}}</td>
                    <td>{{{ $faq->updated_at }}}</td>
                    <td><a href="/admin/faqs/{{ $faq->id }}/edit" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
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
