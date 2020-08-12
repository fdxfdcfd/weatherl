@extends('layouts.app')
@section('title')
    Add New Post
@endsection
@section('content')
    <script type="text/javascript" src="{{ asset('/js/tinymce/tinymce.min.js') }}"></script>
    <form action="/new-post" method="post">
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <div class="form-group">
            <input required="required" value="{{ old('title') }}" placeholder="Enter title here" type="text" name = "title"class="form-control" />
        </div>
        <div class="form-group">
            <textarea name='body'class="form-control">{{ old('body') }}</textarea>
        </div>
        <input type="submit" name='publish' class="btn btn-success" value = "Publish"/>
        <input type="submit" name='save' class="btn btn-default" value = "Save Draft" />
    </form>
    <script type="text/javascript">
        $( document ).ready(function() {
            tinymce.init({
                selector: 'textarea',
                plugins : ["advlist autolink lists link image charmap print preview anchor", "searchreplace visualblocks code fullscreen", "insertdatetime media table contextmenu paste image code"],
                toolbar : "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image code",
                images_upload_url: '{{url("/upload")}}',
                images_upload_handler: function (blobInfo, success, failure, progress) {
                    $.ajaxSetup({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                    });
                    var formData;
                    formData = new FormData();
                    formData.append('file', blobInfo.blob(), blobInfo.filename());
                    $.ajax({
                        url: '{{url("/upload")}}',
                        type: 'post',
                        data: formData,
                        contentType: false,
                        processData: false,
                        success: function(response){
                            response = JSON.parse(response);
                            success(response.location);
                        },
                    });
                }
            });
        });
    </script>
@endsection
