@extends('layouts.master') @section('content')
<div class="col-sm-12">
    <div class="white-box col-md-6 col-md-offset-3" >
        <form class="form-horizontal" method="post" enctype="multipart/form-data" action="{{ route('task.store') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label class="control-label" for="recipient-name">Tiêu đề</label>
                <input class="form-control" type="text" name="title">
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Độ ưu tiên:</label>
                <select name="priority" id="" class="form-control">
                    <option value="nomal">Bình thường</option>
                    <option value="low">Thấp</option>
                    <option value="hight">Cao</option>
                </select>
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Nội dung:</label>
                <textarea class="form-control" id="message-text" name="content"></textarea>
            </div>
            <div class="form-group">
                <label class="control-label" for="message-text">Thành viên:</label>
                <br>
                <label class="control-label" for="message-text">
                    <span class="btn btn-success btn-rounded ">anh thắng <a href="">X</a></span>
                </label>
                <input class="form-control" id="message-text">
                <ul class="basic-list">
                    <li>anh thắng</li>
                    <li>anh thắng</li>
                    <li>anh thắng</li>
                    <li>anh thắng</li>
                    <li>anh thắng</li>
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
                    <input type="text" class="form-control" name="start_date" id="start-date" />
                    <span class="input-group-addon bg-info b-0 text-white">Đến</span>
                    <input type="text" class="form-control" name="end_date" id="end-date" />
                </div>
            </div>
            <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">Submit</button>
            <button type="reset" class="btn btn-inverse waves-effect waves-light">Reset</button>
        </form>
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
