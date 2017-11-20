@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <div class="clearfix" style="border: 1px solid #d7d7d7; padding: 10px">
                <div class="col-md-12">
                    <div class="title col-md-9 col-sm-12 col-xs-12"><h2>{{ $task->title }}</h2></div>
                    <div class="btn btn-danger col-md-2 col-sm-12 col-xs-12 clearfix" data-target="#responsive-modal" data-toggle="modal">Cập nhật tiến độ</div>
                    {{-- <div class="btn btn-danger col-md-1">Hoàn Thành</div> --}}
                </div>
                <div class="info">
                    <p><b>Priority: </b>
                        @if($task->priority == 'nomal')
                            De
                        @elseif($task->priority == 'low')
                            Trung binh
                        @elseif($task->priority == 'hight')
                            Cao
                        @endif
                    </p></div>
                <div class="info"><p><b>Start date: </b>{{ $task->start_date }}</p></div>
                <div class="info"><p><b>Due date: </b>{{ $task->end_date }}</p></div>
                <div class="col-sm-12">
                    <p class="col-md-2 status"><b>Status: </b></p>
                    <div class="progress progress-lg col-md-6">
                        <div class="progress-bar progress-bar-success" role="progressbar" style="width: {{ $task->process }}%;">
                            {{ $task->process }}%
                        </div>
                    </div>
                </div>
                <hr>
                <div class="col-md-12">
                    <p><b>Assignee: </b>
                        @foreach($task->assignee as $assignee)
                            <a href="">{{ $assignee->user->name }}</a>
                        @endforeach
                    </p></div>
                <hr class="col-md-12">
                <div class="col-md-12"><p><b>Attack: </b><br>
                    @foreach( $task->attachs as $attach)
                    <a href="{{ route('download_attach', [$attach->name, $attach->path]) }}">{{ $attach->name }}</a> <br>
                    @endforeach
                </p></div>
                <hr class="col-md-12">
                <div class="col-md-12"><p><b>Description: </b>{{ $task->description }}</p></div>
                <hr class="col-md-12">
                <div class="col-md-12"><p><b>Messages: </b></p>
                    @foreach($task->taskUpdates as $update)
                        {{ $update->user->name }} change from {{ $update->old_process }} to {{ $update->new_process }} <br>
                    @endforeach
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="responsive-modal" role="dialog" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title">Cập nhật tiến độ</h4>
                    </div>
                    <div class="modal-body">
                        <form method="post" enctype="multipart/form-data" action="{{ route('update-task') }}">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="control-label" for="recipient-name">Tiến độ ({{ $task->status }}%)</label>
                                <input class="form-control" id="recipient-name" type="number" autofocus min="0" max="100" required="true" name="process" value="{{ $task->process }}">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Ghi chú:</label>
                                <textarea class="form-control" id="message-text" name="message"></textarea>
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Đính kèm:</label>
                                <div class="">
                                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                                        <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                                        <input type="file" name="attach">
                                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a>
                                    </div>
                                </div>
                            </div>
                            <input type="hidden" value="{{ $task->id }}" name="task_id">
                            <div class="modal-footer">
                                <button class="btn btn-default waves-effect" data-dismiss="modal" type="button">Close</button> <button class="btn btn-danger waves-effect waves-light" type="submit">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endsection
@section('style')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
  <link rel="stylesheet" href="{{ asset('css/tasks/style.css') }}">
@endsection
