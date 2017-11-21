@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <a href="{{ route('task.create') }}"><div class="btn btn-danger">New</div></a>
            <div class="sttabs tabs-style-linebox">
            <nav>
                <ul>
                    <li class=""><a href="#section-linebox-5"><span>Tất cả</span></a>
                    </li>
                    <li class="tab-current"><a href="#section-linebox-4"><span>Đang làm</span></a>
                    </li>
                    <li class=""><a href="#section-linebox-2"><span>Đã hoàn thành</span></a>
                    </li>
                    <li class=""><a href="#section-linebox-3"><span>Trạng thái khác</span></a>
                    </li>
                    <li class=""><a href="#section-linebox-5"><span>Settings</span></a>
                    </li>
                </ul>
            </nav>
            <div class="content-wrap text-center">
                <section id="section-linebox-2" class="content-current">
                     <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Uu tien</th>
                            <th>Tieu de</th>
                            <th>Giao vien</th>
                            <th>Ngay bat dau</th>
                            <th>ngay ket thuc</th>
                            <th class="col-sm-4">Tien trinh</th>
                            <th>Hanh dong</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($tasks as $task)
                        <tr>
                            <td>{{ $task->id }}</td>
                            <td>
                                @if($task->priority == 'nomal')
                                De
                                @elseif($task->priority == 'low')
                                Trung binh
                                @elseif($task->priority == 'hight')
                                Cao
                                @endif
                            </td>
                            <td><a href="{{ route('task.show', $task->id) }}">{{ $task->title }}</a></td>
                            <td>
                                @foreach($task->assignee as $assignee)
                                <img src="{{ asset(config('path.avatar') . $assignee->avatar) }}" alt="">
                                {{ $assignee->name }}
                                @endforeach
                            </td>
                            <td>2/11/2017</td>
                            <td>3/11/2017</td>
                            <td>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%;">
                                        20%
                                    </div>
                                </div>
                            </td>
                            <td><img alt="Update" class="model_img img-responsive" data-target="#responsive-modal" data-toggle="modal" src="../plugins/images/model.png"></td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
                </section>
                <section id="section-linebox-3" class="">
                    <h2>Tabbing 3</h2>
                </section>
                <section id="section-linebox-4" class="">
                    <h2>Tabbing 4</h2>
                </section>
                <section id="section-linebox-5" class="">
                    <h2>Tabbing 5</h2>
                </section>
            </div>
            <!-- /content -->
        </div>  
        </div>
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
