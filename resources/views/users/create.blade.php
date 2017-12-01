@extends('layouts.master') @section('content')
<div class="col-sm-12">
    <div class="white-box col-md-6 col-md-offset-3">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="/user">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-12">Họ tên</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" value="{{ old('name') }}" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12" for="example-email">Email</label>
                <div class="col-md-12">
                    <input type="email" id="email" name="email" class="form-control" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Mật khẩu</label>
                <div class="col-md-12">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Học vị</label>
                <div class="col-md-12">
                    <select class="form-control" name="degree">
                        @foreach($degrees as $degree)
                        <option value="{{ $degree->id }}">{{ $degree->display_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Địa chỉ</label>
                <div class="col-md-12">
                    <input class="form-control" name="address" value="{{ old('address') }}"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Ngày sinh</label>
                <div class="col-sm-12">
                    <input class="form-control" type="text"  name="birthday" value="{{ old('birthday') }}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Giới tính</label>
                <div class="col-sm-12">
                    <select class="form-control" name="gender">
                        <option value="1"{{ old('gender') == 1? 'selected':'' }}>Nam</option>
                        <option value="2" {{ old('gender') == 2? 'selected':'' }}>Nữ</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Quyền hạn</label>
                <div class="radio-list col-md-12">
                    <label class="radio-inline p-0">
                        <div class="radio radio-info">
                            <input type="radio" name="level" id="radio1" value="1" checked="checked" {{ old('level') == 1? 'checked':'' }}>
                            <label for="radio1">Admin</label>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="radio radio-info">
                            <input type="radio" name="level" id="radio2" value="2" {{ old('level') == 2? 'checked':'' }}>
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
                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Xóa</a> </div>
                </div>
                <img id="output" width="100px" />
            </div>
            <div class="form-group" style="text-align: center;">
                <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Thêm</button>
                <button type="reset" class="btn btn-inverse waves-effect waves-light" onclick="hideImage()">Hủy</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
<script src="{{ asset('js/users/user.js') }}"></script>
@endsection
