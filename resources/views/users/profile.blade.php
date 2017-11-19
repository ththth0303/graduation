@extends('layouts.master')
@section('content')
<div class="row">
    <div class="col-md-4 col-xs-12">
        <div class="white-box">
            <div class="user-bg"> <img width="100%" alt="" src="{{ asset(config('path.avatar') .$user->avatar) }}">
                <div class="overlay-box">
                    <div class="user-content">
                        <a href="javascript:void(0)"><img src="{{ asset(config('path.avatar') .$user->avatar) }}" class="thumb-lg img-circle" alt="img"></a>
                        <h4 class="text-white">{{ $user->name }}</h4>
                        <h5 class="text-white">{{ $user->email }}</h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-8 col-xs-12">
        <div class="white-box">
            <ul class="nav nav-tabs tabs customtab">
                <li class="tab">
                    <a href="#settings" data-toggle="tab" aria-expanded="false"> <span class="visible-xs"><i class="fa fa-cog"></i></span> <span class="hidden-xs">Thông tin</span> </a>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane active" id="settings">
                    <form class="form-horizontal form-material">
                        <div class="form-group">
                            <label class="col-md-12">Họ tên</label>
                            <div class="col-md-12">
                                <h3>{{ $user->name }}</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Ngày sinh</label>
                            <div class="col-md-12">
                                <h3>{{ $user->birthday }}</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="example-email" class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <h3>{{ $user->email }}</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Tình độ</label>
                            <div class="col-md-12">
                                <h3>{{ $user->degree }}</h3>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Phòng ban</label>
                                <h3>{{ $user->department }}</h3>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Người dùng</label>
                            <div class="col-md-12">
                                <h3>
                                    @if($user->level == config('permission.admin'))
                                        Admin
                                    @elseif($user->level == config('permission.normal'))
                                        Giảng viên
                                    @else
                                        Chưa kích hoạt
                                    @endif
                                </h3>
                        </div>
                    </form>
                </div>
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
<script>
    $('#start-date').daterangepicker({
        singleDatePicker: true,
        locale: {
            format: 'YYYY/MM/DD'
        }
    });
    $('#start-date').on('apply.daterangepicker', function(ev, picker) {
        //do something, like clearing an input
        $('#end-date').daterangepicker({
            singleDatePicker: true,
            locale: {
            format: 'YYYY/MM/DD'
        },
            minDate: $('#start-date').val().split(" ")[0]
        });
    });
    $('#end-date').daterangepicker({
            singleDatePicker: true,
            locale: {
            format: 'YYYY/MM/DD'
        },
            minDate: $('#start-date').val().split(" ")[0]
        });
</script>
@endsection
