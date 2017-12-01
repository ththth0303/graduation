@extends('layouts.master') @section('content')
@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
<div class="col-sm-12">
    <div class="white-box col-md-6 col-md-offset-3">
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('user.update', $user->id) }}">
            {{ csrf_field() }}
            {{ method_field('PUT') }}
            <div class="form-group">
                <label class="col-md-12">Họ Tên</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" value="{{ $user->name }}" name="name" {{ $edit }}>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Học vị</label>
                <div class="col-md-12">
                    <select class="form-control" name="degree">
                        @foreach($degrees as $degree)
                            <option value="{{ $degree->id }}" {{ $degree->id == $user->degree ? 'selected' : '' }}>{{ $degree->display_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Địa chỉ</label>
                <div class="col-md-12">
                    <input class="form-control" name="address" value="{{ $user->address }}"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Ngày sinh</label>
                <div class="col-sm-12">
                    <input class="form-control" type="text"  name="birthday" value="{{ $user->birthday }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Giới tính</label>
                <div class="col-sm-12">
                    <select class="form-control" name="gender" {{ $edit }} >
                        <option value="1" {{ $user->gender == 1? 'selected': '' }} >Nam</option>
                        <option value="2" {{ $user->gender == 2? 'selected': '' }}>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Vai trò</label>
                <div class="radio-list col-md-12">
                    <label class="radio-inline p-0">
                        <div class="radio radio-info">
                            <input type="radio" name="level" id="radio1" value="1" {{ $user->level == 1? 'checked': '' }} {{ $edit }}>
                            <label for="radio1">Admin</label>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="radio radio-info">
                            <input type="radio" name="level" id="radio2" value="2" {{ $user->level == 2? 'checked': '' }} {{ $edit }}>
                            <label for="radio2">User</label>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Ảnh đại diện</label>
                <div class="col-sm-12">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Chọn ảnh</span> <span class="fileinput-exists">Thay đổi</span>
                        <input type="file" name="avatar" accept="image/*" onchange="loadFile(event)">
                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
                <img id="output" width="100px" src="{{ asset(config('path.avatar') . $user->avatar ) }}" />
            </div>
            <div class="form-group" style="text-align: center;">
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Sửa</button>
                <button type="reset" class="btn btn-inverse waves-effect waves-light">Khôi phục</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/css/bootstrap-datepicker.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.7.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="{{ asset('js/users/user.js') }}"></script>
@endsection
