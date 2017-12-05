@extends('layouts.master') @section('content')
<div class="col-sm-12" id="create-task">
    <div class="white-box col-md-6 col-md-offset-3" >
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('task.update', $task->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label class="control-label" for="recipient-name">Tiêu đề</label>
                <input class="form-control" type="text" name="title" value="{{ $task->title }}">
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Độ ưu tiên:</label>
                <select name="priority" id="" class="form-control" >
                    <option value="nomal" {{ $task->priority == 'nomal'? 'selected' : '' }}>Bình thường</option>
                    <option value="low"  {{ $task->priority == 'low'? 'selected' : '' }}>Thấp</option>
                    <option value="hight"  {{ $task->priority == 'hight'? 'selected' : '' }}>Cao</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Nội dung:</label>
                <textarea class="form-control" id="content" name="content">{{ $task->content }}</textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Thành viên:</label>
                <br>
                <label class="control-label">
                    <span class="btn btn-success btn-rounded" v-for="user in selectUsers">@{{ user.name }} <span @click="deleteUser(user.id)" style="padding: 10px;">x</span></span>
                </label>
                <input type="hidden" v-bind:value="user.id" name="user[]" v-for="user in selectUsers">
                <input class="form-control" id="message-text" @keyup="searchUsers" v-model="input">
                <ul class="basic-list">
                    <li v-for="user in users" @click="addUser(user)">@{{ user.name }}</li>
                </ul>
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Đính kèm:</label>
                <div class="">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="file" name="attach">
                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Thời gian:</label>
                <div class="input-daterange input-group" id="date-range">
                    <input type="text" class="form-control" name="start_date" id="start-date"/>
                    <span class="input-group-addon bg-info b-0 text-white">Đến</span>
                    <input type="text" class="form-control" name="end_date" id="end-date"/>
                </div>
            </div>
            <div class="text-center">
                <button  class="btn btn-success waves-effect waves-light m-r-10" type="submit">Submit</button>
                <button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment-with-locales.min.js"></script>
<script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
<script src="{{ asset('js/tasks/task.js') }}"></script>
<script type="text/javascript">
    th.selectUsers = {!! $task->assignee !!}
</script>
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
