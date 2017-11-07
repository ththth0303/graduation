@extends('layouts.master')
@section('content')
    <div class="col-sm-12" id="th">
        <div class="white-box">
            <h3 class="box-title">Basic Table</h3>
            <p class="text-muted">Add class <code>.table</code></p>
            <div class="table-responsive">
                <table class="table table-bordered">
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
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="responsive-modal" role="dialog" style="display: none;" tabindex="-1">
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
    <script type="text/javascript">
           
    </script>
@endsection