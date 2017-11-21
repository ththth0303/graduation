@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box col-md-6 col-md-offset-3">
             <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('news.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-12">Tiêu đề</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" value="" name="title">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12" for="example-email">Nội dunng</label>
                <div class="col-md-12">
                    <textarea name="content" class="" id="content"></textarea> 
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Đính kèm</label>
                <div class="col-sm-12">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="file" name="attach">
                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
                <img id="output" width="100px" />
            </div>
            <div class="form-group" style="text-align: center;">
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
                <button type="reset" class="btn btn-inverse waves-effect waves-light" >Cancel</button>
            </div>
        </form>
        </div>
    </div>
@endsection
@section('script') 
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<link href="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.css" rel="stylesheet">
<script src="http://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.8/summernote.js"></script>
<script type="text/javascript">
      $("#content").summernote({
            height: 300,   //set editable area's height
            codemirror: { // codemirror options
                theme: 'monokai'
            }
        });
</script>
@endsection