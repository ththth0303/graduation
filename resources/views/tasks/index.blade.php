@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <div class="btn btn-danger" data-target="#create-task" data-toggle="modal">New</div>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Priority</th>
                            <th>Title</th>
                            <th>Assignee</th>
                            <th>Start date</th>
                            <th>Due date</th>
                            <th class="col-sm-4">% Done</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Hight</td>
                            <td><a href="/task/1">Hoàn thành đề cương</a></td>
                            <td>Ngô Trung Thắng<br>
                            Ngô Trung Thắng<br>
                            Ngô Trung Thắng<br></td>
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
                        <tr>
                            <td>1</td>
                            <td>Deshmukh</td>
                            <td>Prohaska</td>
                            <td>@Genelia</td>
                            <td>@Genelia</td>
                            <td>@Genelia</td>
                            <td>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%;">
                                        20%
                                    </div>
                                </div>
                            </td>
                            <td></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Deshmukh</td>
                            <td>Prohaska</td>
                            <td>@Genelia</td>
                            <td>@Genelia</td>
                            <td>@Genelia</td>
                            <td>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%;">
                                        20%
                                    </div>
                                </div>
                            </td>
                            <td><img alt="Update" class="model_img img-responsive" data-target="#responsive-modal" data-toggle="modal" src="../plugins/images/model.png"></td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>Deshmukh</td>
                            <td>Prohaska</td>
                            <td>@Genelia</td>
                            <td>@Genelia</td>
                            <td>@Genelia</td>
                            <td>
                                <div class="progress progress-lg">
                                    <div class="progress-bar progress-bar-success" role="progressbar" style="width: 20%;">
                                        20%
                                    </div>
                                </div>
                            </td>
                            <td><img alt="Update" class="model_img img-responsive" data-target="#responsive-modal" data-toggle="modal" src="../plugins/images/model.png"></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="create-task" role="dialog" style="display: none;" tabindex="-1">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title">Thêm công việc</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="recipient-name">Tiêu đề</label>
                                <input class="form-control" type="text" name="title">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Nội dung:</label>
                                <textarea class="form-control" id="message-text"></textarea>
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
                                        <input type="file" name="...">
                                        </span> <a href="#" class="input-group-addon btn btn-default fileinput-exists" data-dismiss="fileinput">Remove</a> </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="input-daterange input-group" id="date-range">
                                    <input type="text" class="form-control" name="start" />
                                    <span class="input-group-addon bg-info b-0 text-white">to</span>
                                    <input type="text" class="form-control" name="end" />
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default waves-effect" data-dismiss="modal" type="button">Close</button> <button class="btn btn-danger waves-effect waves-light" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="responsive-modal" role="dialog" style="display: none;">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button aria-hidden="true" class="close" data-dismiss="modal" type="button">×</button>
                        <h4 class="modal-title">Modal Content is Responsive</h4>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label class="control-label" for="recipient-name">% Done</label>
                                <input class="form-control" id="recipient-name" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="message-text">Message:</label>
                                <textarea class="form-control" id="message-text"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-default waves-effect" data-dismiss="modal" type="button">Close</button> <button class="btn btn-danger waves-effect waves-light" type="button">Save changes</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('script')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/css/jasny-bootstrap.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/jasny-bootstrap/3.1.3/js/jasny-bootstrap.min.js"></script>
    <script src="{{ asset('bower_components/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('js/tasks/task.js') }}"></script>
    $('#date-range').daterangepicker();
@endsection
