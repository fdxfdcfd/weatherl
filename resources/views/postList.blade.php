@extends('layouts.admin')
@section('content')
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Post List
        </h1>
        <button type="button" class="btn btn-primary" onclick="window.location='{{ $url ?? '' }}addPost.php'">Add Post</button>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <!--                            <h3 class="box-title">Hover Data Table</h3>-->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table id="example2" class="table table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>Post Id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Identifier</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($posts as $post)
                                <tr onclick="window.location='{{url('edit/' . {{$post->slug}}}}))}}}}'">
                                    <td>{{ $post->id}}</td>
                                    <td>{{ $post->title}}</td>
                                    <td>{{ $post->body}}</td>
                                    <td>{{ $post->slug}}</td>
                                    <td><a href='postDelete.php?post_id={{ $post->id}}'>Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                            <tfoot>
                            <tr>
                                <th>Post Id</th>
                                <th>Title</th>
                                <th>Content</th>
                                <th>Identifier</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
