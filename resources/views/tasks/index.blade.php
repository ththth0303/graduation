@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        @if(session('message'))
            <p class="{{ session('message')['type'] == true ? 'btn-info' : 'btn-danger' }} text-center">{{ session('message')['message'] }}</p>
        @endif
        <div class="white-box">
            <a href="{{ route('task.create') }}"><div class="btn btn-danger">New</div></a>
                <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th class="col-md-1">Ưu tiên</th>
                            <th class="col-md-3">Tiêu đề</th>
                            <th class="col-md-2">Giáo viên</th>
                            <th class="col-md-1">Ngày bắt đầu</th>
                            <th class="col-md-1">Thời hạn</th>
                            <th class="col-sm-4">Trạng thái</th>
                            <th>Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>
                                @if($task->priority == 'nomal')
                                <span class="label label-success">Thấp</span>
                                @elseif($task->priority == 'low')
                                <span class="label label-primary">Bình thường</span>
                                @elseif($task->priority == 'hight')
                                <span class="label label-danger">Cao</span>
                                @endif
                            </td>
                            <td ><a  style="text-overflow:ellipsis;" href="{{ route('task.show', $task->id) }}">{{ $task->title }}</a></td>
                            <td>
                                @foreach($task->assignee as $assignee)
                                <a target="blank" href="{{ route('user.show', $assignee->id) }}"><img class="img-circle" src="{{ asset(config('path.avatar') . $assignee->avatar) }}" width="30px" height="30px" data-toggle="tooltip" data-original-title="{{$assignee->name}}"></a>
                                @endforeach
                            </td>
                            <td>{{ $task->start_date }}</td>
                            <td>{{ $task->end_date }}</td>
                            <td>
                                @if($task->process == 100)
                                    <div class="label label-success">Hoàn thành</div>
                                @else
                                    <div class="progress progress-lg">
                                        <div class="progress-bar progress-bar-success text-center" role="progressbar" style="width: {{  $task->process }}%;">
                                            {{  $task->process }}%
                                        </div>
                                    </div>
                                @endif
                            </td>
                            <td class="text-nowrap">
                                <a href="{{ route('task.edit', $task->id) }}" data-toggle="tooltip" data-original-title="Edit"> <i class="fa fa-pencil text-inverse m-r-10"></i> </a>
                                <a href="#" data-toggle="tooltip" data-original-title="Close"> <i class="fa fa-close text-danger"></i> </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <!-- /content -->
        </div>
    </div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.19.2/moment-with-locales.min.js"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    {{-- <script src="{{ asset('js/tasks/task.js') }}"></script> --}}
@endsection
