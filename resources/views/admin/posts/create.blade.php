@extends('layouts.admin')
@section('title')
    Add New Post
@endsection
@section('content')
    <form role="form" method="post" action="{{ url('/admin/post/create')}}">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="card-body">
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" name="title" id="title" placeholder="Enter Title">
            </div>
            <div class="form-group">
                <label for="short_description">Short Description</label>
                <input type="text" class="form-control" name="short_description" id="short_description" placeholder="Enter Short Description">
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <input type="text" class="form-control" name="category" id="category" placeholder="Enter Category">
            </div>
            <div class="form-group">
                <label for="image">Avatar</label>
                <div class="input-group">
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="image" name="image">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                    </div>
                    <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 400px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
            </div>
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
            <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
@endsection
@section('scripts')
    <!-- Summernote -->
    <script src="../../plugins/summernote/summernote-bs4.min.js"></script>
    <script>
        $(function () {
            // Summernote
            $('.textarea').summernote({
                height: 250
            })
        })
    </script>
@endsection
@section('style')
    <!-- summernote -->
    <link rel="stylesheet" href="../../plugins/summernote/summernote-bs4.css">
@endsection
