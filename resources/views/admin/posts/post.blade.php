@extends('layouts.admin')
@section('title')
    Posts
@endsection
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <button class="btn btn-primary float-right"><a class="text-white" href="{{url('/admin/post/create')}}">Add New Post</a></button>
                </div>
                <div class="card-body">
                    <table id="post_data" class="table table-bordered table-hover dataTable dtr-inline">
                        <thead>
                        <tr>
                            <th>Post ID</th>
                            <th>Short description</th>
                            <th>identifier</th>
                            <th>Image</th>
                            <th>action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($posts as $post)
                            <tr onclick="window.location='{{url('edit/' . $post->slug)}}'">
                                <td>{{ $post->id}}</td>
                                <td>{{ $post->title}}</td>
                                <td>{{ $post->body}}</td>
                                <td>{{ $post->slug}}</td>
                                <td><a href=''>Delete</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Post ID</th>
                            <th>Short description</th>
                            <th>identifier</th>
                            <th>Image</th>
                            <th>action</th>
                        </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
@endsection
@section('scripts')
    <!-- jQuery -->
    <script src="../../plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- DataTables -->
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../../plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script>
        $( document ).ready(function() {
            $('#post_data').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
                "responsive": true,
            });
        });
    </script>
@endsection
