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
        <form class="form-horizontal" method="post" enctype="" action="/user">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="col-md-12">Name</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" value="" name="name">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12" for="example-email">Email</label>
                <div class="col-md-12">
                    <input type="email" id="email" name="email" class="form-control">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Password</label>
                <div class="col-md-12">
                    <input type="password" class="form-control" name="password">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Degree</label>
                <div class="col-md-12">
                    <input type="text" class="form-control" name="degree">
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-12">Department</label>
                <div class="col-md-12">
                    <input class="form-control" name="department"></input>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Birthday</label>
                <div class="col-sm-12">
                    <input class="form-control" type="date"  name="birthday">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Gender</label>
                <div class="col-sm-12">
                    <select class="form-control" name="gender">
                        <option value="1">Nam</option>
                        <option value="2">Nữ</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="control-label">Level</label>
                <div class="radio-list">
                    <label class="radio-inline p-0">
                        <div class="radio radio-info">
                            <input type="radio" name="level" id="radio1" value="1" checked="checked">
                            <label for="radio1">Admin</label>
                        </div>
                    </label>
                    <label class="radio-inline">
                        <div class="radio radio-info">
                            <input type="radio" name="level" id="radio2" value="2">
                            <label for="radio2">Normail</label>
                        </div>
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-12">Avatar</label>
                <div class="col-sm-12">
                    <div class="fileinput fileinput-new input-group" data-provides="fileinput">
                        <div class="form-control" data-trigger="fileinput"> <i class="glyphicon glyphicon-file fileinput-exists"></i> <span class="fileinput-filename"></span></div>
                        <span class="input-group-addon btn btn-default btn-file"> <span class="fileinput-new">Select file</span> <span class="fileinput-exists">Change</span>
                        <input type="file" name="...">
                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                </div>
            </div>
            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
        </form>
    </div>
</div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
@endsection
