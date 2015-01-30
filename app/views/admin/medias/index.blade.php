@extends('layouts.admin')

@section('content')
    <h2>Media Management <a href="/admin/medias/create" class="btn btn-primary">Add New</a></h2>
    <table class="table table-striped table-bordered" cellspacing="0" width="100%" id="example">
        <thead>
          <tr>
              <th>Name</th>
              <th>File</th>
              <th>Type</th>
              <th>Created</th>
              <th>Updated</th>
              <th>Actions</th>
          </tr>
          </thead>
          <tbody>
              @foreach($medias as $media)
                  <tr>
                      <td>{{{ $media->user->info->last_name }}}, {{{ $media->user->info->first_name }}} {{{ $media->user->info->middle_name }}}</td>
                      <td>{{{ $media->file }}}</td>
                      <td>{{{ $media->type }}}</td>
                      <td>{{{ $media->created_at }}}</td>
                      <td>{{{ $media->updated_at }}}</td>
                      <td><a href="/admin/medias/{{ $media->id }}/edit" class="btn btn-warning">Update</a> <a href="#" class="btn btn-danger">Delete</a></td>
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
